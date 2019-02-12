@component('mail::message')
# Introduction

Team Name : {{ $team->name }}
has been created. 

Thanks,<br>
{{ config('app.name') }}
@endcomponent
