<?php
namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 
    public function index()
    {
        $kelas = Kelas::all();
        return view('admin.index', compact('kelas'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'wali_kelas' => 'nullable|string|max:255',
            'jumlah_siswa' => 'required|integer',
            'tingkat_kelas' => 'required|string|max:10',
        ]);

        Kelas::create($request->all());
        return redirect()->route('layouts')->with('success', 'Kelas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('admin.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'wali_kelas' => 'nullable|string|max:255',
            'jumlah_siswa' => 'required|integer',
            'tingkat_kelas' => 'required|string|max:10',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->update($request->all());
        return redirect()->route('layouts')->with('success', 'Kelas berhasil diupdate.');
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('layouts')->with('success', 'Kelas berhasil dihapus.');
    }
}
