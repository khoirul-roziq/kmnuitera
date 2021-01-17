@extends('layout/panel')

@section('title', 'Detail Pendaftar')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Detail Pendaftar</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="avatar" style="border: 4px solid rgb(100, 84, 84); width: fit-content;">
                <img src="/storage/{{ $guest->avatar }}" alt="" width="280" class="p-2">
            </div>
            <div class="data mt-5">
                <div class="mb-3 row">
                    <label for="staticNama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="staticNama" value="{{ $guest->nama }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticNIM" class="col-sm-3 col-form-label">NIM</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="staticNIM" value="{{ $guest->nim }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticProdi" class="col-sm-3 col-form-label">Program Studi</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="staticProdi" value="{{ $guest->prodi }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="email" value="{{ $guest->email }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="wa" class="col-sm-3 col-form-label">Nomor Whatsapp</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="wa" value="{{ $guest->wa }}">
                    </div>
                </div>

                <a href="{{ $guest->id }}/edit" class="btn btn-primary">Edit</a>

                <form action="{{ $guest->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/guests" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection