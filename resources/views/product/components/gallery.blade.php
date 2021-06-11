<section class="featured-products product-img-list bg-products">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center client-animate">
                <h1 class="title mt-5 product-h1"><b class="text-uppercase">Nuestro Licor</b></h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($products as $key => $product)
            <div class="col-lg-4 col-md-6 col-sm-12 product-list">
                <div class="product-item shadow rounded">
                    <img class="img-fluid product-img-content" src="{{ $product['gallery_img'] }}" alt="cañablanca-{{ $product['name'] }}">
                    <div class="content content-card">
                        {{-- <div class="type">
                            <img class="img-fluid product-img-culture" src="{{ asset('assets/images/moche.svg') }}" alt="Iconografía Moche" loading="lazy">
                        </div> --}}
                        <h2 class="px-3 text-center h5">{{ $product['name'] }}</h2>
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
