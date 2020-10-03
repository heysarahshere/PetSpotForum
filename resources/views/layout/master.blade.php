<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta property="og:image" content="{{url('images/gallery/autodesign_small.png')}}">
    <meta property="og:title" content="Sarah Covey's Portfolio">
    <meta property="og:url" content="https://www.heysarahshere.dev/">

{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <link rel="icon" href="{{ URL::asset('/favicon.ico') }}" type="image/x-icon"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('/favicon-16x16.png') }}">

    <title>@yield('title')</title>

    {{--    bootstrap css  --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Styles -->
    <link href="/css/loader.css" rel="stylesheet" type="text/css" data-turbolinks-track="true">
    <div id="load">
        <div class="loader">Loading...</div>
    </div>
    <link href="/css/app.css" rel="stylesheet" type="text/css" data-turbolinks-track="true">
    <link href="/css/responsive.css" rel="stylesheet" type="text/css" data-turbolinks-track="true">
    <link href="/css/blobs.css" rel="stylesheet" type="text/css" data-turbolinks-track="true">
    <link href="/css/footer.css" rel="stylesheet" type="text/css" data-turbolinks-track="true">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">


    {{-- animate.css --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <!-- JS -->
    <script src="/js/app.js" data-turbolinks-track="true"></script>

</head>

<body id="particles-js" style="overflow-x: hidden; position: relative" >
{{-- Page Content --}}
<main role="main">
    @yield('content')
</main>

{{--End Page Content--}}

{{-- jQuery --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
{{-- Popper JS --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
{{-- Bootstrap --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
{{-- Particles CDN--}}
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

{{-- Particles JS --}}
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 355,
                "density": {
                    "enable": true,
                    "value_area": 789.1476416322727
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.48927153781200905,
                "random": false,
                "anim": {
                    "enable": true,
                    "speed": 0.2,
                    "opacity_min": 0,
                    "sync": false
                }
            },
            "size": {
                "value": 2,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 2,
                    "size_min": 0,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 0.8,
                "direction": "top",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "bubble"
                },
                "onclick": {
                    "enable": true,
                    "mode": "repulse"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 83.91608391608392,
                    "size": 5,
                    "duration": 2,
                    "opacity": 1,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>

{{-- Custom JS --}}
<script defer type="text/javascript">

    function hoverFace(id) {
        var face = document.getElementById(id);
        if(face){
            $(face).addClass("blob-border-face");
        }
    }

    function noHoverFace(id) {
        var face = document.getElementById(id);
        if(face){
            $(face).removeClass("blob-border-face");
        }
    }

    function hoverAnimate(id) {
        var el = document.getElementById(id);
        $(el).addClass("bounce");
        if(el){
            el.addEventListener('animationend', () => {
                $(el).removeClass("bounce");
            });
        }

    }

    function swapProjects(old_id, new_id) {
        var count = 0;
        // get sections
        var old_section = document.getElementById(old_id);
        var old_project = document.getElementById(old_id + "-project");
        var old_button = document.getElementById(old_id + "-button");
        var old_button1 = document.getElementById(old_id + "-button1");
        var new_section = document.getElementById(new_id);
        var new_project = document.getElementById(new_id + "-project");
        var new_button = document.getElementById(new_id + "-button");
        var new_button1 = document.getElementById(new_id + "-button1");

        // play animation on old row
        $(old_section).addClass("bounceOutLeft");
        $(old_project).addClass("bounceOutLeft");
        $(old_button).addClass("bounceOutLeft");
        $(old_button1).addClass("bounceOutLeft");
        if(old_section){
            old_section.addEventListener('animationend', () => {
                // avoid infinite loop
                if (count < 1) {
                    // reset & hide old items
                    $(old_section).removeClass("bounceOutLeft");
                    $(old_section).addClass("hide-project");
                    $(old_project).removeClass("bounceOutLeft");
                    $(old_project).addClass("hide-project");
                    $(old_button).removeClass("bounceOutLeft");
                    $(old_button).addClass("hide-project");
                    $(old_button1).removeClass("bounceOutLeft");
                    $(old_button1).addClass("hide-project");
                    // show new items
                    $(new_section).removeClass("hide-project");
                    $(new_section).addClass("bounceInRight");
                    $(new_project).removeClass("hide-project");
                    $(new_project).addClass("bounceInRight");
                    $(new_button).removeClass("hide-project");
                    $(new_button).addClass("bounceInRight");
                    $(new_button1).removeClass("hide-project");
                    $(new_button1).addClass("bounceInRight");
                    galleryAnimation();
                    softwareAnimation();
                    new_section.addEventListener('animationend', () => {
                        $(new_section).removeClass("bounceInRight");
                        $(new_project).removeClass("bounceInRight");
                        $(new_button).removeClass("bounceInRight");
                        $(new_button1).removeClass("bounceInRight");

                    });
                    count++;
                }
            });
        }
    }

    function galleryAnimation() {
        //    gallery
        var img1 = document.getElementById('gal_img1');
        $(img1).removeClass("hide-project");
        $(img1).addClass("bounceInUp");
        // $(newEl).addClass("delay-ani");

        var img2 = document.getElementById('gal_img2');
        $(img2).removeClass("hide-project");
        $(img2).addClass("bounceInUp");

        var img3 = document.getElementById('gal_img3');
        $(img3).removeClass("hide-project");
        $(img3).addClass("bounceInUp");

        var img4 = document.getElementById('gal_img4');
        $(img4).removeClass("hide-project");
        $(img4).addClass("bounceInUp");

        var img5 = document.getElementById('gal_img5');
        $(img5).removeClass("hide-project");
        $(img5).addClass("bounceInUp");

        var img6 = document.getElementById('gal_img6');
        $(img6).removeClass("hide-project");
        $(img6).addClass("bounceInUp");

        var img7 = document.getElementById('gal_img7');
        $(img7).removeClass("hide-project");
        $(img7).addClass("bounceInUp");

        var img8 = document.getElementById('gal_img8');
        $(img8).removeClass("hide-project");
        $(img8).addClass("bounceInUp");

        var img9 = document.getElementById('gal_img9');
        $(img9).removeClass("hide-project");
        $(img9).addClass("bounceInUp");

        var img10 = document.getElementById('gal_img10');
        $(img10).removeClass("hide-project");
        $(img10).addClass("bounceInUp");

        var img11 = document.getElementById('gal_img11');
        $(img11).removeClass("hide-project");
        $(img11).addClass("bounceInUp");


        var img_sm1 = document.getElementById('gal_sm_img1');
        $(img_sm1).removeClass("hide-project");
        $(img_sm1).addClass("bounceInUp");

        var img_sm2 = document.getElementById('gal_sm_img2');
        $(img_sm2).removeClass("hide-project");
        $(img_sm2).addClass("bounceInUp");

        var img_sm3 = document.getElementById('gal_sm_img3');
        $(img_sm3).removeClass("hide-project");
        $(img_sm3).addClass("bounceInUp");

        var img_sm4 = document.getElementById('gal_sm_img4');
        $(img_sm4).removeClass("hide-project");
        $(img_sm4).addClass("bounceInUp");

        var img_sm5 = document.getElementById('gal_sm_img5');
        $(img_sm5).removeClass("hide-project");
        $(img_sm5).addClass("bounceInUp");

        var img_sm6 = document.getElementById('gal_sm_img6');
        $(img_sm6).removeClass("hide-project");
        $(img_sm6).addClass("bounceInUp");

        var img_sm7 = document.getElementById('gal_sm_img7');
        $(img_sm7).removeClass("hide-project");
        $(img_sm7).addClass("bounceInUp");

        var img_sm8 = document.getElementById('gal_sm_img8');
        $(img_sm8).removeClass("hide-project");
        $(img_sm8).addClass("bounceInUp");

        var img_sm9 = document.getElementById('gal_sm_img9');
        $(img_sm9).removeClass("hide-project");
        $(img_sm9).addClass("bounceInUp");

        var img_sm10 = document.getElementById('gal_sm_img10');
        $(img_sm10).removeClass("hide-project");
        $(img_sm10).addClass("bounceInUp");

        var img_sm11 = document.getElementById('gal_sm_img11');
        $(img_sm11).removeClass("hide-project");
        $(img_sm11).addClass("bounceInUp");
    }

    function galleryLoader() {
            //    gallery
            var img1 = document.getElementById('gal_img1');
            img1.src = "{{url('images/gallery/autodesign_small.jpg')}}";
            img1.setAttribute('data-remote', "{{url('images/gallery/autodesign.png')}}");

            var img2 = document.getElementById('gal_img2');
            img2.src = "{{url('images/gallery/bluefirstinfo_small.jpg')}}";
        img2.setAttribute('data-remote', "{{url('images/gallery/bluefirstinfo.png')}}");

            var img3 = document.getElementById('gal_img3');
            img3.src = "{{url('images/gallery/dinotattoo_small.jpg')}}";
        img3.setAttribute('data-remote', "{{url('images/gallery/dinotattoo.png')}}");

            var img4 = document.getElementById('gal_img4');
            img4.src = "{{url('images/gallery/OurCard_small.png')}}";
        img4.setAttribute('data-remote', "{{url('images/gallery/OurCard.png')}}");

            var img5 = document.getElementById('gal_img5');
            img5.src = "{{url('images/gallery/mural.png')}}";
        img5.setAttribute('data-remote', "{{url('images/gallery/mural.png')}}");

            var img6 = document.getElementById('gal_img6');
            img6.src = "{{url('images/gallery/art1.jpg')}}";
        img6.setAttribute('data-remote', "{{url('images/gallery/art1.jpg')}}");

            var img7 = document.getElementById('gal_img7');
            img7.src = "{{url('images/gallery/pet-alert.png')}}";
        img7.setAttribute('data-remote', "{{url('images/gallery/pet-alert.png')}}");

            var img8 = document.getElementById('gal_img8');
            img8.src = "{{url('images/gallery/art2.jpg')}}";
        img8.setAttribute('data-remote', "{{url('images/gallery/art2.jpg')}}");

            var img9 = document.getElementById('gal_img9');
            img9.src = "{{url('images/gallery/moviePoster.png')}}";
        img9.setAttribute('data-remote', "{{url('images/gallery/moviePoster.png')}}");

            var img10 = document.getElementById('gal_img10');
            img10.src = "{{url('images/gallery/lisquid.jpg')}}";
        img10.setAttribute('data-remote', "{{url('images/gallery/lisquid.png')}}");

            var img11 = document.getElementById('gal_img11');
            img11.src = "{{url('images/gallery/dinotattoolines_small.jpg')}}";
        img11.setAttribute('data-remote', "{{url('images/gallery/dinotattoolines.png')}}");

            // md/sm

            var img_sm1 = document.getElementById('gal_sm_img1');
            img_sm1.src = "{{url('images/gallery/autodesign.png')}}"

            var img_sm2 = document.getElementById('gal_sm_img2');
            img_sm2.src = "{{url('images/gallery/bluefirstinfo.png')}}"

            var img_sm3 = document.getElementById('gal_sm_img3');
            img_sm3.src = "{{url('images/gallery/dinotattoo.png')}}"

            var img_sm4 = document.getElementById('gal_sm_img4');
            img_sm4.src = "{{url('images/gallery/OurCard.png')}}"

            var img_sm5 = document.getElementById('gal_sm_img5');
            img_sm5.src = "{{url('images/gallery/mural.png')}}"

            var img_sm6 = document.getElementById('gal_sm_img6');
            img_sm6.src = "{{url('images/gallery/art1.jpg')}}"

            var img_sm7 = document.getElementById('gal_sm_img7');
            img_sm7.src = "{{url('images/gallery/pet-alert.png')}}"

            var img_sm8 = document.getElementById('gal_sm_img8');
            img_sm8.src = "{{url('images/gallery/art2.jpg')}}"

            var img_sm9 = document.getElementById('gal_sm_img9');
            img_sm9.src = "{{url('images/gallery/moviePoster.png')}}"

            var img_sm10 = document.getElementById('gal_sm_img10');
            img_sm10.src = "{{url('images/gallery/lisquid.png')}}"

            var img_sm11 = document.getElementById('gal_sm_img11');
            img_sm11.src = "{{url('images/gallery/dinotattoolines.png')}}"

    }

    function softwareAnimation() {
        // loop through 8 times instead

        var el1 = document.getElementById('card1');
        $(el1).removeClass("hide-project");
        $(el1).addClass("bounceInLeft");
        // $(newEl).addClass("delay-ani");

        var el2 = document.getElementById('card2');
        $(el2).removeClass("hide-project");
        $(el2).addClass("bounceInLeft");

        var el3 = document.getElementById('card3');
        $(el3).removeClass("hide-project");
        $(el3).addClass("bounceInLeft");

        var el4 = document.getElementById('card4');
        $(el4).removeClass("hide-project");
        $(el4).addClass("bounceInLeft");

        var el5 = document.getElementById('card5');
        $(el5).removeClass("hide-project");
        $(el5).addClass("bounceInLeft");

        var el6 = document.getElementById('card6');
        $(el6).removeClass("hide-project");
        $(el6).addClass("bounceInLeft");

        var el7 = document.getElementById('card7');
        $(el7).removeClass("hide-project");
        $(el7).addClass("bounceInLeft");

        var el8 = document.getElementById('card8');
        $(el8).removeClass("hide-project");
        $(el8).addClass("bounceInLeft");
    }
</script>

{{-- load things --}}
<script type="text/javascript">
    window.addEventListener('scroll', function () {

        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.body.scrollHeight - document.body.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";

        var project = document.getElementById('project-title');
        $(project).addClass("jello");
        if(project){
            project.addEventListener('animationend', () => {
                $(project).removeClass("jello");
            });
        }


        var project2 = document.getElementById('project-title2');
        $(project2).addClass("jello");
        if(project2){
            project2.addEventListener('animationend', () => {
                $(project2).removeClass("jello");
            });
        }
    });


    $(document).ready(function () {
        $('body').scrollspy({target: ".navbar", offset: 50});
        $("#nav_bar a").on('click', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 400, function () {
                    window.location.hash = hash;
                });
            }
        });
        $("#contact-me-btn").on('click', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 400, function () {
                    window.location.hash = hash;
                });
            }
        });
     $('#loadOverlay').hide();
    $('.loadOverlay').style.display = "none";
    $('.loadOverlay').style.visibility = "hidden";

    });

    $(window).bind('beforeunload', function(e){
        $('#loadOverlay').show();
    });

    {{-- Loader JS --}}
    window.addEventListener('load', function () {
        $('#loadOverlay').hide();
        $('#load').hide();
        $('#header-bounce').removeClass("hide-project").addClass("bounceInDown");
        $('#subheader-bounce').removeClass("hide-project").addClass("bounceInDown");
        $('#subheader-img').removeClass("hide-project").addClass("bounceInDown");
        $('#about').removeClass("hide-project").addClass("bounceInLeft");

        softwareAnimation();
        galleryLoader();
    });

    // window.addEventListener('unload', function () {
    //     $('#loadOverlay').show();
    // });
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>

{{-- Ajax --}}
<script>
    $(".save-data").click(function(event){
        event.preventDefault();

        subject= $('#subject').val();
        email= $('#email').val();
        msg= $('#msg').val();

        $.ajax({
            url: "/send-message",
            type:"post",
            data:{
                "_token": "{{ csrf_token() }}",
                subject: subject,
                email: email,
                msg: msg,
            },
            beforeSend: function(xhr, type) {
                $("#success-message").text('');
                $(".ajax-loader").show();
            },
            success:function(response){
                if(response) {
                    $('.contact-form')[0].reset();
                    $("#success-message").text(response.success);
                }
            },
            complete:function(data){
                $(".ajax-loader").hide();
            },
            error: function (data, textStatus, errorThrown) {
                console.log(data);
                $("#success-message").text('Oops, something went wrong. Please try again later.');
                $(".ajax-loader").hide();
            }
        });
    });

</script>
{{-- Ekko Lightbox --}}
<script src="https://cdn.jsdelivr.net/npm/ekko-lightbox@5.3.0/dist/ekko-lightbox.min.js"></script>
</body>
</html>
