<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Wiis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">  <!-- Link css tự style -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-awesome.css') }}"> <!-- link css font-face -->
    <link rel="stylesheet" href="{{ URL::to('css\bootstrap.css') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <!--[if gt IE 8]><!-->
    @yield('facebook_meta')
</head>


<body>
@foreach (['success'] as $msg)
    @if(Session::has('form-' . $msg))
    <!-- <div class="flash-message">
       <p class="alert alert-{{ $msg }}"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
    </div> -->
    @include('modal.congratulationsignup')
    @endif
@endforeach

<section class="main-header">
  <nav class="container">
    <a href="{{ url('/') }}" class="col-md-3 logo">
      <img  src="{{ url('img/logo.png')}}" alt="">
      <p>Tìm giáo viên, gia sư miễn phí </p>
    </a>
    <div class="col-md-offset-2 col-md-7">
      <ul class="menu" style="margin-top: @if (Auth::guest()) 3rem @else 1rem @endif">
        <li><a href="{{ URL('tim-kiem-gia-su') }}" class="menu__item">Tìm Giáo Viên</a></li>
        @if (Auth::guest())
                            <li><a href="{{ url('login') }}" class="menu__item">Đăng nhập</a></li>
                            <li><a href="{{ url('/register') }}" class="menu__item">Đăng Ký</a></li>
                            <li><a href="0868505523" class="menu__item" style="color:#3f51b5;">0868 505 523</a></li>
                        @else

                            <li class="global-header__login log--active">

                            <li>
                                <a class="avatar" href="{{ url('/trang-ca-nhan')}}-{{ Auth::user()->id }}-{{App\User::convert_string(Auth::user()->name)}}"><img src="{{ URL::to('/img/avatar')}}/{{ Auth::user()->avatar }}" alt="..." class="img-circle" height="50"></a>
                            @if($mess > 0)
                            <a class="notification_mess" href="{{url('/danh-sach-tin-nhan')}}-{{Auth::user()->id}}"><img src="{{ URL::to('/img/icon')}}/speech-bubble.png"><span>{{ $mess }} </span>
                            </a>
                            @endif</li>
                            <li class="dropdown">
                                <span class="user-name hidden">{{ Auth::user()->name }}</span>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li><a href="{{ url('/chinh-sua-ca-nhan')}}-{{ Auth::user()->id }}"></i>Chỉnh sửa hồ sơ</a></li>
                                    @if(Auth::user()->active == 2 )
                                    <li><a href="{{ url('/couser/add')}}-{{ Auth::user()->id }}">Quản lý khóa học</a></li>
                                    <li><a href="{{ url('/quan-ly-hoc-vien')}}"></i>Học viên đăng ký học</a></li>
                                    @endif
                                    @if(Auth::user()->active == 0)
                                    <li><a href="{{ url('/admin/text') }}"></i>Admin</a></li>
                                    @endif
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Đăng Xuất</a></li>
                                </ul>
                            </li>
                        </li>
                        @endif

                        <li><a  @if (Auth::check()) data-toggle="dropdown" id="notification" role="button" aria-expanded="false"  href="{{ url('/profile/notification')}}"  @else href="{{ url('/login') }}" @endif class="menu__item" style="position:realative;"><img src="{{ URL::to('/img/icon/earth.svg')}}" alt="..." class="img-circle" height="20"><span class="notify">@if(Auth::check()){{$quanlityNotify}}@else 1 @endif</span></a>
                          @if (Auth::check())
                            <ul class="dropdown-menu notificationn" role="menu" aria-labelledby="notification"style="float:right">
                              <a class="list-group-item active" style="padding:5px;border-radius: 0;text-align: left;background:#fdb000;border-color: #fdb000;"> Thông báo </a>
                              <li role="separator" class="divider"></li>
                              @foreach ($notify as $value)
                                <li><a href="{{ url('/profile/notification/details')}}-{{ $value->id }}"><img src="{{ url('img/logo.png')}}" width="35px">{{ $value->name_notification }}</a></li>
                                 <li role="separator" class="divider"></li>
                              @endforeach
                              @if(Auth::check() )
                              <li><a class="btn btn-group-xs grey" href="{{ url('/profile/notification')}}"> @if($quanlityNotify > 5) Xem Tiếp @else Xem tất cả @endif</a></li>
                              @endif

                            </ul>
                            @endif
                        </li>

      </ul>
    </div>
  </nav>
</section>
<!-- style="background: #f7f7f7;" -->
<main class="col-md-12 pd0 main" >
        @yield('content')
</main>
    <div class="col-md-12 footer-home">
        <div class="col-md-12 pd0">
          <div class="container pd0">
            <div class="col-md-3 top15 pd0">
              <a href="{{ url('/') }}" class="col-md-12 logo">
                <img  src="{{ url('img/logo.png')}}" alt="">
                <p>Tìm giáo viên, gia sư miễn phí </p>
              </a>
            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-3">
              <a href="{{ url('login') }}" class="btn btn-origan btn-sm top15" style="float: right;position:relative;top:24px;">
                  Đăng nhập
              </a>
            </div>
          </div>
        </div>
        <div  class="col-md-12" ng-controller="menuCtrl">
          <div class="container footer-general">
                <div class="container">
                    <div class="top">
                        <div class="col-md-3 float-left">
                            <a href="">
                                <h5 >GIỚI THIỆU </h5>
                            </a>
                            <a href="#"> Về chúng tôi </a> <br>
                            <a href="#"> Cách thức hoạt động </a><br>
                            <a href="#"> Điều khoản sử dụng </a><br>
                        </div>
                        <div class="col-md-3 float-left">
                            <a href="">
                                <h5 >HỖ TRỢ </h5>
                            </a>
                            <a href="#"> Hướng dẫn giáo viên </a> <br>
                            <a href="#"> Hướng dẫn học viên </a><br>
                            <a href="#"> Những câu hỏi thường gặp </a><br>
                        </div>
                        <div class="col-md-3 float-left">
                          <a href="">
                              <h5>KẾT NỐI QUA FANPAGE: </h5>
                          </a>

                        </div>

                        <div class="col-md-3 text-center float-left">
                              <a href="">
                                  <h5>LIÊN HỆ</h5>
                              </a>
                              <p>
                                  Email: <a onclick="GA('Footter', 'ClickEmail', window.pageName);" href="" class="link green">hi@wiis.edu.vn</a>
                              </p>
                              <p>
                                  Hotline: <a onclick="GA('Footter', 'ClickHotline', window.pageName);" href="" class="link green"> 0868 505 523</a>
                              </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </div>
</div>
    <script type="text/javascript" src="{{ URL::to('js/jquery-1.10.2.js') }}"></script> <!-- Link thư viện jquery -->

     <script type="text/javascript" src="{{ URL::to('js/jquery.slidizle.js') }}"></script> <!-- Link thư viện jquery -->

     <script type="text/javascript" src="{{ URL::to('js/jquery.autocomplete.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::to('js/currency-autocomplete.js') }}"></script>

    <script type="text/javascript" src="{{ URL::to('js/scripts.js') }}"></script>   <!--- Link jquery tự viết-->
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.js') }}"></script>   <!--- Link jquery tự viết-->
    <script src="{{ URL::to('js/drop_uploader.js') }}"></script>
    <script>
       $(document).ready(function(){
           $('.multiple-flie').drop_uploader({
               uploader_text: '',
               browse_text: 'File cần tải lên',
               browse_css_class: 'button button-primary',
               browse_css_selector: 'file_browse',
               uploader_icon: '<i class="pe-7s-cloud-upload"></i>',
               file_icon: '<i class="pe-7s-file"></i>',
               time_show_errors: 5,
               layout: 'thumbnails',
               method: 'normal'
           });
       });
   </script>

 <script type="text/javascript" src="{{ URL::to('/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">

    @if (isset($_GET['tab']) == true)
      @if($_GET['tab'] == 'info')
        $('a[href="#info"]').tab('show');
      @endif
      @if($_GET['tab'] == 'settings')
        $('a[href="#settings"]').tab('show');
      @endif
      @if($_GET['tab'] == 'messages')
        $('a[href="#messages"]').tab('show');
      @endif
      $('body').animate({scrollTop: 300}, 700);
    @endif
    @if(isset($_GET['register']) == true && Session::get('name_couser') != null)
      @if($_GET['register'] == 'true')
        $('#register-finish').modal('show');
      @endif
    @endif
    @if(isset($_GET['khoa-hoc']))
      var course = $_GET('khoa-hoc');
      $('#'+course).modal('show');
      var title = $('#'+course+' .couser-header__title').text();
      var des = $('#'+course+' .couser-header__program').text();
      var img = $('#'+course+' .couser-header__images').attr('src');
      $("meta[property='og:title']").attr("content",title);
      $("meta[property='og:description']").attr("content",des);
      $("meta[property='og:image']").attr("content",img);
    @endif
    $('.list-couser').click(function(){
      var course = $(this).attr('data-target');
      var title = $(course+' .couser-header__title').text();
      var des = $(course+' .couser-header__program').text();
      var img = $(course+' .couser-header__images').attr('src');
      $("meta[property='og:title']").attr("content",title);
      $("meta[property='og:description']").attr("content",des);
      $("meta[property='og:image']").attr("content",img);
    });
    @if(Session::has('form-' . $msg))
      $('#congratulationsignup').modal('show');
    @endif
    $('.close-register').click(function(){
      {{ session()->forget('name_user','name_couser','giftcode','teacher','pricecourse') }}
    });
    $('body').click(function(){
      {{ session()->forget('name_user','name_couser','giftcode','teacher','pricecourse') }}
    });
    $('.click-voucher').click(function(e){
        var id = $('.voucher').val();
        var session = window.sessionStorage,
        data = JSON.parse(session.getItem('cart'));
        e.preventDefault();
        $.ajax({
            url:"{{ url('/voucher') }}-"+id+"",
            type:"POST",
            cache:false,
            data:{'id':id,"_token": "{{ csrf_token() }}"},
            dataType:"html",
            success: function(val){
                    $('.write-price').text(data.price - val);
                    var data_price = data.price - val;
                    $('.pay').attr('href','https://www.nganluong.vn/button_payment.php?receiver=uyendao0302@gmail.com&product_name='+data.item+'&price='+data_price+'&return_url=http://witayl.com');
                }

            });
        return false;
    });
    $('.btn-follow').click(function(e){
        var id = $('.id_follow').val();
        var user_id = $('.user_id_follow').val();
        e.preventDefault();
        $.ajax({
            url:"{{ url('/follow') }}-"+id+"-"+user_id+"",
            type:"get",
            cache:false,
            data:{'id':id,'user_id':user_id,"_token": "{{ csrf_token() }}"},
            dataType:"html",
            success: function(val){
                  if(val == 'okay') {
                      $('.btn-follow').text('Đang theo dõi');
                  }else {
                      $('.btn-follow').text('Theo dõi');
                  }
                }
            });
        return false;
    });
    var $timeline_block = $('.cd-timeline-block');

    //hide timeline blocks which are outside the viewport
    $timeline_block.each(function(){
        if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
            $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
        }
    });

    //on scolling, show/animate timeline blocks when enter the viewport
    $(window).on('scroll', function(){
        $timeline_block.each(function(){
            if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
                $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
            }
        });
    });
    $('#form-couser').modal('show');

    $('.click-heart').click(function(e){
        var id = $(this).attr('value');
        var key = $(this).attr('id');
        var value= parseInt($(this).text()) + 1 ;
        var t_this = $(this);
        e.preventDefault();
        $.ajax({
            url:"{{ url('/comments/like') }}-"+id+"",
            type:"post",
            cache:false,
            data:{'id':id,"_token": "{{ csrf_token() }}"},
            dataType:"html",
            success: function(val){
                  if(val == 'okay') {
                      $(t_this).attr('id',key).children().text( value);
                      $(t_this).attr('id',key).css('color','#eb0e0e');
                  }
                }
            });
        return false;
    });
    </script>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '240802339771076',
          xfbml      : true,
          version    : 'v2.9'
        });
        FB.AppEvents.logPageView();
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>
