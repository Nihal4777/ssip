<x-mail::message>

# Greetings from {{ config('app.name') }} Portal..!!!

Thank you for registering with us.
Please find the credentials of your account as below:

<x-mail::panel>
Email Id :{{$email}}<br>
OTP :{{$otp}}
</x-mail::panel>

Note: Kindly save these credentials for future use.

This is an auto-generated mail. Please let us know if you did not attempt to register with us.
{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Regards,<br>
{{ config('app.name') }}
</x-mail::message>
