@component('mail::message')
# Introduction

percobaan pengiriman email dari laravel


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
