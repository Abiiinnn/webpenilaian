@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Siswa untuk Kelas {{ $kelas->nama_kelas }}</h1>
    <form action="{{ route('murid.store') }}" method="POST">
        @csrf
        <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="mb-3">
            <label for="nama_orang_tua" class="form-label">Nama Orang Tua</label>
            <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" required>
        </div>
        <div class="mb-3">
            <label for="kota_lahir" class="form-label">Kota Lahir</label>
            <input type="text" class="form-control" id="kota_lahir" name="kota_lahir" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection
