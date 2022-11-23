<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/main.css') }}">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://kit.fontawesome.com/4f3a2fda57.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{ url('/js/main.js') }}" defer></script>
</head>
<body class="bg-color">
    <nav class="navbar navbar-expand-lg p-3 mt-3 ms-lg-5 ps-lg-5 navbar-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand fs-1 fs-bolder text-white">Cupid</a>
        </div>
    </nav>

    {{-- First Container --}}
    <div class="firstContainer">
        <div class="d-flex flex-column">
            <div class="d-flex flex-grow-1 justify-content-center">
                <div class="register-container px-3 m-2 rounded bg-dark text-center">
                    <nav class="navbar navbar-expand-lg">
                        <a href="#"><i class="fa-solid fa-angle-left text-white"></i></a>
                        <span class="ms-auto main-font text-white fs-5"><span class="count">1</span>/4</span>
                    </nav>
                    <h3 class="text-white fs-2 mt-2 main-font">Join Now!</h3>
                    <form class="mt-5 text-start" id="firstForm">
                        <label class="text-white main-font">Email</label>
                        <input type="email" name="email" id="emailInput" class="form-control mb-2" placeholder="Enter your email here">
                        <label class="text-white main-font">Password</label>
                        <input type="password" name="password" id="passwordInput" class="form-control password mb-2" placeholder="Enter your password here">
                        <i class="d-none fa-solid fa-eye fs-5 eye" onclick="eyeOpen()"></i>
                        <i class="fa-solid fa-eye-slash fs-5 eye" onclick="eyeClose()"></i>
                        <div class="form-check text-start mb-5">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-white" for="flexCheckDefault">
                                I've agree to the terms and conditions!
                            </label>
                        </div>
                        <button id="firstBtn" class="mb-3 mt-5 btn btn-lg btn-danger text-white main-font w-100">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Second Container --}}
    <div class="d-none secondContainer">
        <div class="d-flex flex-column">
            <div class="d-flex flex-grow-1 justify-content-center">
                <div class="register-container px-3 m-2 rounded bg-dark text-center">
                    <nav class="navbar navbar-expand-lg">
                        <a href="#"><i class="fa-solid fa-angle-left text-white"></i></a>
                        <span class="ms-auto main-font text-white fs-5"><span class="count">2</span>/4</span>
                    </nav>
                    <h3 class="text-white fs-2 mt-2 main-font">Upload Your Profile & Choose Your Gender</h3>
                    <img src="{{url('/images/vector.png')}}" width="45%" class="mt-4" id="profileUpload">
                    <img src="{{url('/images/checked.png')}}" width="45%" class="d-none mt-4" id="checkedProfile">
                    <form method="post" enctype="multipart/form-data" id="profileFormUpload">
                        @csrf
                        <input type="file" id="profile" class="d-none" name="profile" accept="image/png, image/jpeg">
                        <input type="hidden" class="gender" name="male" value="male" class="d-none">
                        <input type="hidden" class="gender" name="female" value="female" class="d-none">
                    </form>
                    <button type="submit" id="maleBtn" value="male" class="mt-3 mx-2 w-50 btn btn-lg border-2 border border-primary text-white rounded main-font mb-3">Male</button>
                    <button type="submit" id="femaleBtn" value="female" class="mt-3 mx-2 w-50 btn btn-lg border-2 border border-danger rounded text-white main-font mb-3">Female</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
