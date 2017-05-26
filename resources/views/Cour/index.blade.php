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
                        <h1>Ici les cours</h1>
                        <h2>Proposer un cour</h2>
                        <a href="{{ route('cour.create') }}"> Proposer Cour</a>
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
                    @foreach($court as $cour)
                        <h2 class="post-title">
                            <a href="{{ route('cour.show', $cour->id) }}">{{$cour->title}}</a>
                        </h2>
                        <h3 class="post-subtitle">
                            <p>{{$cour->content}}</p>
                        </h3>
                        <p class="post-meta">Posté par : {{ $cour->user->name }} le {{$cour->created_at}}</p>
                    @endforeach
                    {{$court->links()}}
                </div>
                <hr>
            </div>
            <hr>
            <!-- Pager -->
        </div>
    </div>


    <hr>


@endsection
