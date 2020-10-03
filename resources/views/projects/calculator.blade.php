@extends('layout.master')
@section('title')
    Sarah Covey - Calculator

    @include('partials.project_header')

    <noscript>
        <div class="no-js-message">
            <div style="background-color:rgb(214, 198, 215); position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:2000;">
                <h3>This site requires JavaScript. It will only be visible if you have it disabled.</h3>
            </div>
        </div>
    </noscript>
    <div id="loadOverlay" class="loadOverlay"
         style="
    background-color: rgb(214, 198, 215);
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 10000%;
    z-index: 2000;"></div>
    {{-- header --}}
    <div class="about-petspot container-fluid" style="z-index: 1000;">
        <div class="row pt-md-2 " style="justify-content: start;">

            <div id="calculator-title" class="col-8 col-md-6 pt-md-4 mt-md-4 animated hide-project"
                 style="justify-content: center; margin: 0 auto;">

                <img style="width: 100%; height: auto" src="{{url('images/calculator_title.png')}}">
            </div>
            <div id="calculator-img" class="col-10 col-md-5 mt-5 m-auto mr-md-auto animated hide-project">
                <img style=" width: 100%; height: auto" src="{{url('images/calculator_project_example.png')}}">
            </div>
        </div>
    </div>{{-- end header --}}

    <div class="details-top p-0 m-0" style="min-height: 15vw; margin-bottom: -10px"></div>
    <div class="container-fluid pt-4 m-0" style="background-color: white; margin-top: -10px">

        <div class="row pl-md-5 ml-md-5" style="justify-content: center; margin: 0 auto">
            <div class="col-12 col-sm-10 col-md-8 col-lg-9"
                 style="color: rgba(0,0,0,0.67); text-align: left;">
                <h1 class="lead" style="font-weight: bold; font-size: xx-large"><span
                        style="color: #009c6b">Calculator:</span> A Scientific Calculator for Android</h1>
                {{--                            <br>--}}
                <p>
                    This calculator was made in Android Studio. It features 30 different unit conversions and a few different pages. The scientific calculator is
                    revealed in landscape mode, and all equations are saved with SQLite. The old equations can be deleted or used again, and the app supports English
                    and Spanish languages.
                    <br>
                    <span style="font-weight: bold">Don't worry, you don't need an Android device to see the app below.</span>
                </p>
            </div>

            <div class="col-12 col-sm-8 col-md-4 col-lg-3 text-center text-md-left" style="z-index: 999; pointer-events: auto;">
                <h5 class="card-title">Tech Used</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <div class="row">
                        <div class="col-12">
                            Java
                            <br>
                            Android Studio
                            <br>
                            SQLite
                            <br>
                            <br>
                            <a href="https://github.com/heysarahshere/JavaCalculator" style="color: #008a93;"><i class="fa fa-github"></i> View Source Code</a>
                        </div>
                    </div>
                </h6>
            </div>
        </div>

        <hr style="background-color: white; margin-left: 5%; margin-right: 5%;">
        <div class="row pb-2" style="justify-content: center">
            <h1 class="lead" style="font-weight: bold; color: #009c6b">Calculator Screens</h1>
        </div>
        <div class="row pt-5" style="justify-content: center; margin-bottom: -10px; z-index: 90; ">
            <div class="col-12 col-md-10" style="margin: 0 auto">

                <div id="roshamControls" class="carousel slide" data-ride="carousel"  style="color: #859c00; z-index: 90; pointer-events: auto">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-8 col-md-6 col-lg-3" style="margin: 0 auto;">
                                <img style=" width: 100%; height: auto" src="{{url('images/calculator/calculator1.png')}}">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-12 col-lg-6" style="margin: 0 auto;">
                                <img style=" width: 100%; height: auto" src="{{url('images/calculator/calculator2.png')}}">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-8 col-md-6 col-lg-3" style="margin: 0 auto">
                                <img style=" width: 100%; height: auto" src="{{url('images/calculator/conversions.png')}}">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-8 col-md-6 col-lg-3" style="margin: 0 auto">
                                <img style=" width: 100%; height: auto" src="{{url('images/calculator/history.png')}}">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-8 col-md-6 col-lg-3" style="margin: 0 auto">
                                <img style=" width: 100%; height: auto" src="{{url('images/calculator/about.png')}}">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#roshamControls" role="button" data-slide="prev"  style="color: #009c6b; z-index: 90; pointer-events: auto">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#roshamControls" role="button" data-slide="next"  style="color: #009c6b; z-index: 90; pointer-events: auto">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>


    </div>
    <div class="details-bottom p-0 m-0" style="min-height: 19vw; margin-bottom: 10px; alignment-baseline: top"></div>
    <div class="bottom-pad"></div>
    <div class="footer" style="position: relative;">
        @include('partials.footer')
    </div>

    <script>

        window.addEventListener('load', function () {
            var title = document.getElementById('calculator-title');
            if (title) {
                $(title).removeClass("hide-project");
                $(title).addClass("bounceInLeft");
            }
            var img = document.getElementById('calculator-img');
            if (img) {
                $(img).removeClass("hide-project");
                $(img).addClass("bounceInDown");
            }

        });
    </script>
