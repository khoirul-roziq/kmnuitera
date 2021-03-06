@extends('layout/panel')
@section('title', 'Dashboard')

@section('container')
<div class="container contDashboard">
        <div class="text-center mt-4 mx-5">
            <h3>{{ $member->predikat }}</h3>
            <div class="avatar mb-1" style="border: 4px solid rgb(100, 84, 84); width: fit-content;">
                <img src="/storage/{{ $member->avatar }}" alt="" width="280" class="p-2">
            </div>
            <h4>{{ $member->nama }}</h4>
            <div class="d-flex px-5">
                <a href="members/{{ $member->id }}/editprofile" class="btn btn-primary">Ubah Profil</a>
                <a href="/logout" class="btn btn-danger mx-1">Logout</a>
            </div>

        </div>
        <div class="m-4">
            <div class="mb-3 row">
                <label for="staticNama" class="col-sm-5 col-form-label">Nama Lengkap</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticNama" value="{{ $member->nama }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="staticNIA" class="col-sm-5 col-form-label">NIA</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticNIA" value="{{ $member->nia }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticNIM" class="col-sm-5 col-form-label">NIM</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticNIM" value="{{ $member->nim }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticProdi" class="col-sm-5 col-form-label">Program Studi</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticProdi" value="{{ $member->prodi }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="statictahun_kader" class="col-sm-5 col-form-label">Tahun Kader</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="statictahun_kader" value="{{ $member->tahun_kader }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="statictahun_angkatan" class="col-sm-5 col-form-label">Angkatan</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="statictahun_angkatan" value="{{ $member->angkatan }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticTempatLahir" class="col-sm-5 col-form-label">Tempat Lahir</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticTempatLahir" value="{{ $member->tempat_lahir }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticTanggalLahir" class="col-sm-5 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticTanggalLahir" value="{{ $member->tanggal_lahir }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticAlamatAsal" class="col-sm-5 col-form-label">Alamat Asal</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticAlamatAsal" value="{{ $member->alamat_asal }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticAlamatSekarang" class="col-sm-5 col-form-label">Alamat Sekarang</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticAlamatSekarang" value="{{ $member->alamat_sekarang }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-5 col-form-label">Email</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $member->email }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticNomorSeluler" class="col-sm-5 col-form-label">Nomor Seluler</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticNomorSeluler" value="{{ $member->nomor_seluler }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticWA" class="col-sm-5 col-form-label">Nomor Whatsapp</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticWA" value="{{ $member->wa }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticIdLine" class="col-sm-5 col-form-label">ID Line</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticIdLine" value="{{ $member->id_line }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticIG" class="col-sm-5 col-form-label">Instagram</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticIG" value="{{ $member->ig }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticFB" class="col-sm-5 col-form-label">Facebook</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" id="staticFB" value="{{ $member->fb }}">
                </div>
            </div>

        </div>
</div>
@endsection