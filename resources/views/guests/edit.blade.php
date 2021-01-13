@extends('layout/panel')

@section('title', 'Form Ubah Data Pendaftar')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Pendaftar</h1>
        </div>
    </div>

    <form method="post" action="/guests/{{ $guest->id}}">
        @method('patch')
        @csrf

        <!-- <div class="mb-3 row">
            <label for="predikat" class="col-sm-2 col-form-label">predikat</label>
            <div class="col-sm-10">
                <input type="predikat" class="form-control" id="predikat" name="predikat" value="{{ $guest->predikat }}">
            </div>
        </div> -->
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="Nama" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $guest->nama }}">
                <div class="invalid-feedback">
                    @error('nama')
                    {{ $message }}
                    @enderror
                </div>
            </div>

        </div>

        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="nim" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ $guest->nim }}">
                <div class="invalid-feedback">
                    @error('nim')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
            <div class="col-sm-10">
                <input type="Prodi" class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi" value="{{ $guest->prodi }}">
                <div class="invalid-feedback">
                    @error('prodi')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
            <div class="col-sm-10">
                <input type="angkatan" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan" name="angkatan" value="{{ $guest->angkatan }}">
                <div class="invalid-feedback">
                    @error('angkatan')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $guest->email }}">
                <div class="invalid-feedback">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="wa" class="col-sm-2 col-form-label">Nomor Whatsapp</label>
            <div class="col-sm-10">
                <input type="wa" class="form-control @error('wa') is-invalid @enderror" id="wa" name="wa" value="{{ $guest->wa }}">
                <div class="invalid-feedback">
                    @error('wa')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data!</button>
    </form>

</div>

@endsection