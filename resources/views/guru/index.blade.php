@extends('layouts.dasboard')

@section('content')

<div class="container">
    <h1>Daftar Siswa untuk Kelas {{ $kelas->nama_kelas }}</h1>
    <h2>Selamat Datang di kelas {{ Auth::user()->guru->nama }}</h2>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                @foreach ($kode_mata_pelajaran as $mapel)
                    <th>{{ $mapel->kode_mata_pelajaran }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($murid as $mrd)
                <tr>
                    <td>{{ $mrd->id }}</td>
                    <td>{{ $mrd->nama }}</td>
                    @foreach ($kode_mata_pelajaran as $mapel)
                        <td>
                            @php
                                $nilai_mata_pelajaran = $mrd->nilai->where('mata_pelajaran_id', $mapel->id)->first();
                            @endphp
                            @if ($nilai_mata_pelajaran)
                                {{ $nilai_mata_pelajaran->nilai }}
                            @else
                                -
                            @endif
                        </td>
                        
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
