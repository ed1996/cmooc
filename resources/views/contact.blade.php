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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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

        </div>

    </div>

        <form class="contact-for row"  method="POST" action="{{route('contact_store')}}">
            {{csrf_field()}}
            <div class="form-field col-lg-5 col-md-5 col-s-12 col-lg-offset-2 col-md-offset-2">
                <input id="name" class="input-text js-input titi " type="text" required>
                <label class="label" for="name">Name</label>
            </div>
            <div class="form-field col-lg-5 col-md-5 col-s-12 ">
                <input id="email" class="input-text js-input titi " type="email" required>
                <label class="label" for="email">E-mail</label>
            </div> <br><br><br><br><br>
            <div class="form-field message col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2">
                <textarea id="message" class="input-text js-input tata" type="text" required></textarea>
                <label class="label" for="message">Message</label>

            </div>
            <div class="for-field">
                <input class="submit-btn" type="submit" value="Envoyer">
            </div>
        </form>



@endsection