<div class="modal fade in" tabindex="-1" role="dialog" id="congratulationsignup">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-md-12 pd0">
      <div class="modal-body pd0" style="padding-top:0">
        <div class="col-md-12 pd0 title-modal">
            <div class="col-md-6"><h4 class="modal-title" id="myModalLabel">{{ Session::get('form-' . $msg) }}</h4></div>
        </div>
        <div class="col-md-12 top15">

          <img  src="{{ url('img/logo.png')}}" alt="" height="120" class="logo-congratulation">
          @if(Auth::check() && Auth::user()->active != '3')
            <p>Chúc mừng bạn đã đăng ký thành công <br>
            Bạn hãy ghé thăm trang cá nhân của mình để cập nhập những thông tin cần thiết <a href="{{ url('/trang-ca-nhan')}}-{{ Auth::user()->id }}-{{App\User::convert_string(Auth::user()->name)}}"> cho trang cá nhân của mình nhé!</a>
            <br>
            <strong>Cảm ơn bạn </strong>
            </p>
          @else
          <p>Chúc mừng Quý Phụ huynh đã đăng ký thành viên thành công. <br>
            Phụ huynh có thể tìm gia sư tại đây <a href="{{ url('/tim-kiem-gia-su')}}">(Link trang tìm gia sư)</a>.<br>
            Chỉnh sửa trang cá nhân: <a href="{{ url('/trang-ca-nhan')}}-{{ Auth::user()->id }}-{{App\User::convert_string(Auth::user()->name)}}">(Link trang cá nhân)</a><br>
            Hướng dẫn cho phụ huynh: <a href="#">(Link trang hướng dẫn)</a><br>
          </p>
          @endif
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
