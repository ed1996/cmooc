@extends('layouts.app')

@section('content')


<div class="container-fluid1">

    <div class="fond">
        <div class="row backbox">
            <div class=" col-lg-7 col-md-12 col-xs-12 textconnexion">
                <p class="title">Vous n'avez pas de compte ?</p>
                <p>Il est temps de s'inscrire pour connaitre et <br> apprendre de nouvelles technologies</p>
                <a href="{{ url('/register') }}"><button>Inscrivez-vous</button></a></p>
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

@endsection
