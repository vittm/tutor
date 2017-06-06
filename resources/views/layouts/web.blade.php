<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Wiss</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">  <!-- Link css tự style -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-awesome.css') }}"> <!-- link css font-face -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/time.css') }}">  <!-- Link css tự style -->
    <link rel="stylesheet" href="{{ URL::to('css\bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/test.css') }}">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="{{ URL::to('css/tablet.css') }}" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="{{ URL::to('css/desktop.css') }}" media="screen and (min-width: 992px)">


    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
</head>


<body>
@foreach (['success'] as $msg)
    @if(Session::has('form-' . $msg))
    <!-- <div class="flash-message">
       <p class="alert alert-{{ $msg }}"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
    </div> -->
    <div class="modal fade in" tabindex="-1" role="dialog" style="display: block;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{ Session::get('form-' . $msg) }}</h4>
      </div>
      <div class="modal-body">
      <p>Chúc mừng bạn đã đăng ký thành công <br>
      Bạn có thể đăng bài viết <a href="{{ url('/dang-tin') }}"> đăng bài</a> hoặc vào trang cá nhân của mình để chỉnh sửa thông tin cần thiết <a href="{{ url('/trang-ca-nhan')}}-{{ Auth::user()->id }}"> trang cá nhân</a>
      </p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    @endif
@endforeach

<section class="main-header">
  <nav class="container">
    <a href="{{ url('/') }}" class="col-md-3 logo">
      <img  src="{{ url('img/logo.png')}}" alt="">
      <p>Tìm giáo viên, gia sư miễn phí </p>
    </a>
    <div class="col-md-offset-2 col-md-6">
      <ul class="menu">
        <li><a href="{{ URL('tim-kiem-gia-su') }}" class="menu__item">Tìm Giáo Viên</a></li>
        <li><a href="{{ url('blog') }}" class="menu__item">Cộng đồng</a></li>

        @if (Auth::guest())
                            <li><a href="{{ url('login') }}" class="menu__item">Đăng nhập</a></li>
                        @else

                            <li class="global-header__login log--active">

                            <li>
                            @if(strlen(Auth::user()->avatar) > 1)
                                <a class="avatar" href="#"><img src="{{ URL::to('/img/avatar')}}/{{ Auth::user()->avatar }}" alt="..." class="img-circle" height="50"></a>
                            @else
                                <a class="avatar-me" href="#"><span> {{ Auth::user()->avatar }} </span></a>
                            @endif</a>

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
                                    <li><a href="{{ url('/chinh-sua-ca-nhan')}}-{{ Auth::user()->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Hồ sơ gia sư</a></li>
                                    <li><a href="{{ url('/config-profile')}}-{{ Auth::user()->id }}"><i class="fa fa-file-text-o" aria-hidden="true"></i>Sửa thông tin</a></li>
                                    <li><a href="{{url('/danh-sach-tin-nhan')}}-{{Auth::user()->id}}"><i class="fa fa-envelope-o" aria-hidden="true"></i> Hộp Tin Nhắn</a></li>
                                    @if(Auth::user()->active == 0)
                                    <li><a href="{{ url('/admin/text') }}"><i class="fa fa-cogs" aria-hidden="true"></i>Admin</a></li>
                                     <li><a href="{{ url('/thanh-toan')}}"><i class="fa fa-file-text-o" aria-hidden="true"></i>Thanh Toán</a></li>
                                    @endif
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Đăng Xuất</a></li>
                                </ul>
                            </li>
                        </li>
                        @endif
      </ul>
    </div>
  </nav>
</section>
<!-- style="background: #f7f7f7;" -->
<main class="col-md-12 pd0 main" >
        @yield('content')


</main>

    <div class="footer-home"></div>

</div>
    <script type="text/javascript" src="{{ URL::to('js/jquery-1.10.2.js') }}"></script> <!-- Link thư viện jquery -->

     <script type="text/javascript" src="{{ URL::to('js/jquery.slidizle.js') }}"></script> <!-- Link thư viện jquery -->

    <script type="text/javascript" src="{{ URL::to('js/angular.min.js') }}"></script>
     <!-- <script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
      <script type="text/javascript" src="js/currency-autocomplete.js"></script> -->
     <script type="text/javascript" src="{{ URL::to('js/kendo.all.min.js') }}"></script> <!-- Link thư viện jquery -->

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
    </script>
</body>

</html>
