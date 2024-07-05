@extends('layouts.app')

@section('content')

<form action="{{ route('kelas.update', $murid->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Pastikan method PUT untuk update -->

    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $murid->nama }}" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $murid->alamat }}" required>
    </div>
    <div class="form-group">
        <label for="nama_orang_tua">Nama Orang Tua:</label>
        <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" value="{{ $murid->nama_orang_tua }}" required>
    </div>
    <div class="form-group">
        <label for="kota_lahir">Kota Lahir:</label>
        <input type="text" class="form-control" id="kota_lahir" name="kota_lahir" value="{{ $murid->kota_lahir }}" required>
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $murid->tanggal_lahir }}" required>
    </div>
    <div class="form-group">
        <label for="kelas_id">Kelas:</label>
        <select class="form-control" id="kelas_id" name="kelas_id" required>
            @foreach($kelas as $kls)
                <option value="{{ $kls->id }}" @if($kls->id == $murid->kelas_id) selected @endif>{{ $kls->nama_kelas }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
