<?php
namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 
    public function index()
{
    $kelas = Kelas::with('guru')->get();

    return view('admin.index', compact('kelas'));
}

    public function create()
    {   
        $gurus = Guru::all();

        return view('admin.create', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'wali_kelas' => 'nullable|exists:guru,id', 
            'jumlah_siswa' => 'required|integer',
            'tingkat_kelas' => 'required|string|max:10',
        ]);

        Kelas::create($request->all());
        return redirect()->route('layouts')->with('success', 'Kelas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        $gurus = Guru::all();
        return view('admin.edit', compact('kelas','gurus'));
    }

        public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required|string',
            'wali_kelas' => 'required|exists:guru,id', // Pastikan wali_kelas adalah id yang valid dari tabel guru
            'jumlah_siswa' => 'required|numeric',
            'tingkat_kelas' => 'required|string',
        ]);

        try {
            $kelas = Kelas::find($id);
            if ($kelas) {
                $kelas->nama_kelas = $request->nama_kelas;
                $kelas->guru_id = $request->wali_kelas; // Menggunakan id dari guru yang dipilih
                $kelas->jumlah_siswa = $request->jumlah_siswa;
                $kelas->tingkat_kelas = $request->tingkat_kelas;
                $kelas->save();

                return redirect()->route('layouts')->with('success', 'Kelas has been updated successfully.');
            }
            return redirect()->route('layouts')->with('fail', 'Kelas not found.');
        } catch (\Exception $e) {
            return redirect()->route('admin.edit', $id)->with('fail', $e->getMessage());
        }
    }

        public function delete($id)
    {
        try {
            $kelas = Kelas::find($id);
            if ($kelas) {
                $kelas->delete();
                return redirect()->route('layouts')->with('success', 'Kelas berhasil dihapus.');
            }
            return redirect()->route('layouts')->with('fail', 'Kelas tidak ditemukan.');
        } catch (\Exception $e) {
            return redirect()->route('layouts')->with('fail', $e->getMessage());
        }
    }
}
