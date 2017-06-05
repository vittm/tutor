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
<div class="tab-content edit-profile edit-couser">
  <div role="tabpanel" class="tab-pane active" id="add">
    <form name="update-information" class="form-horizontal  edit-profile__form col-md-offset-1 col-md-11 pd0" role="form" method="POST" action="{{ url('/couser/adding') }}-{{ $id_user[0]->id }}" enctype='multipart/form-data'>
                      {{ csrf_field() }}
      <input type="hidden" name="id_user" value="{{ $id_user[0]->id}}">
      <input type="hidden" name="picture" value="{{ $id_user[0]->avatar}}">
      <div class="col-md-12 pd0 top10">
         <div class="col-md-3 "> Tiêu đề</div>
         <div class="col-md-8"><textarea class="form-control" type="text" name="title" value=""></textarea><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
      </div>
      <div class="col-md-12 pd0">
         <div class="col-md-3 "> Hình ảnh</div>
         <div class="col-md-7">
           <input class="multiple-flie" type="file" name="imgCouser" >
         </div>
      </div>
      <div class="col-md-12 pd0">
         <div class="col-md-3 "> Giới thiệu tổng quát</div>
         <div class="col-md-8"> <textarea class="form-control" name="information" value=""></textarea><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"> </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Bạn sẽ học được gì</div>
        <div class="col-md-8"><textarea class="form-control" name="study" value=""></textarea><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Ai nên tham gia</div>
        <div class="col-md-8">
            <input class="col-md-4" type="text" name="who" value="">
        </div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3"> Phương pháp giảng</div>
        <div class="col-md-8"><textarea class="form-control" name="type"></textarea><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
      </div>
      <div class="col-md-12 pd0 top10">
        <div class="col-md-3">Chương trình học</div>
        <div class="col-md-8"><textarea class="form-control" name="program" ></textarea><img src="{{ URL::to('img/icon/inclined-pencil.png')}}">
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
             <li class="col-md-3">
                <p>Thứ Hai</p>
             </li>
             <li class="col-md-3">
               <input name="morning[]" type="checkbox" id="morning" value="1">
               <label for="morning"></label>
               <div class="check"></div>
             </li>

             <li class="col-md-3"> <input name="afternoon[]" type="checkbox" id="afternoon" value="2">
              <label for="afternoon"></label>
               <div class="check"><div class="inside"></div></div>
             </li>
             <li class="col-md-3"> <input name="night[]" type="checkbox" id="night" value="3">
                              <label for="night"></label>
               <div class="check"><div class="inside"></div></div>
             </li>

             <li class="col-md-3">

                <p>Thứ Ba</p>
             </li>
             <li class="col-md-3">
               <input name="morning[]" type="checkbox" id="morning3" value="1">
               <label for="morning3"></label>
               <div class="check"></div>
             </li>

             <li class="col-md-3"> <input name="afternoon[]" type="checkbox" id="afternoon3" value="2">
              <label for="afternoon3"></label>
               <div class="check"><div class="inside"></div></div>
             </li>
             <li class="col-md-3"> <input name="night[]" type="checkbox" id="night3" value="3">
                              <label for="night3"></label>
               <div class="check"><div class="inside"></div></div>
             </li>

             <li class="col-md-3">

                <p>Thứ Tư</p>
             </li>
             <li class="col-md-3">
               <input name="morning[]" type="checkbox" id="morning4" value="1">
               <label for="morning4"></label>
               <div class="check"></div>
             </li>

             <li class="col-md-3"> <input name="afternoon[]" type="checkbox" id="afternoon4" value="2">
              <label for="afternoon4"></label>
               <div class="check"><div class="inside"></div></div>
             </li>
             <li class="col-md-3"> <input name="night[]" type="checkbox" id="night4" value="3">
                              <label for="night4"></label>
               <div class="check"><div class="inside"></div></div>
             </li>

             <li class="col-md-3">

                <p>Thứ Năm</p>
             </li>
             <li class="col-md-3">
               <input name="morning[]" type="checkbox" id="morning5" value="1">
               <label for="morning5"></label>
               <div class="check"></div>
             </li>

             <li class="col-md-3"> <input name="afternoon[]" type="checkbox" id="afternoon5" value="2">
              <label for="afternoon5"></label>
               <div class="check"><div class="inside"></div></div>
             </li>
             <li class="col-md-3"> <input name="night[]" type="checkbox" id="night5" value="3">
                              <label for="night5"></label>
               <div class="check"><div class="inside"></div></div>
             </li>
             <li class="col-md-3">

                <p>Thứ Sáu</p>
             </li>
             <li class="col-md-3">
               <input name="morning[]" type="checkbox" id="morning6" value="1">
               <label for="morning6"></label>
               <div class="check"></div>
             </li>

             <li class="col-md-3"> <input name="afternoon[]" type="checkbox" id="afternoon6" value="2">
              <label for="afternoon6"></label>
               <div class="check"><div class="inside"></div></div>
             </li>
             <li class="col-md-3"> <input name="night[]" type="checkbox" id="night6" value="3">
                              <label for="night6"></label>
               <div class="check"><div class="inside"></div></div>
             </li>
             <li class="col-md-3">

                <p>Thứ Bảy</p>
             </li>
             <li class="col-md-3">
               <input name="morning[]" type="checkbox" id="morning7" value="1">
               <label for="morning7"></label>
               <div class="check"></div>
             </li>

             <li class="col-md-3"> <input name="afternoon[]" type="checkbox" id="afternoon7" value="2">
              <label for="afternoon7"></label>
               <div class="check"><div class="inside"></div></div>
             </li>
             <li class="col-md-3"> <input name="night[]" type="checkbox" id="night7" value="3">
                              <label for="night7"></label>
               <div class="check"><div class="inside"></div></div>
             </li>
             <li class="col-md-3">

                <p>Thứ Chủ Nhật</p>
             </li>
             <li class="col-md-3">
               <input name="morning[]" type="checkbox" id="morning8" value="1">
               <label for="morning8"></label>
               <div class="check"></div>
             </li>

             <li class="col-md-3"> <input name="afternoon[]" type="checkbox" id="afternoon8" value="2">
              <label for="afternoon8"></label>
               <div class="check"><div class="inside"></div></div>
             </li>
             <li class="col-md-3"> <input name="night[]" type="checkbox" id="night8" value="3">
                              <label for="night8"></label>
               <div class="check"><div class="inside"></div></div>
             </li>
          </ul>
        </div>
      </div>
      <div class="col-md-12 pd0 top30">
        <div class="col-md-3">Học phí</div>
        <div class="col-md-8"><textarea class="form-control" name="price" value=""></textarea><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
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
