@extends('layouts.web')

@section('content')
<form class="form-horizontal col-md-12 pd0" role="form" method="GET" action="{{ url('/find-teach') }}" enctype='multipart/form-data'>
<div class="container search_teach">
	<div class="col-md-12 col-xs-12 group_search_one pad0">
		<div class="col-md-3 pr5">

			<div class="col-md-12 col-xs-12  pd0 has-feedback">
			  <input id="field-find" name="valueField" type="text" aria-describedby="inputSuccess2Status" placeholder="Lĩnh vực">
			</div>

		</div>
		<div class="col-md-3 col-xs-12 pr5 ">
			<div class="col-md-12 col-xs-12 pd0 has-success has-feedback">
			  <input type="text" name="valueSubject" aria-describedby="inputSuccess2Status" id="subject-find" placeholder="Môn học">
			  {{-- <span class="form-control-feedback" aria-hidden="true"><i class="fa fa-caret-down" aria-hidden="true"></i><i class="fa fa-caret-up" aria-hidden="true"></i></span> --}}
			</div>
		</div>
		<div class="col-md-3 pr5">
			<div class="col-md-12 col-xs-12  pd0 has-success has-feedback">
			  <input type="text" aria-describedby="inputSuccess2Status" placeholder="Cấp độ" name="levle-find" id="level-find">
			  {{-- <span class="form-control-feedback" aria-hidden="true"><i class="fa fa-caret-down" aria-hidden="true"></i><i class="fa fa-caret-up" aria-hidden="true"></i></span> --}}
			</div>
		</div>
		<div class="col-md-3 pr5">
			<div class="col-md-12 col-xs-12  pd0 has-success has-feedback">
			  <input type="text" aria-describedby="inputSuccess2Status" placeholder="Thành Phố" name="address-find" id="address-find">
			  <span class="form-control-feedback" aria-hidden="true"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 submit_search">
			<button class="form-control" type="submit" name="academic">Tìm Kiếm</button>
		</div>
		{{-- <div class="col-md-4 col-xs-12 div-center ">
			<div class="col-md-12 col-xs-12  pd0 has-success has-feedback">
			  <input type="text" aria-describedby="inputSuccess2Status" placeholder="Quận" name="district-find" id="address-find">
			  <span class="form-control-feedback" aria-hidden="true"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
			</div>
			
		</div> --}}
	</div>
</div>
<div class="container">
	<div class="sortby">
		<ul><li>Sắp sếp theo: </li>
			<li><button type="submit" name="rating" value="rating">Rating</button></li>
			<li><button type="submit" name="like" value="like">Like</button></li>
			<li><button type="submit" name="lowestPrice" value="lowestPrice">Giá từ thấp tới cao</button></li>
			<li><button type="submit" name="highestPrice" value="highestPrice">Giá từ cao xuống thấp</button></li>
		</ul>
	</div>
	</div>
</form>
<div class="container clear"> 
@foreach( $search as $key => $value)
	<div class="col-md-10 pd0 top30 list-profile" data-href="{{ url('/trang-ca-nhan')}}-{{$value->id_uni}}">
			<div class="col-md-8 pd0 information-profile">'
				<div class="col-md-6 pd0">
				<div class="col-md-5">
					<img src="{{ URL::to('img/avatar')}}/{{ $value->avatar}}" alt="..." class="img-circle" height="100" width="100">
				</div>
				<div class="col-md-7 pd0 result-find">
				<h3>{{ $value->name }}</h3>
	 			<ul class="user-rating">
	    	 		<li><i class="fa fa-star" aria-hidden="true"><span @if( $value->sumRatings >= 6 ) style="color: #43A047" @else style="color: #e53935" @endif>{{ $value->sumRatings }} </span></i></li>
	    	 	</ul>


				<p><i class="fa fa-map-marker" aria-hidden="true"></i> Quận {{ $value->district }}, {{ $value->city }}</p>
				<p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{ $value->like_blog }} Following Blog</p>
				</div>
			    </div>
				<div class="col-md-6">
				<p><i class="fa fa-graduation-cap" aria-hidden="true"></i>
					Môn dạy: {{ str_replace( ',', ', ', $value->subjects ) }}
				</p>
				<p>
					{!! substr(strip_tags($value->info),0, 200)!!}{{'...'}}
				</p>
				</div>
			</div>

			<div class="col-md-4">
				<h3>{{ number_format($value-> money_time) }} <sup>đ</sup>/ giờ</h3>
			</div>
		</div>

@endforeach
</div>
</div>
@stop