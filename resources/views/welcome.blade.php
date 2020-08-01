@extends('base')

@section('content')
        <div class="links">
            <a href="{{route('binar:show_comdition_1')}}">@lang('binar.condition_1')</a>
            <a href="{{route('binar:show_comdition_2')}}">@lang('binar.condition_2')</a>
            <a href="https://github.com/Sergii81/binar" target="_blank">@lang('binar.link_to_git')</a>
        </div>
@endsection
