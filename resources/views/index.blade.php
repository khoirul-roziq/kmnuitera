@extends('layout/index')

@section('title', 'Home')

@section('container')

<!-- jumbotron -->
<div class="bg-light jumbotron">
  <h3>Selamat Datang di Situs</h3>
  <h1>Keluarga Mahasiswa Nahdlatul Ulama</h1>
  <h1>Institut Teknologi Sumatera</h1>
  <a href="{{ url('/blog') }}"><button type="button" class="btn btn-warning">Jelajahi Blog</button></a>
</div>
<!-- end jumbotron -->

<!-- carousel/ slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/kegiatan/1.jpg" class="d-block w-100" alt="img1">
    </div>
    <div class="carousel-item">
      <img src="assets/img/kegiatan/2.jpg" class="d-block w-100" alt="img2">
    </div>
    <div class="carousel-item">
      <img src="assets/img/kegiatan/3.jpg" class="d-block w-100" alt="img3">
    </div>
    <div class="carousel-item">
      <img src="assets/img/kegiatan/4.jpg" class="d-block w-100" alt="img3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<!-- end carousel/ slider -->

<!-- main -->
<div class="slogan">
  <h2 class="text-center pt-5 pb-1" id="jv">Ayo Gabung KMNU!</h2>
  <hr>
  <h6>Membangun generasi muda yang berkarakter dan mampu mengamalkan ajaran</h6>
  <h6>Ahlussunnah Wal Jama'ah An-Nahdliyah</h6>
  <div class="position-relative mt-5">
    <a href="{{ url('/formreg') }}"><button type="button" class="btn btn-success position-absolute top-0 start-50 translate-middle">Daftar Anggota</button></a>
  </div>
</div>


<!-- profile -->

<div class="containerProfile">
  <h2 class="text-center pt-5 pb-1" id="sk">Struktur Kepengurusan</h2>
  <hr>

  <h4 class="text-center mb-2 mt-3">Badan Pengurus Harian</h4>

  <div class="profile1">
    <div class="profile" id="ketum">
      <h6>Ketua Umum</h6>
      <div class="photo">
        <img src="{{ url('assets/img/profiles/ketum.jpg') }}" alt="Foto Profil">
      </div>

      <div class="sosprof">
        <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
        <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
        <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
      </div>

      <h5>Khoirul Roziq</h5>
      <p>Teknik Informatika</p>

    </div>

    <div class="profile" id="waketum">
      <h6>Wakil Ketua Umum</h6>
      <div class="photo">
        <img src="{{ url('assets/img/profiles/avatar.png') }}" alt="Foto Profil">
      </div>
      <div class="sosprof">
        <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
        <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
        <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
      </div>
      <h5>Arjun Purwoko</h5>
      <p>Teknik Geologi</p>

    </div>
  </div>

  <div class="profile2">
    <div class="container2">
      <div class="profile" id="sekum">
        <h6>Sekretaris Umum</h6>
        <div class="photo">
          <img src="{{ url('assets/img/profiles/sekum.jpeg') }}" alt="Foto Profil">
        </div>
        <div class="sosprof">
          <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
          <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
          <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
        </div>
        <h5>Rika Agustin</h5>
        <p>Matematika</p>
      </div>


      <div class="profile" id="wasekum">
        <h6>Wakil Sekretaris Umum</h6>
        <div class="photo">
          <img src="{{ url('assets/img/profiles/wasekum.jpeg') }}" alt="Foto Profil">
        </div>
        <div class="sosprof">
          <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
          <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
          <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
        </div>
        <h5>Anisa Ul Habiba</h5>
        <p>Teknologi Industri Pertanian</p>
      </div>
    </div>

    <div class="container2">
      <div class="profile" id="bendum">
        <h6>Bendahara Umum</h6>
        <div class="photo">
          <img src="{{ url('assets/img/profiles/bendum.jpg') }}" alt="Foto Profil">
        </div>
        <div class="sosprof">
          <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
          <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
          <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
        </div>
        <h5>Juli Mulyanto</h5>
        <p>Matematika</p>
      </div>


      <div class="profile" id="wabendum">
        <h6>Wakil Bendahara Umum</h6>
        <div class="photo">
          <img src="{{ url('assets/img/profiles/wabendum.jpg') }}" alt="Foto Profil">
        </div>
        <div class="sosprof">
          <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
          <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
          <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
        </div>
        <h5>Celvin Sahroni</h5>
        <p>Teknik Sipil</p>
      </div>

    </div>

  </div>

  <h4 class="text-center mt-3 mb-2">Kepala Departemen</h4>

  <div class="profile3">
    <div class="profile" id="kd">
      <h6>Kajian dan Dakwah</h6>
      <div class="photo">
        <img src="{{ url('assets/img/profiles/kd.jpeg') }}" alt="Foto Profil">
      </div>
      <div class="sosprof">
        <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
        <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
        <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
      </div>
      <h5>Khoirul Anam</h5>
      <p>Matematika</p>
    </div>

    <div class="profile" id="kdr">
      <h6>Kaderisasi</h6>
      <div class="photo">
        <img src="{{ url('assets/img/profiles/avatar.png') }}" alt="Foto Profil">
      </div>
      <div class="sosprof">
        <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
        <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
        <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
      </div>
      <h5>Bagus Wira Kumar</h5>
      <p>Kimia</p>
    </div>

    <div class="profile" id="kom">
      <h6>Kominfo</h6>
      <div class="photo">
        <img src="{{ url('assets/img/profiles/avatar.png') }}" alt="Foto Profil">
      </div>
      <div class="sosprof">
        <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
        <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
        <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
      </div>
      <h5>Solichul Anwari</h5>
      <p>Fisika</p>
    </div>

    <div class="profile" id="kwu">
      <h6>Kewirausahaan</h6>
      <div class="photo">
        <img src="{{ url('assets/img/profiles/avatar.png') }}" alt="Foto Profil">
      </div>
      <div class="sosprof">
        <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
        <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
        <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
      </div>
      <h5>Nanang Rehan Maulana</h5>
      <p>Teknologi Industri Pertanian</p>
    </div>

    <div class="profile" id="rpt">
      <h6>Riset dan Pengembangan Teknologi</h6>
      <div class="photo">
        <img src="{{ url('assets/img/profiles/rpt.jpg') }}" alt="Foto Profil">
      </div>
      <div class="sosprof">
        <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
        <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
        <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
      </div>
      <h5>Dwiki Agus Saputra</h5>
      <p>Teknik Informatika</p>
    </div>

  </div>
</div>
<!-- end profile -->
<!-- end main -->

@endsection