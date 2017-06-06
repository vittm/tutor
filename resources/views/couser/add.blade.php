@extends('layouts.web')

@section('content')

<div class="col-md-12 pd0" style="background: #f7f7f7; border-right: 1px solid #eeeeee;">
<!-- Nav tabs -->
<div class="col-md-3">
<ul class="col-md-12 nav nav-tabs tab-edit-profile" role="tablist">
  <li role="presentation" class="active"><a href="#avatar" aria-controls="home" role="tab" data-toggle="tab">Đăng khoá học mới</a></li>
  <li role="presentation"><a href="#adding_opening" aria-controls="home" role="tab" data-toggle="tab"> Đăng khoá học sắp khai giảng </a></li>
  <li role="presentation"><a href="#student" aria-controls="home" role="tab" data-toggle="tab"> Danh sách khóa học</a></li>
</ul>
</div>
<div class="col-md-8">
<!-- Tab panes -->
<div class="tab-content edit-profile edit-couser">
  <div role="tabpanel" class="tab-pane active" id="add">
    <form name="update-information" class="form-horizontal  edit-profile__form col-md-offset-1 col-md-11 pd0" role="form" method="POST" action="{{ url('/couser/adding') }}-{{ $id_user[0]->id }}" enctype='multipart/form-data'>
                      {{ csrf_field() }}
      <input type="hidden" name="id_user" value="{{ $id_user[0]->id}}">
      <input type="hidden" name="picture" value="{{ $id_user[0]->avatar}}">
      <div class="col-md-12 pd0 top10">
         <div class="col-md-3 "> Tiêu đề</div>
         <div class="col-md-8"><textarea class="form-control" type="text" name="title" value=""></textarea></div>
      </div>
      <div class="col-md-12 pd0">
         <div class="col-md-3 "> Hình ảnh</div>
         <div class="col-md-7">
           <input class="multiple-flie" type="file" name="imgCouser" >
         </div>
      </div>
      <div class="col-md-12 pd0">
         <div class="col-md-3 "> Giới thiệu tổng quát</div>
         <div class="col-md-8"> <textarea class="form-control" name="information" value=""></textarea> </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Bạn sẽ học được gì</div>
        <div class="col-md-8"><textarea class="form-control" name="study" value=""></textarea></div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Ai nên tham gia</div>
        <div class="col-md-8">
            <input class="col-md-4" type="text" name="who" value="">
        </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3"> Phương pháp giảng</div>
        <div class="col-md-8"><textarea class="form-control" name="type"></textarea></div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Chương trình học</div>
        <div class="col-md-8"><textarea class="form-control" name="program" ></textarea>
     </div>
      </div>
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
               @for( $i = 0; $i <= 21 ; $i++ )
                   <li class="col-md-3">
                     <input type="hidden" name="morning[]" value="0">
                     <input type="checkbox" name="morning[]" value="1" id="morning{{$i}}">
                     <label for="morning{{$i}}"></label>
                     <div class="check"></div>
                   </li>
              @endfor
            </div>
          </ul>
        </div>
      </div>
      <div class="col-md-12 pd0 top30">
        <div class="col-md-3">Học phí</div>
        <div class="col-md-8"><textarea class="form-control" name="price" value=""></textarea></div>
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
  <div role="tabpanel" class="tab-pane" id="adding_opening">
    <form name="update-information" class="form-horizontal  edit-profile__form col-md-offset-1 col-md-11 pd0" role="form" method="POST" action="{{ url('/couser/adding') }}-{{ $id_user[0]->id }}" enctype='multipart/form-data'>
                      {{ csrf_field() }}
      <input type="hidden" name="id_user" value="{{ $id_user[0]->id}}">
      <input type="hidden" name="picture" value="{{ $id_user[0]->avatar}}">
      <div class="col-md-12 pd0 top10">
         <div class="col-md-3 "> Tiêu đề</div>
         <div class="col-md-8"><textarea class="form-control" type="text" name="title" value=""></textarea></div>
      </div>
      <div class="col-md-12 pd0">
         <div class="col-md-3 "> Hình ảnh</div>
         <div class="col-md-7">
           <input class="multiple-flie" type="file" name="imgCouser" >
         </div>
      </div>
      <div class="col-md-12 pd0">
         <div class="col-md-3 "> Giới thiệu tổng quát</div>
         <div class="col-md-8"> <textarea class="form-control" name="information" value=""></textarea> </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Bạn sẽ học được gì</div>
        <div class="col-md-8"><textarea class="form-control" name="study" value=""></textarea></div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Ai nên tham gia</div>
        <div class="col-md-8">
            <input class="col-md-4" type="text" name="who" value="">
        </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3"> Phương pháp giảng</div>
        <div class="col-md-8"><textarea class="form-control" name="type"></textarea></div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Chương trình học</div>
        <div class="col-md-8"><textarea class="form-control" name="program" ></textarea>
        </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Thời gian bắt đầu</div>
        <div class="col-md-8"><input type="date" class="form-control" name="opentime" ></input>
        </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Dự kiến thời gian</div>
        <div class="col-md-8"><input type="date" class="form-control" name="timeplan" ></input>
        </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Thời gian kết thúc</div>
        <div class="col-md-8"><input type="date" class="form-control" name="closetime" ></input>
        </div>
      </div>
      <div class="col-md-12 pd0 top30">
        <div class="col-md-3">Học phí</div>
        <div class="col-md-8"><textarea class="form-control" name="price" value=""></textarea></div>
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
@stop
