@extends('layout/panel')

@section('title', 'Data Pendaftaran')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Data Pendaftaran</h1>
        </div>
    </div>

    <a href="/formreg" class="btn btn-primary my-3">Tambah Data Pendaftar</a>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Angkatan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $guests as $guest )
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $guest->nama }}</td>
                <td>{{ $guest->nim }}</td>
                <td>{{ $guest->prodi }}</td>
                <td>{{ $guest->angkatan }}</td>
                <td>
                    <a href="/guests/{{ $guest->id }}" class="badge bg-info">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection