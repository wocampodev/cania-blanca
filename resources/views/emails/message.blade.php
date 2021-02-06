@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => '#'])  
            CAÑABLANCA FINO DESTILADO
        @endcomponent
    @endslot
    
    ![CAÑABLANCA FINO DESTILADO](https://mcc-refrigeracion.com/assets/img/frigoelectridelperu-seo.png)

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} [**Codecix**](https://www.codecix.com/ "El mundo digital te espera!"). @lang('Todos los derechos reservados.')
        @endcomponent
    @endslot
@endcomponent
