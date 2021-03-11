<div class="section pt-5 mt-3 pb-0">
    <div class="container-fluid altura-seccion-producto mw-100 mt-4">
        <div class="row h-100">
            <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center 
            {{$product['color_dark']}} " style="background-color: #FAFAFA; ">
                <div class="pt-5 pb-md-3 pb-xs-5">
                    <h6 class="texto-principal text-lg text-center text"><b>CAÑABLANCA</b></h6>
                    <h2 class="text-center text-lg mt-3"><b>{{ $product['name'] }}</b></h2>
                    <p class="mt-3 text-center px-5 h4">{{ $product['description-short'] }}</p>
                    {{-- <div class="d-flex justify-content-center mt-5"> --}}
                        {{-- <img class="img-fluid" src="{{ asset('/assets/images/backgrounds/cup.png') }}" alt="{{ $product['name'] }}"> --}}
                        {{-- <span class="h5 align-self-center d-inline-block ">Ideal para un {{ $product['suggest'] }}</span> --}}

                        {{-- <button type="button" class="btn " data-toggle="modal" data-target="#modal">
                            <img class="img-fluid align-self-center ml-3"  src="{{ asset('/assets/images/backgrounds/arrow.png') }}" alt="arrow" loading="lazy">
                        </button> --}}
                    {{-- </div> --}}
                    <div class="col-md-12 justify-content-center px-5 mt-5">
                        
                        <span class="h5 align-self-center d-inline-block ">Ideal para un {{ $product['suggest'] }}</span>
                        <img class="img-fluid" style="width: 20px" src="{{ asset('/assets/images/backgrounds/cup.png') }}" alt="{{ $product['name'] }}">

                        <?php $count = 1; ?>
                        @foreach($product['preparation'] as $preparation)
                        <ul>
                            <li class="text-justify"><span class="color-dark bold mr-2">{{ $count++ }}.</span> {{ $preparation }}</li>
                        </ul>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        
                        <a href="{{ route('products.all') }}" class="btn btn-sm button-style mb-3 text-uppercase">Ver todos</a>
                        {{-- <a href="{{ route('contact') }}" class="btn btn-sm button-style mb-3 text-uppercase">Prepara tu trago favorito</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 mt-lg-0  {{$product['color_light']}} d-flex justify-content-center align-items-center imagen-producto">
                <img src="{{ asset('assets/images/botella-sin-fondo.png') }}" alt="{{ $product['name'] }}" loading="lazy" class="img-fluid rounded producto-imagen">
                <div class="bg-adornos-1"></div>
                <div class="bg-adornos-2"></div>
            </div>
        </div>
    </div>
</div>
