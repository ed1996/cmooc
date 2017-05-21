@extends('layouts.app')

@section('content')


<div class="container-fluid1">

    <div class="fond">
        <div class="row backbox">


            <div class=" col-lg-7 col-md-12 col-xs-12 textconnexion">
                <p class="title">Vous n'avez pas de compte ?</p>
                <p>Il est temps de s'inscrire pour connaitre et <br> apprendre de nouvelles technologies</p>
                <button><a href="{{ url('/register') }}">Inscrivez-vous</a></button></p>
            </div>
        </div>

        <div class=" col-lg-5 col-md-12 col-xs-12 contact-form-connexion">
            <h2>CONNEXION</h2>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                    <ul>
                        <li>
                            <i class="fa fa-at form-icon  fa-lg"></i>
                            <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </li>
                        <li>
                            <i class="fa fa-lock form-icon fa-lg"></i>
                            <input id="password" type="password"  placeholder="Mot de passe" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </li>

                    </ul>
                    <!--<h3>Mot de passe oublié ?</h3>-->
                    <button type="submit">Connexion</button>
            </form>
        </div>
    </div>

</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="col-lg-5">
                    <ul>
                        <a href="connexion.html"><li>Contactez-nous</li></a>
                        <a href="inscription.html"><li>Inscrivez-vous</li></a>
                        <a href=""><li>Proposer un cours ou une connaissance</li></a>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul>
                        <a href=""><li>Aide</li></a>
                        <a href=""><li>Mentions légales</li></a>
                        <a href=""><li>FAQ</li></a>
                    </ul>
                </div>
                <div class="col-lg-4 RS">
                    <p>Suivez-nous</p>
                    <a href=""><div class="facebook"></div></a>
                    <a href=""><div class="twitter "></div></a>
                    <a href=""><div class="GooglePlus"></div></a>
                </div>
                <div class="col-lg-12">
                    <hr>
                    Copyright 2017. Tous les droits sont réservés à L4E, est une marque déposé par Camille Cordier, Edgar Bekier, Sally Cohen et Jérémy Bourel
                </div>
            </div>
        </div>
    </div>

</footer>
@endsection
