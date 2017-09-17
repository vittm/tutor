@extends('layouts.web')

@section('content')
<div class="col-md-12 pd0" style="background: #f7f7f7;">
<div class="col-md-12 pd0 cover-search">
	<img src="{{ url('img/cover1.png') }}" style="display:block;width:100%;margin: auto; height: 100%;">
	<h3 class="cover-search__title"> Tìm ngay gia sư, thổi bay lo lắng </h3>
	<form class="container" style="position:absolute;z-index: 1;top:15%;left:0;right:0;margin: auto;" action="{{ url('/tim-kiem-gia-su') }}" role="form" method="GET" enctype='multipart/form-data'>
	<div class="container search_teach">
		<div class="col-md-12 col-xs-12 group_search_one pad0">
					<ul class="col-md-offset-2 col-md-10 search">
							<li><input type="text" placeholder="Địa điểm" name="address-find" id="address-find" aria-describedby="inputSuccess2Status"><img src="img/icon/placeholder.png"></li>
							<li><input type="text" placeholder="Môn học" name="valueSubject"  id="subject-find" ><img src="img/icon/open-book.png" aria-describedby="inputSuccess2Status">

							</li>
							<li><img src="img/icon/bar-chart.png">
								<input type="text" placeholder="Hình thức học" class="course-search">
								<ul class="select-course">
										<li value="0">Gia sư 1+1</li>
										<li value="1">2 - 10 người</li>
										<li value="2">10 - 20 người</li>
										<li value="3">Trên 20 người</li>
								</ul>
								<input type="hidden" placeholder="Hình thức học" class="course-value" name="coursehidden">
							</li>
							<li class="icon-search submit_search">
							<button type="submit" placeholder=""><img src="img/icon/search.png"></button></li>
					</ul>
		</div>
	</div>
	</form>
</div>
<div class="col-md-12 pd0">
<form class="container pd0" action="{{ url('/tim-kiem-gia-su') }}" role="form" method="GET" enctype='multipart/form-data'>
	<div class="container" style="border-bottom: 1px solid #161542;">
		<div class="sortby">
			<ul><li>Sắp sếp theo: </li>
				<input type="hidden" name="address-find">
				<li><button type="submit" name="rating" value="rating">Đánh giá cao nhất</button></li>
				<li><button type="submit" name="lowestPrice" value="lowestPrice">Học phí tốt nhất</button></li>
			</ul>
		</div>
		</div>
</form>
</div>
<div class="container clear">
	<div class="col-md-9">
@foreach( $search as $key => $value)
	@include('search.result')
@endforeach
</div>
<div class="col-xs-12 col-sm-12 col-md-3 top30 text-center wel" style="border-top: 15px solid #fcaf00;">

	<h3 style="font-size: 21px; font-weight: 700;"> TOP GIA SƯ CỦA THÁNG </h3>
	<div class="border-origran" style="margin: 15px auto; display:block; width: 150px;"></div>

@foreach($top_teacher as $value)
	<a href="{{ url('/trang-ca-nhan')}}-{{$value->id_uni}}-{{App\User::convert_string($value->name)}}" class="col-md-12 pd0 top15" style="border-bottom: 1px solid #ccc">
		<div class="col-md-4" style="padding-left:0;">
				<img src="{{ URL::to('img/avatar')}}/{{$value->avatar}}" alt="..." class="img-circle" height="60" width="60">
		</div>
		<div class="col-md-8 pd0" style="text-align: left">
			<p style="font-weight: 500;">{{$value->subjects}}</p>
			<p style="font-size: 16px; font-weight: 500; color: #fcaf00;"> <?php $str = explode(' ', $value->name); ?>{{end($str)}} {{reset($str)}} </p>
			<p style="font-weight: 500;">@if($value->jobs != null){{App\User::jobs($value->jobs)}},@endif @if($value->city != null) {{$value->city}} @endif</p>
		</p>
		</div>
	</a>
@endforeach
</div>
</div>

</div>
@stop
