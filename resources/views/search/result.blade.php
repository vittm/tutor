<div class="col-xs-12 col-sm-12 col-md-12 pd0 top30 list-profile" data-href='{{ url('/trang-ca-nhan')}}-{{$value->id_uni}}-{{App\User::convert_string($value->name)}}?tab=info'>
		<div class="col-xs-12 col-sm-12 col-md-12 pd0 information-profile">
			<div class="col-md-4">
				<img src="{{ URL::to('img/avatar')}}/{{ $value->avatar}}" alt="..." class="img-circle dl" height="120" width="120">
				<h4 class="text-center"><?php $str = explode(' ', $value->name); ?>{{end($str)}} {{reset($str)}} <img class="sticker-verify" src="{{ URL::to('img/icon/VectorSmartObjectcop.png')}}" alt=""></h4>
				<p  class="text-center">@if($value->ward != "") {{ $value->district }}, @endif @if($value->city != " ") {{ $value->city }} @endif</p>
		    </div>
			<div class="col-md-8">
				<h4 class="information-profile--title">{{ $value-> title }} </h4>
				<?php
					$count_student = DB::table('registercousers')->where('id_teacher', '=', $value->id)->count();
					$count_comments = DB::table('comments')->where('id_post', '=', $value->id)->count();
				?>
				<div class="col-xs-4 col-sm-4 col-md-4 pd0 top15">
					<img class="action-menu__icon dl" src="{{ URL::to('img/icon/VectorSmartObject_1.png')}}" alt="" >
					<p class="action-menu__counter text-center">{{$count_student}} Học viên</p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4  top15">
					<img class="action-menu__icon dl" src="{{ URL::to('img/icon/VectorSmartObject.png')}}" alt="">
					<p class="action-menu__counter text-center" style="margin-top: 9px;">{{ $value->experience }} Kinh nghiệm</p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 pd0 top15">
					<img class="action-menu__icon dl" src="{{ URL::to('img/icon/VectorSmartObject_0.png')}}" alt="">
					<p class="action-menu__counter text-center" style="margin-top: 9px;">{{$count_comments}} Hỏi đáp</p>
				</div>
				<div class="col-xs-12 col-md-12">
					@if($value-> jobs != null)<button class="btn btn-origan btn-jobs" style="float: left!important;">
						{{App\User::jobs($value->jobs)}}
					</button>@endif
				</div>
			</div>
		</div>

		<div class="user-rating--main">
			<ul class="user-rating">
					<li><img src="{{ URL::to('img/icon/shooting-star.png')}}"><span>{{ $value->sumRatings }} </span></li>
				</ul>
		</div>
</div>
