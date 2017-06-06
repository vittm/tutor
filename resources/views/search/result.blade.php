@extends('layouts.web')

@section('content')
<div class="col-md-12 pd0" style="background: #f7f7f7; border-right: 1px solid #eeeeee;">
<div class="col-md-12 pd0" style="position:relative;background: #000;">
	<img src="{{ url('img/cover1.png') }}" style="position:absolute;height: 376px; width: 100%;">
</div>
<form class="container" action="{{ url('/find-teach') }}" role="form" method="GET" enctype='multipart/form-data'>
<div class="container search_teach">
	<div class="col-md-12 col-xs-12 group_search_one pad0">
				<ul class="col-md-offset-1 col-md-10 search">
						<li><input type="text" placeholder="Địa điểm" name="address-find"><img src="img/icon/placeholder.png"></li>
						<li><input type="text" placeholder="Lĩnh Vực" name="valueField" type="text" aria-describedby="inputSuccess2Status"><img src="img/icon/multi-tab.png"></li>
						<li><input type="text" placeholder="Môn học" name="valueSubject"><img src="img/icon/open-book.png" aria-describedby="inputSuccess2Status" id="subject-find" ></li>
						<li><input type="text" placeholder="Nội dung học" name="contentSubject"><img src="img/icon/bar-chart.png"></li>
						<li class="icon-search submit_search">
						<button type="submit" name="academic" placeholder=""><img src="img/icon/search.png"></button></li>
				</ul>
	</div>
</div>
<div class="container" style="border-bottom: 1px solid #161542;">
	<div class="sortby">
		<ul><li>Sắp sếp theo: </li>
			<li><button type="submit" name="rating" value="rating">Đánh giá cao nhất</button></li>
			<li><button type="submit" name="lowestPrice" value="lowestPrice">Học phí tốt nhất</button></li>
		</ul>
	</div>
	</div>
</form>
<div class="container clear">
	<div class="col-md-9">
@foreach( $search as $key => $value)
	<div class="col-md-12 pd0 top30 list-profile" data-href="{{ url('/trang-ca-nhan')}}-{{$value->id_uni}}">
			<div class="col-md-9 pd0 information-profile">'
				<div class="col-md-4">
					<img src="{{ URL::to('img/avatar')}}/{{ $value->avatar}}" alt="..." class="img-circle dl" height="120" width="120">
					<h3 class="text-center">{{ $value->name }}<img class="sticker-verify" src="{{ URL::to('img/icon/VectorSmartObjectcop.png')}}" alt=""></h3>
					<p  class="text-center">{{ $value->jobs }}, {{ $value->city }}</p>
			    </div>
				<div class="col-md-8">
					<h3>{{ $value-> title }} </h3>
					<div class="col-md-4  top15">
						<img class="action-menu__icon dl" src="{{ URL::to('img/icon/VectorSmartObject_1.png')}}" alt="" >
						<p class="action-menu__counter text-center">12 Học viên</p>
					</div>
					<div class="col-md-4  top15">
						<img class="action-menu__icon dl" src="{{ URL::to('img/icon/VectorSmartObject.png')}}" alt="">
						<p class="action-menu__counter text-center">16 Học viên</p>
					</div>
					<div class="col-md-4  top15">
						<img class="action-menu__icon dl" src="{{ URL::to('img/icon/VectorSmartObject_0.png')}}" alt="">
						<p class="action-menu__counter text-center">23 Học viên</p>
					</div>
					<div class="col-md-12">
						<button class="btn btn-origan" style="float: left!important;">{{ $value-> jobs }} </button>
						<button class="btn btn-origan2"  style="float: right!important;">{{ number_format($value-> money_time) }} <sup style="font-size:10px;">Đ/giờ</sup> </button>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<ul class="user-rating">
						<li><img style="position: absolute;"	src="{{ URL::to('img/icon/shooting-star.png')}}"><span @if( $value->sumRatings >= 6 ) style="position: absolute;
    top: 26px;
    left: 24px;
    font-size: 18px;
    font-weight: 700;" @else style="color: #e53935" @endif>{{ $value->sumRatings }} </span></li>
					</ul>
			</div>
		</div>
@endforeach
</div>
<div class="col-md-3 top30 text-center well" style="border-top: 15px solid #fcaf00;">

	<h3 style="font-size: 21px; font-weight: 700;"> TOP GIA SƯ CỦA THÁNG </h3>
	<div class="border-origran" style="margin: 15px auto; display:block; width: 150px;"></div>

	<div class="col-md-12 pd0 top15" style="border-bottom: 1px solid #ccc">
		<div class="col-md-4" style="padding-left:0;">
				<img src="{{ URL::to('img/avatar/04-23-252017060549c8d33637cb126c6c0745ddf6f5f03e.jpg')}}" alt="..." class="img-circle" height="60" width="60">
		</div>
		<div class="col-md-8 pd0" style="text-align: left">
			<p style="font-weight: 500;">Toán học </p>
			<p style="font-size: 16px; font-weight: 500; color: #fcaf00;"> Lê Quý Nam </p>
			<p style="font-weight: 500;">Giáo viên, Hồ Chí Minh</p>
		</p>
	</div>
</div>
<div class="col-md-12 pd0 top15" style="border-bottom: 1px solid #ccc">
	<div class="col-md-4" style="padding-left:0;">
			<img src="{{ URL::to('img/avatar/04-23-252017060549c8d33637cb126c6c0745ddf6f5f03e.jpg')}}" alt="..." class="img-circle" height="60" width="60">
	</div>
	<div class="col-md-8 pd0" style="text-align: left">
		<p style="font-weight: 500;">Toán học </p>
		<p style="font-size: 16px; font-weight: 500; color: #fcaf00;"> Lê Quý Nam </p>
		<p style="font-weight: 500;">Giáo viên, Hồ Chí Minh</p>
	</p>
</div>
</div>
<div class="col-md-12 pd0 top15" style="border-bottom: 1px solid #ccc">
	<div class="col-md-4" style="padding-left:0;">
			<img src="{{ URL::to('img/avatar/04-23-252017060549c8d33637cb126c6c0745ddf6f5f03e.jpg')}}" alt="..." class="img-circle" height="60" width="60">
	</div>
	<div class="col-md-8 pd0" style="text-align: left">
		<p style="font-weight: 500;">Toán học </p>
		<p style="font-size: 16px; font-weight: 500; color: #fcaf00;"> Lê Quý Nam </p>
		<p style="font-weight: 500;">Giáo viên, Hồ Chí Minh</p>
	</p>
</div>
</div>
</div>
</div>

</div>
@stop
