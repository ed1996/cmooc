@extends('layouts.app')
<br><br><br>
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Sujet Posté par : {{ $post->user->name }} </div>

                    <div class="panel-body">
                        <h1>{{ $post->title }}</h1>

                        Partager l'article : {{URL::to('/post/'.$post->id)}}
                        <form method="POST" action="{{ route('post.destroy', $post->id)}}">
                            {{csrf_field()}}
                            <div class="panel-heading">
                                @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $posts = Auth::user()->id == $post->user->id)
                                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Modifier</a>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input class="btn btn-danger "type="submit" value="supprimer">
                                @endif
                            </div>
                        </form>
                        <div class="panel-body">
                            @if(Auth::check())
                                <form method="POST" action="{{ route('comment.store') }}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <input class="form-control" type="text" name="title" placeholder="Titre">
                                    <textarea class="form-control" name="content" placeholder="Donnez votre solution"></textarea>
                                    <div class="panel-heading">
                                        <input type="submit" value="envoyer" class="btn btn-info">
                                    </div>
                                </form>
                            @endif
                            @foreach($comments as $comment)
                                @if($comment->post_id == $post->id)
                                    <p>Commentaire Posté par : {{$comment->user->name}} </p>
                                    <p>{{ $comment->content }}</p>

                                    @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $comments = Auth::user()->id == $comment->user->id)
                                        <a href="{{ route('comment.edit', $comment->id) }}" class="btn btn-primary">Modifier</a>
                                        <form method="POST" action="{{ route('comment.destroy', $comment->id) }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="delete">
                                            <input type="submit" value="Supprimer" class="btn btn-danger">
                                            <br><br>
                                        </form>
                                    @else
                                    @endif
                                @else
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection