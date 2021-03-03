<div class="section nobg topmargin-lg nobottommargin">

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
                    <li>{{ $count++ }}. {{$preparation}}</li>
                </ul>
                @endforeach
            <div class="mt-3 text-center">
                <a href="{{ route('contact') }}" class="btn btn-sm button-style">Contáctanos<i class="fa fa-arrow-right ml-2"></i></a>
            </div>
        </div>
    </div>

</div>
