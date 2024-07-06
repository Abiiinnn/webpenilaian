@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Siswa untuk Kelas {{ $kelas->nama_kelas }}</h1>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                @foreach ($kode_mata_pelajaran as $mapel)
                    <th>{{ $mapel->kode_mata_pelajaran }}</th>
                @endforeach
                <th class="">Aksi</th>
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
                    <td>
                        <a href="{{ route('kelas.edit', $mrd->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kelas.delete', $mrd->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                        <a href="{{ route('murid.view.detail', $mrd->id) }}" class="btn btn-info btn-sm">Lihat Siswa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
