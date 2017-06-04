@extends('layouts.app')
@section('content')
<div class="row">
@foreach($slide as $key => $value)
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail thumbnail__list">
      <img src="{{ url('img/slider')}}/{{$value->images_slide}}">
      <div class="caption">
        <h4>{{ $value-> title_big }}</h4>
        <p><a href="{{ URL::to('/admin/edit-slide') }}-{{$value->id}}" class="btn btn-primary" role="button">Chỉnh Sửa</a> <a href="{{ URL::to('/admin/destroy-slide') }}-{{$value->id}} " class="btn btn-default" role="button">Xóa</a></p>
      </div>
    </div>
  </div>
@endforeach
<div class="col-md-12">
	<nav class="in">
	<?php echo $slide->render(); ?>
	</nav>
</div>
</div>


@stop
