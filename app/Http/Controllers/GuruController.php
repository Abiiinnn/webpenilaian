<?php

namespace App\Http\Controllers;


use App\Models\guru;
use App\Models\Kelas;
use App\Models\Murid;
use App\Models\Nilai;
use Illuminate\Http\Request;
use App\Models\Mata_Pelajaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
    Log::info('Masuk ke method simpanNilai');
    
    $request->validate([
        'mata_pelajaran_id' => 'required|exists:mata_pelajaran,id',
        'nilai' => 'required|numeric|min:0|max:100',
    ]);

    Log::info('Data request:', $request->all());

    try {
        // Cari nilai yang sudah ada untuk murid dan mata pelajaran tersebut
        $nilai = Nilai::firstOrNew([
            'kelas_id' => $kelasId,
            'murid_id' => $muridId,
            'mata_pelajaran_id' => $request->mata_pelajaran_id,
        ]);

        Log::info('Nilai sebelum update:', $nilai->toArray());

        $nilai->nilai = $request->nilai;
        $nilai->save();

        Log::info('Nilai setelah update:', $nilai->toArray());

        return redirect()->route('guru.kelas.view', ['id' => $kelasId])
                        ->with('success', 'Nilai berhasil ditambahkan.');
    } catch (\Exception $e) {
        Log::error('Error saat menyimpan nilai: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan nilai.');
    }
}

}
