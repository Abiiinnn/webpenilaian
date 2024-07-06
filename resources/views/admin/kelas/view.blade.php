@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Kelas: {{ $murid->nama_kelas }}</h1>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Informasi Siswa</h5>
            <div class="row mb-2">
                <div class="col-sm-4"><strong>ID:</strong></div>
                <div class="col-sm-8">{{ $murid->id }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4"><strong>Nama:</strong></div>
                <div class="col-sm-8">{{ $murid->nama }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4"><strong>Alamat:</strong></div>
                <div class="col-sm-8">{{ $murid->alamat }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4"><strong>Tanggal Lahir:</strong></div>
                <div class="col-sm-8">{{ $murid->tanggal_lahir }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4"><strong>Nama Orang Tua:</strong></div>
                <div class="col-sm-8">{{ $murid->nama_orang_tua }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4"><strong>Kota Lahir:</strong></div>
                <div class="col-sm-8">{{ $murid->kota_lahir }}</div>
            </div>  
            <div class="text-center mt-4">
                <a href="{{ route('layouts') }}" class="btn btn-outline-secondary">Kembali ke Daftar Kelas</a>
            </div>
        </div>
    </div>
</div>
@endsection
