@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editer un article</div>

                    <div class="panel-body">
                        <form method="POST" action="{{ route('formation.update', $formation->id) }}">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field()}}
                            <input class="form-control" type="text" value="{{$formation->title}}" name="title" placeholder="Titre">
                            <textarea class="form-control" name="content" placeholder="Contenu">{{$formation->content}}</textarea>
                            <textarea class="form-control" name="images" placeholder="placez l'url de votre image">{{$formation->images}}</textarea>
                            <input type="submit" value="publier" class="btn btn-info">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection