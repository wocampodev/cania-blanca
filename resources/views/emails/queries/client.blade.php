@component('emails.message')
# Hola **{{ $client['name'] }}**, gracias por contactarnos.
Te daremos una respuesta a tu consulta lo más pronto posible.

Puedes seguir viendo la variedad de productos que tenemos disponibles [aquí](https://www.caniablanca.com).

![Mosto verde]({{env('APP_URL', 'http://localhost:8000')}}/assets/images/products/azul.jpg "Mosto verde")
![Mosto verde]({{env('APP_URL', 'http://localhost:8000')}}/assets/images/products/azul.jpg "Mosto verde")
![Mosto verde]({{env('APP_URL', 'http://localhost:8000')}}/assets/images/products/azul.jpg "Mosto verde")

## Tambien puedes contactarnos a través de: 
* **Telefono:** {{ $company['phone'] }}
* **Correo:** {{ $company['email'] }}
@endcomponent
