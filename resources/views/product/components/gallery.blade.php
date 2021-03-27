<section class="featured-products product-img-list bg-products">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center client-animate">
                <h1 class="title mt-5" style="position: relative; z-index: 999;"><b class="text-uppercase">Nuestro Licor</b></h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($products as $key => $product)
            <div class="col-lg-4 col-md-6 col-sm-12" style="position: static; z-index: 1;">
                <div class="product-item shadow rounded">
                    <img class="img-fluid product-img-content" src="{{ $product['gallery_img'] }}" alt="{{ $product['name'] }}" loading="lazy">
                    <div class="content content-card">
                        {{-- <div class="type">
                            <img class="img-fluid product-img-culture" src="{{ asset('assets/images/moche.svg') }}" alt="Iconografía Moche" loading="lazy">
                        </div> --}}
                        <h5 class="px-3 text-center">{{ $product['name'] }}</h5>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('product.detail', $key) }}" class="btn btn-sm button-style mb-3 text-uppercase">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="bg-adornos-1"></div>
    <div class="bg-adornos-2"></div>
</section>
