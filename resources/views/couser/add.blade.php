@extends('layouts.web')

@section('content')

<div>
<!-- Nav tabs -->
<div class="col-md-3">
<ul class="col-md-12 nav nav-tabs tab-edit-profile" role="tablist">
  <li role="presentation"><a href="#avatar" aria-controls="home" role="tab" data-toggle="tab">Đăng khoá học mới</a></li>
  <li role="presentation" class="active"><a href="#profile" aria-controls="home" role="tab" data-toggle="tab"> Đăng khoá học sắp khai giảng </a></li>
  <li role="presentation"><a href="#password" aria-controls="home" role="tab" data-toggle="tab"> Mật Khẩu</a></li>
</ul>
</div>
<div class="col-md-8">
<!-- Tab panes -->
<div class="tab-content edit-profile">
  <div role="tabpanel" class="tab-pane active" id="add">
    <form name="update-information" class="form-horizontal  edit-profile__form col-md-offset-1 col-md-11 pd0" role="form" method="POST" action="{{ url('/editing') }}-{{ $id_user[0]->id }}" enctype='multipart/form-data'>
                      {{ csrf_field() }}
      <input type="hidden" name="id_user" value="{{ $id_user[0]->id}}">
      <input type="hidden" name="picture" value="{{ $id_user[0]->avatar}}">
      <div class="col-md-12 pd0 top10">
         <div class="col-md-3 "> Họ và Tên</div>
         <div class="col-md-8"><input type="text" name="name" value=""><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
      </div>
      <div class="col-md-4 top30">
					<input class="multiple-flie" type="file" name="imgCouser" >
			</div>
      <div class="col-md-12 pd0">
         <div class="col-md-3 "> Lời chào</div>
         <div class="col-md-8"> <input type="text" name="title-profile" value=""><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"> </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3"> Ngày sinh</div>
        <div class="col-md-8"><input type="date" name="edit-profile__date" value=""><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
      </div>

      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Địa chỉ</div>
        <div class="col-md-8">
            <input class="col-md-4" type="text" name="ward" placeholder="Số nhà, tên đường, phường" value="{{ $id_user[0]->ward }}">
        </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3"> Học vấn</div>
        <div class="col-md-8"><input type="text" name="edit-profile__exper"><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
        <div class="col-md-offset-3 col-md-8"> <p  style="font-size: 13px; font-style: italic; color: rgb(176, 176, 176);">Nếu có nhiều dữ liệu phân cách bằng dấu phẩy nhé! </p> </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3"> Hiện là</div>
        <div class="col-md-8"><input type="text" name="edit-profile__jobs" ><img src="{{ URL::to('img/icon/inclined-pencil.png')}}">
     </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3"> Lĩnh vực giảng dạy</div>
        <div class="col-md-8"><input type="text" name="edit-profile__field" value=""><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3"> Môn học</div>
        <div class="col-md-8"><input type="text" name="filed-subject" value=""><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
        <div class="col-md-offset-3 col-md-8"> <p  style="font-size: 13px; font-style: italic; color: rgb(176, 176, 176);">Nếu có nhiều dữ liệu phân cách bằng dấu phẩy nhé! </p></div>
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
