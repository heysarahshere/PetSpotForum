@extends('layout.master')
@section('title')
    Sarah Covey - Battleship

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

            <div id="battleship-title" class="col-8 col-md-6 pt-md-4 mt-md-4 animated hide-project"
                 style="justify-content: center; margin: 0 auto;">

                <img style="width: 100%; height: auto" src="{{url('images/battleship_title.png')}}">
            </div>
            <div id="battleship-img" class="col-10 col-md-5 mt-5 m-auto mr-md-auto animated hide-project">
                <img style=" width: 100%; height: auto" src="{{url('images/battleship_project_example.png')}}">
            </div>
        </div>
    </div>{{-- end header --}}

    <div class="details-top p-0 m-0" style="min-height: 15vw; margin-bottom: -10px"></div>
    <div class="container-fluid pt-4 m-0" style="background-color: white; margin-top: -10px">

        <div class="row pl-md-5 ml-md-5" style="justify-content: center; margin: 0 auto">
            <div class="col-12 col-sm-10 col-md-8 col-lg-9"
                 style="color: rgba(0,0,0,0.67); text-align: left;">
                <h1 class="lead" style="font-weight: bold; font-size: xx-large"><span
                        style="color: #a16906">BattleShip:</span> Classic Game for Android</h1>
                {{--                            <br>--}}
                <p>
                    This battleship game was made with Android Studio for a school project. It uses Dave Jones' battlegameserver API to allow users to challenge the computer.
                    See your own stats and the stats of other players, as well as who is and isn't online. Game data is saved with SQLite.
                    <br>
                    <span style="font-weight: bold">Don't worry, you don't need an Android device to see the game below.</span>
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
                            <a href="https://github.com/heysarahshere/battleship" style="color: #092071;"><i class="fa fa-github"></i> View Source Code</a>
                        </div>
                    </div>
                </h6>
            </div>
        </div>

        <hr style="background-color: white; margin-left: 5%; margin-right: 5%;">
        <div class="row pb-2" style="justify-content: center">
            <h1 class="lead" style="font-weight: bold; color: #a16906">Battleship Screens</h1>
        </div>
        <div class="row pt-5" style="justify-content: center; margin-bottom: -10px; z-index: 90; ">
            <div class="col-12 col-md-10" style="margin: 0 auto">

                <div id="battleControls" class="carousel slide" data-ride="carousel"  style="color: #859c00; z-index: 90; pointer-events: auto">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-10 col-md-6 col-lg-3" style="margin: 0 auto;">
                                <img style=" width: 100%; height: auto" src="{{url('images/battleship/log_in.png')}}">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-10 col-md-6 col-lg-3" style="margin: 0 auto">
                                <img style=" width: 100%; height: auto" src="{{url('images/battleship/home.png')}}">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-10 col-md-6 col-lg-3" style="margin: 0 auto">
                                <img style=" width: 100%; height: auto" src="{{url('images/battleship/profile.png')}}">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-10 col-md-6 col-lg-3" style="margin: 0 auto">
                                <img style=" width: 100%; height: auto" src="{{url('images/battleship/self_profile.png')}}">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-10 col-md-6 col-lg-3" style="margin: 0 auto">
                                <img style=" width: 100%; height: auto" src="{{url('images/battleship/setup.png')}}">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-10 col-md-6 col-lg-3" style="margin: 0 auto">
                                <img style=" width: 100%; height: auto" src="{{url('images/battleship/enemy_ships.png')}}">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-10 col-md-6 col-lg-3" style="margin: 0 auto">
                                <img style=" width: 100%; height: auto" src="{{url('images/battleship/your_ships.png')}}">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#battleControls" role="button" data-slide="prev"  style="color: #061c6f; z-index: 90; pointer-events: auto">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#battleControls" role="button" data-slide="next"  style="color: #061c6f; z-index: 90; pointer-events: auto">
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
            var title = document.getElementById('battleship-title');
            if (title) {
                $(title).removeClass("hide-project");
                $(title).addClass("bounceInLeft");
            }
            var img = document.getElementById('battleship-img');
            if (img) {
                $(img).removeClass("hide-project");
                $(img).addClass("bounceInDown");
            }

        });
    </script>
