@component('mail::message')
# Saludos

¡Se ha suscrito con éxito a nuestro boletín de noticias!

Si desea darse de baja, puede hacerlo [aquí]({{ url($subscription->unsubscribeUrl) }}) o copiando la siguiente URL en su navegador:

{{ url($subscription->unsubscribeUrl) }}

Gracias,<br>
El equipo de <b>{{ config('app.name') }}</b>.
@endcomponent
