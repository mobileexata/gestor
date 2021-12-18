@component('vendor.mail.html.messageexataautomacao')

Houve uma solicitação de contato no site {{ URL::to('/') }}

<b>Nome:</b> {{ $contato->name }}<br>
<b>E-mail:</b> {{ $contato->email }}<br>
<b>Mensagem:</b> {{ $contato->message }}<br>

@endcomponent
