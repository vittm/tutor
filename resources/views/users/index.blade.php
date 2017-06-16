@extends('layouts.web')

@section('content')

	@if($id_user[0]->active != 2)
	<div class="container pd0" style="margin-top: -10rem;background: #f7f7f7	">
	@else
	<div class="container pd0" style="margin-top: -10rem;">
	@endif
		@if($id_user[0]->cover != null)
		<img src="{{ URL::to('img/cover')}}/{{ $id_user[0]->cover}}" alt="..." style="display:block;margin: auto;width: 100%;">
		@else
		<img src="{{ URL::to('img/cover/default.png')}}" alt="..." style="display:block;margin: auto;width: 100%;">
		@endif
		<div class="@if($id_user[0]->active == 2) col-md-9 @else col-md-12 @endif pd0" style="margin-top: -6rem;">
			<div class="col-md-4 pd0">
				<img style="position: relative;z-index: 1;"src="{{ URL::to('img/avatar')}}/{{ $id_user[0]->avatar}}" alt="..." class="img-circle avatar-profile" height="150" width="150">
			</div>

			<div class=" @if($id_user[0]->id == current($status) ) col-md-8 @else col-md-4  @endif information-profile pd0">
				<h3 style="color: #ffffff;"><?php $str = explode(' ', $id_user[0]->name); ?>{{end($str)}} {{reset($str)}} <img class="sticker-verify" src="{{ URL::to('img/icon/VectorSmartObjectcop.png')}}" alt=""></h3>
				<span style="color: #ffffff;font-weight: 500;"> Giáo viên từ Quận {{ $id_user[0]->district }}, {{ $id_user[0]->city }}</span>
				@if($id_user[0]->active == 2)
				<h3 style="margin-top: 3rem;">{{ $id_user[0] -> title }} </h3>
				@endif
			</div>
			<div class="col-md-12 action-menu profile-student pd0">
				<div class="col-md-4 action-menu__left">
					<div class="col-md-12 wel action-menu__left__share">
						<div class="col-md-6 pdl">
								<img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject_4.png')}}" alt=""><p>Lưu hồ sơ</p>
						</div>

						<div class="col-md-6 pdr">
								<img class="action-menu__icon " src="{{ URL::to('img/icon/VectorSmartObject_3.png')}}" alt=""><p>Chia sẻ hồ sơ</p>
						</div>
						<input type="hidden" class="user_id_follow" value="@if(Auth::check()){{ Auth::user()->id }} @endif">
						<input type="hidden" class="id_follow" value="{{ $id_user[0] -> id }}">
						<a href="#" class="btn col-md-12 btn-follow" style="background: #fcaf00; color: #ffffff;" name="button">  @if($kkfollowers > 0) Đang theo dõi @else Theo dõi @endif </a>
				</div>
				@if($id_user[0]->active !=2)
				<div class="col-md-12 wel pd10 follow-profile">
						<img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject_2.png')}}" alt="">
						<span> <span> {{ $kfollowers }} </span> Người theo dõi</span>
				</div>
				<div class="col-md-12 wel pd10 follow-profile top15">
						<img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject_2.png')}}" alt="">
						<span> <span> {{ $zfollowers }} </span> Đang theo dõi</span>
						<div class="cold-md-12 pd0 top15">
							@foreach($listfollowers as $value)
							<div class="col-md-3">
								<img src="{{ URL::to('img/avatar')}}/{{$value->avatar}}" alt="..." class="img-circle dl" height="60" width="60">
							</div>
							@endforeach
						</div>
						<div class="col-md-12 wel top30">
							<h4> Hình Ảnh </h4>
							@if(json_decode($id_user[0]->picture) != null)
								@foreach( json_decode($id_user[0]->picture) as $value )
								<div class="col-md-6">
									<img class="col-md-12 pd0 top10" src="{{ URL::to('/img/picture')}}/{{$value}}" alt="..." class="img-thumbnail">
								</div>
								@endforeach
							@endif
						</div>
				</div>
				@endif
				</div>
				@if($id_user[0]->active !=2)
				<div class="col-md-8 pd0">
					<div class="col-md-12 wel list-information">
 					 <h3>{!! $id_user[0]->title !!}</h3>
 					 <div class="col-md-12 pd0 top15">
 					 		<div class="col-md-4 "><img src="img/icon/VectorSmartObject_6.png" alt=""><span> Họ và Tên </span></div>
 					 		<div class="col-md-8"><strong>{!! $id_user[0]->name !!}</strong></div>
 				 	 </div>
 					 <div class="col-md-12 pd0 top15">
 						 <div class="col-md-4"><img src="img/icon/VectorSmartObject_7.png" alt=""><span> Ngày sinh </span></div>
 						 <div class="col-md-8"><strong>{!! $id_user[0]->date !!}</strong></div>
 				   </div>
 					 <div class="col-md-12 pd0 top15">
 					 <div class="col-md-4"><img src="img/icon/VectorSmartObject_5.png" alt=""><span> Giới tính </span></div>
 					 <div class="col-md-8"><strong>@if( $id_user[0]->gender == 1 ) {{ ' Nam'}} @else {{ 'Nữ '}} @endif</strong></div>
 					 </div>
 					 <div class="col-md-12 pd0 top15">
 					 <div class="col-md-4"><img src="img/icon/VectorSmartObject_8.png" alt=""><span> Địa chỉ </span></div>
 					 <div class="col-md-8"><strong>{!! $id_user[0]->ward !!} {!! $id_user[0]->district !!} TP {!! $id_user[0]->city !!}</strong></div>
 					 </div>
 					 <div class="col-md-12 pd0 top15">
 					 <div class="col-md-4"> Học vấn</div>
 					 <div class="col-md-8"><strong>{!!  $id_user[0]->expericen !!}</strong></div>
 					 </div>
 					 <div class="col-md-12 pd0 top15">
 					 <div class="col-md-4"> Hiện là</div>
 					 <div class="col-md-8"><strong>{!!  $id_user[0]->jobs !!}</strong>
 					</div>
 					 </div>
 					 <div class="col-md-12 pd0 top15">
 					 <div class="col-md-4"> Lĩnh vực giảng dạy</div>
 					 <div class="col-md-8"><strong>{!! $id_user[0]->field !!}</strong></div>
 					 </div>
 					 <div class="col-md-12 pd0 top15">
 					 <div class="col-md-4"> Xác nhận hồ sơ vào ngày</div>
 					 <div class="col-md-8"><strong>{!! $id_user[0]->created_at !!}</strong></div>
 					 </div>
 					 <div class="col-md-12 pd0 top15">
 						 <div class="col-md-4"> Cập nhập lần cuối</div>
 						 <div class="col-md-8"><strong>{!! $id_user[0]->updated_at !!}</strong></div>
 					 </div>
 				</div>
			    <div class="col-md-12 wel top30">
						<h4 class="top15"><strong>Lớp học tham gia <strong></h4>
			      @foreach($student as $key => $value)
						<div class="col-md-6 list-couser-main top15">
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
			          <div class="col-md-12 list-couser__name wel top10"> <h4> {{$value ->name_couser }} </h4> <h4 class="top15"> {{ $value->name}}</h4> <p style="font-size: 13px;"><i>{{ $value->jobs}}, {{ $value->city}}</i></p></div>
			      </a>
					</div>
			      @endforeach
			    </div>
				</div>
				@endif
				@if($id_user[0]->active == 2)
				<div class="col-md-8 top30">
					<div class="col-md-3">
						<p class="action-menu__counter">{{ $zfollowers }}</p><p class="text-center">Người theo dõi</p><img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject_2.png')}}" alt="">
					</div>
					<div class="col-md-3">
						<p class="action-menu__counter">{{ $id_user[0] -> viewed }}</p><p class="text-center">Học Viên</p><img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject_1.png')}}" alt="">
					</div>
					<div class="col-md-3">
						<p class="action-menu__counter">{{ 30 }}</p><p class="text-center">Khoá học</p><img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject.png')}}" alt="">
					</div>
					<div class="col-md-3">
						<p class="action-menu__counter">{{ 5 }}{{' năm'}}</p><p class="text-center">Kinh nghiệm</p><img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject_0.png')}}" alt="">
					</div>
				</div>
				@endif
		</div>
@if($id_user[0]->active == 2)
		<hr>
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs tab-profile col-md-12 clear pd0" role="tablist">
	    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Giới Thiệu</a></li>
	    <li role="presentation"><a href="#info" aria-controls="home" role="tab" data-toggle="tab">Khóa Học</a></li>
	    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Đánh giá</a></li>
	    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Cộng đồng Wiis</a></li>
	  </ul>
@endif


	  </div>
		@if($id_user[0]->active == 2)
	  <div class="col-md-3 ">
	  	<div class="col-md-12 fix-title">
			<div class="col-md-2 pd0">
				<img src="{{ URL::to('img/avatar')}}/{{ $id_user[0]->avatar}}" alt="..." class="img-circle" height="50" width="50">
			</div>
			<div class="col-md-9 pd0">
				<h5 class="name-user col-md-7"><?php $str = explode(' ', $id_user[0]->name); ?>{{end($str)}} {{reset($str)}} </h5>
				<div class="col-md-5 pd0">
						<div class="start-view">
					 		<img src="img/icon/shooting-star.png" ><span >{{ $id_user[0]->sumRatings }}</span>
							<p><span> 34 </span> đánh giá</p>
					 	</div>
				</div>
			</div>
			<form class="col-md-12 pd0 form-register-couser" method="get" enctype="multiple/part" action="{{ url('/couser/register')}}">
				<p>Đăng ký học với gia sư</p>
				{{ csrf_field() }}

				<input type="hidden" name="user_login" value="{!! Auth::id() !!}">
				<select class="form-control" name="selectCouser">
						@foreach($couser as $value)
							<option value="{{ $value->id }}">{{ $value->name_couser}}</option>
						@endforeach
				</select>
				<p>Dự kiến số buổi học/tuần</p>
				<input class="form-control" type="text" placeholder="3 ngày"name="planmoment">
				<p>Dự kiến số buổi giờ/tuần</p>
				<input class="form-control" type="text" placeholder="3 tiếng"name="plantime">
				<p>Dự kiến học phí/tháng</p>
				<input class="form-control" type="text" placeholder="3.000.00 VNĐ"name="price">
			<div class="col-md-12 pd0">
				<!-- Button trigger modal -->
					<button type="submit" class="btn btn-origan btn-lg contact-user">
						Đăng ký học thử
					</button>
			</div>
			<hr>
			<p class="col-md-12 pd0" style="font-size: 12px; margin-top: 20px;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
			<p class="col-md-12 pd0" style="font-size: 12px"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
		</form>
		</div>
		</div>
	  <!-- Tab panes -->
	  <div class="tab-content content-profile col-md-8 clear pd0">
	    <div role="tabpanel" class="tab-pane active" id="home">
	    	<h4 class="title-profile"> GIỚI THIỆU </h4>
	    	 <div class="col-md-12 list-information">
					 <p>{!! $id_user[0]->info !!}</p>
					 <div class="col-md-12 pd0 top15">
					 		<div class="col-md-4 "><img src="img/icon/VectorSmartObject_6.png" alt=""><span> Họ và Tên </span></div>
					 		<div class="col-md-8"><strong>{!! $id_user[0]->name !!}</strong></div>
				 	 </div>
					 <div class="col-md-12 pd0 top15">
						 <div class="col-md-4"><img src="img/icon/VectorSmartObject_7.png" alt=""><span> Ngày sinh </span></div>
						 <div class="col-md-8"><strong>{!! $id_user[0]->date !!}</strong></div>
				   </div>
					 <div class="col-md-12 pd0 top15">
					 <div class="col-md-4"><img src="img/icon/VectorSmartObject_5.png" alt=""><span> Giới tính </span></div>
					 <div class="col-md-8"><strong>@if( $id_user[0]->gender == 1 ) {{ ' Nam'}} @else {{ 'Nữ '}} @endif</strong></div>
					 </div>
					 <div class="col-md-12 pd0 top15">
					 <div class="col-md-4"><img src="img/icon/VectorSmartObject_8.png" alt=""><span> Địa chỉ </span></div>
					 <div class="col-md-8"><strong>{!! $id_user[0]->ward !!} {!! $id_user[0]->district !!} TP {!! $id_user[0]->city !!}</strong></div>
					 </div>
					 <div class="col-md-12 pd0 top15">
					 <div class="col-md-4"> Học vấn</div>
					 <div class="col-md-8"><strong>{!!  $id_user[0]->expericen !!}</strong></div>
					 </div>
					 <div class="col-md-12 pd0 top15">
					 <div class="col-md-4"> Hiện là</div>
					 <div class="col-md-8"><strong>{!!  $id_user[0]->jobs !!}</strong>
					</div>
					 </div>
					 <div class="col-md-12 pd0 top15">
					 <div class="col-md-4"> Lĩnh vực giảng dạy</div>
					 <div class="col-md-8"><strong>{!! $id_user[0]->field !!}</strong></div>
					 </div>
					 <div class="col-md-12 pd0 top15">
					 <div class="col-md-4"> Xác nhận hồ sơ vào ngày</div>
					 <div class="col-md-8"><strong>{!! $id_user[0]->created_at !!}</strong></div>
					 </div>
					 <div class="col-md-12 pd0 top15">
						 <div class="col-md-4"> Cập nhập lần cuối</div>
						 <div class="col-md-8"><strong>{!! $id_user[0]->updated_at !!}</strong></div>
					 </div>

					 <div class="col-md-12 top15">
						 @if(json_decode($id_user[0]->video) != null)
		 					@foreach( json_decode($id_user[0]->video) as $value )
		 						<video class="col-md-offset-1 col-md-10"  controls>
		 						  <source src="{{ URL::to('/video')}}/{{$value}}">
		 						</video>
		 					@endforeach
		 				@endif
					 </div>
					 <div class="col-md-12">
						 @if(json_decode($id_user[0]->picture) != null)
							 @foreach( json_decode($id_user[0]->picture) as $value )
								 <img class="col-md-4 top10" src="{{ URL::to('/img/picture')}}/{{$value}}" alt="..." class="img-thumbnail">
							 @endforeach
						 @endif
					 </div>
				</div>



	    	 <br>

	    </div>
	    <div role="tabpanel" class="tab-pane" id="info">
	    		<h4 class="title-profile"> KHÓA HỌC </h4>
	    		<br>
					<div class="col-md-12 wel top10">
						@foreach($list_cousers as $key => $value)
						<div class="col-md-6 list-couser-main top15">
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
						</a>
					</div>
						@endforeach
					</div>
	    </div>
	    <div role="tabpanel" class="tab-pane" id="messages">
	    	<div class="col-md-12 clear pd0">

	    	 <div class="col-md-12 pd0">
		    	 <div class="rating-show">
						 <div class="col-md-2">
							 <div class="start-view">
			 					<img src="img/icon/shooting-star.png" ><span >{{ $id_user[0]->sumRatings }}</span>
							</div>
						 </div>
		    	 	<div class="content-teach col-md-2">
		    	 	<ul class="user-rating">
				    	<li><i class="fa fa-star" aria-hidden="true"><span @if(($id_user[0]->sumRatings) >= 6 ) style="color: #43A047" @else style="color: #e53935" @endif>{{ $id_user[0]->sumRatings }} </span></i></li>
			    	 	</ul>
		    	 	<span>Nội dung dạy</span>
		    	 	</div>

		    	 	<div class="content-teach col-md-2">
		    	 		<ul class="user-rating">
			    	 		<li>
			    	 			<i class="fa fa-star" aria-hidden="true"><span @if(round(($learn_teach/$count_id),2) >= 6 ) style="color: #43A047" @else style="color: #e53935" @endif>{{ round(($content_teach/$count_id),2) }} </span></i>
			    	 		</li>
			    	 	</ul>
		    	 		<span>Phương pháp</span>
		    	 	</div>

		    	 	<div class="content-teach col-md-2">
			    	 	<ul class="user-rating">
			    	 		<li>
			    	 			<i class="fa fa-star" aria-hidden="true"><span @if(round(($learn_teach/$count_id),2) >= 6 ) style="color: #43A047" @else style="color: #e53935" @endif>{{ round(($learn_teach/$count_id),2) }} </span></i>
			    	 		</li>

			    	 	</ul>
			    	 	<span>Giá cả </span>
		    	 	</div>

		    	 	<div class="content-teach col-md-2">
			    	 	<ul class="user-rating">
			    	 		<li><i class="fa fa-star" aria-hidden="true"><span @if(round(($feeling/$count_id),2) >= 6 ) style="color: #43A047" @else style="color: #e53935" @endif>{{ round(($feeling/$count_id),2) }} </span></i></li>
			    	 	</ul>
			    	 	<span>Thái độ dạy </span>
		    	 	</div>

		    	 	<div class="content-teach col-md-2">
			    	 	<ul class="user-rating">
			    	 		<li><i class="fa fa-star" aria-hidden="true"><span @if(round(($connect/$count_id),2) >= 6 ) style="color: #43A047" @else style="color: #e53935" @endif>{{ round(($connect/$count_id),2) }} </span></i></li>
			    	 	</ul>
			    	 	<span>Tiến bộ </span>
		    	 	</div>

	    	 </div>
	    	 </div>
	    	 <div class="col-md-12 top20">
			<a class="btn btn-info btn-xs text-right" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample ">
			  Viết đánh giá
			</a>
			</div>
			<div class="collapse top15 col-md-9" id="collapseExample">
				<div class="well">
				<form class="" method="POST" action="{{ url('/review-teacher') }}-{{ $id_user[0]->id }}">
	  				{{ csrf_field() }}
				  <label>
				  <input type="text" class="form-control" name="titleReview" placeholder="Tiêu đề"></label>
				  <input type="hidden" class="id_user" name="id_user" value="{{ $id_user[0]->id }}">
				  <textarea rows="5" name="contentReview" class="form-control"> Nội dung đánh giá</textarea>
				  <span>Nội dung dạy:</span>
				  	<input type="hidden" name="start-review" class="start-review">
				  	<div class="review-container">
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					</div>
				<span>Nội dung dạy:</span>
				  	<input type="hidden" name="start-review" class="start-review">
				  	<div class="review-container">
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					</div>
				<span>Nội dung dạy:</span>
				  	<input type="hidden" name="start-review" class="start-review">
				  	<div class="review-container">
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					</div>
				<span>Nội dung dạy:</span>
				  	<input type="hidden" name="start-review" class="start-review">
				  	<div class="review-container">
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					</div>
					<span>Nội dung dạy:</span>
				  	<input type="hidden" name="start-review" class="start-review">
				  	<div class="review-container">
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					  <div class="star"><span class="stararea">★</span></div>
					</div>

					<div class="text-right">
					<button type="submit" class="btn btn-info up-review ">Đăng</button>
					</div>
				</form>
				</div>

			</div>
	    	 <div class="col-md-12 clear feedbacks">
		    	  <div class="col-md-12 pd0 content-feedback">
		    	 @foreach($feedbacks as $value)
		    	 <div class="col-md-2">
		    	 	<img src="{{ URL::to('img/avatar')}}/{{ $value->avatar}}" class="img-circle" height="90">
		    	 </div>

		    	 <div class="col-md-7">
		    	 	<div class="content-cmt col-md-12">
		    	 		<p><strong>{!! $value->title !!}</strong></p>

		    	 		<p>{{ $value->content_feed }}</p>

		    	 		<p>{{ $value->name }}</p>
		    	 	</div>
		    	 </div>
		    	 <div class="col-md-3">
		    	 	<ul class="user-rating">
		    	 	@if( $value->ratings %3 == 0)
	    	 			@for($i=1 ; $i <=  $value->ratings - 0.5 ; $i++)
	    	 			<li><i class="fa fa-star" aria-hidden="true"></i></li>
	    	 			@endfor
	    	 			@if($value->ratings != null))
	    	 				<li><i class="fa fa-star-half" aria-hidden="true"></i></li>
	    	 			@endif
	    	 		@else
	    	 			@for($i=1 ; $i <=  $value->ratings; $i++)
	    	 			<li><i class="fa fa-star" aria-hidden="true"></i></li>
	    	 			@endfor
	    	 		@endif
	    	 		</ul>
	    	 		<ul class="default-start">
		    	 		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		    	 		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		    	 		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		    	 		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		    	 		<li><i class="fa fa-star" aria-hidden="true"></i></li>
		    	 	</ul>
	    	 		<p class="price-feedback">{{ number_format($value->price) }} VNĐ </p>
		    	 </div>
		    	 @endforeach
		    	  </div>
	    	  </div>
	    </div>
	  </div>

	 <div role="tabpanel" class="tab-pane" id="settings">

	 </div>

	</div>
	@endif
	</div>
	<!-- Modal -->
	<!-- <div class="modal fade col-md-12" id="contact-teach" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	  <form class="login-form col-md-12" method="POST" action="{{ url('/sent-contact-tech') }}">
	  	{{ csrf_field() }}
	  	<input type="hidden" name="id_user" value="{{ $id_user[0]->id }}">
	  	@if (Auth::guest())
	  		<input type="hidden" name="name_user" value="Khách">
	  	@else
	  		<input type="hidden" name="name_user" value="{{ Auth::user()->name }}">
	  	@endif
	    <div class="modal-content col-md-12">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Liên Hệ</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="col-md-3">
	      		<img src="{{ URL::to('img/avatar')}}/{{ $id_user[0]->avatar}}" alt="..." class="img-circle" height="80">
	      		<br>
	      		<p class="top15"><strong>{{ $id_user[0]-> name}}</strong></p>
	      	</div>


	        	<div class="col-md-9">
			    	<label for="subject">Môn học</label>
			    </div>
			    <div class="col-md-9">
			    	<input type="text" class="form-control" name="subject" id="subject" placeholder="Điền vào môn học">
			    </div>



	        	<div class="col-md-9 top15">
			    	<label for="">Trình Độ</label>
			    	<select name="grade" class=" form-control grade">
			    		<option value="Tiểu Học">Tiểu Học</option>
			    		<option value="THCS">THCS</option>
			    		<option value="THPT">THPT</option>
			    		<option value="Đại Học">Đại Học</option>
			    	</select>
			    </div>
	        	<div class="offset-md-6 col-md-6 top15">
			    	<label for="exampleInputEmail1">Bắt đầu lớp học</label>

			    	<select name="begin-class" class="form-control begin-class">
			    		<option value="Vài ngày sau">Vài ngày sau</option>
			    		<option value="Tuần sau">Tuần sau</option>
			    		<option value="Tháng sau">Tháng sau</option>
			    		<option value="Sắp xếp">Sắp xếp</option>
			    	</select>
			    </div>

	        	<div class="col-md-6 top15">
			    	<label for="exampleInputEmail1">Địa Điểm</label>
			    	<select name="location_class" class="form-control location-class">
			    		<option value="không có"> Lựa chọn địa điểm</option>
			    		<option class="location-option" value="Học tại nơi của gia sư">Học tại nơi của gia sư</option>
			    		<option class="athome" value="Học tại nơi của học viên">Học tại nơi của học viên </option>
			    		<option class="location-option" value="Học online">Học online</option>
			    		<option class="location-option" value="Sắp xếp ">Sắp xếp </option>
			    	</select>
			    	<input type="text" class="form-control select-athome" name="athome">
			    </div>
			<div class="col-md-12 top15">
				<label>Thời gian có thể học</label>
					<div class="panel col-md-12 pd0 time_mess">
						<label class="col-md-6 pd0"><input class="iad" name="time-learn" /></label>
					</div>
			</div>
			<div class="col-md-12 target-checkbox top15">
				<div class="col-md-12 pd0">
					<label>Mục tiêu: </label>
				</div>
				<div class="col-md-6 pd0">
				    <label>
				      <input type="checkbox" value="Nâng cao kỹ năng" name="target_mess[]"> Nâng cao kỹ năng
				    </label>
				 </div>
				 <div class="col-md-6 pd0">
				    <label>
				      <input type="checkbox" value="Cải thiện điểm số" name="target_mess[]"> Cải thiện điểm số
				    </label>
				 </div>
				 <div class="col-md-6 pd0">
				    <label>
				      <input type="checkbox" value="Học kỹ năng mới" name="target_mess[]"> Học kỹ năng mới
				    </label>
				 </div>
				 <div class="col-md-6 pd0">
				    <label>
				      <input type="checkbox" value="Chuẩn bị cho bài test" name="target_mess[]"> Chuẩn bị cho bài test
				    </label>
				 </div>
				</div>
			<div class="col-md-12 top15">
			 	<input type="text" name="add-target" class="add-target">
				<button type="button" onclick="addTarget()">Thêm mục tiêu</button>
			 </div>
			<div class="col-md-12 top15">
				<label for="exampleInputEmail1">Nội dung tin nhắn: </label>
				<textarea class="form-control" rows="3" name="content"></textarea>
			</div>
	      </div>
	      <div class="modal-footer col-md-12">
	        <button type="button" class="btn btn-default btn-5" data-dismiss="modal">Thoát</button>
	       <button class="btn btn-5 btn-5a icon-cog"><span>Gửi tin nhắn</span></button>
	      </div>
	    </div>
	    </form>
	  </div>
	</div> -->
@stop
