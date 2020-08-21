
@component('mail::message')
# Introduction

{{ $receipe->name }}
The Receipe has been stored

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
