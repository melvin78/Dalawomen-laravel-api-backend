@component('mail::message')
    # Introduction
    The body of your message.

{{--    @foreach($loans->loans as $v)--}}
{{--        @foreach($v as $vr)--}}
{{--            {{$vr}}--}}
{{--        @endforeach--}}
{{--    @endforeach--}}
{{--    @foreach($loans->loans as $v)--}}
{{--        {{$v['membername']}}--}}
{{--    @endforeach--}}
    @foreach($loans->loans as $v)
        {{$v['date']}}
    @endforeach

    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
