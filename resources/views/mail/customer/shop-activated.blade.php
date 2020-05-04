@component('mail::message')
# Congratulations!

Your shop is now active

@component('mail::button', ['url' => route('shops.show', $shop->id)])
Visit your shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
