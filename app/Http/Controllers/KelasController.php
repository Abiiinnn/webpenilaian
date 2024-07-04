<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $murid = Murid::all();
        return view('admin.kelas.index', compact('murid'));
    }

    public function create()
    {
        return view('admin.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nama_orang_tua' => 'required|string|max:255',
            'kota_lahir' => 'required|string|max:225',
            'tanggal_lahir' => 'required|string|max:225',
        ]);

        Murid::create($request->all());
        return redirect()->route('layouts')->with('success', 'Kelas berhasil ditambahkan.');
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
