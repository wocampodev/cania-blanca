<div class="container py-3 story-group">
    {{-- <div class="row text-center">
        <div class="col-md-12 pt-5">
            <h3 class="title-color">Nuestro Licore</h3>
        </div>
    </div> --}}
    <div class="py-3">
        {{-- <img class="img-fluid story-img" src="{{ asset('./assets/images/logo.png') }}" alt="Story Image">

        <img class="img-fluid story-img" src="{{ asset('./assets/images/logo.png') }}" alt="Story Image">

        <img class="img-fluid story-img" src="{{ asset('./assets/images/logo.png') }}" alt="Story Image">

        <img class="img-fluid story-img" src="{{ asset('./assets/images/logo.png') }}" alt="Story Image"> --}}

        <div class="row d-flex justify-content-center" style="padding-left:200px;padding-right:200px; ">
            <div class="shadow m-2" style="border:1px solid red;border-radius:50px">
                <div class="content" >
                    <a href="{{ route('product.detail','macerado-damascos') }}"><h5 class="px-3 text-center p-3 m-2" style="color: red">Macerado Damascos</h5></a>
                </div>
            </div>

            <div class="shadow m-2" style="border:1px solid blue;border-radius:50px">
                <div class="content" >
                    <a href="{{ route('product.detail','hierba-luisa') }}"><h5 class="px-3 text-center p-3 m-2" style="color:blue">Hierba Luisa</h5></a>
                </div>
            </div>

            <div class="shadow m-2" style="border:1px solid green;border-radius:50px">
                <div class="content" >
                    <a href="{{ route('product.detail','mosto-verde') }}"><h5 class="px-3 text-center p-3 m-2" style="color: green">Mosto Verde</h5></a>
                </div>
            </div>

            <div class="shadow m-2" style="border:1px solid black;border-radius:50px">
                <div class="content" >
                    <a href="{{ route('product.detail','cogollito') }}"><h5 class="px-3 text-center p-3 m-2" style="color: black">Cogollito</h5></a>
                </div>
            </div>

            <div class="shadow m-2" style="border:1px solid orange;border-radius:50px">
                <div class="content" >
                    <a href="{{ route('product.detail','manzanilla') }}"><h5 class="px-3 text-center p-3 m-2" style="color: orange">Manzanilla</h5></a>
                </div>
            </div>

            <div class="shadow m-2" style="border:1px solid purple;border-radius:50px">
                <div class="content" >
                    <a href="{{ route('product.detail','uva-italia') }}"><h5 class="px-3 text-center p-3 m-2" style="color: purple">Uva Italia</h5></a>
                </div>
            </div>

            <div class="shadow m-2" style="border:1px solid rgb(53, 11, 53);border-radius:50px">
                <div class="content" >
                    <a href="{{ route('product.detail','macerado-arandanos') }}"><h5 class="px-3 text-center p-3 m-2" style="color: rgb(53, 11, 53)">Macerado Arandanos</h5></a>
                </div>
            </div>

        </div>
    </div>
</div>
