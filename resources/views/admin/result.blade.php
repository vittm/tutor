@extends('layouts.app')

@section('content')
<div class="container">

  <hgroup class="mb20">
		<h1>Search Results</h1>
	</hgroup>
    <section class="col-xs-12 col-sm-6 col-md-12">
@if(isset($search) && $search->count() > 0)
<form action="{{ url('/admin/update-user')}}" enctype="multipart/form-data"  method="POST">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @foreach($search as $value)
      <input type="hidden" class="form-control" name="id_edit[]" value="{{ $value->id }}">
      <input type="text" class="form-control" name="text_value[]" value="{{ $value->name }}">
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/people" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="pe-7s-date"></i> <span>02/15/2014</span></li>
					<li><i class="pe-7s-timer"></i> <span>4:28 pm</span></li>
					<li><i class="pe-7s-user"></i> <span>People</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
        <div class="col-md-3 top15">
           <input type="text" class="form-control" name="email_value[]" value="{{ $value->email }}">
        </div>
        <div class="col-md-2 top15">
              <span class="style-input">
                 <select class="form-control" name="active[]">
                    <option> Loại thành viên </option>
                    <option @if( $value->active == 1 ) selected @endif value="1">
                       Học Viên
                    </option>
                    <option @if( $value->active == 2 ) selected @endif value="2">
                       Gia Sư
                    </option>
                    <option @if( $value->active == 0 ) selected @endif value="0">
                       Admin
                    </option>
                </select>
            </span>
        </div>
        <div class="col-md-2 top15">
           <button href="{{ url('/admin/update-user')}}" class="btn" type="submit"> Cập Nhập </button>
        </div>
        <div class="col-md-2 top15">
           <a href="{{ url('/admin/delete-user')}}-{{ $value->id }}" class="btn" type="submit"> Xóa </a>
        </div>
			</div>
			<span class="clearfix borda"></span>
		</article>
    @endforeach
</form>
@endif


@if(isset($bills) && $bills->count() > 0)
@foreach($bills as $key => $value)
<div class="col-md-offset-3 col-md-6 list-couser-main top15">
<a class="col-md-12 pd0 list-couser wel">
  <div class="col-md-12 pd0 list-couser__images">
    @if($value -> typeclass == '1')
    <div class="list-couser__typeCourse">
      Học 1 + 1
    </div>
    @endif
    @if($value -> typeCouser == '1')
    <div class="list-couser__typeCourse">
      Lớp học sắp khai giảng
    </div>
    @endif
    <img src="{{ URL::to('/img/couser')}}/{{$value->picture_couser}}" style="width:100%">
    <div class="list-couser__price btn btn-origan2">{{number_format($value->price)}}<sup>Đ/ giờ </sup></div>
  </div>
    <div class="col-md-12 list-couser__name wel top10"> <h4> {{$value ->name_couser }} </h4> </div>
    <div class="col-md-3 list-couser__name wel top10"> <h5> {{$value -> created_at }} </h5> </div>
    <?php $date_exp= 31 - (strtotime(date('Y-m-d')) - strtotime($value -> created_at)) / (60 * 60 * 24); ?>

    <?php $date_type = date("Y-m-d", (strtotime(date('Y-m-d')) - strtotime($value -> created_at))/ (60 * 60 * 24))?>
    <div class="col-md-7 list-couser__name wel top10"> <h5>Hạn đóng phí còn {{$date_exp}} ngày, {{$date_type}}</h5> </div>
</a>
</div>
@endforeach
  @endif
	</section>
</div>
@Stop
