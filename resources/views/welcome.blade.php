@extends('layouts.web')

@section('content')
<section>
<!-- progressbar -->
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
		</section>
    <form class="container" action="{{ url('/tim-kiem-gia-su') }}" role="form" method="GET" enctype='multipart/form-data'>
        <ul class="col-md-offset-2 col-md-10 search">
						<li><input type="text" placeholder="Địa điểm" name="address-find" id="address-find"><img src="img/icon/placeholder.png"></li>
						<li><input type="text" placeholder="Môn học" name="valueSubject"  id="subject-find" ><img src="img/icon/open-book.png" aria-describedby="inputSuccess2Status">
								<input type="hidden" name="valueSubject" id="field" >
						</li>
						<li><input type="text" placeholder="Hình thức họcc" name="course" id="course"><img src="img/icon/bar-chart.png">
							<input type="hidden"  name="coursehidden" class="coursehidden">
						</li>
            <li class="icon-search submit_search">
            <button type="submit" name="academic" placeholder=""><img src="img/icon/search.png"></button></li>
        </ul>
    </form>
		<br>

    <div class="container ">
        <div class="why-select top30">VÌ SAO GIA SƯ CHỌN <img src="img/logo.png" style="position:relative; top: -9px;"></div>
    </div>
		<div class="container ">
    <div class="col-md-offset-2 col-md-8" style="background:url({{ url('img/bg_why.png')}})">
        <ul class="timeline">
            <li class="timeline-item">
                <figure class="timeline-icon">
                    <img src="img/VectorSmartObject_1.png" alt="timeline" />
                </figure>
                <div class="dir-l radius-3">
                        <h1>Chi phí thấp</h1>
                        <p> Phasellus dapibus pulvinar venenatis. Suspendisse turpis ipsum, venenatis in ipsum id, viverra ultricies quam. </p>
                </div>
            </li>

            <li class="timeline-item">
                <figure class="timeline-icon">
                    <img src="img/VectorSmartObject.png" alt="course" />
                </figure>
                <div class="dir-r radius-3">
                        <h1 style="text-align: left;">Tối đa hóa thu nhập</h1>
                        <p> Phasellus dapibus pulvinar venenatis. </p>
                </div>
            </li>
            <li class="timeline-item">
                <figure class="timeline-icon">
                    <img src="img/VectorSmartObject_0.png" alt="course" />
                </figure>
                <div class="dir-l radius-3">
                        <h1> Nhanh chóng </h1>
                        <p> Phasellus dapibus pulvinar venenatis. Suspendisse turpis ipsum, venenatis in ipsum id, viverra ultricies quam.</p>
                </div>
            </li>
        </ul>
    </div>
	</div>
	<br>
	<br>
    <div class="container">
        <div class="why-select top30"> CÂU HỎI VỚI <img src="img/logo.png" style="position:relative; top: -9px;"></div>
    </div>
    <div class="container social">
    <!-- <div class="col-md-6 line-straight col-one">
        <h3 class="u-text-right">News</h3>
        <a href="#" class="col-sm-6 col-md-6 u-padding-rt2p5">
            <div class="thumbnail">
                <img src="img/SchooluniformofJapan.png" alt="...">
                <div class="caption">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
        </a>
        <a href="#" class="col-sm-6 col-md-6 u-padding-lf2p5">
            <div class="thumbnail">
                <img src="img/SchooluniformofJapan.png" alt="...">
                <div class="caption">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
        </a>
        <a href="#" class="col-sm-12 col-md-12">
            <div class="thumbnail thumbnail-last">
            <img src="img/bannerweb.png" alt="...">
                <div class="caption">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
        </a>
    </div> -->

    <div class="col-md-12 col-two">
        <h3 class="u-text-left">Anythings</h3>
        <ul class="question-social col-md-6">
            <li>
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</h5>
                <span>Câu trả lời hay nhất</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <!-- <button>Trả lời</button> -->
            </li>
            <li>
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</h5>
                <span>Câu trả lời hay nhất</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <!-- <button>Trả lời</button> -->
            </li>
            <li>
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</h5>
                <span>Câu trả lời hay nhất</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <!-- <button>Trả lời</button> -->
            </li>
        </ul>
				<ul class="question-social col-md-6">
            <li>
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</h5>
                <span>Câu trả lời hay nhất</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <!-- <button>Trả lời</button> -->
            </li>
            <li>
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</h5>
                <span>Câu trả lời hay nhất</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <!-- <button>Trả lời</button> -->
            </li>
            <li>
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</h5>
                <span>Câu trả lời hay nhất</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <!-- <button>Trả lời</button> -->
            </li>
        </ul>
    </div>
		<div class="col-md-12 pd0 top30">
    <h4 style="text-align: center; color: #161542;font-style: italic; display: block;">Bạn có thắc mắc với môn học của mình, hãy hỏi gia sư của chúng tôi ngay!</h4>
    <button style="border: 1px solid #fdb000; color: #fdb000;padding-top: 5px; padding-bottom: 5px;border-radius: 8px; margin: auto; display: block;background: transparent;
    ">Đặt câu hỏi ngay</button>
	</div>
    </div>
</section>
<br>
<br>
    <div class="container @if($show[2]->value != '1') hidden @endif">
        <h3 class="text-center"> CÁC MÔN HỌC NỔI BẬT </h3>
    <ul class="listing-subject-hot top30">
        <li class="col-md-4">
            <a href="{{ url('/find-teach?valueField=&valueSubject=english')}}"class="thumbnail col-md-12">
                <img src="img/Layer3.png" alt="...">
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
                <img src="img/Layer3.png" alt="...">
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
                <img src="img/Layer3.png" alt="...">
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
                <img src="img/mathematics702x336.png" alt="...">
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
                <img src="img/researchlab2.png" alt="...">
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
                <img src="img/PitchDropMarch2013cr.png" alt="...">
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
                <img src="img/accountantcopy.png" alt="...">
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
                <img src="img/manreadingwebprogram.png" alt="...">
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


<style>
.main {
	margin-top: 0;
}
</style>

@endsection
