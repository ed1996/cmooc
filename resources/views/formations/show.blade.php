@extends('.layouts.app')
@section('content')


    html
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Formation Posté par : {{ $formation->user->name }} </div>

                    <div class="panel-body">
                        <h1>{{ $formation->title }}</h1>
                        <img src="{{ $formation->images }}" style: width="150px">
                        <h2>{{ $formation->content }}</h2>
                        Partager l'article : {{URL::to('/formation/'.$formation->id)}}
                        <form method="POST" action="{{ route('formation.destroy', $formation->id)}}">
                            {{csrf_field()}}
                            <div class="panel-heading">
                                @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $formations = Auth::user()->id == $formation->user->id)
                                    <a href="{{ route('formation.edit', $formation->id) }}" class="btn btn-primary">Modifier</a>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input class="btn btn-danger "type="submit" value="supprimer">
                                @endif
                            </div>
                        </form>
                        <div class="panel-body">
                            @if(Auth::check())
                                <form method="POST" action="{{ route('post.store') }}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="formation_id" value="{{ $formation->id }}">
                                    <input class="form-control" type="text" name="title" placeholder="Titre">
                                    <textarea class="form-control" name="content" placeholder="Proposer un sujet"></textarea>
                                    <div class="panel-heading">
                                        <input type="submit" value="envoyer" class="btn btn-info">
                                    </div>
                                </form>
                            @endif
                            @foreach($posts as $post)
                                @if($post->formation_id == $formation->id)
                                        <p><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></p>
                                        <p>Post Posté par : {{$post->user->name}} </p>

                                    @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $posts = Auth::user()->id == $post->user->id)
                                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Modifier</a>
                                        <form method="POST" action="{{ route('post.destroy', $post->id) }}">
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