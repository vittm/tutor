	@extends('layouts.web')

@section('content')
@if(Auth::user()->id == $id_user[0]->id  )
<div class="col-md-12 pd0" style="background: #f7f7f7; padding-top: 40px;">
  <!-- Nav tabs -->
  <div class="col-md-3">
  <ul class="col-md-12 nav nav-tabs tab-edit-profile" role="tablist">
    <li role="presentation"><a href="#avatar" aria-controls="home" role="tab" data-toggle="tab"> Giao diện hồ sơ</a></li>
		<li role="presentation"  class="active"><a href="#profile" aria-controls="home" role="tab" data-toggle="tab"> Hồ sơ gia sư</a></li>
		<li role="presentation"><a href="#password" aria-controls="home" role="tab" data-toggle="tab"> Mật Khẩu</a></li>
		<li role="presentation"><a href="#video" aria-controls="home" role="tab" data-toggle="tab"> Video cá nhân</a></li>
		<li role="presentation"><a href="#picture" aria-controls="home" role="tab" data-toggle="tab"> Hình ảnh cá nhân</a></li>
		@if($id_user[0]->active == 2)
		<li role="presentation"><a href="#level" aria-controls="home" role="tab" data-toggle="tab"> Bằng cấp chứng chỉ</a></li>
		<li role="presentation"><a href="#code" aria-controls="home" role="tab" data-toggle="tab"> Thẻ CMND</a></li>
		@endif
  </ul>
</div>
<div class="col-md-8">
  <!-- Tab panes -->
  <div class="tab-content edit-profile">
    <div role="tabpanel" class="tab-pane active" id="profile">
    	<form name="update-information" class="form-horizontal  edit-profile__form col-md-offset-1 col-md-11 pd0" role="form" method="POST" action="{{ url('/editing') }}-{{ $id_user[0]->id }}" enctype='multipart/form-data'>
                        {{ csrf_field() }}
        <input type="hidden" name="id_user" value="{{ $id_user[0]->id}}">
        <input type="hidden" name="picture" value="{{ $id_user[0]->avatar}}">
				<div class="col-md-12 pd0 top10">
					 <div class="col-md-3 "> Họ và Tên</div>
					 <div class="col-md-8"><input type="text" name="name" value="{{ $id_user[0]->name}}"><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
				</div>
				@if($id_user[0]->active != 2)
					<input type="hidden" name="title-profile" value="null">
				@endif
				@if($id_user[0]->active == 2)
				<div class="col-md-12 pd0 top10">
					 <div class="col-md-3 "> Lời chào</div>
					 <div class="col-md-8"> <input type="text" name="title-profile" value="{{ $id_user[0]->title }}"><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"> </div>
				</div>
				@endif
				<div class="col-md-12 pd0 top10">
					<div class="col-md-3"> Ngày sinh</div>
					<div class="col-md-8"><input type="date" name="edit-profile__date" value="{{ $id_user[0]->date}}"><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
				</div>
				<div class="col-md-12 pd0 top10">
					<div class="col-md-3">Giới tính</div>
					<div class="col-md-8">
					<ul class="col-md-8 gender__edit">
						 <li>
							 <input name="gender" type="radio" @if($id_user[0]->gender == '1') checked @endif id="boy" value="1">
							 <label for="boy">Nam</label>

							 <div class="check"></div>
						 </li>

						 <li> <input name="gender" type="radio" @if($id_user[0]->gender == '0') checked @endif id="girl" value="0">
							 <label for="girl">Nữ</label>

							 <div class="check"><div class="inside"></div></div>
						 </li>
					</ul>
				</div>
				</div>
				<div class="col-md-12 pd0 top10">
					<div class="col-md-3">Địa chỉ</div>
					<div class="col-md-8 address-form">
							<input class="col-md-4" type="text" name="ward" placeholder="Số nhà, tên đường, phường" value="{{ $id_user[0]->ward }}">
							<input class="col-md-4" type="text" name="distric" placeholder="Quận" value="{{ $id_user[0]->district }}">
							<input class="col-md-4" type="text" name="city" placeholder="Thành Phố" value="{{ $id_user[0]->city }}">
					</div>
				</div>
				@if($id_user[0]->active == 2)
				<div class="col-md-12 pd0 top10">
					<div class="col-md-3"> Học vấn</div>
					<div class="col-md-8"><input type="text" name="edit-profile__exper" value="{{ $id_user[0]->educational}}"><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
					<div class="col-md-offset-3 col-md-8"> <p  style="font-size: 13px; font-style: italic; color: rgb(176, 176, 176);">Nếu có nhiều dữ liệu phân cách bằng dấu phẩy nhé! </p> </div>
				</div>
				<div class="col-md-12 pd0 top10">
					<div class="col-md-3"> Hiện là</div>
					<div class="col-md-3">
						<select class="form-control" name="edit-profile__jobs" style="border:none;">
							<option value="1" @if($id_user[0]->jobs == '1') selected @endif>Sinh Viên</option>
							<option value="2" @if($id_user[0]->jobs == '2') selected @endif>Giáo Viên</option>
							<option value="1" @if($id_user[0]->jobs == '5') selected @endif>Giảng Viên</option>
							<option value="3" @if($id_user[0]->jobs == '3') selected @endif>Học Sinh</option>
							<option value="4" @if($id_user[0]->jobs == '4') selected @endif>Khác</option>
						</select>
			 		</div>
					<div class="col-md-2">
						<img src="{{ URL::to('img/icon/inclined-pencil.png')}}" style="position:relative;top:12px;">
					</div>
				</div>
				<div class="col-md-12 pd0 top10">
					<div class="col-md-3"> Môn học</div>
					<div class="col-md-8"><input type="text" name="filed-subject" value="{{ $id_user[0]->subjects }}"><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
					<div class="col-md-offset-3 col-md-8"> <p  style="font-size: 13px; font-style: italic; color: rgb(176, 176, 176);">Nếu có nhiều dữ liệu phân cách bằng dấu phẩy nhé! </p></div>
				</div>
				<div class="col-md-12 pd0 top10">
					<div class="col-md-3"> Kinh nghiệm </div>
					<div class="col-md-8"><input type="number" name="edit-profile__experience" value="{{ $id_user[0]->experience}}"><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
				</div>
				@endif
				<div class="col-md-12 pd0 top10">
					<div class="col-md-3"> Tự giới thiệu </div>
					<div class="col-md-9">
						<textarea rows="20" cols="70" class="ckeditor" id="editor1" name="edit-profile__info">{!! $id_user[0]->info !!}</textarea>
					</div>
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

    <div role="tabpanel" class="tab-pane " id="avatar">
			<form class="form-horizontal  edit-profile__form col-md-12 pd0" role="form" method="POST" action="{{ url('/editing/style') }}-{{ $id_user[0]->id }}" enctype='multipart/form-data'>
                        {{ csrf_field() }}
        <input type="hidden" name="id_user" value="{{ $id_user[0]->id}}">
        <input type="hidden" name="avatar" value="{{ $id_user[0]->avatar}}">
				<input type="hidden" name="cover" value="{{ $id_user[0]->cover}}">

			<div class="col-md-8 top30">
					@if($id_user[0]->cover != null)
						<img class="col-md-12 top30" src="{{ URL::to('/img/cover')}}/{{ $id_user[0]->cover}}" alt="..." class="img-thumbnail">
					@endif
					<input class="multiple-flie" name="coverMain" type="file">
			</div>
			<div class="col-md-4 top30">
					@if($id_user[0]->avatar != null)
						<img class="col-md-12 top30 img-reg" src="{{ URL::to('/img/avatar')}}/{{ $id_user[0]->avatar}}" alt="..." class="img-thumbnail">
					@endif
					<input class="multiple-flie" type="file" name="avatarMain" >
			</div>
			<div class="col-md-offset-8 col-md-4 pd0 top30">
          <div class="col-md-8 pd0 btn-edit save_edit-profile">
              <button class="btn btn-5 btn-5a fa icon-right"><span>Lưu lại</span></button>
          </div>
					<div class="col-md-3">
						<button href=" " class="btn fa icon-right"><span> Hủy</span></button>
					</div>
      </div>
		</form>
		</div>
		<div class="tab-pane" id="picture">
			<form class="col-md-12" method="POST" enctype="multipart/form-data" action="{{ url('/editing/picture') }}-{{ $id_user[0]->id }}">
												{{ csrf_field() }}
				<input type="hidden" name="id_user" value="{{ $id_user[0]->id}}">
				<input type="hidden" name="picture" value="{{ $id_user[0]->picture}}">

					<input class="multiple-flie" type="file" name="images[]" multiple>
					<div class="col-md-offset-8 col-md-4 pd0 top30">
		          <div class="col-md-8 pd0 btn-edit save_edit-profile">
		              <button class="btn btn-5 btn-5a fa icon-right"><span>Lưu lại</span></button>
		          </div>
							<div class="col-md-3">
								<button href=" " class="btn fa icon-right"><span> Hủy</span></button>
							</div>
		      </div>
			</form>
			<div class="col-md-12 top30">
				@if(json_decode($id_user[0]->picture) != null)
					@foreach( json_decode($id_user[0]->picture) as $value )
						<img class="col-md-4 top10" src="{{ URL::to('/img/picture')}}/{{$value}}" alt="..." class="img-thumbnail">
					@endforeach
				@endif
			</div>
		</div>
		<div class="tab-pane" id="video">
			<form class="col-md-12" method="POST" enctype="multipart/form-data" action="{{ url('/editing/video') }}-{{ $id_user[0]->id }}">
												{{ csrf_field() }}
				<input type="hidden" name="id_user" value="{{ $id_user[0]->id}}">
				<input type="hidden" name="video" value="{{ $id_user[0]->video}}">

					<input class="multiple-flie" type="file" name="video[]" multiple>
					<div class="col-md-offset-8 col-md-4 pd0 top30">
		          <div class="col-md-8 pd0 btn-edit save_edit-profile">
		              <button class="btn btn-5 btn-5a fa icon-right"><span>Lưu lại</span></button>
		          </div>
							<div class="col-md-3">
								<button href=" " class="btn fa icon-right"><span> Hủy</span></button>
							</div>
		      </div>
			</form>
			<div class="col-md-12 top30">
				@if(json_decode($id_user[0]->video) != null)
					@foreach( json_decode($id_user[0]->video) as $value )
						<video class="col-md-4"  controls>
						  <source src="{{ URL::to('/video')}}/{{$value}}">
						</video>
					@endforeach
				@endif
			</div>
		</div>
		@if($id_user[0]->active == 2)
		<div class="tab-pane" id="level">
			<p><i><strong>⦁	Nếu bạn là sinh viên thì cần cung cấp thẻ sinh viên <br>
					⦁	Nếu bạn là giáo viên thì cần cung cấp bằng sư phạm </strong><br>
					<br></i>
					- Ngoài ra, WiiS khuyến khích bạn up những hình ảnh về bằng cấp, chứng chỉ liên quan đến lĩnh vực giảng dạy của bạn. Việc này sẽ giúp bạn củng cố niềm tin từ phía phụ huynh, học viên. Bên cạnh đó, khi có lớp cần gia sư, WiiS sẽ ưu tiên cho những bạn có hồ sơ cung cấp đầy đủ hình ảnh bằng cấp, chứng chỉ”.
			</p>
			<form class="col-md-12" method="POST" enctype="multipart/form-data" action="{{ url('/editing/level') }}-{{ $id_user[0]->id }}">
												{{ csrf_field() }}
				<input type="hidden" name="id_user" value="{{ $id_user[0]->id}}">
				<input type="hidden" name="level" value="{{ $id_user[0]->level}}">

					<input class="multiple-flie" type="file" name="level[]" multiple>
					<div class="col-md-offset-8 col-md-4 pd0 top30">
		          <div class="col-md-8 pd0 btn-edit save_edit-profile">
		              <button class="btn btn-5 btn-5a fa icon-right"><span>Lưu lại</span></button>
		          </div>
							<div class="col-md-3">
								<button href=" " class="btn fa icon-right"><span> Hủy</span></button>
							</div>
		      </div>
			</form>
			<div class="col-md-12 top30">
				@if(json_decode($id_user[0]->level) != null)
					@foreach( json_decode($id_user[0]->level) as $value )
						<img class="col-md-4 top10" src="{{ URL::to('/img/level')}}/{{$value}}" alt="..." class="img-thumbnail">
					@endforeach
				@endif
			</div>
		</div>
		@endif
		<div class="tab-pane" id="password">
			<form class="col-md-12 edit-profile__form " method="POST" enctype="multipart/form-data" action="{{ url('/editing/password') }}-{{ $id_user[0]->id }}">
												{{ csrf_field() }}
				<input type="hidden" name="id_user" value="{{ $id_user[0]->id}}">
				<input type="hidden" name="level" value="{{ $id_user[0]->level}}">
				<div class="col-md-12 pd0 top10">
					 <div class="col-md-3 "> Mật khẩu cũ</div>
					 <div class="col-md-8"><input type="password" name="current-password"><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
				</div>
				<div class="col-md-12 pd0 top10">
					 <div class="col-md-3 "> Mật khẩu mới</div>
					 <div class="col-md-8"><input type="password" name="password"><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
				</div>
				<div class="col-md-12 pd0 top10">
					 <div class="col-md-3 "> Nhập lại mật khẩu</div>
					 <div class="col-md-8"><input type="password" name="password_confirmation"><img src="{{ URL::to('img/icon/inclined-pencil.png')}}"></div>
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
		@if($id_user[0]->active == 2)
		<div class="tab-pane" id="code">

			<form class="col-md-12" method="POST" enctype="multipart/form-data" action="{{ url('/editing/code_user')}}">
												{{ csrf_field() }}
				<h4> Mặt trước và mặt sau của CMND </h4>
				<input type="hidden" name="id_user" value="{{ $id_user[0]->id}}">
				<input type="hidden" name="level" value="{{ $id_user[0]->level}}">
					<input class="multiple-flie" type="file" name="images[]" multiple>
					<div class="col-md-offset-8 col-md-4 pd0 top30">
		          <div class="col-md-8 pd0 btn-edit save_edit-profile">
		              <button class="btn btn-5 btn-5a fa icon-right"><span>Lưu lại</span></button>
		          </div>
							<div class="col-md-3">
								<button href=" " class="btn fa icon-right"><span> Hủy</span></button>
							</div>
		      </div>
			</form>
			<div class="col-md-12 top30">
				@if(json_decode($id_user[0]->code_user) != null)
					@foreach( json_decode($id_user[0]->code_user) as $value )
						<img class="col-md-4 top10" src="{{ URL::to('/img/picture')}}/{{$value}}" alt="..." class="img-thumbnail">
					@endforeach
				@endif
			</div>
		</div>
		@endif
  </div>
</div>
</div>
@else
<?php return redirect()->to('/chinh-sua-ca-nhan-'.Auth::user()->id)->send();?>
@endif
@stop
