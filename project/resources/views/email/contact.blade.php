@component('mail::message')
Olá

Nome: <b> {{ $reply_name }} </b>
Email: {{ $reply_email }} <br>
Sobre: {{ $subject }} <br>
Mensagem:
    @component('mail::panel')
        {{ $subject }}
    @endcomponent
@endcomponent
