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
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <form action="/formreg" class="containerReg" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
            <span class="form-text">Masukan nama asli anda</span>
            <div class="invalid-feedback">
                @error('nama')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') }}">
            <span class="form-text">Masukan Nomor Induk Mahasiswa (NIM) yang anda miliki</span>
            <div class="invalid-feedback">
                @error('nim')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi" value="{{ old('prodi') }}">
            <span class="form-text">Masukan Program Studi yang anda tempuh saat ini. (Contoh : Teknik Informatika)</span>
            <div class="invalid-feedback">
                @error('prodi')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select class="form-select @error('angkatan') is-invalid @enderror" id="angkatan" name="angkatan" aria-label="Default select example">
                <option selected>Pilih Tahun</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
            </select>
            <span class="form-text">Kapan anda masuk Institut Teknologi Sumatera?</span>
            <div class="invalid-feedback">
                @error('angkatan')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class=" mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
            <span class="form-text">Masukan E-mail yang masih aktif. (Contoh : akun.123456789@student.itera.ac.id)</span>
            <div class="invalid-feedback">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="wa" class="form-label">Nomor Whatsapp</label>
            <input type="text" class="form-control @error('wa') is-invalid @enderror" id="wa" name="wa" value="{{ old('wa') }}">
            <span class="form-text">Masukan Nomor Whatsapp yang masih aktif</span>
            <div class="invalid-feedback">
                @error('wa')
                {{ $message }}
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-2 mb-5 mx-2">Registrasi!</button>
    </form>
</div>

@endsection