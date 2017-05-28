@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">



                <div class="degrade-titre">
                    <h1>{{ $formation->title }}</h1>
                </div>
                <p class="p_forum">{{ $formation->content }}</p>
                <img src="{{ $formation->images }}" style: width="150px" class="img-post">
                <p class="author">{{ $formation->user->name }}</p>
                <form method="POST" action="{{ route('formation.destroy', $formation->id)}}">
                    {{csrf_field()}}
                        @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $formations = Auth::user()->id == $formation->user->id)
                            <a href="{{ route('formation.edit', $formation->id) }}" class="edit">Modifier</a>
                            <input type="hidden" name="_method" value="DELETE" >
                            <input class="delete"type="submit" value="Supprimer">
                        @endif
                </form>

                <div class="comment">
                    <h5>Répondre à ce sujet</h5>
                    @if(Auth::check())
                        <form method="POST" action="{{ route('post.store') }}">
                            {{csrf_field()}}
                                <input type="hidden" name="formation_id" value="{{ $formation->id }}">
                                <textarea class="form-control" name="content"></textarea>
                            <button type="submit"  class="send_post">Envoyer</button>

                        </form>
                    @endif
                </div>

                <hr>

                    @foreach($posts as $post)

                        @if($post->formation_id == $formation->id)

                        <h4 class="degrade-commentaire">{{$post->user->name}}</h4>

                        <p>{{ $post->content }}</p>
                            @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $posts = Auth::user()->id == $post->user->id)
                                <a href="{{ route('post.edit', $post->id) }}" class="edit">Modifier</a>
                                <form method="POST" action="{{ route('post.destroy', $post->id) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="submit" value="Supprimer" class="delete">
                                    <br><br>
                                </form>
                            <hr>
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