@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Kelas</h1>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $murid->nama }}" readonly>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $murid->alamat }}" readonly>
    </div>
    <div class="form-group">
        <label for="nama_orang_tua">Nama Orang Tua</label>
        <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" value="{{ $murid->nama_orang_tua }}" readonly>
    </div>
    <div class="form-group">
        <label for="kota_lahir">Kota Lahir</label>
        <input type="text" class="form-control" id="kota_lahir" name="kota_lahir" value="{{ $murid->kota_lahir }}" readonly>
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $murid->tanggal_lahir }}" readonly>
    </div>
    <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
