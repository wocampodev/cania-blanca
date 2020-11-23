<section class="client-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center client-animate">
                <h2 class="title">Nuestros Clientes</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="autoplay">
                    {{-- @foreach ($clients as $item)
                        <div><img src="assets/images/clients/{{ $item->image }}" alt=""></div>
                    @endforeach --}}
                    <div><img src="{{ secure_asset('assets/images/logo.png') }}" alt=""></div>
                    <div><img src="{{ secure_asset('assets/images/logo.png') }}" alt=""></div>
                    <div><img src="{{ secure_asset('assets/images/logo.png') }}" alt=""></div>
                    <div><img src="{{ secure_asset('assets/images/logo.png') }}" alt=""></div>
                    <div><img src="{{ secure_asset('assets/images/logo.png') }}" alt=""></div>
                    <div><img src="{{ secure_asset('assets/images/logo.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>