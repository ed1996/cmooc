@extends('layouts.app')

@section('content')

<<<<<<< HEAD
    <div class="container-fluid-register">
        <div class="fond">
            <div class="row backbox">

                <div class=" col-lg-7 col-sm-12 col-md-12 col-xs-12 textcontent">
                    <p class="title">Vous avez déja un compte ?</p>
                    <p> Connectez-vous et venez découvrir des <br>nouveaux cours, ou bien proposez en un nouveau.
                        <a href="{{ url('/login') }}"><button>Connectez-vous</button></a></p>
                </div>

                <div class=" col-lg-5 col-sm-7 col-md-12 col-xs-12 contact-form">
                    <h2>INSCRIPTION</h2>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                            <select name="isAdmin" style="display:none;">
                                <option value="0">Utilisateur</option>
                                <option value="1">Administrateur</option>
                            </select>
=======

    <div class="container-fluid1">
        <div class="fond">
            <div class="row backbox">


                <div class=" col-lg-7 col-md-12 col-xs-12 textcontent">
                    <p class="title">Vous avez déja un compte ?</p>
                    <p> Connectez-vous et venez découvrir des <br>nouveaux cours, ou bien proposez en un nouveau.
                        <button><a href="connexion.html">Connectez-vous</a></button></p>
                </div>

                <div class=" col-lg-5 col-md-12 col-xs-12 contact-form">
                    <h2>INSCRIPTION</h2>
                    <form action="{{ route('register') }}" method="post">
                        {{csrf_field()}}

                        
                            <ul>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <li>
                                    <i class="fa fa-user form-icon  fa-lg"></i>
                                    <input type="text" name="name" placeholder="Prénom">
                                </li>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                                <li>
                                    <i class="fa fa-at form-icon  fa-lg"></i>
                                    <input type="text" name="email" placeholder="  Email">
                                </li>
                                <li>
                                    <i class="fa fa-lock form-icon fa-lg"></i>
                                    <input type="text" placeholder="   Mot de passe" />
                                </li>
                            </ul>
                            <button type="submit">Inscrivez-vous</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
