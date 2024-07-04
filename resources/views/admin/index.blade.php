@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Kelas</h1>
    <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah Kelas</a>
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kelas</th>
                <th>Wali Kelas</th>
                <th>Jumlah Siswa</th>
                <th>Tingkat Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $kls)
                <tr>
                    <td>{{ $kls->id }}</td>
                    <td>{{ $kls->nama_kelas }}</td>
                    <td>{{ $kls->wali_kelas }}</td>
                    <td>{{ $kls->jumlah_siswa }}</td>
                    <td>{{ $kls->tingkat_kelas }}</td>
                    <td>
                        <a href="{{ route('admin.edit', $kls->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.delete', $kls->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                        <a href="{{ route('kelas.index', $kls->id) }}" class="btn btn-info btn-sm">Lihat Kelas</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
