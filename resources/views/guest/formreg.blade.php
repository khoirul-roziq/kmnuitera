@extends('layout/index')

@section('title', 'Form Pendaftaran')

@section('container')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="my-3">{{$titlePage}}</h1>
        </div>
    </div>

    <form action="" class="containerReg">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama">
            <span class="form-text">Masukan nama asli anda</span>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
            <input type="text" class="form-control" id="nim" name="nim">
            <span class="form-text">Masukan Nomor Induk Mahasiswa (NIM) yang anda miliki</span>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <input type="text" class="form-control" id="prodi" name="prodi">
            <span class="form-text">Masukan Program Studi yang anda tempuh saat ini. (Contoh : Teknik Informatika)</span>
        </div>
        <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <input type="text" class="form-control" id="angkatan" name="angkatan">
            <span class="form-text">Kapan anda masuk Institut Teknologi Sumatera?</span>
        </div>
        <div class=" mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="email" name="email">
            <span class="form-text">Masukan E-mail yang masih aktif</span>
        </div>
        <div class="mb-3">
            <label for="wa" class="form-label">Nomor Whatsapp</label>
            <input type="text" class="form-control" id="wa" name="wa">
            <span class="form-text">Masukan Nomor Whatsapp yang masih aktif</span>
        </div>
        <button type="submit" class="btn btn-primary mt-2 mb-5 mx-2">Registrasi!</button>
    </form>
</div>

@endsection