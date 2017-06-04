<div id="mod-footer" class="ng-scope clear" ng-controller="menuCtrl">

    <div class="content footer-general">
        <div class="container">
            <div class="top">
                <div class="col-md-4 float-left">
                    <a href="">
                        <h2>GIA SƯ </h2>
                    </a>
                    <p>
                        Cộng đồng kết nối giữa các học viên và các giáo viên.
                    </p>
                    <p>
                        Email: <a onclick="GA('Footter', 'ClickEmail', window.pageName);" href="" class="link green">hello@giasu.vvvv</a>
                    </p>
                    <p>
                        Hotline: <a onclick="GA('Footter', 'ClickHotline', window.pageName);" href="" class="link green">(+84) 969 765 955</a>
                    </p>
                </div>

                <div class="col-md-6 float-left list-footer">
                    <div class="col-md-4 float-left">
                        <p class="head">
                            GIÁO VIÊN
                        </p>
                        <p><a href="">
                            Danh sách giáo viên
                        </a></p>
                        <p><a onclick="GA('Footter', 'ClickBecomATutorButton', window.pageName);" href="">
                            Trở thành giáo viên
                        </a></p>
                        <p><a href="">
                            Cách thức dạy
                        </a></p>
                    </div>
                    <div class="col-md-4 float-left">
                        <p class="head">
                            HỌC VIÊN
                        </p>
                        <p><a onclick="GA('Footter', 'ClickRegisterClassButton', window.pageName);" href="">
                            Đăng ký học
                        </a></p>
                        <p><a href="">
                            Blog
                        </a></p>
                        <p><a href="">
                            Cách thức học
                        </a></p>
                    </div>
                    <div class="col-md-4 float-left">
                        <p class="head">
                            VỀ CHÚNG TÔI
                        </p>
                        <p><a href="">
                            Về chúng tôi
                        </a></p>
                        <p><a href="">
                            Cách thức hoạt động
                        </a></p>
                        <p><a href="">
                            Điều khoản sử dụng
                        </a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-2 text-center float-left list-footer">
                        <p>Kết nối với chúng tôi </p>
                                        <div class="images">
                        <a onclick="GA('Footter', 'ClickFacebook', window.pageName);" href="" target="_blank">
                            <img src="http://antoree.com/public/images/New-Layout/facebook.png" alt="">
                        </a>
                        <a onclick="GA('Footter', 'ClickInstagram', window.pageName);" href="" target="_blank">
                            <img src="http://antoree.com/public/images/New-Layout/instagram.png" alt="">
                        </a>
                        <a onclick="GA('Footter', 'ClickSkype', window.pageName);" href="">
                            <img src="http://antoree.com/public/images/New-Layout/skype.png" alt="">
                        </a>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="footer-home"></div>

</div>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <!-- Link thư viện jquery -->
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <!--- Link jquery tự viết-->

        <script type="text/javascript" src="js/scripts.js"></script>
        <!--- Link jquery tự viết-->
        
        <script type="text/javascript" src="{{ URL::to('/ckeditor/ckeditor.js')}}"></script>
	<script type="text/javascript">
            $(function(){
            $('.comment__information__reply').click(function(e){    
                  $(this).closest('.comment__body__actions').children('.comments__reply').show();
                  e.preventDefault();
              });
            });
          </script>
          <script type="text/javascript">
            function clickdesktop( button, content) {
                $(document).on('click', function (e) {
                    $('.' + content).hide();
                });
                $('.' + button + ',' + '.' + content).on('click', function (e) {
                    e.stopPropagation();
                });
            }
            clickdesktop('dropdown__link', 'dropdown__menu');
              $('.dropdown__link').click(function(e){
                $('.dropdown__menu').show();
                e.preventDefault();
              });
          </script>
          <script type="text/javascript">
            $('.button-follow').click(function(e){
              e.preventDefault();
               var iduser= $('.iduser').val();
                $.ajax({
                    url:"{{ url('/folower') }}-"+iduser+"",
                    type:"POST",
                    cache:false,
                    data:{'iduser':iduser,"_token": "{{ csrf_token() }}"},
                    dataType:"html",
                    success: function(data){
                        if(data=='oke'){
                          $('.button-follow').text('Folowing').addClass('button--upvoted');
                         }
                        }

                    });
                    return false;
                });
          </script>
          <script type="text/javascript">
            $('.comment-vote__upvote').click(function(e){
              e.preventDefault();
                var id = $(this).closest('.comment-vote').find('.idVoteComment').val();
                $.ajax({
                    url:"{{ url('/voteup-comment') }}-"+id+"",
                    type:"POST",
                    cache:false,
                    data:{'id':id,"_token": "{{ csrf_token() }}"},
                    dataType:"html",
                    success: function(data){
                        if(data =='oke'){
                         $('.comment-vote__score[data-reactive*=' + id + ']').each(function () {
                            var value = $(this).text();
                            var sumValue= parseFloat(value) + 1;
                            $(this).text(sumValue);
                          });
                         }
                        }

                    });
                    return false;
                });
          </script>
          <script type="text/javascript">
            $('.comment-vote__downvote').click(function(e){
              e.preventDefault();
                var id = $(this).closest('.comment-vote').find('.idVoteComment').val();
                $.ajax({
                    url:"{{ url('/votedown-comment') }}-"+id+"",
                    type:"POST",
                    cache:false,
                    data:{'id':id,"_token": "{{ csrf_token() }}"},
                    dataType:"html",
                    success: function(data){
                        if(data =='oke'){
                         $('.comment-vote__score[data-reactive*=' + id + ']').each(function () {
                            var value = $(this).text();
                            var sumValue= parseFloat(value) - 1;
                            $(this).text(sumValue);
                          });
                         }
                        }

                    });
                    return false;
                });
          </script>

          <script type="text/javascript">
            $('.button--upvote').click(function(e){
              e.preventDefault();
                var id = $(this).closest('.vote__upvote').find('.idpost').val();
                $.ajax({
                    url:"{{ url('/upvote') }}-"+id+"",
                    type:"POST",
                    cache:false,
                    data:{'id':id,"_token": "{{ csrf_token() }}"},
                    dataType:"html",
                    success: function(data){
                        if(data =='oke'){
                         $('.button--upvote__score[data-reactid*=' + id + ']').each(function () {
                            var value = $(this).text();
                            var sumValue= parseFloat(value) + 1;
                            $(this).text(sumValue);
                          });
                         $('.button--upvote__score[data-reactid*=' + id + ']').each(function () {
                            $(this).closest('.button--upvote').addClass('button--active');
                          });
                         }
                        }

                    });
                    return false;
                });
          </script>
          <script type="text/javascript">
            $('.button--downvote').click(function(e){
              e.preventDefault();
                var id = $(this).closest('.vote__downvote').find('.idpost').val();
                $.ajax({
                    url:"{{ url('/downvote') }}-"+id+"",
                    type:"POST",
                    cache:false,
                    data:{'id':id,"_token": "{{ csrf_token() }}"},
                    dataType:"html",
                    success: function(data){
                        if(data =='oke'){
                         $('.button--upvote__score[data-reactid*=' + id + ']').each(function () {
                            var value = $(this).text();
                            var sumValue= parseFloat(value) + -1	;
                            $(this).text(sumValue);
                          });
                         $('.button--upvote__score[data-reactid*=' + id + ']').each(function () {
                            $(this).closest('.button--upvote').addClass('button--active');
                          });
                         }
                        }

                    });
                    return false;
                });
          </script>

