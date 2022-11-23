<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupid</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/main.css') }}">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://kit.fontawesome.com/4f3a2fda57.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body class="bg-image d-flex flex-column min-vh-100 min-vw-100">
    {{-- Navbar Part --}}
    <nav class="navbar navbar-expand-lg p-3 navbar-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand fs-2 text-white">Cupid</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-lg-3 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link link-danger fs-4">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-danger fs-4">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-danger fs-4">Safety</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-danger fs-4">Download</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="d-lg-block d-none">
                <button class="btn btn-light rounded-pill px-3 me-3">Login</button>
            </a>
        </div>
    </nav>

    {{-- Center Container --}}
    <div class="d-flex flex-grow-1 justify-content-center align-items-center">
        <div class="text-center">
            <h1 class="text-white title">Swipe Right!</h1> <br>
            <a href="{{url('/register')}}"><button class="btn btn-lg px-5 py-3 btn-danger mb-2 rounded-pill">Create Account</button></a> <br>
            <button class="d-lg-none d-inline-block btn btn-lg px-5 btn-dark rounded-pill">Login</button>
        </div>
    </div>
</body>
</html>
