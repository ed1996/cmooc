@extends('.layouts.app')
@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cour Posté par : {{ $cour->user->name }} </div>

                    <div class="panel-body">
                        <h1>{{ $cour->title }}</h1>
                        <img src="{{ $cour->images }}" style: width="150px">
                        <h2>{{ $cour->content }}</h2>
                        Partager l'article : {{URL::to('/cour/'.$cour->id)}}
                        <form method="POST" action="{{ route('cour.destroy', $cour->id)}}">
                            {{csrf_field()}}
                            <div class="panel-heading">
                                @if(Auth::check() and auth()->user()->isAdmin or Auth::check() and $court = Auth::user()->id == $cour->user->id)
                                    <a href="{{ route('cour.edit', $cour->id) }}" class="btn btn-primary">Modifier</a>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input class="btn btn-danger "type="submit" value="supprimer">
                                @endif
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection