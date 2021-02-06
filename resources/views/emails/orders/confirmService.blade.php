@component('emails.message')
# ¡Petición de servicio enviado con exito!

Su pedido: 

* {{ $product['name'] }}

![{{$product['name']}}]({{env('APP_URL', 'http://localhost:8000')}}/assets/images/products/{{$product['image']}} "{{$product['name']}}")

fue solicitado y enviado con éxito, pronto le daremos una respuesta. Gracias.

### También puedes contactarnos a través de: 
* Correo: {{ $company['email'] }}
* Telefono: {{ $company['phone'] }}
@endcomponent
