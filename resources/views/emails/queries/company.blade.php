@component('emails.message')
# Tienes una nueva nueva consulta.

Desde tu página web han generado una consulta con los siguientes datos:

* **Nombres:** {{ $client['name'] }}

* **Correo electronico:** {{ $client['email'] }}
* **Telefono:** {{ $client['phone'] }}
* **Descripcion de la consulta:** {{ $client['description'] }}
@endcomponent
