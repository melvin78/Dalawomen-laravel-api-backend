@component('mail::message')
# Introduction

Hello {{$user}}.Thank you for trying out my project.
Check my github profile for more projects
@component('mail::button', ['url' => 'https://github.com/melvin78'])
GITHUB
@endcomponent

Thanks,<br>
{{--{{ config('app.name') }}--}}
    MELOSOLUTIONS.TECH
@endcomponent
