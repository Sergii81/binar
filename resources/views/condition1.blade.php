@extends('welcome')



@section('content')
    <p>@lang('binar.p_1')</p>
    <form class="form-horizontal" role="form" method="post" action="{{route('binar:create_binar')}}">
        @csrf
        <div class="form-group">
            <div class="row">
                <label class="col-md-3 control-label" for="parent_id">@lang('binar.label_parent_id')</label>
                <div class="col-md-9">
                    <input type="text" id="parent_id"  class="form-control" name="parent_id"
                           placeholder="@lang('binar.placeholder_parent_id')" value="{{ old('parent_id') }}" required>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="col-md-3 control-label" for="position">@lang('binar.label_position')</label>
            <div class="col-md-9">
                <select required name="position">
                    <option value="" disabled>@lang('binar.placeholder_position')</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn" >@lang('binar.button_create')</button>
            </div>
        </div>
    </form>
    <br>
    <div>
        <a class="btn btn-info" href="{{route('binar:welcome')}}">@lang('binar.back')</a>
    </div>


@endsection
