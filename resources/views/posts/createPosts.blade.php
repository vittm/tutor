@extends('layouts.web')

@section('content')
@if (Auth::check())
<form class="create-posts col-md-offset-3 col-md-6" method="POST" action="{{ url('/posting') }}">
		<h3 class="text-center">ĐĂNG TIN LỚP HỌC</h3>
	  	{{ csrf_field() }}
	  	<input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
	  	<input type="hidden" name="name_user" value="{{ Auth::user()->name }}">

	   
	        <div class="col-md-6 top15">
		    	<label for="subject"><img src="img/icon/notebook.png"> Môn học</label>
		    	<input type="text" class="subjec-post" name="subject" id="subject" placeholder="Điền vào môn học">
			</div>
			<div class="col-md-6 top15">
		    	<label for="subject"><img src="img/icon/time-is-money.png"> Giá</label>
		    	<input type="text" class="subjec-post" name="price" id="subject" placeholder="Tiền dạy">
			</div>
			<div class="col-md-6 top15">
		    	<label for="subject"><img src="img/icon/clock.png">Số giờ học/buổi</label>
		    	<input type="text" class="subjec-post" name="house-time" id="subject" placeholder="">
			</div>
			<div class="col-md-6 top15">
		    	<label for="subject"><img src="img/icon/clock.png"> số buổi học/tuần</label>
		    	<input type="text" class="subjec-post" name="house-week" id="subject" placeholder="">
			</div>	
        	<div class="col-md-6 top15">
		    	<label for=""><img src="img/icon/graduate.png"> Trình Độ</label>
		    	<select name="grade" class=" form-control grade">
		    		<option value="Tiểu Học">Tiểu Học</option>
		    		<option value="THCS">THCS</option>
		    		<option value="THPT">THPT</option>
		    		<option value="Đại Học">Đại Học</option>
		    	</select>
		    </div>
        	<div class="col-md-6 top15 clear">
		    	<label for="exampleInputEmail1"><img src="img/icon/calendar.png">  Bắt đầu lớp học</label>

		    	<select name="begin-class" class="form-control begin-class">
		    		<option value="Vài ngày sau">Vài ngày sau</option>
		    		<option value="Tuần sau">Tuần sau</option>
		    		<option value="Tháng sau">Tháng sau</option>
		    		<option value="Sắp xếp">Sắp xếp</option>
		    	</select>
		    </div>

        	<div class="col-md-6 top15">
		    	<label for="exampleInputEmail1"> <img src="img/icon/placeholder.png"> Địa Điểm</label>
		    	<select name="location_class" class="form-control location-class">
		    		<option value="không có"> Lựa chọn địa điểm</option>
		    		<option class="location-option" value="Học tại nơi của gia sư">Học tại nơi của gia sư</option>
		    		<option class="athome" value="Học tại nơi của học viên">Học tại nơi của học viên </option>
		    		<option class="location-option" value="Học online">Học online</option>
		    		<option class="location-option" value="Sắp xếp ">Sắp xếp </option>
		    	</select>
		    	<input type="text" class="form-control select-athome" name="athome">
		    </div>
			<div class="col-md-12 target-checkbox top15">
				<div class="col-md-12 pd0">
					<label><img src="img/icon/paper-plane.png">  Mục tiêu: </label>
				</div>
				<div class="col-md-6 pd0">
				    <label>
				      <input type="checkbox" value="Nâng cao kỹ năng" name="target_mess[]"> Nâng cao kỹ năng
				    </label>
				 </div>
				 <div class="col-md-6 pd0">
				    <label>
				      <input type="checkbox" value="Cải thiện điểm số" name="target_mess[]"> Cải thiện điểm số
				    </label>
				 </div>
				 <div class="col-md-6 pd0">
				    <label>
				      <input type="checkbox" value="Học kỹ năng mới" name="target_mess[]"> Học kỹ năng mới
				    </label>
				 </div>
				 <div class="col-md-6 pd0">
				    <label>
				      <input type="checkbox" value="Chuẩn bị cho bài test" name="target_mess[]"> Chuẩn bị cho bài test
				    </label>
				 </div>
			</div>
			<div class="col-md-12 top15">
			 	<input type="text" name="add-target" class="add-target">
				<button class="btn btn-default" type="button" onclick="addTarget()">Thêm mục tiêu</button>
			</div>
			<div class="col-md-12 top30">
				<label><img src="img/icon/clock.png"> Thời gian có thể học</label>
				<div class="panel col-md-12 pd0 time_posts time_mess">
					<label class="col-md-6 pd0"><input class="time-post" name="time_posts[]" /></label>
				</div>

				<div class="col-md-12 pd0">
					<button class="btn btn-default time_working clear" type="button">Thêm thời gian dạy</button>
				</div>
		
			</div>
	      	<div class="col-md-12 top30">
				<label for="exampleInputEmail1"><img src="img/icon/notepad.png">  Nội dung bài đăng: </label>
				<textarea rows="20" cols="70" class="ckeditor" id="editor1" name="content"></textarea>
			</div>
	      <div class="modal-footer col-md-12">
	       <button class="btn btn-5 btn-5a icon-cog"><span>Đăng bài</span></button>
	    </div>
	    </form>
@else

<div class="out-of-bid col-md-offset-3 col-md-6" data-display-track="show-block-service-when-bid">
        <h2>Bạn chưa có quyền gửi chào giá !</h2>
        <p>Khách hàng chỉ thuê những freelancer có thể cung cấp dịch vụ <b>Viết bài PR</b>.</p>
        <p>Bạn cũng có thể cung cấp dịch vụ này? Bổ sung ngay vào hồ sơ để gửi chào giá.</p>
        <p class="action-buttons">
            <a target="_blank" href="/a/41831/edit?bidform" class="btn btn-large btn-primary">
                <strong>Bổ sung ngay</strong>
            </a>
        </p>
    </div>
@endif
@stop