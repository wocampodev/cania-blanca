<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">
            {{-- <h1>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="fa fa-cutlery" aria-hidden="true"></i> Foodies
                </a>
            </h1> --}}
               
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo_test.png') }}" alt="Caña Blanca" title="Caña Blanca" style="height:55px;" />
            </a>
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Bienvenida <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Conócenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Nuestro Licor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Contáctanos</a>
                    </li>
                </ul>
            </div>
            <!-- search button -->
            {{-- <div class="search-right">
                <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                <!-- search popup -->
                <div id="search" class="pop-overlay">
                    <div class="popup">
                        <h4 class="search-pop-text-w3 text-white text-center mb-4">Search Here Your Favourite Food
                        </h4>
                        <form action="#search" method="GET" class="search-box">
                            <div class="input-search"> <span class="fa fa-search mr-2"
                                    aria-hidden="true"></span><input type="search" placeholder="Enter Keyword"
                                    name="search" required="required" autofocus="">
                            </div>
                            <button type="submit" class="btn button-style">Search</button>
                        </form>
                    </div>
                    <a class="close" href="#close">×</a>
                </div>
                <!-- //search popup -->
            </div> --}}
            <!-- //search button -->
            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>