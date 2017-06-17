@extends('layouts.web')

@section('content')

<div class="col-md-12 pd0" style="background: #f7f7f7; padding-top: 40px;">
<!-- Nav tabs -->
<div class="col-md-3">
<ul class="col-md-12 nav nav-tabs tab-edit-profile" role="tablist">
  <li role="presentation" class="active"><a href="#avatar" aria-controls="home" role="tab" data-toggle="tab">Chỉnh sửa</a></li>
  <li role="presentation"><a href="#opening" aria-controls="home" role="tab" data-toggle="tab"> Danh sách khóa học</a></li>
</ul>
</div>
<div class="col-md-8" style="border-left: 1px solid #eeeeee;">
<!-- Tab panes -->
<div class="tab-content edit-profile edit-couser">
  <div role="tabpanel" class="tab-pane active" id="add">

    <form name="update-information" class="form-horizontal  edit-profile__form col-md-offset-1 col-md-11 pd0" role="form" method="POST" action="{{ url('/couser/editing')}}-{{ $couser[0]->id }}" enctype='multipart/form-data'>
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
           <input class="multiple-flie" type="file" name="imgCouser" >
           @if($couser[0]->typeCouser == '2')
           @else
            <ul class="col-md-offset-2 col-md-9 gender__edit">
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
         <div class="col-md-3 "> Giới thiệu tổng quát</div>
         <div class="col-md-8"> <textarea class="form-control" name="information" >{{$couser[0]->information}}</textarea><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"> </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Bạn sẽ học được gì</div>
        <div class="col-md-8"><textarea class="form-control" name="study">{{$couser[0]->study}}</textarea><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Ai nên tham gia</div>
        <div class="col-md-8">
            <textarea class="col-md-4" type="text" name="who" >{{$couser[0]->who}}</textarea>
        </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3"> Phương pháp giảng</div>
        <div class="col-md-8"><textarea class="form-control" name="type">{{$couser[0]->type}}</textarea><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Chương trình học</div>
        <div class="col-md-8"><textarea class="form-control" name="program" >{{$couser[0]->program}}</textarea><img src="{{ URL::to('img/icon/inclined-pencil.png')}}">
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
                     <input type="hidden" name="morning[]" value="0">
                     <input type="checkbox" name="morning[]" value="1" id="morning{{$key}}" @if($value == '1') checked @endif >
                     <label for="morning{{$key}}"></label>
                     <div class="check"></div>
                   </li>
                @endforeach
                @else
                @for( $i = 0; $i < 21 ; $i++ )
                  <li class="col-md-4">
                    <input type="hidden" name="morning[]" value="0">
                    <input type="checkbox" name="morning[]" value="1" id="morning{{$i}}">
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
          <div class="col-md-3">Thời gian bắt đầu</div>
          <div class="col-md-8"><input type="date" class="form-control" name="opentime" value="{{$couser[0]->opentime}}"></input>
          </div>
        </div>
        <div class="col-md-12 pd0 top10">
          <div class="col-md-3">Dự kiến thời gian</div>
          <div class="col-md-8"><input type="text" class="form-control" name="timeplan" value="{{$couser[0]->timeplan}}"></input>
          </div>
        </div>
        <div class="col-md-12 pd0 top10">
          <div class="col-md-3">Thời gian kết thúc</div>
          <div class="col-md-8"><input type="date" class="form-control" name="closetime" value="{{$couser[0]->closetime}}"></input>
          </div>
        </div>
      @endif
      <div class="col-md-12 pd0 top30">
        <div class="col-md-3">Học phí</div>
        <div class="col-md-8"><textarea class="form-control" name="price" value="">{{$couser[0]->price}}</textarea><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
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
  <div role="tabpanel" class="tab-pane" id="opening">
    <div class="col-md-12">
      @foreach($couser as $key => $value)
      <div class="col-md-4 list-couser wel">
        <div class="col-md-12 pd0 list-couser__images">
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
          <img src="{{ URL::to('/img/couser')}}/{{$value ->picture_couser}}" style="width:100%">
          <div class="list-couser__price btn btn-origan2">{{number_format($value->price)}}<sup>Đ/@if($value -> typeCouser == '2') Khoá @else Giờ @endif </sup></div>
        </div>
          <div class="col-md-12 list-couser__name wel"> <h3> {{$value ->name_couser }} </h3></div>
          <div class="col-md-12 pd0">
            <a href="{{ URL::to('/couser/edit')}}-{{$value ->id}}" class="col-md-4 list-couser__config pd10 wel"><img src="{{ URL::to('/img/icon/inclined-pencil.png')}}" width="20px"><span> Chỉnh sửa </span></a>
            <a class="col-md-4 list-couser__config pd10 wel"> <img src="{{ URL::to('/img/icon/VectorSmartObject_3.png')}}"><span> Chia sẻ </span></a>
            <a href="{{ URL::to('/couser/delete')}}-{{$value ->id}}" class="col-md-4 list-couser__config pd10 wel"><img src="{{ URL::to('/img/icon/inclined-pencil.png')}}"><span> Xoá</span></a>
          </div>
          <button class="btn btn-origan col-md-12 pd0" @if($value->action != 0) {{'disabled="disabled"'}} @endif">@if($value->action == 0) {{'Thanh Toán'}} @else {{ 'Đã Thanh Toán' }} @endif</button>
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
          <div class="col-md-12 list-couser__name wel"> <h6>Hạn phí khoá học {{$date_exp}} ngày, Thứ @if($dayForDate == 0) {{ 'CN' }} @endif  @if ($dayForDate == 6) {{'Bảy'}} @endif  @if($dayForDate!= 0 && $dayForDate !=6) {{ $dayForDate }} @endif , {{$new_date}}</h6> </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
</div>
</div>
@stop
