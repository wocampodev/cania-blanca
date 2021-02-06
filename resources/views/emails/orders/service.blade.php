@component('emails.message')
# Pedido de Productos

**{{ $client['name'] }}**, acaba de solicitar **{{ $product['name'] }}**.

* **Mensaje:** {{ $client['msg'] }}

![{{$product['name']}}]({{env('APP_URL', 'http://localhost:8000')}}/assets/images/products/{{$product['image']}} "{{$product['name']}}")

## Puedes contactarte con el(lla) a través de:

* **Correo:** {{ $client['email'] }}
* **Telefono:** {{ $client['phone'] }}
@endcomponent
