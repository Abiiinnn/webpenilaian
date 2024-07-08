@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Tambah Nilai Siswa</h1>
    <h2>Kelas: {{ $kelas->nama_kelas }} - Siswa: {{ $murid->nama }}</h2>

    <form action="{{ route('guru.simpan.nilai', ['kelasId' => $kelas->id, 'muridId' => $murid->id]) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="mata_pelajaran_id">Mata Pelajaran</label>
            <select class="form-control" id="mata_pelajaran_id" name="mata_pelajaran_id">
                @foreach ($mataPelajaran as $mapel)
                    <option value="{{ $mapel->id }}">{{ $mapel->nama_mata_pelajaran }}</option>
                @endforeach
            </select>
            @error('mata_pelajaran_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nilai">Nilai</label>
            <input type="number" class="form-control" id="nilai" name="nilai" min="0" max="100">
            @error('nilai')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
