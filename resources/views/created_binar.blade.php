@extends('welcome')



@section('content')
    <div>
        <a class="btn btn-info" href="{{route('binar:show_comdition_1')}}">@lang('binar.back')</a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>@lang('binar.table.table_header.th_1')</th>
            <th>@lang('binar.table.table_header.th_2')</th>
            <th>@lang('binar.table.table_header.th_3')</th>
            <th>@lang('binar.table.table_header.th_4')</th>
            <th>@lang('binar.table.table_header.th_5')</th>
            <th>@lang('binar.table.table_header.th_6')</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($binars as $binar)
            <tr>
                <td>{{$binar->id}}</td>
                <td>{{$binar->parent_id ?? 0}}</td>
                <td>{{$binar->position ?? 0}}</td>
                <td>{{$binar->path ?? 0}}</td>
                <td>{{$binar->level}}</td>
                <td>
                    @if($binar->id == 1)
                        @lang('binar.table.note_1')
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
