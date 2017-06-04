@if(Auth::check())
@if(Auth::user()->active == 0)
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>ART</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ URL::to('assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ URL::to('assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ URL::to('assets/css/demo.css') }}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ URL::to('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
        <div class="sidebar-wrapper ">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Admin
                </a>
            </div>

            <ul class="nav">
                <li class="">
                    <a href="{{ url('/admin/listing-slide')}}">
                        <i class="pe-7s-science"></i>
                        <p>Slide</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url::to('/admin/text') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Text</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url::to('/admin/feedback') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Nhận Xét</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url::to('/admin/thanh-vien') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Thành Viên</p>
                    </a>
                </li>
                <li class="">
                    <a href="{{ url('/admin/manage-voucher')}}">
                        <i class="pe-7s-science"></i>
                        <p>Voucher</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url::to('/admin/show') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Quản lý hiển thị</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>

                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>

            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; 2016 <a href="www.witayl.com">Witayl</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ URL::to('assets/js/jquery-1.10.2.js')}} " type="text/javascript"></script>

    <!-- Ckeditor -->
    <script type="text/javascript" src="{{ URL::to('/ckeditor/ckeditor.js')}}"></script>

    <script src="{{ URL::to('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js')}}"></script>

    <!--  Charts Plugin -->
    <script src="{{ URL::to('assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ URL::to('assets/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="{{ URL::to('assets/js/light-bootstrap-dashboard.js')}}"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="{{ URL::to('assets/js/demo.js')}}"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('.onoffswitch-label').click(function(){
                $(this).parent().toggleClass('onoffswitch-checked');
                var id= $(this).parent().find('.id_edit').val();
                var getInput = $(this).parent();


                    if( getInput.hasClass('onoffswitch-checked') ){
                       var value= '1';
                    } else 
                    {
                        var value= '0';
                    }

                     $.ajax({
                        url:"{{ url('admin/update-show-index') }}-"+id+"-"+value+"",
                        type:"POST",
                        cache:false,
                        data:{'id':id,'value':value,"_token": "{{ csrf_token() }}"},
                        dataType:"html",
                        success: function(val){
                                if(val == 'ok'){

                                }
                            }
                        });
                    return false;
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>Admin</b>"

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>
    
</html>
@else
    <p>Hi</p>
@endif
@else
    <p>Hi</p>
@endif
