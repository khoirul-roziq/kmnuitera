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
                        <a class="nav-link active masuk" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

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