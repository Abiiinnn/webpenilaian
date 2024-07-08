@extends('layouts.dashboard')

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
                <th>Aksi</th>
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
                        <label for="modal_{{ $mrd->id }}" class="btn btn-primary btn-sm">
                            Ubah Nilai
                        </label>
                        <input type="checkbox" id="modal_{{ $mrd->id }}" class="modal-trigger">
                        <div class="modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Isi Nilai untuk {{ $mrd->nama }}</h5>
                                        <label for="modal_{{ $mrd->id }}" class="close">&times;</label>
                                    </div>
                                    <form action="{{ route('guru.simpan.nilai', ['kelasId' => $kelas->id, 'muridId' => $mrd->id]) }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="mata_pelajaran_id">Mata Pelajaran</label>
                                                <select class="form-control" id="mata_pelajaran_id" name="mata_pelajaran_id">
                                                    @foreach ($kode_mata_pelajaran as $mapel)
                                                        <option value="{{ $mapel->id }}">{{ $mapel->nama_mata_pelajaran }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nilai">Nilai</label>
                                                <input type="number" class="form-control" id="nilai" name="nilai" min="0" max="100" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <label for="modal_{{ $mrd->id }}" class="btn btn-secondary">Tutup</label>
                                            <button type="submit" class="btn btn-primary">Simpan Nilai</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .modal-dialog {
        background: white;
        padding: 20px;
        border-radius: 5px;
        max-width: 600px;
        width: 80%;
        max-height: 80vh;
        overflow-y: auto;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-body {
        padding: 10px 0;
    }

    .modal-footer {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding-top: 10px;
    }

    .modal-trigger {
        display: none;
    }

    .modal-trigger:checked + .modal {
        display: flex;
    }

    .close {
        cursor: pointer;
    }
</style>

@endsection
