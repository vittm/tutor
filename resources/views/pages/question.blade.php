@extends('layouts.web')

@section('content')
<div class="col-md-12 pd0 cover-search cover-pages">
	<img src="{{ url('img/cover1.png') }}" style="display:block;width:100%;margin: auto; height: 100%;">
	<h3 class="cover-search__title">CÁC CÂU HỎI THƯỜNG GẶP</h3>
</div>
<div class="col-md-12 top30">
  <div class="container">
 
<ul class="policy">
  <li>
    <p><span class="number-main">1</span>TÀI KHOẢN </p>
  <li>
</ul>
    <ul class="list-text">
      <li> Làm sao để tạo tài khoản trên <span style="color:#fcaf00;font-weight:600">WiiS</span>?<br>
      Quý Khách di chuyển chuột lên phần “Đăng ký” ở góc phải màn hình và điền các thông tin theo yêu cầu.</li>
      <li> Làm thế nào để thay đổi thông tin trong tài khoản của tôi?<br>
      Sau khi đăng nhập vào tài khoản, chọn mục “Tài khoản của Quý khách” để thay đổi thông tin cần thiết.</li>
      <li> Nếu quên mật khẩu thì phải làm sao? <br>
          (a) Quý Khách nhấn vào link Quên mật khẩu ở trang Đăng nhập, nhập email đã đăng ký và nhấn vào nút "Gửi".<br>
          (b) Đăng nhập tài khoản email trên để xem nội dung hướng dẫn lấy mật khẩu mới từ <span style="color:#fcaf00;font-weight:600">WiiS</span>.<br>
          (c) Nếu Quý Khách không nhận được email cấp lại mật khẩu, Quý Khách vui lòng liên hệ hotline 0868 505 523
      </li>
    </ul>
    <br>
    <hr>
    <ul class="policy">
  <li>
    <p><span class="number-main">2</span>HỌC VIÊN  </p>
  <li>
</ul>
    <ul class="list-text">
    <li>Làm thế nào để tìm và liên hệ với giáo viên tại <span style="color:#fcaf00;font-weight:600">WiiS</span>?<br>
      (a) Tìm kiếm giáo viên<br>
      . Quý khách nhập đầy đủ thông tin trên thanh tìm kiếm<br>
      . Tìm giáo viên theo đánh giá cao nhất hoặc học phí tốt nhất.<br>
      (b) Đăng ký học hoặc yêu cầu giáo viên gọi lại<br>
      . Quý khách điền thông tin theo yêu cầu vào box đăng ký bên phải màn hình<br>
      . Nhấn “Đăng ký học thử” nếu Quý khách muốn học thử với giáo viên hoặc nhấn “Yêu cầu gọi lại” nếu Quý khách muốn giáo viên gọi lại.<br>
      . Thông tin của Quý khách sau đó sẽ được gửi đến cho giáo viên.</li>
      <li>Làm thế nào khi đăng ký học thử hoặc gửi yêu cầu gọi lại, nhưng giáo viên không hồi đáp?<br>
      Sau 24h từ lúc gửi yêu cầu, nếu như Quý Khách chưa nhận được hồi âm từ giáo viên, Quý khách vui lòng gọi điện đến hotline <span style="color:#fcaf00;font-weight:600">0868.505.523</span>, <span style="color:#fcaf00;font-weight:600">WiiS</span> sẽ liên hệ trực tiếp đến giáo viên và sẽ thông báo lại cho Quý khách
      <li><span style="color:#fcaf00;font-weight:600">WiiS</span> không có môn học mà tôi muốn học?</li>
      Quý khách có thể gửi yêu cầu thêm môn học đến hộp thư cskh@wiis.edu.vn, <span style="color:#fcaf00;font-weight:600">WiiS</span> sẽ xem xét về nhu cầu của môn học, khả năng đáp ứng và phản hồi Quý khách trong thời gian sớm nhất.<br>
      <li>Tôi thấy trong phần bình luận về giáo viên/gia sư có những bình luận không trung thực, tôi phải làm sao để cảnh báo cho <span style="color:#fcaf00;font-weight:600">WiiS</span> và những học viên khác?</li>
      . Đây là việc làm mà <span style="color:#fcaf00;font-weight:600">WiiS</span> rất hoan nghênh để xây dựng một cộng đồng lành mạnh.<br>
      . Trong trường hợp này, các bạn hãy nhấp vào dấu  (cảnh báo) bên cạnh lời bình luận, điền thông tin theo yêu cầu và gửi đến cho chúng tôi.</li>
    </ul>
    <hr>
<ul class="policy">
  <li>
    <p><span class="number-main">3</span>GIÁO VIÊN </p>
  <li>
</ul>
    <ul class="list-text">
      <li>Phải làm gì nếu hồ sơ của tôi không được<span style="color:#fcaf00;font-weight:600">WiiS</span> xét duyệt?<br>
      Wiis sẽ gửi cho Quý khách những lý do mà hồ sơ của Quý khách chưa được duyệt. Trong một số trường hợp, sẽ có nhân viên của <span style="color:#fcaf00;font-weight:600">WiiS</span> gọi cho Quý khách để xác thực những thông tin cần thiết.</li>
      <li>Nếu học viên đăng ký học thử, nhưng sau đó quyết định không học, tôi có được <span style="color:#fcaf00;font-weight:600">WiiS</span> hoàn lại số phấn trắng hay tiền đã bỏ ra không?<br>
      . Hoàn toàn được, sau khi tiến hành xác nhận lại với học viên, <span style="color:#fcaf00;font-weight:600">WiiS</span> sẽ hoàn trả số phấn trắng lại cho Quý khách.<br>
      . Trong trường hợp này, Quý khách hãy gọi vào hotline hoặc email hotro@wiis.edu.vn<br>
      <li>Làm thế nào nếu có người yêu cầu tôi gọi lại nhưng nội dung trò chuyện không phải liên quan đến việc học, lớp học?</li>
      Đây là những trường hợp vi phạm chính sách của <span style="color:#fcaf00;font-weight:600">WiiS</span> dành cho học viên. Vì vậy, khi bạn gặp những trường hợp này, bạn hãy thông báo ngay cho chúng tôi biết qua Hotline <span style="color:#fcaf00;font-weight:600">0868.505.523</span> hoặc email baocao@wiis.edu.vn.
      Chúng tôi sẽ xem xét trường hợp của bạn và sẽ chặn người dùng này. Đồng thời, <span style="color:#fcaf00;font-weight:600">WiiS</span> sẽ hoàn lại số phấn trắng cho Quý khách nếu Quý khách sử dụng dịch vụ riêng lẻ.
      <li>Làm thế nào nếu có học viên đăng ký học thử nhưng sau đó lại không học?<br>
      Chúng tôi sẽ tiến hành xác nhận lại với học viên và sẽ hoàn lại số phấn trắng cho bạn sau khi xem xét.</li>
      <li>Tôi phải làm sao phát hiện nhận xét trong trang hồ sơ của tôi là spam, lạm dụng hoặc có dấu hiệu thiếu trung thực?<br>
      Trong trường hợp này, các bạn hãy nhấp vào dấu  (cảnh báo) bên cạnh lời bình luận, điền thông tin theo yêu cầu và gửi đến cho chúng tôi.</li>
      <li><span style="color:#fcaf00;font-weight:600">WiiS</span> không có môn học mà tôi muốn dạy?<br>
      Quý khách có thể gửi yêu cầu thêm môn học đến hộp thư hotro@wiis.edu.vn, <span style="color:#fcaf00;font-weight:600">WiiS</span> sẽ xem xét về nhu cầu của môn học và phản hồi Quý khách trong thời gian sớm nhất.</li>
    </ul>
  </div>
</div>
@endsection
