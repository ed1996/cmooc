@extends('layouts.app')

@section('content')


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



                        <ul>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <li>
                                    <i class="fa fa-user form-icon  fa-lg"></i>
                                    <input type="text" name="name" placeholder="Prénom" required>
                                </li>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <li>
                                <i class="fa fa-at form-icon  fa-lg"></i>
                                <input type="text" name="email" placeholder="  Email" required>
                            </li>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif


                            <li>
                                <i class="fa fa-lock form-icon fa-lg"></i>
                                <input type="password" placeholder="Mot de passe" name="password" required />
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </li>
                            <li>
                                <i class="fa fa-lock form-icon fa-lg"></i>
                                <input id="password-confirm" type="password" placeholder="Confirmer le mot de passe" class="input-text js-input" name="password_confirmation" required>

                            </li>
                        </ul>
                        <button type="submit">Inscrivez-vous</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
