@extends('layout/panel')

@section('title', 'Keanggotaan')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Admin Keanggotaan</h1>
        </div>
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor Anggota</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Predikat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $anggota as $agt )
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $agt->nama }}</td>
                <td>{{ $agt->nomor_anggota }}</td>
                <td>{{ $agt->prodi }}</td>
                <td>{{ $agt->predikat }}</td>
                <td>
                    <a href="#"><span href="#" class="badge bg-success">Detail</span></a>
                    <a href="#"><span href="#" class="badge bg-danger">Hapus</span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection