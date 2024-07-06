<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Murid;
use App\Models\Nilai;
use App\Models\Mata_Pelajaran;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $murid = Murid::all();
        return view('admin.kelas.index', compact('murid'));
    }

    public function viewClass($id)
    {
        $kelas = Kelas::findOrFail($id);
        $murid = Murid::where('kelas_id', $id)->get();
        $kode_mata_pelajaran = Mata_pelajaran::all();

        foreach ($murid as $mrd) {
            $mrd->nilai = Nilai::where('murid_id', $mrd->id)->where('kelas_id', $id)->get();
        }
        return view('admin.kelas.index', compact('kelas', 'murid','kode_mata_pelajaran'));
    }

   public function edit($id)
    {
        
        $murid = Murid::findOrFail($id);
        $kelas = Kelas::all(); // Ambil semua kelas untuk dropdown
        return view('admin.kelas.edit', compact('murid', 'kelas'));
    }


    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string',
        'alamat' => 'required|string',
        'nama_orang_tua' => 'required|string',
        'kota_lahir' => 'required|string',
        'tanggal_lahir' => 'required|string',
        'kelas_id' => 'required|exists:kelas,id',
    ]);

    try {
        $murid = Murid::find($id);
        if ($murid) {
            $murid->nama = $request->nama;
            $murid->alamat = $request->alamat;
            $murid->nama_orang_tua = $request->nama_orang_tua;
            $murid->kota_lahir = $request->kota_lahir;
            $murid->tanggal_lahir = $request->tanggal_lahir;
            $murid->kelas_id = $request->kelas_id;
            $murid->save();
            
            return redirect()->route('layouts')->with('success', 'Murid berhasil diupdate.');
        }
        return redirect()->route('layouts')->with('fail', 'Murid tidak ditemukan.');
    } catch (\Exception $e) {
        return redirect()->route('kelas.edit', $id)->with('fail', $e->getMessage());
    }
}

   

    public function delete($id)
    {
        try {
            $murid = Murid::find($id);
            if ($murid) {
                $murid->delete();
                return redirect()->route('layouts')->with('success', 'Murid berhasil dihapus.');
            }
            return redirect()->route('layouts')->with('fail', 'Murid tidak ditemukan.');
        } catch (\Exception $e) {
            return redirect()->route('layouts')->with('fail', $e->getMessage());
        }
    }
}
