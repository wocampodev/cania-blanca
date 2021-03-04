<div class="section py-5 mt-3 mb-5">
    <div class="container-fluid altura-seccion-producto mw-100">
        <div class="row h-100">
            <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center" style="background-color: #FAFAFA">
                <div class="py-5">
                    <h2 class="texto-principal text-lg text-center text">CañaBlanca</h2>
                    <h1 class="text-center text-lg mt-5">{{ $product['name'] }}</h1>
                    <p class="mt-5 text-center">{{ $product['description-short'] }}</p>
                    <div class="d-flex justify-content-center mt-5">
                        <img class="img-fluid" src="{{ asset('/assets/images/backgrounds/cup.png') }}" alt="{{ $product['name'] }}">
                        <span class="align-self-center d-inline-block">{{ $product['suggest'] }}</span>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal">
                            <i class="fa fa-arrow-right align-self-center ml-3"></i>
                        </button>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <a href="{{ route('contact') }}" class="btn btn-sm button-style mb-3 text-uppercase">Prepara tu trago favorito</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 bg-adornos d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/images/botella-sin-fondo.png') }}" alt="{{ $product['name'] }}" class="img-fluid rounded producto-imagen">
                <div class="bg-adornos-1"></div>
                <div class="bg-adornos-2"></div>
            </div>
        </div>
    </div>
</div>
