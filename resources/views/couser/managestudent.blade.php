@extends('layouts.web')

@section('content')
<div class="container pd0" style="background: #f7f7f7;margin-top: 40px; padding-top: 40px;">
<div class="col-md-3">
<ul class="col-md-12 nav nav-tabs tab-edit-profile" role="tablist">
  <li role="presentation" class="active"><a href="#opening" aria-controls="home" role="tab" data-toggle="tab">Học viên đăng ký thử</a></li>
</ul>
</div>
<div class="col-md-9">
<!-- Tab panes -->
<div class="tab-content edit-profile edit-couser">
  <div role="tabpanel" class="tab-pane active" id="add">
  @foreach($student as $value)
    <div class="col-md-12 pd0 list-student well">
      <div class="col-md-1 top15"><img src="{{ URL::to('img/avatar')}}/{{ $value->avatar}}" alt="..." class="img-circle dl" height="60" width="60"></div>
      <div class="col-md-11">
          <div class="col-md-7 pd0"><h3>{{ $value->name }}</h3><p><i>{{ $value->city}}</i></p></div>
          <div class="col-md-5"><button class="btn btn-origan2" style="border-radius: 8px; padding-top: 3px; padding-bottom: 3px;border-width: 2px;"><img src="{{ URL::to('img/icon/iconphone.png')}}" height="40"><span style="font-weight: 700;color: #161542; font-size: 15px;"> {{ $value->phone }}</span></button></div>
          <div class="col-md-12 pd0" style="border-bottom: 1px solid #eeeeee;padding-bottm:15px;margin-bottom:5px;">
            <p style="margin-bottom: 0;color: #161542"> Khóa học </p>
            <h3 style="margin-top: 0;color: #fcaf00;">{{ $value->couser}}</h3>
          </div>
          <div class="col-md-12 pd0" style="border-bottom: 1px solid #eeeeee; padding-bottm:15px;margin-bottom:15px;">
            <div class="col-md-6 pd0"><p>Dự kiến số buổi học/tuần</p></div><div class="col-md-6"><p style="font-weight:500;color: #161542">{{ $value->planmoment}} ngày</p></div>
            <div class="col-md-6 pd0"><p>Dự kiến số giờ học/tuần</p></div><div class="col-md-6"><p style="font-weight:500;color: #161542">{{ $value->plantime}} giờ</p></div>
            <div class="col-md-6 pd0"><p>Học phí dự tính</p></div><div class="col-md-6"><p style="font-weight:500;color: #161542">{{ $value->price}} ngày</p></div>
          </div>
          <div class="col-md-12 pd0">
            <div class="col-md-6 pd0"><p>Ngày đăng ký</p></div><div class="col-md-6">{{ $value->created_at }} <p style="font-size:12px;font-style:italic;color: #161542"> Bạn nên gọi điện thoại cho học viên trong vòng 24h để xác nhận nhu cầu học của học viên. Nếu không nhận được lớp bạn vui lòng gọi vào hottline <span style="color: #fcaf00;"> 012345566 </span> của chúng tôi.</div>
          </div>
      </div>
  </div>
  @endforeach
</div>
</div>
</div>
</div>
@stop
