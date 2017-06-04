@extends('layouts.web')

@section('content')

<div>
<br>
  <!-- Nav tabs -->
  <div class="col-md-2">
  <ul class="nav nav-tabs tab-edit-profile" role="tablist">
    <li role="presentation" class="active"><a href="#profile" aria-controls="home" role="tab" data-toggle="tab"><img src="img/icon/boy.png"> Cá nhân</a></li>
  </ul>
</div>
<div class="col-md-10">
  <!-- Tab panes -->
  <div class="tab-content edit-profile">
    <div role="tabpanel" class="tab-pane active" id="profile">
    	<form class="form-horizontal col-md-12 pd0" role="form" method="POST" action="{{ url('/config') }}-{{ $id_user[0]->id }}" enctype='multipart/form-data'>
                        {{ csrf_field() }}
        <input type="hidden" name="id_user" value="{{ $id_user[0]->id}}">
        <input type="hidden" name="picture" value="{{ $id_user[0]->avatar}}">
        <h2 class="text-center">THÔNG TIN CÁ NHÂN</h2>

        <!-- Nav tabs -->
	  <ul class="nav nav-tabs tab-profile col-md-12 clear pd0" role="tablist">
	    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><img class="icon-tab-profile" src="img/icon/id-card.png">Thông tin</a></li>

	  </ul>

	  	<div class="tab-content content-profile col-md-12 clear pd0">
	    	<div role="tabpanel" class="tab-pane active" id="home">
	    		<div class="col-md-12 top30 ">
        	<div class="col-md-6">
           		<input type="file" name="picture" accept="image/*"  onchange="showMyImage(this)" id="file-2" class="inputfile inputfile-2 hidden" data-multiple-caption="{count} files selected" multiple="">

            	<img id="thumbnil" class="edit_img_profile img-reg" src="{{ URL::to('img/avatar')}}/{{ $id_user[0]->avatar}}" alt="image" />
            	<label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span >Chọn ảnh đại diện</span></label>
       		</div>
	    	<div class="col-md-6">
	    		<label class="title" for="editor1"><h4>Giới Tính: </h4></label>
	    		<div class="col-md-12 pd0">
		    		<label for="boy" class="col-md-2"><img src="img/icon/boy.png"> Boy <input name="gender" type="radio" @if($id_user[0]->gender == '1') checked @endif id="boy" value="1"> </label>
		    		<label for="girl" class="col-md-2"><img src="img/icon/girl.png"> Girl <input name="gender" type="radio" @if($id_user[0]->gender == '2') checked @endif id="girl" value="2"> </label>
		    		<label for="other" class="col-md-2"><img src="img/icon/1471547952_ninja.png"> Khác <input name="gender" type="radio" id="other	" @if($id_user[0]->gender == '0') checked @endif value="0"> </label>
	    		</div>
	    	</div>
	    	</div>
			<div class="col-md-12 contact">
				<div class="panel col-md-12 pd0">
					<label class="col-md-6"><img src="img/icon/name.png"> Họ và Tên: <input type="text" name="name-contact" value="{{ $id_user[0]->name }}"> </label>
					<label class="col-md-6"><img src="img/icon/inbox.png"> Email: <input type="text" name="email-contact" value="{{ $id_user[0]->email }}"> </label>
					<label class="col-md-6"><img src="img/icon/smartphone.png"> Phone: <input type="text" name="phone-contact" value="{{ $id_user[0]->phone }}"> </label>
					<label class="col-md-6"><img src="img/icon/smartphone.png"> Nghề Nghiệp:
					@if($job['job'] != null)
					<input id="field-find" class="job-edit" name="job-edit" type="text" aria-describedby="inputSuccess2Status" placeholder="" value="@if($job['job'] != null) {{ $job['job'] }} @else @endif">
					<input type="text" class="university" style="display: block;" name="university" placeholder="tên trường đại học" value="@if($job['job'] != null) {{ $job['university'] }} @else @endif">
					@else
					<input id="field-find" class="job-edit" name="job-edit" type="text" aria-describedby="inputSuccess2Status" placeholder="">
					<input type="text" class="university" name="university" placeholder="tên trường đại học">
					@endif


					</label>
					<label class="col-md-6"><img src="img/icon/placeholder.png"> Địa Chỉ:

					<input class="col-md-6" type="text" name="ward" placeholder="Số nhà, tên đường, phường" value="{{ $id_user[0]->ward }}">
					<input class="col-md-6" type="text" name="distric" placeholder="quận" value="{{ $id_user[0]->district }}">
					<input class="col-md-6" type="text" name="city" placeholder="thành phố" value="{{ $id_user[0]->city }}">
					 </label>
				</div>
	    	</div>

	    	</div>
	  	</div>
	  	<div class="form-group">
                <div class="col-md-6 col-md-offset-4 save_edit-profile">
                    <button class="btn btn-5 btn-5a fa icon-right"><span>Lưu lại</span></button>
                </div>
            </div>
    	</form>
    </div>
  </div>
</div>
</div>
@stop
