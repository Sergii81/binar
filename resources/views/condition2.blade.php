@extends('welcome')

@section('content')
    <p>@lang('binar.p_2')</p>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-horizontal" role="form" method="post" action="{{route('binar:manage_binar')}}">
        @csrf
        <div class="form-group">
            <div class="row">
                <label class="col-md-3 control-label" for="id">@lang('binar.label_id')</label>
                <div class="col-md-9">
                    <select required name="id">
                        @foreach($binars as $binar)
                            <option value="{{$binar->id}}">{{$binar->id}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn" >@lang('binar.button_select')</button>
            </div>
        </div>
    </form>
    <br>
    <div>
        <a class="btn btn-info" href="{{route('binar:welcome')}}">@lang('binar.back')</a>
    </div>


@endsection

