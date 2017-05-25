<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Learn4Ever @yield('title')</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}"/>

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="{{URL::asset('uploads/avatars/Logos.png')}}" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
<div id="app">



    <!-- /.navbar-collapse -->
    <nav class="navbar nav navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><img src="{{URL::asset('/uploads/avatars/Logos.png')}}"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li><a href="{{ route('formation.index') }}">Formation</a></li>
                        <li><a href="{{ url('/') }}">Participer</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li class="vertical_line">|</li>
                        <li><a href="{{ url('/login') }}" class="connexion">Connexion</a></li>
                    @else
                        @if (Auth::check() and auth()->user()->isAdmin)
                            <li><a href="{{ url('/') }}">Accueil</a></li>
                            <li><a href="{{ route('formation.index') }}">Formation</a></li>
                            <li><a href="{{ url('/') }}">Participer</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li><a href="{{ route('formation.index') }}">Administration</a></li>
                        @endif
                            <li><a href="{{ url('/') }}">Accueil</a></li>
                            <li><a href="{{ route('formation.index') }}">Formation</a></li>
                            <li><a href="{{ url('/') }}">Participer</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('logout') }}">
                                        Déconnexion
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- /.container -->

    @yield('content')
    <hr>


    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <ul>
                            <a href="{{ url('/contact') }}"><li>Contactez-nous</li></a>
                            <a href="{{ url('/register') }}"><li>Inscrivez-vous</li></a>
                            <a href=""><li>Proposer un cours ou une connaissance</li></a>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <ul>
                            <a href=""><li>Mentions légales</li></a>
                            <a href="{{ url('/faq') }}"><li>FAQ</li></a>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 RS">
                        <p>Suivez-nous</p>
                        <a href=""><div class="facebook"></div></a>
                        <a href=""><div class="twitter "></div></a>
                        <a href=""><div class="GooglePlus"></div></a>
                    </div>
                    <div class="col-lg-12  col-md-12 col-sm-12">
                        <hr>
                        Copyright 2017. Tous les droits sont réservés à L4E, est une marque déposé par Camille Cordier, Edgar Bekier, Sally Cohen et Jérémy Bourel
                    </div>
                </div>
            </div>
        </div>

    </footer>
</div>

<!-- Scripts -->
<script src="{{ URL::asset('/js/app.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>


</body>
</html>
