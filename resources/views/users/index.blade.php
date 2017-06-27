@extends('layouts.web')

@section('content')

	<div class="container pd0" style="margin-top: -10rem;background: #f7f7f7	">
		@if($id_user[0]->cover != null)
		<img src="{{ URL::to('img/cover')}}/{{ $id_user[0]->cover}}" alt="..." style="display:block;margin: auto;width: 100%;height: 467px;object-fit: cover;">
		@else
		<img src="{{ URL::to('img/cover/default.png')}}" alt="..." style="display:block;margin: auto;width: 100%;">
		@endif
		<div class="@if($id_user[0]->active == 2) col-md-9 @else col-md-12 @endif pd0" style="margin-top: -6rem;">
			<div class="col-md-4 pd0">
				<img style="position: relative;z-index: 1;"src="{{ URL::to('img/avatar')}}/{{ $id_user[0]->avatar}}" alt="..." class="img-circle avatar-profile" height="150" width="150">
				<div class="@if($id_user[0]->active !=2) col-md-12 @else col-md-12 @endif action-menu profile-student pd0">
					<div class="@if($id_user[0]->active !=2) col-md-12 @else col-md-12 @endif action-menu__left">
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
					@if($id_user[0]->active == 2)
					<div class="col-md-12 top15 wel" style="padding-top:15px;">
						<div class="col-md-12 pd0">
							<div class="col-md-1"><img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject_2.png')}}" alt=""></div><div class="col-md-4"><p class="action-menu__counter">{{ $zfollowers }}</p></div><div class="col-md-6 pd0"><p class="text-left">Người theo dõi</p></div>
						</div>
					</div>
					<div class="col-md-12 top15 wel" style="padding-top:15px;">
						<div class="col-md-12 pd0">
							<div class="col-md-1"><img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject_1.png')}}" alt="" style="top: -4px;"></div><div class="col-md-4"><p class="action-menu__counter">{{ $id_user[0] -> viewed }}</p></div><div class="col-md-6 pd0"><p class="text-left">Học Viên</p></div>
						</div>
					</div>
					<div class="col-md-12 top15 wel" style="padding-top:15px;">
						<div class="col-md-12 pd0">
							<div class="col-md-1"><img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject_0.png')}}" alt="" style="top: -1px;"></div><div class="col-md-4"><p class="action-menu__counter">{{ 5 }}{{' năm'}}</p></div><div class="col-md-6 pd0"><p class="text-left">Kinh nghiệm</p></div>
						</div>
					</div>
					@endif
					@if($id_user[0]->active == 2)
					<div class="col-md-12 top15 wel" style="padding-top:15px;">
						@if(json_decode($id_user[0]->video) != null)
						 @foreach( json_decode($id_user[0]->video) as $value )
							 <video class="col-md-offset-1 col-md-10"  controls>
								 <source src="{{ URL::to('/video')}}/{{$value}}">
							 </video>
						 @endforeach
					 @endif
					</div>
					<div class="col-md-12 top15 wel" style="padding-top:15px;">
						@if(json_decode($id_user[0]->picture) != null)
							@foreach( json_decode($id_user[0]->picture) as $value )
								<img class="col-md-12 top10" src="{{ URL::to('/img/picture')}}/{{$value}}" alt="..." class="img-thumbnail">
							@endforeach
						@endif
					</div>
					@endif
					</div>
					<!-- khoi 4 col -->
			</div>
			</div>

			<div class=" @if($id_user[0]->id == current($status) ) col-md-8 @else col-md-8  @endif information-profile pd0">
				<h3 style="color: #ffffff;"><?php $str = explode(' ', $id_user[0]->name); ?>{{end($str)}} {{reset($str)}} @if($id_user[0]->active == 2 ) <img class="sticker-verify" src="{{ URL::to('img/icon/VectorSmartObjectcop.png')}}" alt="">@endif</h3>
				<span style="color: #ffffff;font-weight: 500;"> Giáo viên từ Quận {{ $id_user[0]->district }}, {{ $id_user[0]->city }}</span>
				@if($id_user[0]->active == 2)
				<h3 style="margin-top: 3.3rem; padding-left: 5px;">{{ $id_user[0] -> title }} </h3>
				@endif
				@if($id_user[0]->active !=2)
				<div class="col-md-12 pdl" style="margin-top: 40px;">
					<div class="col-md-12 wel list-information" style=" padding-top: 15px;">
					 <h3>{!! $id_user[0]->title !!}</h3>
					 <div class="col-md-12 pd0 top30">
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
								@if($value -> typeCouser == '2')
								<div class="list-couser__typeCourse">
									Lớp học sắp khai giảng
								</div>
								@endif
								<img src="{{ URL::to('/img/couser')}}/{{$value->picture_couser}}" style="width:100%">
								<div class="list-couser__price btn btn-origan2">{{number_format($value->price)}}<sup>Đ/ @if($value -> typeCouser == '1') Khoá @else Giờ @endif  </sup></div>
							</div>
								<div class="col-md-12 list-couser__name wel top10"> <h4> {{$value ->name_couser }} </h4> <h4 class="top15"> {{ $value->name}}</h4> <p style="font-size: 13px;"><i>{{ $value->jobs}}, {{ $value->city}}</i></p></div>
						</a>
					</div>
						@endforeach
					</div>
				</div>
				@endif
				@if($id_user[0]->active == 2)
					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs tab-profile col-md-11 clear pd0" role="tablist" style="background:#ffffff; padding-bottom: 10px;padding-top:10px;">
					    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Giới Thiệu</a></li>
					    <li role="presentation"><a href="#info" aria-controls="home" role="tab" data-toggle="tab">Khóa Học</a></li>
					    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Đánh giá</a></li>
					    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Hỏi Đáp</a></li>
					  </ul>
						<!-- Tab panes -->
					  <div class="tab-content content-profile col-md-11 clear pd0 wel" style="padding-top:15px;">
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
												@if($value -> typeCouser == '2')
												<div class="list-couser__typeCourse">
													Lớp học sắp khai giảng
												</div>
												@endif
												<img src="{{ URL::to('/img/couser')}}/{{$value->picture_couser}}" style="width:100%">
												<div class="list-couser__price btn btn-origan2">{{number_format($value->price)}}<sup>Đ/@if($value -> typeCouser == '2') Khoá @else Giờ @endif </sup></div>
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

					 <div role="tabpanel" class="tab-pane col-md-12 pd0" id="settings" style="background: #f7f7f7">
						 <div class="ask-box section rsp-eql-desktop wel" style="padding-top:5px;">
							<h3>Hỏi <span dir="ltr"><?php $str = explode(' ', $id_user[0]->name); ?>{{end($str)}} {{reset($str)}} </span>:</h3>

							<form id="askForm" autocomplete="off" class="new_question" action="{{ url('/profile/comments') }}-{{ $id_user[0]->id }}" accept-charset="UTF-8" method="post">
								<input name="utf8" type="hidden" value="✓">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="question old">
									<textarea placeholder="Cái gì, khi nào, tại sao... hãy hỏi" autofocus="autofocus" name="question" id="question_question_text"></textarea>
								</div>
								<div class="optionsBar">
									<div class="optionsBar-buttonWrap">

										<div class="optionsBar-option optionsBar-online">
											<span class="statusLabel">Hiển thị trạng thái</span>
											<span class="afm-popover-container">
										    <a class="icon-caret-up online" data-action="PopoverOpen" data-class="online" data-text="Ẩn" href="#">Trực tuyến</a>
										  </span>
										</div>
										<button name="button" type="submit" class="btn btn-origan" data-action="QuestionSave">Hỏi</button>
									</div>

								</div>

							</form>
						</div>

						@foreach($question as $key => $value)
						<div class="col-md-12 top15 wel" style="-webkit-box-shadow: 0px 1px 4px 0px rgba(0,0,0,0.5);
-moz-box-shadow: 0px 1px 4px 0px rgba(0,0,0,0.5);
box-shadow: 0px 1px 4px 0px rgba(0,0,0,0.5);padding-top: 15px;">
							<h4><strong>{{ $value->content }}</strong></h4>

							<h5><?php $str = explode(' ', $id_user[0]->name); ?>{{end($str)}} {{reset($str)}} trả lời: {{ $value -> reply}}</h5>
							<span style="font-size: 11px;">{{$value->created_at}}</span>
							<div class="col-md-12 pd0" style="border-top: 1px solid #eeeeee;margin-top:10px;padding-top: 10px;padding-bottom: 10px;">
								<div class="col-md-5"><i class="fa fa-heart click-heart" id="{{$key}}" value="{{$value->id}}" aria-hidden="true"><span style="padding-left:5px">{{$value->vote}}</span></i></div>
								<i class="fa fa-share-square-o" aria-hidden="true" style="float:right"></i>
								@if(Auth::check())
									@if(Auth::user()->id == $value->id_user)
									<i class="fa fa-pencil-square-o" data-toggle="collapse" href="#collapseExample{{$key}}"  aria-hidden="true" style="cursor:pointer;float:right; padding: 0 20px;"></i>
									<!-- <i class="fa fa-user-times" style="float:right"aria-hidden="true"></i> -->
									@endif
								@endif

							</div>
							<form id="askForm" autocomplete="off" class="new_question" action="{{ url('/profile/comments/reply') }}-{{ $value->id }}" method="post">
							<div class="collapse wel" id="collapseExample{{$key}}" style="margin-top: 60px;">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
							  <div class="well">
									<div class="question old">
										<textarea placeholder="Cái gì, khi nào, tại sao... hãy trả lời nào." autofocus="autofocus" name="reply" id="question_question_text"></textarea>
									</div>
									<button name="button" type="submit" class="btn btn-origan fr" data-action="QuestionSave" style="float: right;
    margin-top: 29px;
    margin-bottom: 10px;">Trả lời</button>
							  </div>
							</div>
						</form>
						</div>
						@endforeach
					 </div>

					</div>
				@endif
			</div>
	  </div>
		@if($id_user[0]->active == 2)
	  <div class="col-md-3 wel">
	  	<div class="col-md-12 fix-title wel">
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
				<input type="hidden" name="id_teacher" value={{ $id_user[0]->id }}>
				<input type="hidden" name="user_login" value="{!! Auth::id() !!}">
				<select class="form-control selectCouser" name="selectCouser">
					<option value="" data-price="0">------ Chọn khoá học -----</option>
						@foreach($couser as $value)
							<option value="{{ $value->id }}" data-price={{$value->price}}>{{ $value->name_couser}}</option>
						@endforeach
				</select>
				<p>Dự kiến số ngày học/tuần</p>
				<input class="form-control" type="number" placeholder="3 ngày"name="planmoment">
				<p>Dự kiến số buổi giờ/ngày</p>
				<input class="form-control" type="number" placeholder="3 giờ"name="plantime">
				<p>Dự kiến học phí/tháng</p>
				<input class="form-control price-register" type="text" disabled name="price">
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
	@endif
	</div>
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary btn-lg hidden" data-toggle="modal" data-target="#register-finish">
	  Launch demo modal
	</button>
	<!-- Modal -->
	<div class="modal fade" id="register-finish" tabindex="-1" role="dialog" aria-labelledby="register-finish">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
					<div class="col-md-12 pd0 title-modal">
	 					 <div class="col-md-6"><h4 class="modal-title" id="myModalLabel">Đăng Ký Học Thử Thành Công</h4></div>
	 				</div>
					<p>Cám ơn @if(Auth::check()) @if(Auth::user()->active == 3)phụ huynh @else bạn @endif @endif {{Session::get('name_user')}} đã cho WiiS cơ hội được phục vụ.</p>
					<p><strong>Sau 1h nữa, gia sư {{Session::get('name_couser')}} sẽ gọi điện thoại xác nhận việc đăng ký học thử của anh/chị ạ.</strong> Nếu sau thời gian này không nhận được điện thoại từ gia sư, anh/ chị vui lòng thông báo lại cho WiiS theo hotline 0868. 505.523 để WiiS giúp anh/chị liên lạc với gia sư.
					</p>
					<h5>THÔNG TIN ĐĂNG KÝ HỌC THỬ</h5>

					<p>⦁	Lớp học: <strong> {{Session::get('name_couser')}}</strong></p>
					<p>⦁	Gia sư: <strong>{{Session::get('teacher')}}</strong></p>
					<p>⦁	Học phí dự kiến/tháng: <strong>{{Session::get('pricecourse')}} / tháng </strong></p>

					<p>Mã số may mắn của anh/chị là <strong>{{Session::get('giftcode')}}</strong></p>
					<p>Vào ngày 30 hàng tháng trên fanpage, WiiS sẽ tiến hành quay số để tặng quà cho
					những khách hàng may mắn đăng ký gia sư tại WiiS, xem thêm tại đây.</p>
					<p>Khi đăng ký học với gia sư trên WiiS, anh/chị đã đóng góp 5.000đ vào
					quỹ “Những Thiên thần nhỏ” nhằm giúp đỡ những trẻ em khuyết tật và kém may mắn
					trong cuộc sống.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default close-register" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
@stop
