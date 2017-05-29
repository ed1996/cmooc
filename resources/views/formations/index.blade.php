@extends('layouts.app')
@section('content')

    <!-- Navigation -->
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" >
        <div class="container question-container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="forumfd">
                        <h1>Forum</h1>
                    </div>

                 <div class="container">
                     <div class="row">

                     <div class="col-lg-12 col-md-12 col-xs-12">

                        <main style="box-shadow: 0px 0px 5px transparent">
                        <h2>Un problème, besoin d'aide ?</h2>
                        <div class="topic">
                            <div class="open">
                                <h2 class="question degrade">Poser votre question</h2>
                                <span class="faq-t"></span>
                            </div>
                            <div class="answer">
                                <div class="panel-body">
                                    <form method="POST" action="{{ route('formation.store') }}">
                                        {{csrf_field()}}
                                        <label class="newsujet" for="name">Titre du sujet</label>
                                        <input class="form-control" name="title" placeholder="Titre du sujet"><br>
                                        <label class="newsujet" for="name">Contenu du sujet</label>
                                        <input class="form-control" name="content" placeholder="Contenu"><br>
                                        <label class="newsujet" for="name">Proposition ( .JPEG, .PDF )</label>
                                        <textarea class="form-control" name="images" placeholder="Proposition"></textarea><br>

                                        <input type="submit" value="publier" class="submit-btn" style=" margin-left: 38%; margin-top: 4%;">
                                    </form>
                                </div>

                            </div>
                          </div>
                        </main>
                      </div>
                     </div>
                 </div>
                    <span class="subheading"></span>
                </div>
            </div>
        </div>
        </div>
    </header>


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="post-preview">
                    <br><br>
                    @foreach($formations as $formation)
                        <h2 class="post-title">
                            <a href="{{ route('formation.show', $formation->id) }}">{{$formation->title}}</a>
                        </h2>
                        <p class="post-meta lead"> Posté par : {{ $formation->user->name }}</p>
                        <span class="glyphicon glyphicon-time"></span>  Le {{$formation->created_at}} <br><br>
                        <p class="post-subtitle">{{$formation->content}}</p>

                        <hr>
                    @endforeach
                    {{$formations->links()}}
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script>
        $(".open").click( function () {
            var container = $(this).parents(".topic");
            var answer = container.find(".answer");
            var trigger = container.find(".faq-t");

            answer.slideToggle(200);

            if (trigger.hasClass("faq-o")) {
                trigger.removeClass("faq-o");
            }
            else {
                trigger.addClass("faq-o");
            }

            if (container.hasClass("expanded")) {
                container.removeClass("expanded");
            }
            else {
                container.addClass("expanded");
            }
        });
    </script>
@endsection
