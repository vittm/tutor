@extends('layouts.web')

@section('content')
<div class="col-md-12 pd0 container-detail-mess">
	<div class="col-md-offset-2 col-md-8">
	<br>
	<div class="col-md-12 text-right"><a class="delete-all" href="{{url('/danh-sach-tin-nhan')}}-{{Auth::user()->id}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> <strong >Trở về hộp tin nhắn</strong></a></div>
	<div class="col-md-12 detail_email pd0">
	@if($detail_message[0]->type_mail == 0)
		@foreach($detail_message as $key => $value)
			<div class="wrapper">
			  <!-- Begin Top Buttons -->
			  <div class="top-panel">
			  	@if(Auth::user()->active == 2)
			    <div class="right username" id="initial"><img src="img/icon/reply.png">
			    </div>
			    @endif
			    <section class="left">
			    <div class="short-nav">
			      <div id="social-share">
			      	{{ $value->created_at }}
			      </div>
			    </div>
			    </section>
			    <div class="clearfix"></div>
			  </div>
			    <!-- Begin Panel Content -->
			    <div class="content">
			      
			      <!-- Name & Title Objects -->
			      <div class="contact-info">
			        <span class="entypo-vcard"></span>
			        <h1>{{ $value->name }}</h1>
			        <h2>{{ $value->subject }}</h2>
			        <h5>{{ $value->grade }}</h5>
			        @if($value->phone != null)<p><strong>ĐT: </strong>: {{ $value->phone }}</p> @endif
			        <p class="content-mess">{!! $value->content !!}</p>

			        <div class="col-md-6 pd0 top15">
						@if($value->begin != null)<p><strong>Bắt đầu lớp học </strong>: {{ $value->begin }}</p> @endif

						@if($location == null )  @else <p><strong>Địa Điểm</strong>:    @foreach( $location as $local ) {{ $local }} @endforeach @endif</p>
			        </div>
			         <dl class="col-md-6 top15">
			         	@if($target != null)
			           	<dt>Mục tiêu</dt>
							@foreach($target['0'] as $tar)
			           			<dd>{{ $tar }}</dd>
				           	@endforeach
				          	@else 
							{{ " " }}
						@endif
			         </dl>
			          <hr />
			      </div>     
			      <!-- Clear Positioned V-Card Objects -->
			      <div class="clearfix"></div>
			      <!-- Begin Contact Methods -->
			      <div class="wepa text-center">
			        <h4>Cảm ơn bạn đã đọc tin nhắn của mình.</h4>
			        <p>Mong sẽ có hồi âm sớm từ bạn.</p>
			    </div>
			</div>
			<!-- Add User Modal Window -->
			<div id="modal">
			  <span class="entypo-cancel" id="close">x</span>
			  <h2>Đồng ý với lời mời này.</h2>
			  <p>Cảm ơn ban đã gửi lời mời đến cho tôi, tôi sẽ nhận lớp này! Tôi sẽ liên lạc với bạn.</p>
			  <a href="{{ url('xac-nhan-loi-moi')}}-{{ $value->id_user}}-{{ $value->id }}" id="confirm"><span class="entypo-thumbs-up"></span> Đồng ý</a>
			</div>
			</div>
			@endforeach
		@endif


		@if($detail_message[0]->type_mail == 1)
		@foreach($detail_message as $key => $value)
		<div class="wrapper">
		  <!-- Begin Top Buttons -->
		  <div class="top-panel">
		    <section class="left">
		    <div class="short-nav">
		      <div id="social-share">
		      	Tin nhắn từ hệ thống lúc : {{ $value->created_at }}
		      </div>
		    </div>
		    </section>
		    <div class="clearfix"></div>
		  </div>
		    <!-- Begin Panel Content -->
		    <div class="content">
		      
		      <!-- Name & Title Objects -->
		      <div class="contact-info">
		        <span class="entypo-vcard"></span>
		        <h1>{{ $value->name }}</h1>
		        <h2>{{ $value->subject }}</h2>
		        <h5>{{ $value->grade }}</h5>
		        <p class="content-mess">{{ $value->content }}</p>

		        <div class="col-md-6 pd0 top15">
					<p><strong>Bắt đầu lớp học </strong>: {{ $value->begin }}</p>
					<p><strong>Địa Điểm</strong>: @if($location == null )  @else @foreach( $location as $local ) {{ $local }} @endforeach @endif</p>
		        </div>
		         <dl class="col-md-6 top15">
		           <dt>Mục tiêu</dt>
		           @if($target != null)
						@foreach($target['0'] as $tar)
		           			<dd>{{ $tar }}</dd>
			           	@endforeach
			          	@else 
						{{ " " }}
					@endif
		         </dl>
		          <hr />
		      </div>     
		      <!-- Clear Positioned V-Card Objects -->
		      <div class="clearfix"></div>
		      <!-- Begin Contact Methods -->
		      <div class="wepa text-center">
		        <h4>Cảm ơn bạn đã đọc tin nhắn từ hệ thống.</h4>
		    </div>
		</div>

		</div>
		@endforeach
		@endif
	</div>
</div>
@stop