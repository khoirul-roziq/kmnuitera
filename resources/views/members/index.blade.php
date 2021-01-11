@extends('layout/panel')

@section('title', 'Keanggotaan')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Admin Keanggotaan</h1>
        </div>
    </div>

    <a href="/members/create" class="btn btn-primary my-3">Tambah Data Anggota</a>

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
                <th scope="col">NIA</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Predikat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $members as $member )
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $member->nama }}</td>
                <td>{{ $member->nia }}</td>
                <td>{{ $member->prodi }}</td>
                <td>{{ $member->predikat }}</td>
                <td>
                    <a href="/members/{{ $member->id }}" class="badge bg-info">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection