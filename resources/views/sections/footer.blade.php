<section class="w3l-footer-16">
    <div class="w3l-footer-16-main">
        <div class="container">
            <div class="row footer-p">
                <div class="col-lg-3 pr-lg-5">
                    <a class="navbar-brand d-flex justify-content-center" href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="CAÑABLANCA" title="Caña Blanca" style="height:55px;"/>
                    </a>
                    <p class="mt-1 text-center">Al igual que el pisco en el sur, el aguardiente o destilado de caña, toma identidad
                        regional y se apodera de los gustos de los lugareños.</p>
                    <p class="mt-4 text-center">
                        <span class="fa fa-phone mr-2 ml-2" aria-hidden="true"></span>
                        <a class="call-style-w3" href="tel:51939204100">(+51) 939 204 100</a></p>
                </div>
                <div class="col-lg-3 col-sm-4 col-4 mt-lg-0 mt-4">
                    <h3 class="text-center">Navegación</h3>
                    <div class="row text-left">
                        <div class="col-12 column ">
                            <ul class="footer-gd-16">
                                <li class="d-flex text-md-center"><a  class="w-100" href="{{ route('home') }}"><i
                                            class="fa fa-angle-right"
                                            aria-hidden="true"></i>Inicio</a></li>
                                <li class="d-flex text-md-center"><a  class="w-100" href="{{ route('about') }}"><i
                                            class="fa fa-angle-right"
                                            aria-hidden="true"></i>Conócenos </a></li>
                                <li class="d-flex text-md-center"><a  class="w-100" href="{{ route('products.all') }}"><i
                                            class="fa fa-angle-right"
                                            aria-hidden="true"></i>Nuestro Licor</a></li>
                                <li class="d-flex text-md-center"><a  class="w-100" href="{{ route('contact') }}"><i
                                            class="fa fa-angle-right"
                                            aria-hidden="true"></i>Contáctanos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-4 mt-lg-0 mt-4">
                    <h3 class="text-center">Productos</h3>
                    <div class="row text-left">
                        <div class="col-12 column ">
                            <ul class="footer-gd-16">
                                <li class="d-flex text-md-center"> <a class="w-100"  href="{{ route('product.detail','macerado-damascos') }}"><i
                                            class="fa fa-angle-right text-uppercase"
                                            aria-hidden="true"></i>Macerado Damascos</a></li>
                                <li class="d-flex text-md-center"><a  class="w-100" href="{{ route('product.detail','hierba-luisa') }}"><i
                                            class="fa fa-angle-right text-uppercase"
                                            aria-hidden="true"></i>Hierba Luisa</a></li>
                                <li class="d-flex text-md-center"><a  class="w-100"  href="{{ route('product.detail','mosto-verde') }}"><i
                                            class="fa fa-angle-right text-uppercase"
                                            aria-hidden="true"></i>Mosto Verde</a></li>
                                <li class="d-flex text-md-center"><a  class="w-100" href="{{ route('product.detail','cogollito') }}"><i  class="fa fa-angle-right text-uppercase"
                                            aria-hidden="true"></i>Cogollito</a></li>
                                <li class="d-flex text-md-center"><a class="w-100" href="{{ route('product.detail','manzanilla') }}"><i
                                            class="fa fa-angle-right text-uppercase"
                                            aria-hidden="true"></i>Manzanilla</a></li>
                                <li class="d-flex text-md-center"><a class="w-100" href="{{ route('product.detail','uva-italia') }}"><i
                                            class="fa fa-angle-right text-uppercase"
                                            aria-hidden="true"></i>Uva Italia</a></li>
                                <li class="d-flex text-md-center"><a class="w-100" href="{{ route('product.detail','macerado-arandanos') }}"><i
                                            class="fa fa-angle-right text-uppercase"
                                            aria-hidden="true"></i>Macerado Arandanos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-4 column mt-lg-0 mt-4">
                    <h3 class="text-center">Encuentranos en:</h3>
                    <div class="row">
                        <div class="col-12 column">
                            <ul class="footer-gd-16 social d-flex justify-content-center">
                                <li><a href="javascript:void(0);">
                                    <span class="fa fa-facebook" aria-hidden="true"></span></a>
                                </li>
                                <li><a href="javascript:void(0);">
                                    <span class="fa fa-instagram" aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="d-flex below-section justify-content-center align-items-center py-4 mt-5 footer-codecix">
    <div class="columns text-lg-left">
        <p class="copy-text text-white"><b>&copy; 2021 CAÑABLANCA.</b> Todos los derechos reservados. Desarrollado por
            <a href="https://www.codecix.com" target="_blank" class="text-white"> <b>Codecix</b> </a>
        </p>
    </div>
</div>
