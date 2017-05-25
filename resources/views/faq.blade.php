@extends('layouts.app')

@section('content')
    <div class="container-fluid faq">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="FAQ">
                    <h1>FOIRE A QUESTIONS</h1>
                </div>
            </div>
        </div>

        <main>
            <h3>Questions et réponses générales</h3>
            <div class="topic">
                <div class="open">
                    <h2 class="question">1. Qu'est-ce qu'un CMOOC ?</h2>
                    <span class="faq-t"></span>
                </div>
                <p class="answer">Un CMOOC est une plateforme d'apprentissage participative. MOOC = Massive Online Open Courses, littéralement, cours en ligne ouvert et accessible au plus grand nombre.
                    Dans les cMOOC, les objectifs d’apprentissage sont ouverts et les participants créent dans une large mesure le contenu. Les cMOOC sont fondés sur la théorie de la connectivité et sur une pédagogie ouverte qui s’appuie sur des réseaux de contenus et d’individus. </p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">2. A quoi sert ce site ?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">Ce site vous propose plusieurs formations autour de la programmation. Vous avez accès, une fois connecté à différents sujets, divisés en plusieurs parties.
                    Toutes les parties sont accessibles selon l'ordre que vous voulez. Vous pouvez également proposer un sujet grâce à notre formulaire. Il sera ou non validé par notre équipe et proposé aux utilisateurs.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">3. Que vais-je apprendre ici ?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">Sur notre site, nous vous proposons des formations à la programmation tel que Wordpress, SASS ou Javascript.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">4. Comment proposer une nouvelle formation ?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">Il vous suffit d'aller sur la page "Nouveau sujet" et de remplir le formulaire. Réfléchissez bien avant de proposer un sujet en le détaillant au maximum
                    pour qu'il soit publiable et publié rapidement.</p>
            </div>
        </main>
    </div>
    <script src="{{URL('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>

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