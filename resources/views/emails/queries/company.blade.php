@component('emails.message')
# Tienes una nueva nueva consulta, para este producto.

![{{$product['name']}}]({{env('APP_URL', 'http://localhost:8000')}}/assets/images/products/{{$product['image']}} "{{$product['name']}}")

Desde tu página web han generado una consulta con los siguientes datos:

* **Nombres:** {{ $client['name'] }}

* **Correo electronico:** {{ $client['email'] }}
* **Telefono:** {{ $client['phone'] }}
* **Descripcion de la consulta:** {{ $client['description'] }}
@endcomponent
