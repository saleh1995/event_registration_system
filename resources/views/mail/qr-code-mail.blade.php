@component('mail::message')
# {{ __('mail.greeting', ['name' => $attendee->name]) }}

{{ __('mail.thank_you_registration') }}

<div style="text-align:center; margin: 20px 0;">
    <img src="{{ $qrUrl }}" alt="{{ __('mail.qr_code_alt') }}" style="max-width: 250px;"/>
</div>

{{ __('mail.qr_instructions') }}

@component('mail::button', ['url' => url('/')])
{{ __('mail.visit_website') }}
@endcomponent

{{ __('mail.thanks') }},<br>
{{ config('app.name') }}
@endcomponent
