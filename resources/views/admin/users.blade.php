@extends('layouts.app')

@section('content')

<p>Chỉnh sửa phần thành viên</p>

<form action="{{ url('/admin/update-user')}}" enctype="multipart/form-data"  method="POST">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   @foreach($user as $key => $value)
   <div class="col-md-2 pd0">
      <div class="input-group top15">
         <div class="input-group-addon">{{ $value->id }}</div>
         <input type="hidden" class="form-control" name="id_edit[]" value="{{ $value->id }}">
         <input type="text" class="form-control" name="text_value[]" value="{{ $value->name }}">
       </div>
      </div>
      <div class="col-md-2 top15">
         <input type="text" class="form-control" name="email_value[]" value="{{ $value->email }}">
      </div>
      <div class="col-md-2 top15">
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
              </select>
          </span>
      </div>
      <div class="col-md-2 top15">
            <span class="style-input">
      <select class="form-control" name="pay[]">
                  <option> Gói thanh toán </option>
                  <option @if( $value->pay == 1 ) selected @endif value="1">
                     Gói 1
                  </option>
                  <option @if( $value->pay == 2 ) selected @endif value="2">
                     Gói 2
                  </option>
                  <option @if( $value->pay == 3 ) selected @endif value="3">
                     Gói 3
                  </option>
              </select>
      </span>
      </div>
      <div class="col-md-2 top15">
         <button href="{{ url('/admin/update-user')}}" class="btn" type="submit"> Cập Nhập </button>
      </div>
      <div class="col-md-2 top15">
         <a href="{{ url('/admin/delete-user')}}-{{ $value->id }}" class="btn" type="submit"> Xóa </a>
      </div>
   @endforeach
</form>
@stop
