@extends('layouts.app')

@section('content')
    <div class="container sujet-container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="contact">
                    <h1>UN NOUVEAU SUJET OU CONNAISSANCE ?</h1>
                    <br/>
                    <p>Si vous souhaitez nous proposer un sujet intéressant ou une connaissance<br/> et qui rentre dans le cadre de nos formations,<br/> 
                        remplissez ce formulaire. </p> 
                    <br/>
                    <a href="{{ URL::asset('../formations.create') }}" class="btn btn-3">Allez voir nos formations</a>

                </div>
            </div>

        </div>

    </div>



    <div class="container container-propo faq">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <main><h3>Ajout d'un nouveau sujet</h3>

                    <div class="panel-body">
                        <form method="POST" action="{{ route('cour.store') }}">
                            {{csrf_field()}}



                            <label class="newsujet" for="name">Titre du cour</label>
                            <input class="form-control" name="title" placeholder="Titre du sujet"><br>
                            <label class="newsujet" for="name">Contenu du scour</label>
                            <input class="form-control" name="content" placeholder="Contenu"><br>
                            <label class="newsujet" for="name">Proposition ( .JPEG, .PDF )</label>
                            <textarea class="form-control" name="images" placeholder="Proposition"></textarea><br>

                            <input type="submit" value="publier" class="submit-btn" style=" margin-left: 38%; margin-top: 4%;">
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection