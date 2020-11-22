<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Caña Blanca" title="Caña Blanca" style="height:55px;" />
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
                        <a class="nav-link" href="#" data-target="#contact-modal" data-toggle="modal">Contáctanos</a>
                    </li>
                </ul>
            </div>
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
        </nav>
    </div>
</header>