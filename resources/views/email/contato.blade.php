@component('vendor.mail.html.messageexataautomacao')
Olá, {{ $contato->name }}.

Recebemos sua solicitação de contato.

Logo retornaremos sua solicitação.

@component('mail::button', ['url' => URL::to('/')])
Clique aqui para acessar o site
@endcomponent

Obrigado,<br>
Exata Automação
@endcomponent
