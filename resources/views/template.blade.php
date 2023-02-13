<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 6</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles default-->
    <style>
        html, body {
            background-color: #fff;
            /* color: #636b6f; */
            color: #0aa1ec;
            font-family: 'Nunito', sans-serif;
            font-weight: 150;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 50px;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 500;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        /* DW style */
        .homeStyle {
            font-size: 36px;
            color: #FF3300;
            font-family: Arvo;
        }

        .center{
            display:flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            border: 3px solid green;
            width: 50%;
        }
    </style>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styleTask1.css')}}"> 

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- <script src="{{asset('js/app2.js')}}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8" defer></script> -->

</head>
<body class="bg">
    <div id="app">
        <div class="nav1 sticky-top">
            <nav class="navbar navbar-expand-md navbar-light bg-custom shadow-sm">
                <div class="container">
                    <a class="navbar-brand brand-custom" href="{{ url('/') }}">
                        <img src="{{asset('/img/logo_clean.svg')}}" alt="logo">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->

                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{route('userList')}}">Papar Pengguna</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('userDaftar')}}">Daftar Pengguna</a>
                            </li> --}}

                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <main class="py-4 semua">
            @yield('content')
        </main>
    </div>

</body>
</html>