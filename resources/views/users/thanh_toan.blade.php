@extends('layouts.web')

@section('content')

<div role="tabpanel" class="tab-pane col-md-offset-2 col-md-8 top15" id="credit">
    <div class="listing-price">
	    	<div class="col-md-4">
	    		<div class="col-xs-12 item">
		    		<h3 class="title-pay">Tiết Kiệm</h3>
		    		<p>Giá tốt nhất cho trang cơ bản</p>

		    		<br>
		    		<p>Chỉ từ</p>
		    		<p class="price">107.000 <sup>đ</sup>/<span>tháng</span></p>
		    		<p class="val-price">107000</p>
		    		<p>Giảm giá - <span class="sale">Tiết kiệm 40%</span></p>
		    		<p>179.000 đ/tháng khi gia hạn</p>
		    		<a href=" {{ url('/thanh-toan-online') }} " class="btn add-cart">Thêm vào giỏ hàng</a>
	    		</div>
	    	</div>

    	<div class="col-md-4">
	    		<div class="col-xs-12 item">
		    		<h3 class="title-pay">Cao cấp</h3>
		    		<p>Giá tốt nhất cho trang cơ bản</p>

		    		<br>
		    		<p>Chỉ từ</p>
		    		<p class="price">230.000 <sup>đ</sup>/<span>tháng</span></p>
		    		<p class="val-price">230000</p>
		    		<p>Giảm giá - <span class="sale">Tiết kiệm 40%</span></p>
		    		<p>179.000 đ/tháng khi gia hạn</p>
		    		<a href="{{ url('/thanh-toan-online') }}" class="btn add-cart">Thêm vào giỏ hàng</a>
	    		</div>
	    	</div>
	    <div class="col-md-4">
	    		<div class="col-xs-12 item">
		    		<h3 class="title-pay">Cốt yếu</h3>
		    		<p>Giá tốt nhất cho trang cơ bản</p>

		    		<br>
		    		<p>Chỉ từ</p>
		    		<p class="price">300.000 <sup>đ</sup>/<span>tháng</span></p>
		    		<p class="val-price">300000</p>
		    		<p>Giảm giá - <span class="sale">Tiết kiệm 40%</span></p>
		    		<p>179.000 đ/tháng khi gia hạn</p>
		    		<a href="{{ url('/thanh-toan-online') }}" class="btn add-cart">Thêm vào giỏ hàng</a>
	    		</div>
	    	</div>
    	</div>
    </div>
@stop