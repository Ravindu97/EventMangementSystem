@component('mail::message')
    # Thank you for your mail.

    <strong>Name</strong> {{ $data['name'] }}
    <strong>Email</strong> {{ $data['email'] }}
    <strong>Mobile</strong> {{ $data['mobile'] }}

    <strong>Message</strong> {{ $data['message'] }}


    {{-- The body of your message.

    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }} --}}
@endcomponent
