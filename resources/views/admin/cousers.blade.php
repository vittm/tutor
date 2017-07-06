@extends('layouts.app')

@section('content')

<p>Khoá Học Sắp Hết Hạn</p>

@foreach($bills as $key => $value)
<div class="col-md-12 list-couser-main top15" style="padding-right: 10px;">
<form action="{{ url('/admin/pay-couser')}}" enctype="multipart/form-data"  method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="wam" value="{{$value->id }}">
<a class="col-md-12 pd0 list-couser wel">
  <div class="col-md-4 pd0 list-couser__images">
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
  <div class="col-md-8">
    <div class="col-md-12 list-couser__name wel top10"> <h4> {{$value ->name_couser }} </h4> </div>
    <div class="col-md-6 list-couser__name wel "><h5 style="margin-top:10px"><span style="font-size:13px;">Giáo viên: </span> {{$value ->name }} </h5> </div>
    <div class="col-md-6 list-couser__name wel"> <h5 style="margin-top:10px"><span style="font-size:13px;">SĐT:</span> {{$value ->phone }} </h5> </div>
    <div class="col-md-12"> <h5> <span style="font-size:13px;">Tổng tiền thanh toán:</span> {{number_format($value->pay)}} Đ </h5>  </div>
    <div class="col-md-12 list-couser__name wel"> <h6>{{App\Cousers::calculateDate($value->created_at)}}</h6> </div>
</form>
</div>
</a>
</div>
@endforeach
<div class="col-md-12">
{{ $bills ->links() }}
</div>
@stop
