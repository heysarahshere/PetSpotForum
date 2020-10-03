<header style="z-index: 9999">

    <nav class="navbar navbar-expand-sm navbar-dark p-0" style="font-weight: lighter; pointer-events: auto;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse w-100 py-3 px-2 py-sm-0" id="navbarSupportedContent" style="z-index: 1000; color: white; background-color: black;">
            <ul class="navbar-nav m-auto" id="navbar_list w-100">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('home')}}#about" data-target="#about" class="nav-link smooth-link" href="{{route('home')}}#about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-link"  id="projects_link" href="{{route('home')}}#projects">PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-link" href="{{route('home')}}#contact">CONTACT</a>
                </li>

            </ul>
        </div>

    </nav>
    <div class="scroll-container">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>

</header>
