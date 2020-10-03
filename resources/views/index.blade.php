@extends('layout.master')
@section('title')
    Sarah Covey
@endsection
@include('partials.header')

<section style="overflow-x: hidden">
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
    <section id="home" class="home" style="overflow-x: hidden">
        <div>
            {{-- home header --}}
            <div class="pad">
                <div class=" col-8 col-md-6 col-lg-4 pt-5 animated hide-project" id="header-bounce"
                     style="justify-content: center; margin: 0 auto;">
                    <img style=" width: 100%; height: auto" src="{{url('images/sarah_covey.png')}}">

                </div>
                <p class=" lead sub-heading p-0 animated hide-project" id="subheader-bounce">Full-Stack Software
                    Developer | Graphic
                    Designer</p>
            </div>
            {{-- self image --}}
            <div class="about container-fluid p-0" style="z-index: 1000">
                <div class="row heading-content" style="justify-content: center; margin-bottom: -10px">
                    <div class="col-7 col-md-5 col-lg-3 animated hide-project" id="subheader-img"
                         style="margin: 0 auto; animation-delay: .3s">
                        <img id="hover-face" style="border-radius: 50%; border: 9px solid #ffffff; width: 100%; height: auto; z-index: 2000; pointer-events: auto; cursor:pointer;"
                             src="{{url('images/self.jpg')}}" onmouseenter="hoverFace('hover-face')" onmouseleave="noHoverFace('hover-face')">

                    </div>
                    <div id="about" class="col-12 pb-5 pt-3 animated hide-project" style="animation-delay: .3s">
                        {{-- icon links --}}
                        <div class="row p-2 icons" style="z-index: 1000; pointer-events: auto;">
                            <a style="color: #003b52" class="nav-link"
                               href="https://www.linkedin.com/in/heysarahshere/"><i class="fa fa-linkedin"></i></a>
                            <a style="color: #520000" class="nav-link" href="https://youtube.com/user/heysarahshereful"><i class="fa fa-youtube"></i></a>
                            <a style="color: #300052" class="nav-link" href="https://github.com/heysarahshere"><i
                                    class="fa fa-github"></i></a>
                            <a style="color: #049c9c" class="nav-link" href="https://www.facebook.com/sarahjessicaaa"><i
                                    class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="about-mid container-fluid p-0" style="pointer-events: auto; z-index: 1000">
                {{--  about text  --}}
                <div class="row pt-3" style="justify-content: center; margin: 0 auto">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6"
                         style="color: rgba(0,0,0,0.67); text-align: center;">
                        <h2 class="lead" style="font-weight: bold">Hey, I'm <span style="color: #402b4b">Sarah</span>! I'm a software developer & art
                            creator.</h2>
                        {{--                            <br>--}}
                        <p>
                            Growing up, I spent most of my time
                            in awe of early PlayStation and Nintendo graphics while I tried to find the best and most
                            creative ways to express myself. I loved covering my walls in
                            drawings or planning levels and puzzles and putting them together in a flimsy board game
                            that I could persuade my brothers to play.
                            After I stumbled onto a hex-editor for one of my favorite video games in high school, I
                            realized software development was the best of both worlds: art and logic.
                            I love creating beautiful websites, sleek applications, and interesting game worlds. I spend
                            a lot of my time writing in PHP or C#, or illustrating the
                            coolest logos, UI designs, and info-graphics (yeah, I know - who makes info-graphics for
                            fun?). I'm a creative
                            perfectionist with an affinity for flawless layouts and memorable designs, and a passion for
                            building the best software.
                            I love challenging projects, big ideas, and invading worlds in Dark Souls.
                        </p>
                        <div class="row pb-2" style="justify-content: center">
                            <a href="#contact" id="contact-me-btn">
                            <button style="z-index: 1000" class="btn btn-sm btn-outline-dark ombre-btn m-2 my-sm-0">
                                Contact Me
                            </button>
                            </a>
                            <button style="z-index: 1000" class="btn btn-sm btn-outline-dark ombre-btn2 m-2 my-sm-0"
                                    type="submit">
                                Download
                                Resume
                            </button>
                        </div>
                    </div>
                </div>
                {{-- Service Blobs --}}
                <div class="offered-services">
                    <div class="row p-3" style="justify-content: center; margin: 0 auto">
                        <div class="col-10" style="color: rgba(0,0,0,0.67); text-align: center;">
                            <hr class="ml-4">
                            <p class="lead" style="font-weight: bold;">What I do</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-10 col-md-8 col-lg-12" style="justify-content: center;margin: 0 auto;">
                        <div class="row"
                             style=" justify-content: center; color: white; box-sizing: border-box; width: 90%; margin: 0 auto">
                            {{-- Service Icons --}}
                            <div class="col-6 col-lg-3 p-2">
                                <img id="hover-1"
                                     style="border-radius: 50%;width: 100%; height: auto; z-index: 2000; pointer-events: auto; cursor:pointer;"
                                     src="{{url('images/icons/dev.png')}}" onmouseenter="hoverFace('hover-1')" onmouseleave="noHoverFace('hover-1')">
                            </div>
                            <div class="col-6 col-lg-3 p-2">
                                <img id="hover-2"
                                     style="border-radius: 50%;width: 100%; height: auto; z-index: 2000; pointer-events: auto; cursor:pointer;"
                                     src="{{url('images/icons/mobile.png')}}" onmouseenter="hoverFace('hover-2')" onmouseleave="noHoverFace('hover-2')">
                            </div>
                            <div class="col-6 col-lg-3 p-2">
                                <img id="hover-3"
                                     style="border-radius: 50%;width: 100%; height: auto; z-index: 2000; pointer-events: auto; cursor:pointer;"
                                     src="{{url('images/icons/ui_ux.png')}}" onmouseenter="hoverFace('hover-3')" onmouseleave="noHoverFace('hover-3')">
                            </div>
                            <div class="col-6 col-lg-3 p-2">
                                    <img id="hover-4"
                                         style="border-radius: 50%;width: 100%; height: auto; z-index: 2000; pointer-events: auto; cursor:pointer;"
                                         src="{{url('images/icons/graphic.png')}}" onmouseenter="hoverFace('hover-4')" onmouseleave="noHoverFace('hover-4')">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Favorite Tools Cards --}}
                <div class="favorite-tools">
                    <div class="row p-3" style="justify-content: center; margin: 0 auto; color: black">
                        <div class="col-12" style="color: rgba(0,0,0,0.67); text-align: center;">
                            <hr class="ml-4">
                            <p class="lead" style="font-weight: bold;">Tech I love</p>
                            <div class="row pb-2" style="justify-content: center">
                                <div class="col-12 col-sm-8 col-md-4 col-lg-3 pb-2">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Languages</h5>
                                        </div>
                                        <div class="card-body text-center pl-4 pl-lg-1">
                                            <p class="bold"><i class="fa fa-check"></i> PHP</p>
                                            <p class="bold"><i class="fa fa-check"></i> C#</p>
                                            <p class="bold"><i class="fa fa-check"></i> JavaScript</p>
                                            <p class="bold"><i class="fa fa-check"></i> Swift</p>
                                            <p class="bold"><i class="fa fa-check"></i> Ruby</p>
                                            <p class="bold"><i class="fa fa-check"></i> Java</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-sm-8 col-md-4 col-lg-3 pb-2">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Frameworks</h5>
                                        </div>
                                        <div class="card-body text-center pl-4 pl-lg-1">
                                            <p class="bold"><i class="fa fa-check"></i> Laravel</p>
                                            <p class="bold"><i class="fa fa-check"></i> ASP.net</p>
                                            <p class="bold"><i class="fa fa-check"></i> React.js</p>
                                            <p class="bold"><i class="fa fa-check"></i> Ruby on Rails</p>
                                            <p class="bold"><i class="fa fa-check"></i> Vue.js</p>
                                            <p class="bold"><i class="fa fa-check"></i> jQuery</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-8 col-md-4 col-lg-3 pb-2">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Tools</h5>
                                        </div>
                                        <div class="card-body text-center pl-4 pl-lg-1">
                                            <p class="bold"><i class="fa fa-check"></i> Adobe Photoshop, XD, Illustrator
                                            </p>
                                            <p class="bold"><i class="fa fa-check"></i> Sketch, Manga Studio, Procreate
                                            </p>
                                            <p class="bold"><i class="fa fa-check"></i> VS, JetBrains, Atom</p>
                                            <p class="bold"><i class="fa fa-check"></i> Azure DevOps, Github, BitBucket
                                            </p>
                                            <p class="bold"><i class="fa fa-check"></i> Blender & Substance</p>
                                            <p class="bold"><i class="fa fa-check"></i> Intuos Tablets</p>
                                            <p class="bold"><i class="fa fa-check"></i> Pen & Paper</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- blob div top--}}
            <div id="projects" class="about-mid-top container-fluid p-0" style="height: 13vw;margin-top: -1px;">
            </div> {{-- end blob div top--}}

            <div class="spacer">
                {{-- projects title & button --}}
                <div class="row animated" id="software-row">
                    <div class="col-2">
                    </div>
                    <div class="col-8 col-md-6 col-lg-4 p-0 animated" id="project-title"
                         style="justify-content: center; margin: 0 auto; position: relative">
                        <img style=" width: 100%; height: auto" src="{{url('images/projects-w.png')}}">

                    </div>
                    <div class="col-2">
                        <button class="btn btn-sm float-right ml-auto p-0 animated infinite pulse"
                                onclick="swapProjects('software-row','graphics-row')">
                            <img style=" width: 80%; height: auto" src="{{url('images/chevron-right.png')}}"></button>
                    </div>
                </div>
                {{-- graphics title $ button --}}
                <div class="row animated hide-project" id="graphics-row">
                    <div class="col-2">
                    </div>
                    <div class="col-8 col-md-6 col-lg-4 p-0 animated" id="project-title2"
                         style="justify-content: center; margin: 0 auto; position: relative">
                        <img style=" width: 100%; height: auto" src="{{url('images/gallery.png')}}">

                    </div>
                    <div class="col-2">
                        <button class="btn btn-sm float-right ml-auto p-0 animated infinite pulse"
                                onclick="swapProjects('graphics-row','software-row')">
                            <img style=" width: 80%; height: auto" src="{{url('images/chevron-right.png')}}"></button>
                    </div>
                </div>
                <img style=" width: 100%; height: auto;margin-bottom: -1px;" src="{{url('images/mid_blob_bottom.png')}}"
                     id="project-title-viewer">

                <div class="about-mid container-fluid pb-5 px-5 svg-container">

                    <div id="software-row-project" class="animated">
                        @include('partials.projects')
                    </div>
                    <div id="graphics-row-project" class="animated hide-project">
                        @include('partials.gallery')
                    </div>
                </div>
                <div style="background-color: white; position: relative;margin-bottom: -1px;margin-top: -1px; z-index: 2000"
                     id="project-title-lower">
                    {{-- projects title & button --}}
                    <div class="row animated" id="software-row-button" style="position: absolute; bottom: -100px; right: 2%">
                        <button class="text-right btn btn-sm float-right ml-auto p-0 animated infinite pulse pr-5"
                                onclick="swapProjects('software-row','graphics-row')">
                            <h2>View Graphics <i class="fa fa-chevron-right"></i></h2></button>
                    </div>
                    {{-- graphics title $ button --}}
                    <div class="row animated hide-project" id="graphics-row-button"
                         style="position: absolute; top: 123%; right: 2%">
                        <button class="text-right btn btn-sm float-right ml-auto p-0 animated infinite pulse pr-5"
                                onclick="swapProjects('graphics-row','software-row')">
                            {{--                                <img class="float-right ml-auto" style=" width: 100%; height: auto" src="{{url('images/software.png')}}">--}}
                            <h2>View Software <i class="fa fa-chevron-right"></i></h2>
                        </button>
                    </div>
                </div>
            </div>


            {{-- spacer --}}
            <div class="container-fluid p-0">
                <div class="footer-spacer" style="min-height: 10vw;background-color: white">
                </div>
            </div>{{-- end spacer --}}
            {{-- blob footer --}}
            <div class="container-fluid p-0" style="position: relative">


                <div class="footer-spacer"
                     style="overflow-y: hidden; overflow-x: hidden;margin-top: -10px;">
                    @include('partials.blob')
                </div>

                <div class="contact-pad" id="contact"></div>
                <div class="container-fluid contact pt-5" style="color: white; position: relative">
{{-- blob button --}}
                    <svg viewBox="45 60 400 400" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#fff"
                              d="M 90 210 C 90 180 90 150 90 150 C 150 150 180 150 180 150 C 180 150 300 150 300 150 C 300 150 330 150 390 150 C 390 150 390 180 390 210 C 390 240 390 270 390 270 C 330 270 300 270 300 270 C 300 270 180 270 180 270 C 180 270 150 270 90 270 C 90 270 90 240 90 210"
                              mask="url(#knockout-text)">
                        </path>
                        <mask id="knockout-text">
                            <rect width="100%" height="100%" fill="#fff" x="0" y="0"/>
                            <text x="118" y="227" fill="#000">TALK TO ME</text>
                        </mask>
                    </svg>
                    <div class="col-12 col-md-10 col-lg-8" style="margin: 0 auto; text-align: center">

                        <div class="row">

                            <div class="col text-center">


                                <p> <span style="font-weight: lighter; font-size: larger">If you work for an awesome company you think I'd be a good fit for, you're creating your dream app,
                                    or you're an introverted nerd like me who'd love to collaborate on something cool, you can connect with me below.</span>
                                    <br>
                                    <span style="font-weight: bold"> If you stumbled onto this site by accident and have no idea why you're here, thanks for making it this far!</span>
                                   </p>
                            </div>
                        </div>
                        @include('partials.message')
                        <form id="ajaxform" class="contact-form">
                            <p class="success" id="success-message" style="font-weight: bold; color:#00d496;"></p>
                            <div class="ajax-loader pb-2" style="display: none">
                                <img style="margin: 0 auto;" src="{{url('images/ajax-loader.gif')}}">
{{--                                <img style="margin: 0 auto;height: 5rem; width: auto" src="https://media.giphy.com/media/LoNHyvkfL8KCg7VQZh/giphy.gif">--}}
                            </div>
                            <div class="form-group clickable">
                                <label for="email">Email</label>
                                <input type="email" class="form-control text-center" name='email' id="email" placeholder="name@example.com" required>
                            </div>
                            <div class="form-group clickable">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control text-center" name='subject' id="subject" minlength="2" placeholder="Let's Build Something" required>
                            </div>
                            <div class="form-group clickable">
                                <label for="msg">Message</label>
                                <textarea class="form-control" name='msg' id="msg" rows="3" minlength="3" required></textarea>
                            </div>
                            <button type="button" class="btn btn-lg ombre-btn3 clickable pointer save-data" id="save-data">Send Message</button>
{{--                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">--}}
                        </form>
                    </div>
                </div>



            </div>{{-- end blob footer --}}
            <div class="bottom-pad"> </div>

        </div>
    </section>
</section>
<div class="footer" style="position: relative;">
    @include('partials.footer')
</div>

<script>
    window.onload = function(){
        var html = document.getElementsByTagName('html');
        $(html).addClass("body-height");}
</script>

