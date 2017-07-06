<div class="col-md-12 pd0 top15">
   <div class="col-md-4 "><img src="img/icon/VectorSmartObject_6.png" alt=""><span> Họ và Tên </span></div>
   <div class="col-md-8"><strong>{!! $id_user[0]->name !!}</strong></div>
</div>
<div class="col-md-12 pd0 top15">
  <div class="col-md-4"><img src="img/icon/VectorSmartObject_7.png" alt=""><span> Ngày sinh </span></div>
  <div class="col-md-8"><strong>{!! Carbon\Carbon::parse($id_user[0]->date)->format('m/d/Y')  !!}</strong></div>
</div>
<div class="col-md-12 pd0 top15">
<div class="col-md-4"><img src="img/icon/VectorSmartObject_5.png" alt=""><span> Giới tính </span></div>
<div class="col-md-8"><strong>@if( $id_user[0]->gender == 1 ) {{ ' Nam'}} @else {{ 'Nữ '}} @endif</strong></div>
</div>
<div class="col-md-12 pd0 top15">
<div class="col-md-4"><img src="img/icon/VectorSmartObject_8.png" alt=""><span> Địa chỉ </span></div>
<div class="col-md-8"><strong>@if($id_user[0]->district) Quận {!! $id_user[0]->district !!}@endif @if($id_user[0]->city), TP {!! $id_user[0]->city !!}@endif</strong></div>
</div>
@if($id_user[0]->active == 2)
<div class="col-md-12 pd0 top15">
<div class="col-md-4"> Học vấn</div>
<div class="col-md-8"><strong>{!!  $id_user[0]->educational !!}</strong></div>
</div>
<div class="col-md-12 pd0 top15">
<div class="col-md-4"> Hiện là</div>
<div class="col-md-8">
  <strong>
    @if($id_user[0]->jobs == '1') Sinh Viên @endif
    @if($id_user[0]->jobs == '2') Giáo Viên @endif
    @if($id_user[0]->jobs == '5') Giảng Viên @endif
    @if($id_user[0]->jobs == '3') Học Sinh @endif
    @if($id_user[0]->jobs == '4') Khác @endif
  </strong>
</div>
</div>
<div class="col-md-12 pd0 top15">
<div class="col-md-4"> Xác nhận hồ sơ vào ngày</div>
<div class="col-md-8"><strong>{!! Carbon\Carbon::parse($id_user[0]->created_at)->format('m/d/Y')  !!}</strong></div>
</div>
@endif
<div class="col-md-12 pd0 top15">
  <div class="col-md-4"> Cập nhập lần cuối</div>
  <div class="col-md-8"><strong>{!! Carbon\Carbon::parse($id_user[0]->updated_at)->format('m/d/Y')  !!}</strong></div>
</div>
<div class="col-md-12 top15">
  <p>{!! $id_user[0]->info !!}</p>
</div>
