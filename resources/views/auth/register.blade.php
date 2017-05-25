@extends('layouts.app')

@section('content')

<div class="container-fluid1">
    <div class="fond">
    <div class="row backbox">

        <div class=" col-lg-7 col-md-12 col-xs-12 textcontent">
            <p class="title">Vous avez déja un compte ?</p>
            <p> Connectez-vous et venez découvrir des <br>nouveaux cours, ou bien proposez en un nouveau.
                <button><a href="{{ url('/login') }}">Connectez-vous</a></button></p>
        </div>

        <div class=" col-lg-5 col-md-12 col-xs-12 contact-form">
            <h2>INSCRIPTION</h2>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                               <ul>
                                    <li>
                                        <i class="fa fa-user form-icon fa-lg"></i>
                                        <input id="name" type="text" placeholder="Nom" class="input-text js-input" name="name" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </li>

                                    <li>
                                        <i class="fa fa-at form-icon  fa-lg"></i>
                                        <input id="email" type="text" placeholder="Email" class="input-text js-input" name="email" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </li>
                                    <li> <i class="fa fa-lock form-icon fa-lg"></i>
                                        <input id="password" type="text" placeholder="Mot de passe" class="input-text js-input" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </li>
                                    <li>
                                        <i class="fa fa-lock form-icon fa-lg"></i>
                                        <input id="password-confirm" type="text" placeholder="Confirmer le mot de passe" class="input-text js-input" name="password_confirmation" required>

                                    </li>
                                </ul>

                        <button type="submit">Inscrivez-vous</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
