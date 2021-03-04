<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content w-100 h-75">
            <div class="modal-header m-title">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-product">
                <h3 class="texto-principal text-right">Recuperando nuestra identidad</h3>
                <div class="heading-block mt-5">
                    <h4 class="text" style="color: #1C3E8D">Ideal para un {{ $product['suggest'] }}</h4>
                    <p>{{ $product['description-short'] }}</p>
                </div>
                <h5 class="text" style="color: #1C3E8D">El mejor cóctel</h5> <br>
                <?php $count = 1; ?>
                @foreach($product['preparation'] as $preparation )
                <ul>
                    <li>{{ $count++ }}. {{$preparation}}</li>
                </ul>
                @endforeach
                <div class="icon-modal-1"></div>
                <div class="icon-modal-2"></div>
            </div>
            <div class="modal-footer border-top-0 d-flex justify-content-center mt-5">
                <a href="{{ route('contact') }}" class="btn btn-sm button-style mb-3 text-uppercase">Contactar</a>
            </div>
        </div>
    </div>
</div>
