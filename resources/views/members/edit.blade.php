@extends('layout/panel')

@section('title', 'Form Ubah Data Anggota')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Anggota</h1>
        </div>
    </div>

    <form method="post" action="/members/{{ $member->id}}">
        @method('patch')
        @csrf

        <div class="mb-3 row">
            <label for="predikat" class="col-sm-2 col-form-label">predikat</label>
            <div class="col-sm-10">
                <input type="predikat" class="form-control" id="predikat" name="predikat" value="{{ $member->predikat }}">
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
                <input type="nim" class="form-control" id="nim" name="nim" value="{{ $member->nim }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
            <div class="col-sm-10">
                <input type="Prodi" class="form-control" id="prodi" name="prodi" value="{{ $member->prodi }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data!</button>
    </form>

</div>

@endsection