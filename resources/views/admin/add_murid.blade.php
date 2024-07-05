@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Murid</h1>
    <form action="{{ route('murid.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="form-group">
            <label for="nama_orang_tua">Nama Orang Tua</label>
            <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" required>
        </div>
        <div class="form-group">
            <label for="kota_lahir">Kota Lahir</label>
            <input type="text" class="form-control" id="kota_lahir" name="kota_lahir" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div class="form-group">
            <label for="kelas_id">Kelas</label>
            <select class="form-control" id="kelas_id" name="kelas_id" required>
                @foreach ($kelas as $kls)
                    <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
