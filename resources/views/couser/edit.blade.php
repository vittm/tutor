@extends('layouts.web')

@section('content')
@if(Auth::user()->active == 2 && Auth::user()->id == $couser[0]->id_user  )
<div class="col-md-12 pd0" style="background: #f7f7f7; padding-top: 40px;">
<!-- Nav tabs -->
<div class="col-md-3">
<ul class="col-md-12 nav nav-tabs tab-edit-profile" role="tablist">
  <li role="presentation" class="active"><a href="#avatar" aria-controls="home" role="tab" data-toggle="tab">Chỉnh sửa</a></li>
</ul>
</div>
<div class="col-md-8" style="border-left: 1px solid #eeeeee;">
<!-- Tab panes -->
<div class="tab-content edit-profile edit-couser">
  <div role="tabpanel" class="tab-pane active" id="add">

    <form name="update-information" class="form-horizontal  edit-profile__form col-md-offset-1 col-md-11 pd0" role="form" method="POST"

    action="{{ url('/couser/editing')}}-{{ $couser[0]->id }}" enctype='multipart/form-data'>
                      {{ csrf_field() }}
      <input type="hidden" name="id_user" value="{{ $couser[0]->id_user}}">
      <input type="hidden" name="picture" value="{{ $couser[0]->picture_couser}}">
      <input type="hidden" name="cousertype" value="{{ $couser[0]->typeCouser}}">

      <div class="col-md-12 pd0 top10">
         <div class="col-md-3 "> Tiêu đề</div>
         <div class="col-md-8"><textarea class="form-control" type="text" name="title" value="">{{ $couser[0]->name_couser}}</textarea><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
      </div>
      <div class="col-md-12 pd0 top15">
         <div class="col-md-3 "> Hình ảnh</div>
         <div class="col-md-7">
           @if($couser[0]->picture_couser != null)
 						<img class="top30" src="{{ URL::to('/img/couser')}}/{{$couser[0]->picture_couser}}" alt="..." class="img-thumbnail" height="200" width="200" style="margin: auto; display: block;">
 					 @endif
           <input class="multiple-flie" type="file" name="imgCouser" accept="image/*">
           @if($couser[0]->typeCouser == '2')
           @else
            <ul class="col-md-offset-1 col-md-10 gender__edit">
 						 <li>
               <input type="hidden" name="typeclass" type="radio" id="boy" value="0">
 							 <input name="typeclass" type="radio" @if($couser[0]->typeclass == '1') checked @endif id="boy" value="1">
 							 <label for="boy">Khoá học có cung cấp <strong> Lớp học 1 + 1 </strong></label>
 							 <div class="check"></div>
 						 </li>
           </ul>
           @endif
         </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Bạn sẽ học được gì</div>
        <div class="col-md-8"><textarea class="ckeditor form-control" name="study">{{$couser[0]->study}}</textarea></div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Ai nên tham gia</div>
        <div class="col-md-8">
            <textarea class="ckeditor col-md-4" type="text" name="who" >{{$couser[0]->who}}</textarea>
        </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3"> Phương pháp giảng dạy</div>
        <div class="col-md-8"><textarea class="ckeditor form-control" name="type">{{$couser[0]->type}}</textarea></div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Chương trình học</div>
        <div class="col-md-8">
          <textarea class="ckeditor col-md-12" id="editor1" name="program">{!! $couser[0]->program !!}</textarea>

     </div>
      </div>
      @if($couser[0]->typeCouser == '1')
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3 top15"> Thời gian học</div>
        <div class="col-md-8">
          <div class="col-md-12 pd0 top15">
            <div class="col-md-3">
              Thứ
            </div>
            <div class="col-md-3">
              Sáng
            </div>
            <div class="col-md-3">
              Trưa
            </div>
            <div class="col-md-3">
              Chiều
            </div>
          </div>
          <ul class="col-md-12 top30 pd0 gender__edit couser-time" >
             <div class="col-md-3">
                <p>Thứ Hai</p>
                <p>Thứ Ba</p>
                <p>Thứ Tư</p>
                <p>Thứ Năm</p>
                <p>Thứ Sáu</p>
                <p>Thứ Bảy</p>
                <p>Chủ Nhật</p>
             </div>
            <div class="col-md-8 pd0">
              @if(json_decode($couser[0]->timetype1) != null)
                @foreach( json_decode($couser[0]->timetype1) as $key => $value )
                   <li class="col-md-4">
                     <input type="hidden" name="morning[{{$key}}]" value="0">
                     <input class="day-teach" type="checkbox" name="morning[{{$key}}]" value="1" id="morning{{$key}}" @if($value == '1') checked @endif >
                     <label for="morning{{$key}}"></label>
                     <div class="check"></div>
                   </li>
                @endforeach
                @else
                @for( $i = 0; $i < 21 ; $i++ )
                  <li class="col-md-4">
                    <input type="hidden" name="morning[{{$i}}]" value="0">
                    <input type="checkbox" name="morning[{{$i}}]" value="1" id="morning{{$i}}">
                    <label for="morning{{$i}}"></label>
                    <div class="check"></div>
                  </li>
                @endfor
              @endif
            </div>
          </ul>
        </div>
      </div>
      @endif

      @if($couser[0]->typeCouser == '2')
          <div class="col-md-12 pd0 top10">
          <div class="col-md-3">Số lượng học viên</div>
          <div class=" col-md-4">
            <select class="form-control" name="information">
               <option value="1" @if($couser[0]->information == 1) selected @endif>2 - 10 người</option>
               <option value="2" @if($couser[0]->information == 2) selected @endif>10 - 20 người</option>
               <option value="3" @if($couser[0]->information == 3) selected @endif>trên 20 người</option>
            </select>
          </div>
        </div>
        <div class="col-md-12 pd0 top10">
          <div class="col-md-3">Môn dạy</div>
          <div class="col-md-8"><input type="text" value="{{$couser[0]->subjects}}" class="form-control" id="subject-find" name="subjects"></div>
        </div>
        <div class="col-md-12 pd0 top10">
          <div class="col-md-3">Ngày khai giảng</div>
          <div class="col-md-8"><input type="date" class="form-control" name="opentime" value="{{$couser[0]->opentime}}"></input>
          </div>
        </div>
        <div class="col-md-12 pd0 top10">
          <div class="col-md-3">Thời lượng khóa học (Tháng)</div>
          <div class="col-md-8"><input type="text" class="form-control" name="timeplan" value="{{$couser[0]->timeplan}}"></input>
          </div>
        </div>
      @endif
      <div class="col-md-12 pd0 top30">
        <div class="col-md-3">  @if($couser[0]->typeCouser == '2') Học phí/Học Viên/Khóa (VNĐ) @else Học phí/Học Viên/Giờ (VNĐ) @endif </div>
        <div class="col-md-8"><input type="text" class="form-control price-add-course" name="price" value="{{$couser[0]->price}}"><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
      </div>
    <div class="col-md-offset-6 col-md-4 pd0 top30">
        <div class="col-md-8 pd0 btn-edit save_edit-profile">
            <button class="btn btn-5 btn-5a fa icon-right"><span>Lưu lại</span></button>
        </div>
        <div class="col-md-3">
          <button href=" " class="btn fa icon-right"><span> Hủy</span></button>
        </div>
    </div>
    </form>
  </div>
</div>
</div>
</div>
@else
<?php return redirect()->to('/trang-ca-nhan-'.Auth::user()->id)->send();?>
@endif
@stop
