<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/lightslider.css')}}">
  <link rel="stylesheet" href="{{ url('/assets/css/styleIndex.css')}}">

  <script type="text/javascript" src="{{ url('/assets/js/JQuery3.3.1.js')}}"></script>
  <script type="text/javascript" src="{{ url('/assets/js/lightslider.js')}}"></script>

  <title>KMNU ITERA</title>
</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ url('/assets/img/logo/brand.png')}}" alt="" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item mx-4">
            <a class="nav-link active reg" aria-current="page" href="{{ url('/formreg')}}">Daftar Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active masuk" href="#">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- login -->
  <div class="bg-transparan display-none">
    <div class="login">

      <div class="close">
        <input type="checkbox">
        <span></span>
        <span></span>
      </div>

      <h3 class="text-center">Login</h3>

      <div class="mb-3">
        <label for="email" class="form-label">Email/ Username</label>
        <input type="text" class="form-control" id="email" placeholder="Masukan Email atau Username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Masukan Password">
      </div>

      <div class="captcha mb-3">
        <label for="captcha" class="form-label">Berapa hasil dari 4 + 7 ?</label>
        <input type="text" class="form-control" id="captcha" placeholder="Hasil">
      </div>

      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault">Ingat saya!</label>
      </div>

      <button type="button" class="btn btn-success">Login</button>
      <button type="button" class="btn btn-secondary">Login sebagai tamu</button>

      <span>Lupa password? <a href="">Klik di sini!</a></span>

    </div>

    <div class="link-reg">
      <h5>Apakah kamu pertama kali mengunjungi situs ini?</h5>
      <p>Untuk mendapatkan akses penuh, silahkan daftar anggota terlebih dahulu!</p>
      <a href="{{ url('/formreg')}}"><button type="button" class="btn btn-primary btn-create">Daftar Anggota</button></a>
    </div>
  </div>
  <!-- end login -->

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
          <img src="{{ url('assets/img/profiles/avatar.png') }}" alt="Foto Profil">
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
        <h5>Khoirul Roziq</h5>
        <p>Teknik Informatika</p>

      </div>
    </div>

    <div class="profile2">
      <div class="container2">
        <div class="profile" id="sekum">
          <h6>Sekretaris Umum</h6>
          <div class="photo">
            <img src="{{ url('assets/img/profiles/avatar.png') }}" alt="Foto Profil">
          </div>
          <div class="sosprof">
            <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
            <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
            <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
          </div>
          <h5>Khoirul Roziq</h5>
          <p>Teknik Informatika</p>
        </div>


        <div class="profile" id="wasekum">
          <h6>Wakil Sekretaris Umum</h6>
          <div class="photo">
            <img src="{{ url('assets/img/profiles/avatar.png') }}" alt="Foto Profil">
          </div>
          <div class="sosprof">
            <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
            <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
            <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
          </div>
          <h5>Khoirul Roziq</h5>
          <p>Teknik Informatika</p>
        </div>
      </div>

      <div class="container2">
        <div class="profile" id="bendum">
          <h6>Bendahara Umum</h6>
          <div class="photo">
            <img src="{{ url('assets/img/profiles/avatar.png') }}" alt="Foto Profil">
          </div>
          <div class="sosprof">
            <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
            <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
            <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
          </div>
          <h5>Khoirul Roziq</h5>
          <p>Teknik Informatika</p>
        </div>


        <div class="profile" id="wabendum">
          <h6>Wakil Bendahara Umum</h6>
          <div class="photo">
            <img src="{{ url('assets/img/profiles/avatar.png') }}" alt="Foto Profil">
          </div>
          <div class="sosprof">
            <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
            <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
            <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
          </div>
          <h5>Khoirul Roziq</h5>
          <p>Teknik Informatika</p>
        </div>

      </div>

    </div>

    <h4 class="text-center mt-3 mb-2">Kepala Departemen</h4>

    <div class="profile3">
      <div class="profile" id="kd">
        <h6>Kajian dan Dakwah</h6>
        <div class="photo">
          <img src="{{ url('assets/img/profiles/avatar.png') }}" alt="Foto Profil">
        </div>
        <div class="sosprof">
          <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
          <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
          <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
        </div>
        <h5>Khoirul Roziq</h5>
        <p>Teknik Informatika</p>
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
        <h5>Khoirul Roziq</h5>
        <p>Teknik Informatika</p>
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
        <h5>Khoirul Roziq</h5>
        <p>Teknik Informatika</p>
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
        <h5>Khoirul Roziq</h5>
        <p>Teknik Informatika</p>
      </div>

      <div class="profile" id="rpt">
        <h6>Riset dan Pengembangan Teknologi</h6>
        <div class="photo">
          <img src="{{ url('assets/img/profiles/avatar.png') }}" alt="Foto Profil">
        </div>
        <div class="sosprof">
          <img src="{{ url('/assets/img/icons/instagram.png') }}" alt="ig" width="30">
          <img src="{{ url('/assets/img/icons/facebook.png') }}" alt="fb" width="30">
          <img src="{{ url('/assets/img/icons/line.png') }}" alt="line" width="30">
        </div>
        <h5>Khoirul Roziq</h5>
        <p>Teknik Informatika</p>
      </div>

    </div>
  </div>
  <!-- end profile -->
  <!-- end main -->

  <!-- footer -->
  <footer>
    <img src="{{ url('assets/img/logo/logo.png') }}" alt="logo" height="60">
    <h6 class="pt-2">KMNU ITERA</h6>
    <hr>
    <p class="text-center">&copy; 2021 Dikelola Oleh Departemen RPT KMNU ITERA</p>
  </footer>
  <!-- end footer -->

  <script src="{{ url('assets/js/script.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</body>

</html>