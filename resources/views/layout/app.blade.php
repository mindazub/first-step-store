<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BKgrupe</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    @include('partials.up')
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header" style="padding: 10px;">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <!-- <a class="navbar-brand" href="{{ url('/') }}" >
                    <img src="/img/bk_akad.jpg">
                </a> -->
                <a href="{{ url('/') }}" >
                    <img src="/img/bk_akad.jpg">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/products') }}">Products</a></li>
                    <li><a href="#">Apie mus</a></li>
                    <li><a href="#">Seminarai</a></li>
                    <li><a href="#">Projektavimas</a></li>
                    <li><a href="#">Gamintojai</a></li>
                    <li><a href="#">Naudinga</a></li>
                    <li><a href="#">Kontaktai</a></li>
                    <li><a href="#">Ispardavimas</a></li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">LT</a></li>
                    <li><a href="#">EN</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

    
        <div class="row">

    @yield('categories')
            

            <div class="col-md-9">

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
