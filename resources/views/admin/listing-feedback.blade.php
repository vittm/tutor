@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-12">
<a class="btn" href="{{ url('/admin/add-feedback')}}">Thêm nhận xét</a> 
</div>
@foreach($feedback as $key => $value)
  <div class="col-sm-6 col-md-3 top15">
    <div class="thumbnail thumbnail__list">
      <img src="{{ url('img/feedbacks')}}/{{$value->images}}">
      <div class="caption">
        <h4>{{ $value-> name }}</h4>
        <p><a href="{{ URL::to('/admin/edit-feedback') }}-{{$value->id}}" class="btn btn-primary" role="button">Chỉnh Sửa</a> <a href="{{ URL::to('/admin/destroy-feedback') }}-{{$value->id}} " class="btn btn-default" role="button">Xóa</a></p>
      </div>
    </div>
  </div>
@endforeach
<div class="col-md-12">
	<nav class="in">
	<?php echo $feedback->render(); ?>
	</nav>
</div>
</div>


@stop
