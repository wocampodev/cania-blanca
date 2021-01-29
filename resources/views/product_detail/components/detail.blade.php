<div class="section nobg topmargin-lg nobottommargin">

    {{-- <div class="container clearfix">
        <div class="heading-block topmargin-lg center fix-bug">
            <h2>Lorem ipsum dolor sit.</h2>
            <span class="divcenter">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla saepe, magnam consectetur tenetur porro quos?.</span>
        </div>
        <div class="row bottommargin-sm">
            <div class="col-lg-4 col-md-6 bottommargin">
                <div class="feature-box fbox-right topmargin mb-5">
                    <div class="fbox-icon">
                        <img class="img-fluid" src="{{ asset('assets/images/moche.svg') }}" alt="Iconografía Moche">
                    </div>
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="feature-box fbox-right topmargin mb-5">
                    <div class="fbox-icon">
                        <img class="img-fluid" src="{{ asset('assets/images/moche.svg') }}" alt="Iconografía Moche">
                    </div>
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="feature-box fbox-right topmargin mb-5">
                    <div class="fbox-icon">
                        <img class="img-fluid" src="{{ asset('assets/images/moche.svg') }}" alt="Iconografía Moche">
                    </div>
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="col-lg-4 d-md-none d-lg-block bottommargin center">
                <img src="{{ asset('assets/images/botella-sin-fondo.png') }}" alt="Licor Cañablanca" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-6 bottommargin">
                <div class="feature-box topmargin mb-5">
                    <div class="fbox-icon">
                        <img class="img-fluid" src="{{ asset('assets/images/moche.svg') }}" alt="Iconografía Moche">
                    </div>
                    <h3>Lorem, ipsum.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="feature-box topmargin mb-5">
                    <div class="fbox-icon">
                        <img class="img-fluid" src="{{ asset('assets/images/moche.svg') }}" alt="Iconografía Moche">
                    </div>
                    <h3>Lorem, ipsum.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="feature-box topmargin mb-5">
                    <div class="fbox-icon">
                        <img class="img-fluid" src="{{ asset('assets/images/moche.svg') }}" alt="Iconografía Moche">
                    </div>
                    <h3>Lorem, ipsum.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="container mt-5 clearfix justify-content-center">
        <div class=" nobottommargin center">
            <div class="heading">
                <h2  style="color: #212F59;margin-bottom:5px;">{{ $product['name'] }}</h2>
                <p>{{ $product['description-long'] }}</p>
            </div>
            
        </div>
    </div>


   
    <div class="container mt-5 clearfix">
        <div class="col_half nobottommargin center">
            <img src="{{ asset($product['main_img']) }}" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col_half nobottommargin col_last">
            <div class="heading-block">
                <h4 class="text" style="color: #1C3E8D">Ideal para un {{ $product['suggest'] }}</h4>
                <p>{{ $product['description-short'] }}</p>
            </div>
            
                <h5 class="text" style="color: #1C3E8D">El mejor cóctel</h5> <br>
                <?php $count = 1; ?>
            @foreach($product['preparation'] as $preparation )
                <ul>
                    <li>{{ $count++ }}. {{$preparation}}</li><br>
                </ul>
                @endforeach
                </p>
                <div class="mt-3 text-center">
                    <a href="{{ route('contact') }}" class="btn btn-sm button-style">Contáctanos<i class="fa fa-arrow-right ml-2"></i></a>
                </div>
        </div>
    </div>

    {{-- <div class="container clearfix">
        <div class="row">
            <div class="col-md-12 text-center">
                <figure>
                    <img class="img-fluid" src="{{ asset('assets/images/slider/mosto_verde.jpeg') }}" alt="Imagen Mosto Verde">
                </figure>
            </div>
        </div>
    </div> --}}

</div>
