<div class="section pt-5 mt-3 pb-0">
    <div class="container-fluid altura-seccion-producto mw-100 mt-4">
        <div class="row h-100">
            <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center border-product" style="background-color: #FAFAFA">
                <div class="py-5 pb-md-3 pb-xs-5">
                    <h2 class="texto-principal text-lg text-center text"><b>CAÑABLANCA</b></h2>
                    <h1 class="text-center text-lg mt-5"><b>{{ $product['name'] }}</b></h1>
                    <p class="mt-5 text-center">{{ $product['description-short'] }}</p>
                    <div class="d-flex justify-content-center mt-5">
                        <img class="img-fluid" src="{{ asset('/assets/images/backgrounds/cup.png') }}" alt="{{ $product['name'] }}">
                        <span class="align-self-center d-inline-block">{{ $product['suggest'] }}</span>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal">
                            <img class="img-fluid align-self-center ml-3" src="{{ asset('/assets/images/backgrounds/arrow.png') }}" alt="arrow" loading="lazy">
                        </button>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <a href="{{ route('contact') }}" class="btn btn-sm button-style mb-3 text-uppercase">Prepara tu trago favorito</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 mt-lg-0 bg-adornos d-flex justify-content-center align-items-center imagen-producto">
                <img src="../{{ $product['main_img'] }}" alt="{{ $product['name'] }}" loading="lazy" class="img-fluid rounded producto-imagen">
                <div class="bg-adornos-1"></div>
                <div class="bg-adornos-2"></div>
            </div>
        </div>
    </div>
</div>
