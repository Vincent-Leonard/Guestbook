@component('mail::message')
# Activate Account

The body of your message.

@component('mail::button', ['url' => route('activate', ['token' => $user->activation_token, 'email' => $user->email])])
Verivy
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
