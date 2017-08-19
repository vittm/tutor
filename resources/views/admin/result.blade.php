@extends('layouts.app')

@section('content')
<div class="">

  <hgroup class="top15">
		<h2 class="top15">Search Results</h2>
	</hgroup>
    <section class="col-xs-12 col-sm-6 col-md-12">
@if(isset($search) && $search->count() > 0)
<form action="{{ url('/admin/update-user')}}" enctype="multipart/form-data"  method="POST">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @foreach($search as $value)
		<article class="search-result row wel" style="border: 1px solid #e1e1e1; padding-top: 10px; margin-bottom:10px;">
      <input type="hidden" class="form-control" name="id_edit[]" value="{{ $value->id }}">
      <div class="col-xs-12 col-sm-12 col-md-2">
				<a href="{{ url('/trang-ca-nhan')}}-{{$value->id}}-{{App\User::convert_string($value->name)}}" title="Lorem ipsum" class="thumbnail"><img src="{{ url('img/avatar')}}/{{$value->avatar}}" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3">
        <h4 style="margin-top:10px;">{{$value->name}} <br> </h4>
        <h4>
				<ul class="meta-search" style="list-style:none;padding-left:0;">
					<li><i class="pe-7s-call"></i> <span>{{ $value->phone }}</span></li>
					<li><i class="pe-7s-user"></i> <span>@if( $value->active == 1 ) Học Viên @endif @if( $value->active == 2 ) Gia Sư @endif @if( $value->active == 0 ) Admin @endif</span></li>
				</ul>
      </h4>
			</div>
      <div class="col-md-2">
        <div class="col-md-12 pd0 top15">
              <span class="style-input">
                 <select class="form-control" name="top_teacher[]">
                    <option> Lựa chọn gia sư nổi bật </option>
                    <option @if( $value->top_teacher == 1 ) selected @endif value="1">
                       Gia sư nổi bật
                    </option>
                </select>
            </span>
        </div>
      </div>
			<div class="col-xs-12 col-sm-12 col-md-5 excerpet">
        <div class="col-md-4 top15">
           <input type="text" class="form-control" name="text_value[]" value="{{ $value->name }}">
           <input type="text" class="form-control top15" name="email_value[]" value="{{ $value->email }}">
           <div class="col-md-12 pd0 top15">
                 <span class="style-input">
                    <select class="form-control" name="active[]">
                       <option> Loại thành viên </option>
                       <option @if( $value->active == 1 ) selected @endif value="1">
                          Học Viên
                       </option>
                       <option @if( $value->active == 2 ) selected @endif value="2">
                          Gia Sư
                       </option>
                       <option @if( $value->active == 0 ) selected @endif value="0">
                          Admin
                       </option>
                       <option @if( $value->active == 3 ) selected @endif value="1">
                          Phụ Huynh
                       </option>
                   </select>
               </span>
           </div>
        </div>
        <div class="col-md-2 top15">
           <button href="{{ url('/admin/update-user')}}" class="btn" type="submit"> Cập Nhập </button>
        </div>
        <div class="col-md-2 top15">
           <a href="{{ url('/admin/delete-user')}}-{{ $value->id }}" class="btn" type="submit"> Xóa </a>
        </div>
        @if($value->active == 2 )
        <div class="col-md-2 top15">
           <a href="{{ url('/admin/detail-user')}}-{{$value->id}}" class="btn" type="submit"> Chi Tiết Khoá Học </a>
        </div>
        @endif
			</div>
			<span class="clearfix borda"></span>
		</article>
    @endforeach
</form>
@endif


@if(isset($bills) && $bills->count() > 0)
@foreach($bills as $key => $value)
<div class="col-md-12 list-couser-main top15">
<form action="{{ url('/admin/pay-couser')}}" enctype="multipart/form-data"  method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="wam" value="{{$value->id }}">
  <input type="hidden" name="wan" value="{{$value->id_teacher }}">
  <input type="hidden" name="couser" value="{{$value->id_course }}">
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
    <img src="{{ URL::to('/img/couser')}}/{{$value->picture_couser}}" style="width:100%;height:210px;object-fit:cover;">
    <div class="list-couser__price btn btn-origan2">{{number_format($value->price)}}<sup>Đ/@if($value -> typeCouser == '2') Khoá @else Giờ @endif </sup></div>
  </div>
  <div class="col-md-8">
    <div class="col-md-8 list-couser__name wel top10"> <h4> {{$value ->name_couser }} </h4> </div>
    <button type="button" class="btn btn-danger col-md-4 top25 pd0" @if($value->action != 0) {{'disabled="disabled"'}} @endif" data-toggle="modal" data-target="#myModal">
    @if($value->action == 0) {{'Thanh Toán'}} @else {{ 'Đã Thanh Toán' }} @endif
      </button>
      <div class="col-md-5 list-couser__name wel "> <h5 style="margin-top:10px"><i class="pe-7s-user"></i> {{$value ->name }} </h5> </div>
      <div class="col-md-6 list-couser__name wel"><h5 style="margin-top:10px"> <i class="pe-7s-call"></i> {{ $value->phone }}</h5> </div>
    <div class="col-md-9 list-couser__name wel top10"> <strong><h5>{{App\Cousers::calculateDate($value->created_at)}}</h5></strong> </div>
    <div class="col-md-12"> <h5> Tổng tiền thanh toán: {{number_format($value->pay)}} đ </h5> </div>
    <div class="col-md-offset-5 col-md-6 pd0 list-couser__images">
      <!-- Button trigger modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Xác Nhận</h4>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
              <button type="sumit" class="btn btn-primary">Đồng Ý</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>
</div>
</div>
</a>
@endforeach
  @endif
	</section>
</div>
@Stop
