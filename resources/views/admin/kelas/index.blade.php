@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Siswa untuk Kelas {{ $kelas->nama_kelas }}</h1>
    <a href="{{ route('murid.create', $kelas->id) }}" class="btn btn-primary">Tambah Siswa</a>
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($murid as $mrd)
                <tr>
                    <td>{{ $mrd->id }}</td>
                    <td>{{ $mrd->nama }}</td>
                    <td>
                        <a href="{{ route('kelas.edit', $mrd->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kelas.delete', $mrd->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                        <a href="{{ route('kelas.view', $mrd->id) }}" class="btn btn-info btn-sm">Lihat Siswa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
