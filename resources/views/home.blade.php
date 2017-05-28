@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Vous êtes connecté
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">La liste des utilisateurs</div>
                <div class="panel-body">
                    <p>Nombre d'utilisateurs sur la plateforme : @foreach ($users as $user){{ $user::count() }}@endforeach</p>
                    @foreach ($users as $user)
                        {{$user->name}}<br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6  col-md-6">
            <div class="post-preview">
                <br><br>
                <div class="panel panel-default">
                    <div class="panel-heading">Les cours</div>
                        <div class="panel-body">
                            <p>Nombre de cours sur la plateforme : @foreach ($court as $cour){{ $cour::count() }}@endforeach</p>
                            @foreach($court as $cour)
                                <h2 class="post-title">
                                    <a href="{{ route('cour.show', $cour->id) }}">{{$cour->title}}</a>
                                </h2>
                                <p class="post-meta">Posté par : {{ $cour->user->name }} le {{$cour->created_at}}</p>
                            <div class="bouton-align" style="float:left;">
                                <a href="{{ route('cour.edit', $cour->id) }}" class="btn btn-primary" style="width:150px; height:50px;">Modifier</a>
                            </div>
                                <form method="POST" action="{{ route('cour.destroy', $cour->id) }}">
                                    {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <input class="btn btn-danger "type="submit" style="width:150px; height:50px; display: inline-block;" value="supprimer">
                                </form>

                            @endforeach
                            {{$court->links()}}
                        </div>

                </div>
            </div>

        </div>
        <div class="col-lg-6  col-md-6">
            <div class="post-preview">
                <br><br>
                <div class="panel panel-default">
                    <div class="panel-heading">Les Posts dans le forum</div>
                    <div class="panel-body">
                        <p>Nombre de posts sur la plateforme : @foreach ($formations as $formation){{ $formation::count() }}@endforeach</p>
                        @foreach($formations as $formation)
                            <h2 class="post-title">
                                <a href="{{ route('formation.show', $formation->id) }}">{{$formation->title}}</a>
                            </h2>
                            <p class="post-meta">Posté par : {{ $formation->user->name }} le {{$formation->created_at}}</p>
                            <div class="bouton-align" style="float:left;">
                                <a href="{{ route('formation.edit', $formation->id) }}" class="btn btn-primary" style="width:150px; height:50px;">Modifier</a>
                            </div>
                            <form method="POST" action="{{ route('formation.destroy', $formation->id) }}">
                                {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <input class="btn btn-danger "type="submit" style="width:150px; height:50px; display: inline-block;" value="supprimer">
                            </form>

                        @endforeach
                        {{$formations->links()}}
                    </div>

                </div>
            </div>

        </div>

        <!-- Pager -->
    </div>
</div>
@endsection
