@extends('layouts.app')

@section('content')

<p>Chỉnh sửa phần voucher</p>
<div class="col-md-12 pd0">
<a class="btn" href="{{ url('/admin/add-voucher')}}">Thêm voucher</a> 
</div>
<form action="" enctype="multipart/form-data"  method="POST">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   @foreach($voucher as $key => $value)
	<div class="col-md-4 pd0">
		<div class="input-group top15">
	      <div class="input-group-addon">{{ $value->id }}</div>
         <input type="hidden" class="form-control" name="id_edit[]" value="{{ $value->id }}">
	      <input type="text" class="form-control" name="text_value[]" value="{{ $value->voucher }}">
	    </div>
   	</div>

   <div class="col-md-4">
      <div class="input-group top15">
         <input type="text" class="form-control" name="text_value[]" value="{{ $value->price }}">
      </div>
      </div>
   	<div class="col-md-2 top15">
   		<a href="{{ url('/admin/delete-voucher')}}-{{ $value->id }}" class="btn" type="submit"> Xóa </a>
   	</div>
   @endforeach
</form>
@stop