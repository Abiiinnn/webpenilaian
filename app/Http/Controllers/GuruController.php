<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\Kelas;
use App\Models\Murid;
use App\Models\Nilai;
use Illuminate\Http\Request;
use App\Models\Mata_Pelajaran;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function index()
    {
        
        $guru = Auth::user()->guru;
        return view('guru.index', compact('guru'));
    }

    public function viewClass($id)
    {
        // Pastikan guru memiliki akses ke kelas yang dimaksud

        $kelas = Kelas::findOrFail($id);
        if (Auth::user()->guru->id != $kelas->guru_id) {
            return redirect()->route('login')->withErrors('Anda tidak memiliki akses ke kelas ini.');
        }

        // Ambil murid-murid dari kelas dan keterangan mata pelajaran
        $murid = Murid::where('kelas_id', $id)->get();
        $kode_mata_pelajaran = Mata_pelajaran::all();
       
        
        // Ambil nilai-nilai murid untuk setiap mata pelajaran
        foreach ($murid as $mrd) {
            $mrd->nilai = Nilai::where('murid_id', $mrd->id)
                               ->whereIn('mata_pelajaran_id', $kode_mata_pelajaran->pluck('id'))
                               ->get()
                               ->keyBy('mata_pelajaran_id');
        }

        // Tampilkan view dengan data yang sudah disiapkan
        return view('guru.index', compact('kelas', 'murid', 'kode_mata_pelajaran'));
    }

    public function tambahNilai($kelasId, $muridId)
    {
        $kelas = Kelas::findOrFail($kelasId);
        $murid = Murid::findOrFail($muridId);
        $mataPelajaran = Mata_Pelajaran::all(); // Ambil semua mata pelajaran

        return view('guru.tambahnilai', compact('kelas', 'murid', 'mataPelajaran'));
    }

    public function simpanNilai(Request $request, $kelasId, $muridId)
    {
        $request->validate([
            'mata_pelajaran_id' => 'required|exists:mata_pelajarans,id',
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        $nilai = new Nilai();
        $nilai->kelas_id = $kelasId;
        $nilai->murid_id = $muridId;
        $nilai->mata_pelajaran_id = $request->mata_pelajaran_id;
        $nilai->nilai = $request->nilai;
        $nilai->save();

        return redirect()->route('guru.kelas.view', ['id' => $kelasId])
                         ->with('success', 'Nilai berhasil ditambahkan.');
    }

}
