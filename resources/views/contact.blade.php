@extends('layouts.app')
<style>
    @charset "UTF-8";
    * {
        padding: 0;
        margin: 0; }


    h4 {
        color: white; }




</style>


@section('content')
    <div class="container-fluid contact-container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8">
                <div class="contact">
                    <h1>CONTACT</h1>
                    <br/>
                    <p>Si vous avez une question, vous pouvez nous laisser<br/>  un message via le formulaire de contact.<br/><br/>
                        Nous répondons avec plaisir à vos questions <br/> concernant l'utilisation et le service de nos formations participatives.</p>
                    <br/>
                    <p><i class="fa fa-map-marker fa-1x"></i>
                        Start-up basée à Paris<br/>
                        <i class="fa fa-phone fa-1x"></i>
                        01 ## ## ## 03 21<br/>
                        <i class="fa fa-envelope fa-1x"></i>
                        l4e@contact.com
                    </p><br/>

                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div id="login-box">
                    <div class="left">
                        <form method="post" action="{{ route('About.store') }}">
                            <input type="text" name="prénom" placeholder="Nom et prénom" />
                            <input type="text" name="email" placeholder="E-mail" />
                            <input type="text" name="message" placeholder="Message..." />
                            <input type="submit" name="signup_submit" value="Envoyer" />
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection