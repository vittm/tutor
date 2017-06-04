@extends('layouts.app')

@section('content')

<p>Chỉnh sửa phần text</p>
<form action="{{ url('/admin/update-text')}}" enctype="multipart/form-data"  method="POST">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   @foreach($text as $key => $value)
	<div class="col-md-8 pd0">
		<div class="input-group top15">
	      <div class="input-group-addon">{{ $value->id }}</div>
         <input type="hidden" class="form-control" name="id_edit[]" value="{{ $value->id }}">
	      <input type="text" class="form-control" name="text_value[]" value="{{ $value->text }}">
	    </div>
   	</div>
   	<div class="col-md-2 top15">
   		<button href="{{ url('/admin/update-text')}}-{{ $value->id }}" class="btn" type="submit"> Cập Nhập </button>
   	</div>
   	<div class="col-md-2 top15">
   		<a href="{{ url('/admin/delete-text')}}-{{ $value->id }}" class="btn" type="submit"> Xóa </a>
   	</div>
   @endforeach
</form>
@stop