@extends('layouts.app')

@section('content')
<h1>Edit Kelas</h1>
    <form action="{{ route('admin.update', $kelas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ $kelas->nama_kelas }}" required>
        </div>
        <div class="form-group">
            <label for="wali_kelas">Wali Kelas</label>
            <input type="text" class="form-control" id="wali_kelas" name="wali_kelas" value="{{ $kelas->wali_kelas }}">
        </div>
        <div class="form-group">
            <label for="jumlah_siswa">Jumlah Siswa</label>
            <input type="number" class="form-control" id="jumlah_siswa" name="jumlah_siswa" value="{{ $kelas->jumlah_siswa }}" required>
        </div>
        <div class="form-group">
            <label for="tingkat_kelas">Tingkat Kelas</label>
            <input type="text" class="form-control" id="tingkat_kelas" name="tingkat_kelas" value="{{ $kelas->tingkat_kelas }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection