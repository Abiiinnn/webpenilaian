@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kelas</h1>
    <form action="{{ route('kelas.update', $murid->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $murid->nama }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $murid->alamat }}" required>
        </div>
        <div class="form-group">
            <label for="nama_orang_tua">Nama Orang Tua</label>
            <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" value="{{ $murid->nama_orang_tua }}" required>
        </div>
        <div class="form-group">
            <label for="kota_lahir">Kota Lahir</label>
            <input type="text" class="form-control" id="kota_lahir" name="kota_lahir" value="{{ $murid->kota_lahir }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $murid->tanggal_lahir }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
