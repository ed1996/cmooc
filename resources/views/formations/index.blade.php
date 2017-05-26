@extends('layouts.app')
@section('content')

<!-- Navigation -->
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" >
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <br><br>
                <div class="site-heading">
                    <h1>Forum de discussion</h1>
                    <!--<h2>Proposer une formations</h2>-->
                    <a href="{{ route('formation.create') }}"> Proposer Formation</a>
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
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
<br><br>
                @foreach($formations as $formation)
                    <h2 class="post-title">
                        <a href="{{ route('formation.show', $formation->id) }}">{{$formation->title}}</a>
                    </h2>
                    <h3 class="post-subtitle">
                        <p>{{$formation->content}}</p>
                    </h3>
                    <p class="post-meta">Posté par : {{ $formation->user->name }} le {{$formation->created_at}}</p>
                @endforeach
                {{$formations->links()}}
            </div>
            <hr>
        </div>
        <hr>
        <!-- Pager -->
    </div>
</div>


<hr>


@endsection
