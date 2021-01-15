@extends('layout/index')

@section('title', 'Form Pendaftaran')

@section('container')
<br><br><br>
<div class="container">
  <br><br>
  <form action="/check" class="containerLog" method="post">
    @csrf

    <div class="judul text-center">
      <img src="/assets/img/logo/logo.png" alt="Logo" width="70px">
      <h3 class="mt-2">Form Login</h3>
    </div>

    @if (session('fail'))
    <div class="alert alert-danger">
      {{ session('fail') }}
    </div>
    @endif

    <div class=" mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
      <span class="form-text">Masukan E-mail </span>
      <div class="invalid-feedback">
        @error('email')
        {{ $message }}
        @enderror
      </div>
    </div>
    <div class=" mb-3">
      <label for="password" class="form-label">password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" autocomplete="off">
      <span class="form-text">Masukan Password</span>
      <div class="invalid-feedback">
        @error('password')
        {{ $message }}
        @enderror
      </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2 mb-5 mx-2">Login</button>
  </form>
</div>

@endsection