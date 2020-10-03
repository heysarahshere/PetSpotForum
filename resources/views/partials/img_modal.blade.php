
{{--<div class="modal fade" id="imgModal" tabindex="-1" role="dialog" aria-labelledby="imgModalLabel"--}}
{{--     aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div  style="position: relative; width: 100%">--}}
{{--            <button style="position: absolute; top: 2%; right: 2%; cursor: pointer" type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                <span aria-hidden="true">&times;</span>--}}
{{--            </button>--}}
{{--            <img id="imageModalImg" src="" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

        <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="img1_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="img2_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="img3_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="img4_wide.jpg" style="width:100%">
        </div>

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Caption text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail image controls -->
        <div class="column">
            <img class="demo" src="img1.jpg" onclick="currentSlide(1)" alt="Nature">
        </div>

        <div class="column">
            <img class="demo" src="img2.jpg" onclick="currentSlide(2)" alt="Snow">
        </div>

        <div class="column">
            <img class="demo" src="img3.jpg" onclick="currentSlide(3)" alt="Mountains">
        </div>

        <div class="column">
            <img class="demo" src="img4.jpg" onclick="currentSlide(4)" alt="Lights">
        </div>
    </div>
</div>
