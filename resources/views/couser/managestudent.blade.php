@extends('layouts.web')

@section('content')
@if(Auth::user()->active == 2 )
<div class="container pd0" style="background: #f7f7f7; padding-top: 40px;">
<div class="col-md-3">
<ul class="col-md-12 nav nav-tabs tab-edit-profile" role="tablist">
  <li role="presentation" class="active"><a href="#opening" aria-controls="home" role="tab" data-toggle="tab">Học viên đăng ký thử</a></li>
</ul>
</div>
<div class="col-md-9" style="border-left: 1px solid #eeeeee;">
<!-- Tab panes -->
<div class="tab-content edit-profile edit-couser">
  <div role="tabpanel" class="tab-pane active" id="add">
  @foreach($student as $key => $value)
    <div class="col-md-12 pd0 list-student wel">
      <div class="col-md-1 top15"><img src="{{ URL::to('img/avatar')}}/{{ $value->avatar}}" alt="..." class="img-circle dl" height="60" width="60"></div>
      <div class="col-md-11">
          <div class="col-md-7 pd0"><h3>{{ $value->name }}</h3><p><i>Quận {{ $value->district}}, TP {{ $value->city}}</i></p></div>
          <div class="col-md-5"><button class="btn btn-origan2" style="border-radius: 8px; padding-top: 3px; padding-bottom: 3px;border-width: 2px;"><img src="{{ URL::to('img/icon/iconphone.png')}}" height="40"><span style="font-weight: 700;color: #161542; font-size: 15px;"> {{ $value->phone }}</span></button></div>
          <div class="col-md-12 pd0" style="border-bottom: 1px solid #eeeeee;padding-bottm:15px;margin-bottom:5px;">
            <p style="margin-bottom: 0;color: #161542"> Khóa học </p>
            <h3 style="margin-top: 0;color: #fcaf00;">{{ $value->name_couser}}</h3>
          </div>
          <div class="col-md-12 pd0" style="border-bottom: 1px solid #eeeeee; padding-bottm:15px;margin-bottom:15px;">
            <div class="col-md-6 pd0"><p>Dự kiến số buổi học/tuần</p></div><div class="col-md-6"><p style="font-weight:500;color: #161542">{{ $value->planmoment}} ngày</p></div>
            <div class="col-md-6 pd0"><p>Dự kiến số giờ học/ngày</p></div><div class="col-md-6"><p style="font-weight:500;color: #161542">{{ $value->plantime}} giờ</p></div>
            <div class="col-md-6 pd0"><p>Học phí khoá học:</p></div><div class="col-md-6"><p style="font-weight:500;color: #161542">
                {{ number_format($value->price)}} <sup>đ </sup>
              </p></div>
          </div>
          <div class="col-md-6 pd0"><p>Học phí dự tính</p></div><div class="col-md-6"><p style="font-weight:500;color: #161542">
            @if($value -> typeclass == '1')
            {{ number_format(((($value->planmoment * 5 ) * $value->plantime) * $value->price )) }} <sup>đ </sup>
            @endif
            @if($value -> typeCouser == '2')
            {{ number_format($value->price) }} <sup>đ </sup>
            @endif
            </p></div>
          <div class="col-md-12 pd0">
            <div class="col-md-6 pd0"><p>Ngày đăng ký</p></div><div class="col-md-6">{{ $value->created_at }} <p style="font-size:12px;font-style:italic;color: #161542"> Bạn nên gọi điện thoại cho học viên trong vòng 24h để xác nhận nhu cầu học của học viên. Nếu không nhận được lớp bạn vui lòng gọi vào hottline <span style="color: #fcaf00;"> 012345566 </span> của chúng tôi.</div>
          </div>
          <button class="btn btn-origan col-md-offset-8 col-md-4 pd0" @if($value->action != 0) {{'disabled="disabled"'}} @endif" data-toggle="modal" data-target="#myModal{{$key}}">
            @if($value->action == 0) {{'Thanh Toán'}} @else {{ 'Đã Thanh Toán' }} @endif</button>
          <?php
            $daym =  $value -> created_at;
            $sepparator = '-';
            $partsExp = explode($sepparator, $daym);
            $d=cal_days_in_month(CAL_GREGORIAN,$partsExp[1],$partsExp[0]);
            $date_exp= $d - (strtotime(date('Y-m-d')) - strtotime($value -> created_at)) / (60 * 60 * 24);
            $date= date( 'Y-m-d');
            $new_date = strtotime ( '+'.$date_exp.'day' , strtotime ( $date ) ) ;
            $new_date = date ( 'd-m-Y' , $new_date );
            $parts = explode($sepparator, $new_date);
            $dayForDate = date("w", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));
          ?>
          @if($value->action != 1)
          <div class="col-md-offset-6 col-md-6 list-couser__name text-right pd0 wel"><br> <h6>Hạn phí khoá học {{$date_exp}} ngày, Thứ @if($dayForDate == 0) {{ 'CN' }} @endif  @if ($dayForDate == 6) {{'Bảy'}} @endif  @if($dayForDate!= 0 && $dayForDate !=6) {{ $dayForDate }} @endif , {{$new_date}}</h6> </div>
          @endif
          <!-- Modal -->
            <div class="modal fade" id="myModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="col-md-12 pd0 modal-body" style="padding:0;">
                    <div class="col-md-12 pd0 title-modal">
                      <div class="col-md-6"><h4 class="modal-title" id="myModalLabel">BIÊN LAI THANH TOÁN</h4></div>
                      <div class="col-md-6"><h4 class="modal-title text-right">Mã số: {{ $value->code}}</h4></div>
                    </div>
                    <a class="col-md-12 list-couser wel">
                      <div class="col-md-12 pd0 list-couser__images top10">
                        @if($value -> typeclass == '1')
                        <div class="list-couser__typeCourse">
                          Học 1 + 1
                        </div>
                        @endif
                        @if($value -> typeCouser == '2')
                        <div class="list-couser__typeCourse">
                          Lớp học sắp khai giảng
                        </div>
                        @endif
                        <img src="{{ URL::to('/img/couser')}}/{{$value->picture_couser}}" style="width:100%;height:210px;object-fit: cover;">
                        <div class="list-couser__price btn btn-origan2">{{number_format($value->price)}}<sup>Đ/@if($value -> typeCouser == '2') Khoá @else Giờ @endif </sup></div>
                      </div>
                        <div class="col-md-12 list-couser__name wel top10"> <h3> {{$value ->name_couser }} </h3> </div>
                        <div class="col-md-6">
                          Học phí/tháng:
                        </div>
                        <div class="col-md-6">
                          {{number_format($value ->price)}}<sup> đ</sup>
                        </div>
                        <div class="col-md-6">Học phí dự tính:</div><div class="col-md-6">
                          @if($value -> typeclass == '1')
                          {{ number_format(((($value->planmoment * 5 ) * $value->plantime) * $value->price )) }} <sup>đ </sup>
                          @endif
                          @if($value -> typeCouser == '2')
                          {{ number_format($value->price) }} <sup>đ </sup>
                          @endif
                          </div>
                        <div class="col-md-12">
                          <p style="font-size:13px;font-weight:400;color:#fcaf00;"><i>(Nếu có sự thay đổi. Bạn vui lòng gọi vào hotline: <strong>0868 505 523 </strong> để xác nhận lại)</i></p>
                        </div>
                        <div class="col-md-12">
                          <h4><span style='font-weight:500;font-size:14px'>Tổng số tiền: </span><strong> {{number_format($value->pay)}} <sup> đ</sup> </strong></h4>
                          @if($value -> typeclass == '1')
                          <i> ( 30% * {{ number_format(((($value->planmoment * 5 ) * $value->plantime) * $value->price )) }} <sup> đ</sup>  = {{number_format($value->pay)}} <sup> đ</sup> )</i>
                          @endif
                          @if($value -> typeCouser == '2')
                          <i> ( 30% * {{number_format($value ->price)}} = {{number_format($value->pay)}} <sup> đ</sup> )</i>
                          @endif
                        </div>
                        <?php
                        $daym =  $value -> created_at;
                        $sepparator = '-';
                        $partsExp = explode($sepparator, $daym);
                        $d=cal_days_in_month(CAL_GREGORIAN,$partsExp[1],$partsExp[0]);
                        $date_exp= $d - (strtotime(date('Y-m-d')) - strtotime($value -> created_at)) / (60 * 60 * 24);
                        $date= date( 'Y-m-d');
                        $new_date = strtotime ( '+'.$date_exp.'day' , strtotime ( $date ) ) ;
                        $new_date = date ( 'd-m-Y' , $new_date );
                        $parts = explode($sepparator, $new_date);
                        $dayForDate = date("w", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));
                        ?>
                        <div class="col-md-12 list-couser__name wel"> <h5>Hạn phí thanh toán: <strong style="color:#fcaf00;"> {{$date_exp}} ngày, Thứ @if($dayForDate == 0) {{ 'CN' }} @endif  @if ($dayForDate == 6) {{'Bảy'}} @endif  @if($dayForDate!= 0 && $dayForDate !=6) {{ $dayForDate }} @endif , {{$new_date}}</strong></h5> </div>
                        <hr>
                        <div class="col-md-12">
                          <h3><strong> Hình Thức Thanh Toán </strong> </h3>
                          <p><i>Bạn vui lòng chuyển khoản qua 1 trong những ngân hàng bên dưới, trong phần <strong>Ghi chú tài khoản</strong>
                          , quý khách ghi rõ <strong> Mã số </strong> trên <strong> Biên lai thanh toán</strong>
                          </i></p>
                        </div>
                        <div class="col-md-12">
                          <h4><span style="font-size: 14px;">Tên chủ tài khoản: </span> <span style="color:#fcaf00;">ĐÀO THỊ UYÊN</span> </h4>
                        </div>
                        <div class="col-md-4">
                          <strong>Ngân hàng</strong>
                        </div>
                        <div class="col-md-4">
                          <strong>Chi nhánh</strong>
                        </div>
                        <div class="col-md-4">
                          <strong>Số tài khoản</strong>
                        </div>
                        <div class="col-md-4">
                          ACB
                        </div>
                        <div class="col-md-4">
                          Hồ Chí Minh
                        </div>
                        <div class="col-md-4">
                          <span style="color:#fcaf00;">119789709</span>
                        </div>
                        <div class="col-md-4">
                          VietCombank
                        </div>
                        <div class="col-md-4">
                          Hồ Chí Minh
                        </div>
                        <div class="col-md-4">
                          <span style="color:#fcaf00;">119789709</span>
                        </div>
                        <div class="col-md-4">
                          ACB
                        </div>
                        <div class="col-md-4">
                          Hồ Chí Minh
                        </div>
                        <div class="col-md-4">
                          <span style="color:#fcaf00;">119789709<span>
                        </div>
                    </a>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                  </div>
                </div>
                </div>
            </div>
          </div>
    </div>
  @endforeach
</div>
</div>
@else
<?php return redirect()->to('/trang-ca-nhan-'.Auth::user()->id)->send();?>
@endif
@stop
