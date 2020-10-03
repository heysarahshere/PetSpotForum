@extends('layout.master')
@section('title')
    Sarah Covey - Bidpro Pilots

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

            <div id="bidpro-title" class="col-8 col-md-6 pt-md-4 mt-md-4 animated hide-project"
                 style="justify-content: center; margin: 0 auto;">

                <img style="width: 100%; height: auto" src="{{url('images/bidpro_title.png')}}">
            </div>
            <div id="bidpro-img" class="col-10 col-md-5 mt-5 m-auto mr-md-auto animated hide-project">
                <img style=" width: 100%; height: auto"
                     src="{{url('images/bidpro_project_example.png')}}">
            </div>
        </div>
    </div>{{-- end header --}}

    <div class="details-top p-0 m-0" style="min-height: 15vw; margin-bottom: -10px"></div>
    <div class="container-fluid pt-4 m-0" style="background-color: white; margin-top: -10px">

        <div class="row pl-md-5 ml-md-5" style="justify-content: center; margin: 0 auto">
            <div class="col-12 col-sm-10 col-md-8 col-lg-9"
                 style="color: rgba(0,0,0,0.67); text-align: left;">
                <h1 class="lead" style="font-weight: bold; font-size: xx-large"><span
                        style="color: #214765">BidPro Pilots:</span> CRUD Demonstration Site</h1>
                {{--                            <br>--}}
                <p>
                    This Node.js app is a simple demonstration of asynchronous CRUD
                    functionalities using a SQL server hosted on Azure. Pilot data can be created, edited, and deleted from a SQL database.
                    It features several pages with other functional examples, like a calculator and an ethical hacking quiz.
                    <br>
                    <span style="font-weight: bold">This site is no longer being hosted on Azure, but you can see all of its CRUDy goodness in the demo below.</span>
                </p>
            </div>

            <div class="col-12 col-sm-8 col-md-4 col-lg-3 text-center text-md-left" style="z-index: 999; pointer-events: auto;">
                <h5 class="card-title">Tech Used</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <div class="row">
                        <div class="col-12">
                            JavaScript/Node.js
                            <br>
                            SQL Database
                            <br>
                            Docker
                            <br>
                            Azure
                            <br>
                            <br>
                            <a href="https://github.com/heysarahshere/BidProPilots" style="color: #710909;"><i class="fa fa-github"></i> View Source Code</a>
                        </div>
                    </div>
                </h6>
            </div>
        </div>

        <hr style="background-color: white; margin-left: 5%; margin-right: 5%;">
        <div class="row pb-2" style="justify-content: center">
            <h1 class="lead" style="font-weight: bold; color: #214765">BidPro Demo</h1>
        </div>
        <div class="row pt-5" style="justify-content: center; margin-bottom: -10px">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="card" style="width: 100%; margin: 0 auto; border: none">
                    <div class="card-body p-0">


                        {{-- demo --}}
                        <div class="container p-0">
                            <div class=" video-container"
                                 style="background-color: white;z-index: 99; pointer-events: auto; margin: 0 auto">
                                <iframe class="youtube-player" src="https://www.youtube.com/embed/dKMoHi2Vc2A"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                        </div>{{-- end demo --}}
                    </div>
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
            var title = document.getElementById('bidpro-title');
            if (title) {
                $(title).removeClass("hide-project");
                $(title).addClass("bounceInLeft");
            }
            var img = document.getElementById('bidpro-img');
            if (img) {
                $(img).removeClass("hide-project");
                $(img).addClass("bounceInDown");
            }

        });
    </script>
