<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
        public function create()
    {
        $kelas = Kelas::all(); // Ambil semua kelas
        return view('admin/add_murid', compact('kelas'));
    }

    public function viewDetail($id)
{
    $kelas = Kelas::findOrFail($id);
    $murid = Murid::where('kelas_id', $id)->get();

    return view('admin.kelas.view', compact('murid', 'kelas'));
}

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nama_orang_tua' => 'nullable|string|max:255',
            'kota_lahir' => 'required|string|max:225',
            'tanggal_lahir' => 'required|date',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        Murid::create($request->all());

        return redirect()->route('layouts')->with('success', 'Murid berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $murid = Murid::findOrFail($id);
        $kelas = Kelas::all(); // Ambil semua kelas
        return view('admin.edit', compact('murid', 'kelas')); // Melewatkan $kelas ke view
    }

}
