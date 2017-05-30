@extends('layouts.app')

@section('content')

    <div class="container-fluid1">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <h1> <span>L4E, un cMooc d’apprentissage personnel</span></h1>
                </div>

                <div class="item">
                    <h1> <span>Devenez les rois de la programmation</span></h1>
                </div>

                <div class="item">
                    <h1><span>Soyez élève , Soyez prof</span></h1>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" style="font-size: 3em;"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" style="font-size: 3em;"></span>
            </a>
        </div>

        <div class="row">
            <div class="bienvenue">
                <h1>Bienvenue sur L4E</h1>
                <p>Une plateforme éducative et participative qui vous donnera envie d’apprendre encore un peu plus chaque jour.<br>
                    Nous sommes là et vous êtes là, réunis pour avancer et construire un lieu de connaissances variées.<br>
                    Learn For Ever est la plateforme informatique pour deux types d'utilisateurs.</p>
            </div>
        </div>



        <div class="row">

            <div class="cours col-lg-3  col-md-3 col-xs-3 col-lg-offset-1 col-md-offset-1 col-xs-offset-3">
                <numero>01</numero><br>
                <p>Éditez un cours</p>
            </div>

            <div class="editer col-lg-7 col-md-7 col-xs-12  ">
                <p>Si un sujet vous intéresse et que vous pensez que vous avez une connaissance qui pourra aider les autres utilisateurs, il suffit de la soumettre à notre équipe.</p>

            </div>
        </div>


        <div class="row" id="deux">

            <div class="cours col-lg-3  col-md-3 col-xs-3 col-lg-offset-1 col-md-offset-1 col-xs-offset-3">
                <numero>02</numero><br>
                <p>Suivez un cours</p>
            </div>

            <div class="editer col-lg-7 col-md-7 col-xs-12">
                <p> Nous vous proposons des formations dans le domaine de la technologie, business et design. Chacune de nos formations est divisée en chapitre, vous pouvez la suivre à votre rythme.</p>

            </div>

        </div>


        <section class="violet" id="violet">
            <div class="row">
                <div class="bienvenue" id="bien">
                    <h1>Découvrez notre large choix de formation</h1><br>
                    <p>Plusieurs formations vous attendent dans notre catalogue ! Choisissez un titre et débutez votre apprentissage sans plus tarder :</p>
                </div>
            </div>

            <div class="row">
                <div class="gallery">
                    <div class="thumbnail-1 wow fadeInLeft justeimage col-lg-3  col-md-3  col-xs-12 col-xs-offset-2">
                        <p style="color: orange; text-align: center; font-size: 18px; margin-top: 5%;" >HTML5</p><i class="fa fa-html5" aria-hidden="true"></i>
                        <div class="caption  col-lg-3  col-md-3  col-xs-12">
                            <h3 class="wow fadeInUp">4 Cours</h3>
                        </div>
                    </div>
                    <div class="thumbnail-1 wow fadeInLeft justeimage col-lg-3  col-md-3  col-xs-12 col-xs-offset-2">
                        <p style="color: turquoise; text-align: center; font-size: 18px; margin-top: 5%;" >WORDPRESS</p><i class="fa fa-wordpress" aria-hidden="true"></i>
                        <div class="caption  col-lg-3  col-md-3  col-xs-12">
                            <h3 class="wow fadeInUp">5 Cours</h3>
                        </div>
                    </div>
                    <div class="thumbnail-1 wow fadeInLeft justeimage col-lg-3  col-md-3  col-xs-12 col-xs-offset-2">
                        <p style="color: blue; text-align: center; font-size: 18px; margin-top: 5%;" >CSS3</p><i class="fa fa-css3" aria-hidden="true"></i>
                        <div class="caption  col-lg-3  col-md-3  col-xs-12">
                            <h3 class="wow fadeInUp">4 Cours</h3>
                        </div>
                    </div>
                    <div class="thumbnail-1 wow fadeInLeft justeimage col-lg-3  col-md-3  col-xs-12 col-xs-offset-2">
                        <p style="color: darkblue; text-align: center; font-size: 18px; margin-top: 5%;" >GITHUB</p><i class="fa fa-github" aria-hidden="true"></i>
                        <div class="caption  col-lg-3  col-md-3  col-xs-12">
                            <h3 class="wow fadeInUp">2 Cours</h3>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <div class="row avantage">
            <div class="learnforever">

                <h1>Vos Avantages avec L4E </h1><br>

                <div class="avantage col-lg-5    col-md-5 col-xs-10 col-lg-offset-1 col-md-offset-2">
                    <ul>
                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>  Apprenez à votre rythme, d’une manière plus ludique</li>
                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>  Apprendre facilement et enseigner en même temps </li>
                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>  Allez plus loin dans l’apprentissage ensemble</li>
                    </ul>
                </div>

                <div class="avantage col-lg-5 col-md-5 col-xs-10">
                    <ul>
                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>  Soumettre un sujet et le voir évoluer grâce aux autres</li>
                        <li> <i class="fa fa-hand-o-right" aria-hidden="true"></i>  Disponible pour répondre à vos questions </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection
