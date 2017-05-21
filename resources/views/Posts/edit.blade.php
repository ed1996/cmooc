@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editer un Post</div>

                    <div class="panel-body">
                        <form method="POST" action="{{ route('post.update', $post->id) }}">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field()}}

                            <textarea class="form-control" name="content" placeholder="Contenu">{{$post->content}}</textarea>

                            <input type="submit" value="publier" class="btn btn-info">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection