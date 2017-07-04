<!-- Modal -->
<div class="modal fade" id="register-finish" tabindex="-1" role="dialog" aria-labelledby="register-finish">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-md-12 pd0">
      <div class="modal-body pd0" style="padding-top:0">
        <div class="col-md-12 title-modal">
           <div class="col-md-6 pd0">
             <h4 class="modal-title" id="myModalLabel">Đăng Ký Học Thử Thành Công</h4>
           </div>
        </div>
        <div class="col-md-12">
          <img  src="{{ url('img/logo.png')}}" alt="" height="120" class="logo-congratulation logo-congratulation--couser">
          <br>
          <p>Cám ơn @if(Auth::check()) @if(Auth::user()->active == 3)phụ huynh @else bạn @endif @endif {{Session::get('name_user')}} đã cho <span style="color:#fcaf00;font-weight:600">Wiis</span> cơ hội được phục vụ.</p>
          <p><strong>Sau 1h nữa, gia sư {{Session::get('name_couser')}} sẽ gọi điện thoại xác nhận việc đăng ký học thử của anh/chị ạ.</strong> Nếu sau thời gian này không nhận được điện thoại từ gia sư, anh/ chị vui lòng thông báo lại cho WiiS theo hotline 0868. 505.523 để WiiS giúp anh/chị liên lạc với gia sư.</p>
          <h5><strong>THÔNG TIN ĐĂNG KÝ HỌC THỬ</strong></h5>

          <p>⦁	Lớp học: <strong> {{Session::get('name_couser')}}</strong></p>
          <p>⦁	Gia sư: <strong>{{Session::get('teacher')}}</strong></p>
          <p>⦁	Học phí dự kiến/tháng: <strong>{{number_format(Session::get('pricecourse'))}} <sup>đ</sup></strong></p>

          <p>Mã số may mắn của anh/chị là <strong>{{Session::get('giftcode')}}</strong></p>
          <p>Vào ngày 30 hàng tháng trên fanpage, <span style="color:#fcaf00;font-weight:600">Wiis</span> sẽ tiến hành quay số để tặng quà cho
          những khách hàng may mắn đăng ký gia sư tại <span style="color:#fcaf00;font-weight:600">Wiis</span>, xem thêm tại đây.</p>
          <p>Khi đăng ký học với gia sư trên <span style="color:#fcaf00;font-weight:600">Wiis</span>, anh/chị đã đóng góp 5.000đ vào
          quỹ “Những Thiên thần nhỏ” nhằm giúp đỡ những trẻ em khuyết tật và kém may mắn
          trong cuộc sống.</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close-register" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
