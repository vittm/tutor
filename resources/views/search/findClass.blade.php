@extends('layouts.web')

@section('content')
<form class="form-horizontal col-md-12 pd0" role="form" method="GET" action="{{ url('/find-class') }}" enctype='multipart/form-data'>
<div class="container search_teach">
	<div class="col-md-12 col-xs-12 group_search_one pad0">
		<div class="col-md-3 col-xs-12 pr5">
			<div class="col-md-12 col-xs-12  pd0 has-feedback">
			  <input id="field-find" name="valueField" type="text" aria-describedby="inputSuccess2Status" placeholder="Lĩnh vực">
			
			  <span class="form-control-feedback" aria-hidden="true"><i class="fa fa-caret-down" aria-hidden="true"></i><i class="fa fa-caret-up" aria-hidden="true"></i></span>
			</div>
		</div>

		<div class="col-md-3 col-xs-12 pr5">
			<div class="col-md-12 col-xs-12 pd0 has-success has-feedback">
			  <input type="text" name="valueSubject" aria-describedby="inputSuccess2Status" id="subject-find" placeholder="Môn học">
			  <span class="form-control-feedback" aria-hidden="true"><i class="fa fa-caret-down" aria-hidden="true"></i><i class="fa fa-caret-up" aria-hidden="true"></i></span>
			</div>
		</div>
		
		<div class="col-md-3 col-xs-12 pr5">
			<div class="col-md-12 col-xs-12  pd0 has-success has-feedback">
			  <input type="text" aria-describedby="inputSuccess2Status" placeholder="Cấp độ" name="levle-find" id="level-find">
			  <span class="form-control-feedback" aria-hidden="true"><i class="fa fa-caret-down" aria-hidden="true"></i><i class="fa fa-caret-up" aria-hidden="true"></i></span>
			</div>
		</div>

		<div class="col-md-3 col-xs-12 pr5">
			<div class="col-md-12 col-xs-12  pd0 has-success has-feedback">
			  <input type="text" aria-describedby="inputSuccess2Status" placeholder="Địa Điểm" name="address-find" id="address-find">
			  <span class="form-control-feedback" aria-hidden="true"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 submit_search pr5">
			<button class="form-control" type="submit" name="academic">Tìm Kiếm</button>
		</div>
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
<div class="col-md-offset-1 col-md-11 top30">

@foreach( $search as $key => $value)
	<div class="col-md-12 pd0 top30 list-profile" data-href="{{ url('/chi-tiet-bai-dang')}}-{{$value->id}}">
			<div class="col-md-2 pd0">
				<img src="{{ URL::to('img/avatar')}}/{{ $value->avatar}}" alt="..." class="img-circle" height="150" width="150">
			</div>

			<div class="col-md-6 pd0 information-profile">'
				<div class="col-md-5 pd0">
				<h3>{{ $value->name }}</h3>
				<div class="col-md-12  pd0 result-find">
	    	 	<p>Bắt đầu: {{ $value->begin }}</p>	
			    </div>
				<p><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $value->location }}</p>
				</div>
				<div class="col-md-7 top30">
				<p><i class="fa fa-map-marker" aria-hidden="true"></i> Trình độ: {{ $value->grade }}
				</p>
				<p><i class="fa fa-graduation-cap" aria-hidden="true"></i>
					Môn dạy: {{ str_replace( ',', ', ', $value->subject ) }}
				</p>	
				</div>
			</div>

			<div class="col-md-4 top30">
				<h3>{{ number_format($value-> price)}} VNĐ </h3>
				<p>Ngày đăng: {{ $value->created_at }}</p>
			</div>
		</div>
@endforeach
</div>
@stop