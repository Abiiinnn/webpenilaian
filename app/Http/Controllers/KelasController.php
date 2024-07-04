<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Murid;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $murid = Murid::all();
        return view('admin.kelas.index', compact('murid'));
    }

    // public function create()
    // {
    //     return view('admin.kelas.create');
    // }
    
    public function show($id)
{
    $kelas = Kelas::findOrFail($id);
    $murids = $kelas->murids; // pastikan 'murids' adalah nama relasi yang sesuai di model Kelas

    return view('kelas.show', compact('kelas', 'murids'));
}

    public function createStudent($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('admin.kelas.create', compact('kelas')); // View to create a new student within a class
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nama_orang_tua' => 'required|string|max:255',
            'kota_lahir' => 'required|string|max:225',
            'tanggal_lahir' => 'required|string',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        Murid::create($request->all());
        return redirect()->route('kelas.index')->with('success', 'Murid berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $murid = Murid::findOrFail($id);
        return view('admin.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'nama_orang_tua' => 'required|string',
            'kota_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
        ]);

        try {
            $murid = Murid::find($id);
            if ($murid) {
                $murid->nama = $request->nama;
                $murid->alamat = $request->alamat;
                $murid->nama_orang_tua = $request->nama_orang_tua;
                $murid->kota_lahir = $request->kota_lahir;
                $murid->tanggal_lahir = $request->tanggal_lahir;
                $murid->save();

                return redirect()->route('layouts')->with('success', 'Kelas has been updated successfully.');
            }
            return redirect()->route('layouts')->with('fail', 'Kelas not found.');
        } catch (\Exception $e) {
            return redirect('kelas.edit'.$id)->with('fail', $e->getMessage());
        }
    }
    
    public function viewClass($id)
    {
        $kelas = Kelas::findOrFail($id);
        $murid = Murid::where('kelas_id', $id)->get();
        return view('admin.kelas.index', compact('kelas', 'murid'));
    }

    public function delete($id)
    {
        try {
            $murid = Murid::find($id);
            if ($$murid) {
                $$murid->delete();
                return redirect()->route('layouts')->with('success', 'Kelas berhasil dihapus.');
            }
            return redirect()->route('layouts')->with('fail', 'Kelas tidak ditemukan.');
        } catch (\Exception $e) {
            return redirect()->route('layouts')->with('fail', $e->getMessage());
        }
    }
    
}
