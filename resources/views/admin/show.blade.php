@extends('layouts.app')

@section('content')

<p>Chỉnh sửa phần voucher</p>
<form action="" enctype="multipart/form-data"  method="POST">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   @foreach($wiget as $key => $value)
  <div class="col-md-4 pd0">
    <div class="input-group top15">
        <div class="input-group-addon">{{ $value->id }}</div>
         
        <input type="text" class="form-control" name="text_value[]" value="{{ $value->name }}">
      </div>
    </div>

    <div class="col-md-4 top15">
      <div class="onoffswitch @if($value->value == '1' ) onoffswitch-checked @endif">
        <input type="hidden" class="form-control id_edit" name="id_edit[]" value="{{ $value->id }}">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch_{{ $key }}">
        <label class="onoffswitch-label" for="myonoffswitch_{{ $key }}">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
        </label>
    </div>
    </div>
    <div class="col-md-2 top15">
      <a href="#" class="btn" type="submit"> Index </a>
    </div>
   @endforeach
</form>
@stop