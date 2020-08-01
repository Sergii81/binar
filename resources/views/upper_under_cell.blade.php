@extends('welcome')



@section('content')
    <div>
        <a class="btn btn-info" href="{{route('binar:show_comdition_2')}}">@lang('binar.back')</a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>@lang('binar.table_1.table_header.th_1')</th>
            <th>@lang('binar.table_1.table_header.th_2' , ['id' => $cell->id])</th>
            <th>@lang('binar.table_1.table_header.th_3')</th>

        </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    @if($upper_cell->isNotEmpty())
                        @foreach($upper_cell as $v)
                            {{$v->id}}
                            <br>
                        @endforeach
                    @endif
                </td>
                <td>{{$cell->id}}</td>
                <td>
                    @if($under_cell->isNotEmpty())
                        @foreach($under_cell as $v)
                            {{$v->id}}
                            <br>
                        @endforeach
                    @endif
                </td>
            </tr>

        </tbody>
    </table>
@endsection
