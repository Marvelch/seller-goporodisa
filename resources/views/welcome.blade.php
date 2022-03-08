<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Warung Goporodisa</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Font Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

    <style>
        body {
            /* background-color: #3498db; */
            background-color: #fff;
        }

        .avatar {
            width: 20rem;
        }

    </style>
    <!-- <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}"> -->
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="form-group title-app">
                    <p class="font-weight-bold h1 text-primary">Warung Goporodisa</p>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <p class="font-weight-bold">Bangun lebih awal untuk peluang lebih besar</p>
            </div>
            @if (Route::has('login'))
            <div class="col-md-12 d-flex justify-content-center mt-2">
                @auth
                <a class="btn btn-primary shadow" style="border-radius: 20px; font-size: 12px;" href="{{URL('/home')}}"><span class="m-2">Kembali</span></a>
                @else
                <a class="btn btn-primary shadow ml-1" style="border-radius: 20px; font-size: 12px; margin-right: 5px;" href="{{ route('login') }}"><span class="m-2">Login</span></a>
                @if (Route::has('register'))
                <a class="btn btn-primary shadow mr-1" style="border-radius: 20px; font-size: 12px; margin-left: 5px;" href="{{ route('register') }}"><span class="m-2">Daftar Baru</span></a>
                @endif
                @endauth
            </div>
            @endif
            <div class="col-md-12 d-flex justify-content-center">
                <img src="{{asset('images/1.png')}}" class="avatar mt-4" alt="">
            </div>
        </div>
    </div>
    <!-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="row">
                <div class="col-md">
                    <h1>SeGoporodisa</h1>
                </div>
            </div>
            <div>
                <img src="{{asset('images/logo.png')}}" alt="" srcset="" class="hello">
            </div>
            <div class="links">
                SeGoporodisa adalah layanan pengelolaan penjualan bagi seller goporodisa
            </div>
        </div>
    </div> -->
</body>

</html>
