@component('emails.message')
# Hola **{{ $client['name'] }}**, gracias por contactarnos.
Te daremos una respuesta a tu consulta lo más pronto posible.

Puedes seguir viendo la variedad de productos que tenemos disponibles [aquí](https://www.caniablanca.com).

## Tambien puedes contactarnos a través de: 
* **Telefono:** {{ $company['phone'] }}
* **Correo:** {{ $company['email'] }}
@endcomponent
