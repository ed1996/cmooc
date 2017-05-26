@extends('layouts.app')
@section('content')

    <!-- Navigation -->
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <!-- Main Content -->

    <section>

        <div class="col-lg-5 col-lg-offset-1 fst_div menu_form" >
            <i class="fa fa-html5 neww" aria-hidden="true"></i>
            <h2>HTML/CSS</h2>
            <h6>3 formations</h6>
            <p> <span class="glyphicon glyphicon-time"> 4h30</span></p>
        </div>
        <div class="col-lg-5 col-lg-offset-1 menu_form">
            <i class="fa fa-css3 neww" aria-hidden="true"></i>
            <h2>CSS 3</h2>
            <h6>1 formations</h6>
            <p> <span class="glyphicon glyphicon-time"> 1h30</span></p>
        </div>
        <div class="col-lg-5 col-lg-offset-1 menu_form fst_div">
            <i class="fa fa-github neww" aria-hidden="true"></i>
            <h2>GitHub</h2>
            <h6>2 formations</h6>
            <p> <span class="glyphicon glyphicon-time"> 3h30</span></p>
        </div>
        <div class="col-lg-5 col-lg-offset-1 menu_form">
            <i class="fa fa-wordpress neww" aria-hidden="true"></i>
            <h2 >WordPress</h2>
            <h6>9 formations</h6>
            <p> <span class="glyphicon glyphicon-time"> 10h30</span></p>
        </div>


    </section>

    <section>
        @foreach($court as $cour)

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 fst_div menu_form" >
                    <br><br>
                    <img src="assets/Images/HTML.png" alt="HTML">
                    <h2><a href="{{ route('cour.show', $cour->id) }}">{{$cour->title}}</a></h2>

                </div>
            </div>

        @endforeach

        {{$court->links()}}

        <hr>
    </section>

@endsection
