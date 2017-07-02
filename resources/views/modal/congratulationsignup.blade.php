<div class="modal fade in" tabindex="-1" role="dialog" id="congratulationsignup">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-md-12 pd0">
      <div class="modal-body">
        <div class="col-md-12 pd0 title-modal">
            <div class="col-md-6"><h4 class="modal-title" id="myModalLabel">{{ Session::get('form-' . $msg) }}</h4></div>
        </div>
      <img  src="{{ url('img/logo.png')}}" alt="" height="120" class="logo-congratulation">
      <p>Chúc mừng bạn đã đăng ký thành công <br>
      Bạn hãy ghé thăm trang cá nhân của mình để cập nhập những thông tin cần thiết <a href="{{ url('/trang-ca-nhan')}}-{{ Auth::user()->id }}"> cho trang cá nhân của mình nhé!</a>
      <br>
      <strong>Cảm ơn bạn </strong>
      </p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
