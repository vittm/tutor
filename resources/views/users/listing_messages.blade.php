@extends('layouts.web')

@section('content')
<div class="col-md-2">
 <ul class="nav nav-tabs tab-edit-profile" role="tablist">
    <li role="presentation" ><a href="#mess" aria-controls="home" role="tab" data-toggle="tab"><img src="img/icon/inbox.png">Tất cả </a></li>
    <li role="presentation" ><a href="#dontread" aria-controls="home" role="tab" data-toggle="tab"><img src="img/icon/mail.png">Chưa đọc</a></li>
    <li role="presentation" ><a href="#read" aria-controls="home" role="tab" data-toggle="tab"><img src="img/icon/envelope.png">Đã đọc </a></li>
</ul>
</div>
<!-- Tab panes -->
<div class="col-md-10">
	<div class="tab-content all-mess col-md-12 clear pd0">
	    <div role="tabpanel" class="tab-pane active col-md-12" id="mess">
	    	<div class="col-md-offset-10 col-md-2 all-delete"><a href="{{ url('/xoa-tat-ca-tin-nhan')}}-{{ Auth::user()->id }}">Xóa tất cả tin nhắn</a></div>
	    	@foreach($listing_mess as $key => $value)
	    	<div class="media listing_mess col-md-12 @if($value->watch == 0) dontread @endif">
			  <div class="media-left">
			    <a href="#">
			      <img class="media-object" src="img/icon/inbox.png" alt="tin nhan">
			    </a>
			  </div>
			  <div class="media-body">
			  	<a href="{{ url('/chi-tiet-tin-nhan')}}-{{ $value->id }}">
			  	<div class="col-md-11">
			    <p class="media-heading">{{ $value -> sender }}</p>
			    <p class="content">{!! $value -> content !!}</p>
			    </div>
			    <div class="col-md-1">
			    	<a class="delete" href="{{ url('/xoa-tin-nhan')}}-{{ $value->id }}">Xóa</a>
			    </div>
			    </a>
			  </div>
			</div>
			@endforeach
	    </div>
	    <div role="tabpanel" class="tab-pane col-md-12" id="dontread">
	    	@foreach($dontread as $key => $value)
	    	<div class="media listing_mess @if($value->watch == 0) dontread @endif">
			  <div class="media-left">
			    <a href="#">
			      <img class="media-object" src="img/icon/inbox.png" alt="tin nhan">
			    </a>
			  </div>
			  <div class="media-body">
			  	<a href="{{ url('/chi-tiet-tin-nhan')}}-{{ $value->id }}">
			  	<div class="col-md-11">
			    <p class="media-heading">{{ $value -> name }}</p>
			    <p class="content">{{ $value -> content }}</p>
			    </div>
			    <div class="col-md-1">
			    	<a class="delete" href="#">Xóa</a>
			    </div>
			    </a>
			  </div>
			</div>
			@endforeach
	    </div>
	    <div role="tabpanel" class="tab-pane col-md-12" id="read">
	    	@foreach($read as $key => $value)
	    	<div class="media listing_mess @if($value->watch == 0) dontread @endif">
			  <div class="media-left">
			    <a href="#">
			      <img class="media-object" src="img/icon/inbox.png" alt="tin nhan">
			    </a>
			  </div>
			  <div class="media-body">
			  	<a href="{{ url('/chi-tiet-tin-nhan')}}-{{ $value->id }}">
			  	<div class="col-md-11">
			    <p class="media-heading">{{ $value -> name }}</p>
			    <p class="content">{!! $value -> content !!}</p>
			    </div>
			    <div class="col-md-1">
			    	<a class="delete" href="#">Xóa</a>
			    </div>
			    </a>
			  </div>
			</div>
			@endforeach
	    </div>
	</div>
</div>
@stop