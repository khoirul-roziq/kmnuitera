@extends('layout/panel')

@section('title', 'Form Ubah Data Anggota')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Anggota</h1>
        </div>
    </div>

    <form method="post" action="/members/{{ $member->id}}" enctype="multipart/form-data">
        @method('patch')
        @csrf

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <div class="data my-2">
            <div class="avatar" style="width: fit-content;">
                <img src="/storage/{{ $member->avatar }}" alt="" width="280" class="p-2">
                <div class="mb-3">
                    <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar" name="avatar">
                    <span class="form-text">Update Foto Diri</span>
                    <div class="invalid-feedback">
                        @error('avatar')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="predikat" class="col-sm-2 col-form-label">Predikat</label>
            <div class="col-sm-10">
                <input type="predikat" class="form-control @error('predikat') is-invalid @enderror" id="predikat" name="predikat" value="{{ $member->predikat }}">
                <div class="invalid-feedback">
                    @error('predikat')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="Nama" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $member->nama }}">
                <div class="invalid-feedback">
                    @error('nama')
                    {{ $message }}
                    @enderror
                </div>
            </div>

        </div>
        <div class="mb-3 row">
            <label for="nia" class="col-sm-2 col-form-label">NIA</label>
            <div class="col-sm-10">
                <input type="Nia" class="form-control @error('nia') is-invalid @enderror" id="nia" name="nia" value="{{ $member->nia }}">
                <div class="invalid-feedback">
                    @error('nia')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="nim" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ $member->nim }}">
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
                <input type="Prodi" class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi" value="{{ $member->prodi }}">
                <div class="invalid-feedback">
                    @error('prodi')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tahun_kader" class="col-sm-2 col-form-label">Tahun Kader</label>
            <div class="col-sm-10">
                <input type="tahun_kader" class="form-control @error('tahun_kader') is-invalid @enderror" id="tahun_kader" name="tahun_kader" value="{{ $member->tahun_kader }}">
                <div class="invalid-feedback">
                    @error('tahun_kader')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="angkatan" class="col-sm-2 col-form-label">Tahun Angkatan</label>
            <div class="col-sm-10">
                <input type="angkatan" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan" name="angkatan" value="{{ $member->angkatan }}">
                <div class="invalid-feedback">
                    @error('angkatan')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
            <div class="col-sm-10">
                <input type="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ $member->tempat_lahir }}">
                <div class="invalid-feedback">
                    @error('tempat_lahir')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ $member->tanggal_lahir }}">
                <div class="invalid-feedback">
                    @error('tanggal_lahir')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat_asal" class="col-sm-2 col-form-label">Alamat Asal</label>
            <div class="col-sm-10">
                <input type="alamat_asal" class="form-control @error('alamat_asal') is-invalid @enderror" id="alamat_asal" name="alamat_asal" value="{{ $member->alamat_asal }}">
                <div class="invalid-feedback">
                    @error('alamat_asal')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat_sekarang" class="col-sm-2 col-form-label">Alamat Sekarang</label>
            <div class="col-sm-10">
                <input type="alamat_sekarang" class="form-control @error('alamat_sekarang') is-invalid @enderror" id="alamat_sekarang" name="alamat_sekarang" value="{{ $member->alamat_sekarang }}">
                <div class="invalid-feedback">
                    @error('alamat_sekarang')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $member->email }}">
                <div class="invalid-feedback">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nomor_seluler" class="col-sm-2 col-form-label">Nomor Seluler</label>
            <div class="col-sm-10">
                <input type="nomor_seluler" class="form-control @error('nomor_seluler') is-invalid @enderror" id="nomor_seluler" name="nomor_seluler" value="{{ $member->nomor_seluler }}">
                <div class="invalid-feedback">
                    @error('nomor_seluler')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="wa" class="col-sm-2 col-form-label">Nomor Whatsapp</label>
            <div class="col-sm-10">
                <input type="wa" class="form-control @error('wa') is-invalid @enderror" id="wa" name="wa" value="{{ $member->wa }}">
                <div class="invalid-feedback">
                    @error('wa')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="id_line" class="col-sm-2 col-form-label">ID Line</label>
            <div class="col-sm-10">
                <input type="id_line" class="form-control @error('id_line') is-invalid @enderror" id="id_line" name="id_line" value="{{ $member->id_line }}">
                <div class="invalid-feedback">
                    @error('id_line')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="ig" class="col-sm-2 col-form-label">Instagram</label>
            <div class="col-sm-10">
                <input type="ig" class="form-control @error('ig') is-invalid @enderror" id="ig" name="ig" value="{{ $member->ig }}">
                <div class="invalid-feedback">
                    @error('ig')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fb" class="col-sm-2 col-form-label">Facebook</label>
            <div class="col-sm-10">
                <input type="fb" class="form-control @error('fb') is-invalid @enderror" id="fb" name="fb" value="{{ $member->fb }}">
                <div class="invalid-feedback">
                    @error('fb')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Ubah Data!</button>
    </form>

</div>

@endsection