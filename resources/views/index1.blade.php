<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/lightslider.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/css/styleIndex.css')}}">

    <script type="text/javascript" src="{{ url('/assets/js/JQuery3.3.1.js')}}"></script>
    <script type="text/javascript" src="{{ url('/assets/js/lightslider.js')}}"></script>

    <title>KMNU ITERA</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="#">
                <img src="{{ url('/assets/img/brand.png')}}" alt="" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="#">Daftar Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-light jumbotron">
        <h3>Selamat Datang di Situs</h3>
        <h1>Keluarga Mahasiswa Nahdlatul Ulama</h1>
        <h1>Institut Teknologi Sumatera</h1>
        <button type="button" class="btn btn-warning m-5">Jelajahi Blog</button>
    </div>

    <!-- carousel/ slider -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('/assets/img/img1.jpg') }}" class="d-block w-100" alt="img1">
            </div>
            <div class="carousel-item">
                <img src="{{ url('/assets/img/img2.jpg') }}" class="d-block w-100" alt="img2">
            </div>
            <div class="carousel-item">
                <img src="{{ url('/assets/img/img3.jpg') }}" class="d-block w-100" alt="img3">
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

    <h2 class="text-center pt-5 pb-3" id="jv">Ayo Gabung KMNU!</h2>
    <h6>Membangun generasi muda yang berkarakter dan mampu mengamalkan ajaran</h6>
    <h6>Ahlussunnah Wal Jama'ah An-Nahdliyah</h6>
    <div class="position-relative mt-5">
        <button type="button" class="btn btn-success position-absolute top-0 start-50 translate-middle">Daftar Anggota</button>
    </div>

    <h2 class="text-center pt-5 pb-3" id="sk">Struktur Kepengurusan</h2>

    <div class="spasi">.</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ url('/assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>