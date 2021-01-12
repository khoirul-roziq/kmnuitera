<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/lightslider.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/css/styleIndex.css')}}">

    <link rel="shortcut icon" href="assets/img/logo/logo.png" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon"> -->

    <script type="text/javascript" src="{{ url('/assets/js/JQuery3.3.1.js')}}"></script>
    <script type="text/javascript" src="{{ url('/assets/js/lightslider.js')}}"></script>

    <title>@yield('title') | KMNU ITERA</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/')}}">
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
    <!-- container -->

    @yield('container')

    <!-- end container -->

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