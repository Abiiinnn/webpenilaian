@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Siswa untuk Kelas {{ $kelas->nama_kelas }}</h1>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Nama Orang Tua</th>
                <th>Kota Lahir</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($murid as $mrd)
                <tr>
                    <td>{{ $mrd->id }}</td>
                    <td>{{ $mrd->nama }}</td>
                    <td>{{ $mrd->alamat }}</td>
                    <td>{{ $mrd->tanggal_lahir }}</td>
                    <td>{{ $mrd->nama_orang_tua }}</td>
                    <td>{{ $mrd->kota_lahir }}</td>
                    <td class="text-center">
                        <a href="{{ route('layouts') }}" class="btn btn-outline-secondary btn-sm">kembalil</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
