@component('mail::message')
#Bonjour!!!

Votre compte pour la plateforme de gestion des élections au Bénin a été crée.<br>
Veuillez activer ce compte. <br>
Le bouton ci-dessous vous permettra d'accéder à la page d'inscription.<br>
Le code de validation est: {{$code}}

@component('mail::button', ['url' => 'localhost:8000/register'])
Inscription
@endcomponent

Merci,<br>
Cordialement, Le bureau de la CENA. <br>
@endcomponent
