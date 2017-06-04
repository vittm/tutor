@extends('layouts.web')

@section('content')
<section>
{{-- <!-- progressbar -->
		<section id="progressbar-slider" class="sample slider--animated @if($show[0]->value != '1') hidden @endif" data-slidizle data-slidizle-loop="true" data-slidizle-timeout="3000" data-slidizle-pause-on-hover="true">

			<ul class="slider-content" data-slidizle-content>
			@foreach($slide as $key => $value)
				<li data-slidizle-slide-id="slide{{$key + 1}}" style="background-image:url('{{ url('img/slider')}}/{{ $value->images_slide }}')">
					<header>
						<h2 class="title-slider">{{ $value->title_big }}</h2>
						<h3 class="title-slider">{{ $value->title_small }}</h3>
						<a class="section__btn" href="" target="_blank">{{ $value->name_button }}</a>
					</header>
				</li>
			@endforeach
			</ul>
			
			<div class="slider-next" data-slidizle-next>
				<i class="fa fa-arrow-right"></i>
			</div>
			<div class="slider-previous" data-slidizle-previous>
				<i class="fa fa-arrow-left"></i>
			</div>

			<div class="slider-progressbar"></div>

			<ul class="slider-navigation" data-slidizle-navigation>
				@foreach($slide as $key => $value)
				<li class="slider-navigation-item" data-slidizle-slide-id="slide{{$key + 1}}" style="background-image:url('{{ url('img/slider')}}/{{ $value->images_slide }}')">
				</li>
				@endforeach
			</ul>

			<div class="slidizle-loading"> </div>
		</section> --}}
    <form class="container" action="{{ url('/find-teach') }}" role="form" method="GET" enctype='multipart/form-data'>
        <ul class="offset-md-1 col-md-10 search">
            <li><input type="text" placeholder="Địa điểm" name="address-find"><img src="img/icon/placeholder.png"></li>
            <li><input type="text" placeholder="Lĩnh Vực" name="valueField" type="text" aria-describedby="inputSuccess2Status"><img src="img/icon/multi-tab.png"></li>
            <li><input type="text" placeholder="Môn học" name="valueSubject"><img src="img/icon/open-book.png" aria-describedby="inputSuccess2Status" id="subject-find" ></li>
            <li><input type="text" placeholder="Nội dung học" name="contentSubject"><img src="img/icon/bar-chart.png"></li>
            <li class="icon-search submit_search">
            <button type="submit" name="academic" placeholder=""><img src="img/icon/search.png"></button></li>
        </ul>
    </form>

    <div class="container">
        <div class="why-select">VÌ SAO GIA SƯ CHỌN <img src="img/logo.png"></div>
    </div>
    <div class="container">
        <ul class="timeline">   
            <li class="timeline-item">
                <figure class="timeline-icon">
                    <img src="img/icon/placeholder.png" alt="timeline" />
                </figure>
                <div class="dir-l radius-3">
                        <h1>Chi phí thấp</h1>
                        <p> Phasellus dapibus pulvinar venenatis. Suspendisse turpis ipsum, venenatis in ipsum id, viverra ultricies quam. Proin eu orci non tortor cursus bibendum quis maximus tellus. Suspendisse imperdiet fermentum consectetur. Nunc euismod, turpis ut condimentum posuere, justo augue varius magna, non dapibus lectus lorem ac metus. Pellentesque augue enim, congue vehicula eleifend id, congue a tellus. Donec at est in felis rhoncus rutrum in ac leo.</p>
                </div>
            </li>

            <li class="timeline-item">
                <figure class="timeline-icon">
                    <img src="img/icon/placeholder.png" alt="course" />
                </figure>
                <div class="dir-r radius-3">
                        <h1>Tối đa hóa thu nhập</h1>
                        <p> Phasellus dapibus pulvinar venenatis. Suspendisse turpis ipsum, venenatis in ipsum id, viverra ultricies quam. Proin eu orci non tortor cursus bibendum quis maximus tellus. Suspendisse imperdiet fermentum consectetur. Nunc euismod, turpis ut condimentum posuere, justo augue varius magna, non dapibus lectus lorem ac metus. Pellentesque augue enim, congue vehicula eleifend id, congue a tellus. Donec at est in felis rhoncus rutrum in ac leo.</p>
                </div>
            </li>
            <li class="timeline-item">
                <figure class="timeline-icon">
                    <img src="img/icon/placeholder.png" alt="course" />
                </figure>
                <div class="dir-l radius-3">
                        <h1> Nhanh chóng </h1>
                        <p> Phasellus dapibus pulvinar venenatis. Suspendisse turpis ipsum, venenatis in ipsum id, viverra ultricies quam. Proin eu orci non tortor cursus bibendum quis maximus tellus. Suspendisse imperdiet fermentum consectetur. Nunc euismod, turpis ut condimentum posuere, justo augue varius magna, non dapibus lectus lorem ac metus. Pellentesque augue enim, congue vehicula eleifend id, congue a tellus. Donec at est in felis rhoncus rutrum in ac leo.</p>
                </div>
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="why-select"> CỘNG ĐỒNG <img src="img/logo.png"></div>
    </div>
    <div class="container social">
    <div class="col-md-6 line-straight col-one">
        <h3 class="u-text-right">News</h3>
        <a href="#" class="col-sm-6 col-md-6 u-padding-rt2p5">
            <div class="thumbnail">
                <img src="img/15894445_838530309639542_2349149972623187983_n.jpg" alt="...">
                <div class="caption">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
        </a>
        <a href="#" class="col-sm-6 col-md-6 u-padding-lf2p5">
            <div class="thumbnail">
                <img src="img/15894445_838530309639542_2349149972623187983_n.jpg" alt="...">
                <div class="caption">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
        </a>
        <a href="#" class="col-sm-12 col-md-12">
            <div class="thumbnail thumbnail-last">
            <img src="img/12806213_10154113581409903_7694427345698942710_n.jpg" alt="...">
                <div class="caption">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-6 col-two">
        <h3 class="u-text-left">Anythings</h3>
        <ul class="question-social">
            <li>
                <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</h6>
                <span>Câu trả lời hay nhất</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <button>Trả lời</button>
            </li>
            <li>
                <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</h6>
                <span>Câu trả lời hay nhất</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <button>Trả lời</button>
            </li>
            <li>
                <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</h6>
                <span>Câu trả lời hay nhất</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <button>Trả lời</button>
            </li>
        </ul>
    </div>
    <h4>Bạn có thắc mắc với môn học của mình, hãy hỏi gia sư của chúng tôi ngay!</h4>
    <button>Đặt câu hỏi ngay</button>
    </div>
</section>
    <div class="container @if($show[2]->value != '1') hidden @endif">
        <h3> CÁC MÔN HỌC NỔI BẬT </h3>
    <ul class="listing-subject-hot">
        <li class="col-md-4">
            <a href="{{ url('/find-teach?valueField=&valueSubject=english')}}"class="thumbnail col-md-12">
                <img src="img/12806213_10154113581409903_7694427345698942710_n.jpg" alt="...">
                <div class="caption">
                    <h3> Tiếng Anh</h3>
                    <ul>
                        <li> <span>14 </span> Lớp học</li>
                        <li> <span>10 </span> Gia sư </li>
                        <li> <span>32 </span> Học viên</li>
                    </ul>
                </div>

            </a>
        </li>
        <li class="col-md-4">
            <a class="thumbnail col-md-12">
                <img src="img/12806213_10154113581409903_7694427345698942710_n.jpg" alt="...">
                <div class="caption">
                    <h3> Tiếng Anh</h3>
                    <ul>
                        <li> <span>14 </span> Lớp học</li>
                        <li> <span>10 </span> Gia sư </li>
                        <li> <span>32 </span> Học viên</li>
                    </ul>
                </div>

            </a>
        </li>
        <li class="col-md-4">
            <div class="thumbnail">
                <img src="img/12806213_10154113581409903_7694427345698942710_n.jpg" alt="...">
                <div class="caption">
                    <h3> Tiếng Anh</h3>
                    <ul>
                        <li> <span>14 </span> Lớp học</li>
                        <li> <span>10 </span> Gia sư </li>
                        <li> <span>32 </span> Học viên</li>
                    </ul>
                </div>

            </div>
        </li>
        <li class="col-md-4">
            <div class="thumbnail">
                <img src="img/12806213_10154113581409903_7694427345698942710_n.jpg" alt="...">
                <div class="caption">
                    <h3> Tiếng Anh</h3>
                    <ul>
                        <li> <span>14 </span> Lớp học</li>
                        <li> <span>10 </span> Gia sư </li>
                        <li> <span>32 </span> Học viên</li>
                    </ul>
                </div>

            </div>
        </li>
        <li class="col-md-4">
            <div class="thumbnail">
                <img src="img/12806213_10154113581409903_7694427345698942710_n.jpg" alt="...">
                <div class="caption">
                    <h3> Tiếng Anh</h3>
                    <ul>
                        <li> <span>14 </span> Lớp học</li>
                        <li> <span>10 </span> Gia sư </li>
                        <li> <span>32 </span> Học viên</li>
                    </ul>
                </div>

            </div>
        </li>
        <li class="col-md-4">
            <div class="thumbnail">
                <img src="img/12806213_10154113581409903_7694427345698942710_n.jpg" alt="...">
                <div class="caption">
                    <h3> Tiếng Anh</h3>
                    <ul>
                        <li> <span>14 </span> Lớp học</li>
                        <li> <span>10 </span> Gia sư </li>
                        <li> <span>32 </span> Học viên</li>
                    </ul>
                </div>

            </div>
        </li>
        <li class="col-md-6">
            <div class="thumbnail">
                <img src="img/15894445_838530309639542_2349149972623187983_n.jpg" alt="...">
                <div class="caption">
                    <h3> TIẾNG ANH </h3>
                    <ul>
                        <li> 14 Lớp học</li>
                        <li> 10 Gia sư</li>
                        <li> 32 Học viên</li>
                    </ul>
                </div>

            </div>
        </li>
        <li class="col-md-6">
            <div class="thumbnail">
                <img src="img/15894445_838530309639542_2349149972623187983_n.jpg" alt="...">
                <div class="caption">
                    <h3> TIẾNG ANH </h3>
                    <ul>
                        <li> 14 Lớp học</li>
                        <li> 10 Gia sư</li>
                        <li> 32 Học viên</li>
                    </ul>
                </div>

            </div>
        </li>
    </ul>
    </div>

	


@endsection
