@extends('layouts.app')

@section('content')


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

    <!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


            <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <select name="isAdmin">
                                    <option value="0">Utilisateur</option>
                                    <option value="1">Administrateur</option>
                                </select>

                                @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>-->
@endsection
