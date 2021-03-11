<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
        <div class="{{$product['color_border_modal']}} w-100 h-75 modal-product">
            <div class="modal-header m-title">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- <h3 class="texto-principal text-center color-black">Recuperando nuestra identidad</h3> --}}
            <div class="modal-body d-flex justify-content-center align-items-center">
                <div class="py-0">
                    <h4 class="text texto-principal ">Ideal para un {{ $product['suggest'] }}</h4>
                    {{-- <p class="text mt-1">{{ $product['description-short'] }}</p> --}}
                    {{-- <h5 class="text texto-principal mt-3">El mejor cóctel</h5> <br> --}}
                    <?php $count = 1; ?>
                    @foreach($product['preparation'] as $preparation)
                    <ul>
                        <li>{{ $count++ }}. {{ $preparation }}</li>
                    </ul>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid adorno-modal" src="{{ asset('/assets/images/backgrounds/vaso.png') }}" alt="{{ $product['name'] }}">
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <a href="{{ route('contact') }}" class="btn btn-sm button-style mb-3 text-uppercase">Contáctanos</a>
                    </div>
                </div>
            </div>
            {{-- <div class="icon-modal"></div> --}}
        </div>
    </div>
</div>
