@extends('layouts.app')
@section('content')

<!-- Navigation -->
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" >
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-xs-12">

                <h1 class="degrade-titre">FORUM</h1>
                <!-- First Blog Post -->
                <h2>Un problème, besoin d'aide ?</h2>

                    <!--<h2>Proposer une formations</h2>-->
                <div class="degrade">
                    <a href="{{ route('formation.create') }}"> Poser votre question</a>
                </div>
                    <hr class="small">
                    <span class="subheading"></span>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="post-preview">
<br><br>
                @foreach($formations as $formation)
                    <h2 class="post-title">
                        <a href="{{ route('formation.show', $formation->id) }}">{{$formation->title}}</a>
                    </h2>
                    <p class="post-meta lead"> Posté par : {{ $formation->user->name }}</p>
                   <span class="glyphicon glyphicon-time"></span>  Le {{$formation->created_at}} <br><br>
                        <p class="post-subtitle">{{$formation->content}}</p>

                    <hr>
                @endforeach
                {{$formations->links()}}
            </div>

        </div>

        <!-- Pager -->
    </div>
</div>





@endsection
