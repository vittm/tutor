@extends('layouts.web')

@section('content')


	<div class="container">

		<div class="col-md-8 pd0">
			<div class="col-md-3">
				<img src="{{ url('/img/avatar') }}/{{ $post[0]->avatar }}" alt="avatar" class="img-circle" height="150" width="150">
			</div>

			<div class="col-md-9 information-profile">
				<h3>{{ $post[0]->name }}</h3>
				<p><i class="fa fa-clock-o" aria-hidden="true"></i>{!! Carbon\Carbon::parse($post[0]->created_at)->format('m/d/Y')  !!}</p>
			</div>
	  </div>
	  <div class="col-md-4	">
	  	<div class="col-md-12 pd0 fix-title">
			<div class="col-md-2 avatar">
				<img src="{{ url('/img/avatar') }}/{{ $post[0]->avatar }}" alt="..." class="img-circle" height="50">
			</div>
			<div class="col-md-9">
				<h5 class="price-user">{{ number_format($post[0]->price)}} VNĐ</h5>
			</div>
			<div class="col-md-12 pd0">
				<p class="reply-soon">Liên hệ với mình nhé ! </p>
				<!-- Button trigger modal -->
				@if (Auth::check())
					<button type="button" class="btn btn-primary btn-lg contact-user" data-toggle="modal" data-target="#contact-teach">
					  Liên hệ
					</button>
				@else
					<button type="button" class="btn btn-primary btn-lg contact-user">
					Đăng nhập để có thể gửi tin nhắn
					</button>
				@endif
			</div>
		</div>
		</div>

		<div class="content-post col-md-7">
		<br>
			<h3>Thông tin chi tiết</h3>
			<p class="top15">{!! $post[0]->content !!}</p>
			<ul>
				<h4 class="top30">Thông tin cơ bản</h4>
				<li><strong>Môn học:</strong> {{ $post[0]->subject }} </li>
				<li><strong>Trình độ:</strong> {{ $post[0]->grade }}</li>
		<br>
				<h4>Thông tin lớp học</h4>
				<li><strong>Địa điểm học:</strong> {{ $post[0]->location }} </li>
				@if($target['0'] != null)
				<li><strong>Mục tiêu học:</strong> <ul class="list-target" >@foreach($target['0'] as $key => $valueTarget) <li>{{ $valueTarget }}<li>@endforeach  </ul>
				@else
					{{ " " }}
				@endif
				</li>
				@if($time['0'] != null)
				<li><strong>Thời gian mong muốn bắt đầu học:</strong> <ul class="list-target" >@foreach($time['0'] as $key => $valueTime) <li>{{ $valueTime }}<li>@endforeach  </ul>
				@else
					{{ " " }}
				@endif
				</li>
				<li><strong>Số giờ học/buổi:</strong> {{ $post[0]->timeHouse }} giờ/ buổi <br>
				    <strong>Số buổi học/tuần:</strong> {{ $post[0]->timeWeek }} buổi/ tuần</li>

			</ul>
		</div>
	 </div>

	<!-- Modal -->
	<div class="modal fade col-md-12" id="contact-teach" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog mess-post" role="document">
	  <form class="login-form col-md-12" method="POST" action="{{ url('/sent-mess') }}">
	  	{{ csrf_field() }}
	  	<input type="hidden" name="id_user" value="{{ $post[0]->id }}">
	    <div class="modal-content col-md-12 pad0">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Liên Hệ {{ $post[0]->name }}</h4>
	      </div>
	      <div class="modal-body pd0">
	    		<div class="col-md-12 contact pd0">
				<div class="panel col-md-12 pd0">
						<label class="col-md-6 pl0"><img src="img/icon/name.png"> Họ và Tên: <input type="text" name="name_user" value="{{ $post[0]->name }}"> </label>
						<label class="col-md-6 pl0"><img src="img/icon/smartphone.png"> Phone: <input type="text" name="phone-contact" value=""> </label>
						<div class="col-md-12 pd0 top15">
						<label><img src="img/icon/mail.png"> Nội dung tin nhắn:
						<br>
						<textarea rows="20" cols="70" class="ckeditor top30" id="editor1" name="info_contact"></textarea> </label>
					</div>
				</div>
	    	</div>

	      </div>
	      <div class="modal-footer col-md-12">
	        <button type="button" class="btn btn-default btn-5" data-dismiss="modal">Thoát</button>
	       <button class="btn btn-5 btn-5a icon-cog"><span>Gửi tin nhắn</span></button>
	      </div>
	    </div>
	    </form>
	  </div>
	</div>
@stop
