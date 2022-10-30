<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSMS @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('/')}}/front/CSS/all.css">

    <link rel="stylesheet" href="{{asset('/')}}/front/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">SSMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=" {{route('home')}}">Home</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=" {{route('all-courses')}}">Courses</a>

                </li>
                @if(auth()->check())

                    <a class="nav-link active" aria-current="page" href=" {{route('dashboard')}}">Dashboard</a>
                @if(auth()->user()->role == 0)
                    <a class="nav-link active" aria-current="page" href=" {{route('my-order',['id'=>auth()->user()->id])}}">My Orders</a>
                    @endif

                    <a class="nav-link active " aria-current="page" href="" onclick="event.preventDefault();document.getElementById('logoutForm').submit()"> Logout</a>
                    <form action="{{route('logout')}}" method="post" id="logoutForm">
                        @csrf
                    </form>


                @else
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=" {{route('login')}}">Login</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=" {{route('register')}}">Register</a>
                </li>
                @endif


            </ul>

        </div>
    </div>
</nav>
@yield('body')
<footer class="bg-dark text-white">
    <div class="row">
        <div class="col-12">
            <div class="text-center">
            <span>Developed by Batch</span>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('/')}}front/JS/bootstrap.js"></script>
<script src="{{asset('/')}}front/JS/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(Session::has('error'))
    <script>
        toastr.error('{{Session::get('error')}}')
    </script>
    {{Session::forget('error')}}

@endif
</body>
</html>

