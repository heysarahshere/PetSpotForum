@extends('layout.master')
@section('title')
    Sarah Covey - PetSpot
@endsection

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
        <div id="petspot-title" class="col-8 col-md-6 pt-5 pt-sm-4 mt-md-4 animated bounceInLeft delay-ani" style="justify-content: center; margin: 0 auto;">
            <img id="petpsot-img" style="width: 100%; height: auto" src="{{url('images/petspot_title.png')}}">
        </div>
        <div class="col-10 col-md-5 mt-5 m-auto mr-md-auto animated bounceInDown delay-ani">
            <img style=" width: 100%; height: auto" src="{{url('images/petspot_project_example.png')}}">
        </div>
    </div>
</div>{{-- end header --}}

<div class="details-top p-0 m-0" style="min-height: 13vw;"></div>
<div class="container-fluid pt-4 m-0" style="background-color: white; margin-top: -10px">

    <div class="row pl-md-5 ml-md-5" style="justify-content: center; margin: 0 auto">
        <div class="col-12 col-sm-10 col-md-8 col-lg-9"
             style="color: rgba(0,0,0,0.67); text-align: left;">
            <h1 class="lead" style="font-weight: bold; font-size: xx-large"><span
                    style="color: #de5f0a">PetSpot.org:</span> Community-Driven Pet Rescue Forum</h1>
            {{--                            <br>--}}
            <p>
                This site allows users to post lost and found pets, find adoptable pets in shelters, share seeking and
                general posts, privately message each other, and see each of the
                National Lost Pets Database's lost and found pets as posts. Each post's location can be seen on a map, as well as all lost and found pets.
                Users can set up PetSpotter found pet alerts so they can be emailed, texted, and/or notified via the site any time an animal of the
                specified type is found in a chosen state. The web crawler
                searches through all of the lost and found pets in the country and sends out alerts if any new animals are added to the database. Alerts are also
                triggered by users when they post found pets.
                There is a donation system, and adoptable pets are taken from the
                PetFinder API.
                <br>
                <span style="font-weight: bold">Although I only store the last four digits of the card number entered, I recommend not entering any valid payment information on the donation page.
                        This feature is simply for show and no donations are being handled currently.</span>
            </p>
        </div>

        <div class="col-12 col-sm-8 col-md-4 col-lg-3 text-center text-md-left" style="z-index: 999; pointer-events: auto;">
                    <h5 class="card-title">Tech Used</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <div class="row">
                            <div class="col-12">
                                PHP/Laravel
                                <br>
                                JavaScript, jQuery
                                <br>
                                MySQL Database
                                <br>
                                Vue.JS
                                <br>
                                PetFinder API
                                <br>
                                Google Maps API
                                <br>
                                Goutte/DomCrawler
                                <br>
                                Nexmo
                                <br>
                                <br>
                                <a href="https://github.com/heysarahshere/PetSpotForum" style="color: #a13400;"><i class="fa fa-github"></i> View Source Code</a>
                            </div>
                        </div>
                    </h6>
        </div>
    </div>

    <div class="row pb-2" style="justify-content: center">
        <a style="z-index: 1000; cursor: pointer" href="https://www.petspot.org" target="blank">
            <button class="btn btn-sm btn-outline-dark orange-btn m-2 my-sm-0">
                Try it out!
            </button>
        </a>
    </div>
    <hr style="background-color: white; margin-left: 5%; margin-right: 5%;">
    <div class="row pt-5" style="justify-content: center; margin-bottom: -10px">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card" style="width: 100%; margin: 0 auto; border: none">
                <div class="card-body p-0">


                    {{-- demo --}}
                    <div class="container p-0">
                        <div class=" video-container"
                             style="background-color: white;z-index: 99; pointer-events: auto; margin: 0 auto">
                            <iframe class="youtube-player" src="https://www.youtube.com/embed/sySDxq3GvEE"
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
{{-- blob footer --}}
{{--<div class="footer" style="position: absolute; bottom: 0; left: 0; right: 0;">--}}
{{--    @include('partials.footer')--}}
{{--</div>--}}
