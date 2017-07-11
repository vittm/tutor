@extends('layouts.web')

@section('content')
@if($id_user[0]->active !=2)
	@foreach($student as $key => $value)
		@include('modal.detail-course')
	@endforeach
@endif
@if($id_user[0]->active ==2)
	@foreach($list_cousers as $key => $value)
		@include('modal.detail-course')
	@endforeach
@endif
	<div class="container pd0" style="margin-top: -10rem;background: #f7f7f7	">
		<div class="cover-profile" >
		@if($id_user[0]->cover != null)
		<img  src="{{ URL::to('img/cover')}}/{{ $id_user[0]->cover}}" alt="..." style="display:block;margin: auto;width: 100%;height: 467px;object-fit: cover;">
		@else
		<img class="cover-profile" src="{{ URL::to('img/cover/default.png')}}" alt="..." style="display:block;margin: auto;width: 100%;">
		@endif
	</div>
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
							<div class="col-md-12 pd0 wel top30">
								<h4> Hình Ảnh </h4>
								@if(json_decode($id_user[0]->picture) != null)
									@foreach( json_decode($id_user[0]->picture) as $value )
									<div class="col-md-12 pd0 img-w">
										<img class="col-md-12 pd0 top10" src="{{ URL::to('/img/picture')}}/{{$value}}" alt="..." class="img-thumbnail">
									</div>
									@endforeach
								@endif
							</div>
					</div>
					@endif
					@if($id_user[0]->active == 2)
					@if($kfollowers > 10)
					<div class="col-md-12 top15 wel" style="padding-top:15px;">
						<div class="col-md-12 pd0">
							<div class="col-md-1">
								<img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject_2.png')}}" alt="">
							</div>
							<div class="col-md-4">
								<p class="action-menu__counter">{{ $zfollowers }}</p>
							</div>
							<div class="col-md-6 pd0"><p class="text-left">Người theo dõi</p></div>
						</div>
					</div>
					@endif
					<div class="col-md-12 top15 wel" style="padding-top:15px;">
						<div class="col-md-12 pd0">
							<div class="col-md-1">
								<img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject_1.png')}}" alt="" style="top: -4px;"></div>
								<div class="col-md-4">
									<p class="action-menu__counter">{{ $count_student }}</p>
								</div>
								<div class="col-md-6 pd0"><p class="text-left">Học Viên</p></div>
						</div>
					</div>
					<div class="col-md-12 top15 wel" style="padding-top:15px;">
						<div class="col-md-12 pd0">
							<div class="col-md-1"><img class="action-menu__icon" src="{{ URL::to('img/icon/VectorSmartObject_0.png')}}" alt="" style="top: -1px;"></div><div class="col-md-4"><p class="action-menu__counter">@if($id_user[0]->experience != 0){{ $id_user[0]->experience }}{{' năm'}} @else 0 @endif</p></div><div class="col-md-6 pd0"><p class="text-left">Kinh nghiệm</p></div>
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
				@if($id_user[0]->district != null)<span style="color: #ffffff;font-weight: 500;"> Giáo viên từ {{ $id_user[0]->district }}, {{ $id_user[0]->city }}</span> @endif
				@if($id_user[0]->active == 2)
				<h3 style="margin-top: 4.7rem; padding-left: 5px;">{{ $id_user[0] -> title }} </h3>
				@endif
				@if($id_user[0]->active !=2)
				<div class="col-md-12 pdl" style="margin-top: 40px;">
					<div class="col-md-12 wel list-information" style=" padding-top: 15px;">
					 <h3>{!! $id_user[0]->title !!}</h3>
					 @include('users.information-sub')
				</div>
					<div class="col-md-12 wel top30">
						<h4 class="top15"><strong>Lớp học tham gia </strong></h4>
						@foreach($student as $key => $value)
						<div class="col-md-6 list-couser-main top15">
						<a data-toggle="modal" data-target="#couser{{$key}}" class="col-md-12 pd0 list-couser wel">
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
					  <ul class="nav nav-tabs tab-profile col-md-12 clear pd0" role="tablist" style="background:#ffffff; padding-bottom: 10px;padding-top:10px;">
					    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Giới Thiệu</a></li>
					    <li role="presentation"><a href="#info" aria-controls="home" role="tab" data-toggle="tab">Khóa Học</a></li>
					    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Đánh giá</a></li>
					    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Hỏi Đáp</a></li>
					  </ul>
						<!-- Tab panes -->
					  <div class="tab-content content-profile col-md-12 clear pd0 wel" style="padding-top:15px;">
					    <div role="tabpanel" class="tab-pane active" id="home">
					    	<h4 class="title-profile"> GIỚI THIỆU </h4>
					    	 <div class="col-md-12 list-information">
										@include('users.subview-user.information-sub')
								</div>
					    	 <br>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="info">
					    		<h4 class="title-profile"> KHÓA HỌC </h4>
					    		<br>
									<div class="col-md-12 wel">
										@foreach($list_cousers as $key => $value)
										<div class="col-md-6 list-couser-main top15" style="height:280px;">
										<a  data-toggle="modal" data-target="#couser{{$key}}" class="col-md-12 pd0 list-couser wel">
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
												<img src="{{ URL::to('/img/couser')}}/{{$value->picture_couser}}" style="width:100%;">
												<div class="list-couser__price btn btn-origan2">{{number_format($value->price)}}<sup>Đ/@if($value -> typeCouser == '2') Khoá @else Giờ @endif </sup></div>
											</div>
												<div class="col-md-12 list-couser__name wel top10"> <h4> {{$value ->name_couser }} </h4> </div>
										</a>
									</div>
										@include('modal.detail-course')
										@endforeach
									</div>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="messages">
					    	<div class="col-md-12 clear pd0">

					    	 <div class="col-md-12 pd0">
						    	 <div class="rating-show">
										 <div class="col-md-2 pr0 ">
											 <ul class="user-rating">
							 					<li>
													<img src="img/icon/shooting-star.png" >
													<span >{{ $id_user[0]->sumRatings }}</span>
													<p class="top10">@if($count_id == 0) 0 @else {{$count_id}} @endif đánh giá</p>
												</li>
											</ul>
										 </div>
						    	 	<div class="content-teach col-md-2 pr0">
						    	 	<ul class="user-rating">
								    	<li><img src="img/icon/shooting-star.png" ><span> @if($count_id == 0) 0 @else {{ round(($content_teach/$count_id),2) }} @endif</span></li>
							    	 	</ul>
						    	 	<span>Nội dung dạy</span>
						    	 	</div>

						    	 	<div class="content-teach col-md-2 pr0">
						    	 		<ul class="user-rating">
							    	 		<li>
							    	 			<img src="img/icon/shooting-star.png" ><span>@if($count_id == 0) 0 @else {{ round(($learn_teach/$count_id),2) }} @endif</span>
							    	 		</li>
							    	 	</ul>
						    	 		<span>Phương pháp</span>
						    	 	</div>

						    	 	<div class="content-teach col-md-2 pr0">
							    	 	<ul class="user-rating">
							    	 		<li>
							    	 			<img src="img/icon/shooting-star.png" ><span>@if($count_id == 0) 0 @else {{ round(($price/$count_id),2) }} @endif</span>
							    	 		</li>

							    	 	</ul>
							    	 	<span>Giá cả </span>
						    	 	</div>

						    	 	<div class="content-teach col-md-2 pr0">
							    	 	<ul class="user-rating">
							    	 		<li><img src="img/icon/shooting-star.png" ><span>@if($count_id == 0) 0 @else {{ round(($feeling/$count_id),2) }} @endif</span></li>
							    	 	</ul>
							    	 	<span>Thái độ dạy </span>
						    	 	</div>

						    	 	<div class="content-teach col-md-2 pr0">
							    	 	<ul class="user-rating">
							    	 		<li><img src="img/icon/shooting-star.png" ><span>@if($count_id == 0) 0 @else {{ round(($value_get/$count_id),2) }} @endif</span></li>
							    	 	</ul>
							    	 	<span>Tiến bộ </span>
						    	 	</div>

					    	 </div>
					    	 </div>
					    	 <div class="col-md-12 top20">
									<p class="text-center top15"><i> Bạn đã học qua gia sư này rồi, hãy đánh giá ngay nhá! </i></p>
									<a class="btn btn-sm write-ratings" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample ">
									  Viết đánh giá
									</a>
								</div>
							<div class="collapse top15 col-md-12" id="collapseExample">
								<div class="col-md-12 wel">
								@if(Auth::check())
								<form class="col-md-12 pd0 form-ratings" method="POST" action="{{ url('/review-teacher') }}-{{ $id_user[0]->id }}" enctype='multipart/form-data'>
					  				{{ csrf_field() }}
								  <input type="hidden" class="id_user" name="id_user" value="{{ $id_user[0]->id }}">
									<br>
									<div class="col-md-4 pl0">
									<p class="text-center">Nội dung dạy</p>
										<div class="rating" data-vote="0">
											  <div class="star hidden">
											    <span class="full"data-value="0"></span>
											    <span class="half"data-value="0"></span>
											  </div>

											  <div class="star">

											    <span class="full" data-value="2"></span>
											    <span class="half" data-value="2.5"></span>
											    <span class="selected"></span>

											  </div>

											  <div class="star">

											    <span class="full" data-value="4"></span>
											    <span class="half" data-value="4.5"></span>
											    <span class="selected"></span>

											  </div>

											  <div class="star">

											    <span class="full" data-value="6"></span>
											    <span class="half" data-value="6.5"></span>
											    <span class="selected"></span>

											  </div>

											  <div class="star">

											    <span class="full" data-value="8"></span>
											    <span class="half" data-value="8.5"></span>
											    <span class="selected"></span>

											  </div>

											  <div class="star">
											    <span class="full" data-value="10"></span>
											    <span class="selected"></span>
											  </div>
												<div class="score hidden">
													<input type="text" name="js-score1" class="score-rating js-score">
												</div>
											</div>
									</div>
									<div class="col-md-4 pl0 ">
											<p class="text-center">Học phí</p>
											<div class="rating" data-vote="0">
												  <div class="star hidden">
												    <span class="full"data-value="0"></span>
												    <span class="half"data-value="0"></span>
												  </div>

												  <div class="star">

												    <span class="full" data-value="2"></span>
												    <span class="half" data-value="2.5"></span>
												    <span class="selected"></span>

												  </div>

												  <div class="star">

												    <span class="full" data-value="4"></span>
												    <span class="half" data-value="4.5"></span>
												    <span class="selected"></span>

												  </div>

												  <div class="star">

												    <span class="full" data-value="6"></span>
												    <span class="half" data-value="6.5"></span>
												    <span class="selected"></span>

												  </div>

												  <div class="star">

												    <span class="full" data-value="8"></span>
												    <span class="half" data-value="8.5"></span>
												    <span class="selected"></span>

												  </div>

												  <div class="star">

												    <span class="full" data-value="10"></span>
												    <span class="selected"></span>

												  </div>
													<div class="score hidden">
														<input type="text" name="js-score2" class="score-rating js-score">
													</div>
												</div>
									</div>
									<div class="col-md-4 pl0 form-ratings--none-border">
										<p class="text-center">Thái độ dạy</p>
											<div class="rating" data-vote="0">
												  <div class="star hidden">
												    <span class="full"data-value="0"></span>
												    <span class="half"data-value="0"></span>
												  </div>

												  <div class="star">

												    <span class="full" data-value="2"></span>
												    <span class="half" data-value="2.5"></span>
												    <span class="selected"></span>

												  </div>

												  <div class="star">

												    <span class="full" data-value="4"></span>
												    <span class="half" data-value="4.5"></span>
												    <span class="selected"></span>

												  </div>

												  <div class="star">

												    <span class="full" data-value="6"></span>
												    <span class="half" data-value="6.5"></span>
												    <span class="selected"></span>

												  </div>

												  <div class="star">

												    <span class="full" data-value="8"></span>
												    <span class="half" data-value="8.5"></span>
												    <span class="selected"></span>

												  </div>

												  <div class="star">

												    <span class="full" data-value="10"></span>
												    <span class="selected"></span>

												  </div>
													<div class="score hidden">
														<input type="text" name="js-score3" class="score-rating js-score">
													</div>
												</div>
									</div>
									<div class="col-md-offset-2 col-md-4 pl0 top15">
										<p class="text-center">Tiến bộ</p>
											<div class="rating" data-vote="0">
												  <div class="star hidden">
												    <span class="full"data-value="0"></span>
												    <span class="half"data-value="0"></span>
												  </div>

												  <div class="star">

												    <span class="full" data-value="2"></span>
												    <span class="half" data-value="2.5"></span>
												    <span class="selected"></span>

												  </div>

												  <div class="star">

												    <span class="full" data-value="4"></span>
												    <span class="half" data-value="4.5"></span>
												    <span class="selected"></span>

												  </div>

												  <div class="star">

												    <span class="full" data-value="6"></span>
												    <span class="half" data-value="6.5"></span>
												    <span class="selected"></span>

												  </div>

												  <div class="star">

												    <span class="full" data-value="8"></span>
												    <span class="half" data-value="8.5"></span>
												    <span class="selected"></span>

												  </div>

												  <div class="star">

												    <span class="full" data-value="10"></span>
												    <span class="selected"></span>

												  </div>
													<div class="score hidden">
														<input type="text" name="js-score4" class="score-rating js-score">
													</div>
												</div>
									</div>
									<div class="col-md-4 pl0 top15 form-ratings--none-border">
									<p class="text-center">Phương pháp dạy</p>
										<div class="rating" data-vote="0">
											  <div class="star hidden">
											    <span class="full"data-value="0"></span>
											    <span class="half"data-value="0"></span>
											  </div>

											  <div class="star">

											    <span class="full" data-value="2"></span>
											    <span class="half" data-value="2.5"></span>
											    <span class="selected"></span>

											  </div>

											  <div class="star">

											    <span class="full" data-value="4"></span>
											    <span class="half" data-value="4.5"></span>
											    <span class="selected"></span>

											  </div>

											  <div class="star">

											    <span class="full" data-value="6"></span>
											    <span class="half" data-value="6.5"></span>
											    <span class="selected"></span>

											  </div>

											  <div class="star">

											    <span class="full" data-value="8"></span>
											    <span class="half" data-value="8.5"></span>
											    <span class="selected"></span>

											  </div>

											  <div class="star">

											    <span class="full" data-value="10"></span>
											    <span class="selected"></span>

											  </div>
												<div class="score hidden">
													<input type="text" name="js-score5" class="score-rating js-score">
												</div>
											</div>
									</div>
									<input type="hidden" name="score-average" class=" score-average js-average">
									<div class="col-md-12 pd0 top30">
										<div class="col-md-2">
											<img src="{{ URL::to('img/avatar')}}/{{ Auth::user()->avatar}}" alt="..." class="img-circle" height="70" width="70">
										</div>
										<div class="col-md-10 form-ratings__write">
											<textarea rows="5" name="contentReview" class="form-control" placeholder="Nội dung đánh giá"></textarea>
											<input class="multiple-flie" type="file" name="imgRatings" accept="image/*">
										</div>
									</div>
									<div class="col-md-12">
										<div class="text-right">
										<button type="submit" class="btn btn-origan2 up-review ">Đăng</button>
										</div>
									</div>
								</form>
								@else
									<p>Bạn hãy đăng nhập để viết đánh giá </p>
								@endif
							</div>
							</div>
					    	 <div class="col-md-12 clear feedbacks">
									 	@include ('ratings.ratings')
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
												@if(App\User::checkOnline() == '1')
											    <a class="icon-caret-up online" href="#">Trực tuyến</a>
													@else
													<a class="icon-caret-up offline" href="#">Ngoại Tuyến</a>
												@endif
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
							<h4><strong>{!! $value->content !!}</strong></h4>

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
			<div class="col-md-10 pd0">
				<h5 class="name-user col-md-7"><?php $str = explode(' ', $id_user[0]->name); ?>{{end($str)}} {{reset($str)}} </h5>
				<div class="col-md-5 pd0">
					<ul class="user-rating">
					 <li>
					 		<img src="img/icon/shooting-star.png" >
							<span >{{ $id_user[0]->sumRatings }}</span>
							<p>@if($count_id == 0) 0 @else {{$count_id}} @endif  đánh giá</p>
					 </li>
				 </ul>
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
							<option value="{{ $value->id }}" data-price="{{$value->price}}" data-type="{{$value->typeCouser}}"  >{{ $value->name_couser}}</option>
						@endforeach
				</select>
				<div class="detail-register">
					<p>Dự kiến số giờ học/ngày</p>
					<input class="form-control plantime" type="number" placeholder="3 giờ"name="plantime">
					<p>Dự kiến số ngày học/tuần</p>
					<input class="form-control planmoment" type="number" placeholder="3 ngày"name="planmoment">
				</div>
				<p>Học Phí <span class="planprice"></span></p>
				<input class="form-control price-register" type="text" disabled name="price">
			<div class="col-md-12 pd0">
				<!-- Button trigger modal -->
					<button type="submit" class="btn btn-origan btn-lg contact-user">
						Đăng ký học thử
					</button>
			</div>
			<hr>
			<p class="col-md-12 pd0" style="font-size: 12px; margin-top: 20px;">
				Nếu gặp sự cố hay vấn đề khi đăng ký học, bạn vui lòng gọi đến hotline <span style="color:#fcaf00;font-weight:600">0868.505.523</span> để được hướng dẫn và hỗ trợ </p>
		</form>
		</div>
		</div>
	@endif
	</div>
	@include('modal.congratulationregistercourse')

@stop
