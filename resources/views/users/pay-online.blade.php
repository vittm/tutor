@extends('layouts.web')

@section('content')
<div class="container">

<h2 class="text-center top30">THÔNG TIN THANH TOÁN</h2>

<form class="type-pay col-md-12 top30">
    		<div class="col-md-6" id="form_payment_method">
			    <div class="group col-md-12">
			        <div class="adr-oms radio payment-method-1 select-method">
			            <input type="radio" onchange="valueChanged('payment-method-29','to-bank')" id="payment-method-29" name="PaymentMethod" data-type="4" data-code="1" value="29">
			            <label class="col-md-12" for="payment-method-29">
			                <div class="adr-oms payment-method col-md-12">
			                    <div class="thumbnail col-md-2"> <img alt="" src="https://cdn02.static-adayroi.com/2015/2/24/72703_130716703681632259.png"> </div>
			                    <div class="description col-md-10">
			                        <div class="title"> Thanh toán bằng chuyển khoản qua ngân hàng </div>
			                        <div class="subtitle"> Quý khách sẽ thanh toán bằng chuyển khoản qua ngân hàng theo thông tin</div>
			                    </div>
			                </div>
			            </label>
			            <div id="paymentGateway_29" class="message-paymentgateway"></div>
			            
			        </div>
			    </div>
			    <div class="group col-md-12">
			        <div class="adr-oms radio payment-method-4 select-method">
			            <input type="radio" id="payment-method-27" onchange="valueChanged('payment-method-27','to-bank-location')" name="PaymentMethod" data-type="1" data-code="4" value="27">
			            <label class="col-md-12" for="payment-method-27">
			                <div class="adr-oms payment-method col-md-12">
			                    <div class="thumbnail col-md-2"> <img alt="" src="https://cdn02.static-adayroi.com/2015/2/24/57859_130716703533037365.png"> </div>
			                    <div class="description col-md-10">
			                        <div class="title"> Thanh toán bằng thẻ ATM </div>
			                        <div class="subtitle"> Thẻ ATM của bạn cần đăng ký sử dụng dịch vụ Internet Banking.
			                            <br>
			                            <span>Bạn sẽ được chuyển tới Ngân Lượng để thanh toán.</span> </div>
			                    </div>
			                </div>
			            </label>
			            <div id="paymentGateway_27" class="message-paymentgateway"></div>
			        </div>
			    </div>
			    <div class="group col-md-12">
			        <div class="adr-oms radio payment-method-6 select-method">
			            <input type="radio" id="payment-method-91" onchange="valueChanged('payment-method-91','to-bank-visa')" name="PaymentMethod" data-type="3" data-code="6" value="91">
			            <label class="col-md-12" for="payment-method-91">
			                <div class="adr-oms payment-method col-md-12">
			                    <div class="thumbnail col-md-2"> <img alt="" src="https://cdn02.static-adayroi.com/0/2016/05/09/146276437973_3668796.png"> </div>
			                    <div class="description col-md-10">
			                        <div class="title"> Thanh toán bằng thẻ thanh toán quốc tế </div>
			                        <div class="subtitle"> Hỗ trợ Credit và Debit.
			                            <br>
			                            <span>Bạn sẽ được chuyển tới Ngân Lượng để thanh toán.</span> </div>
			                    </div>
			                </div>
			            </label>
			            <div id="paymentGateway_91" class="message-paymentgateway"></div>
			        </div>
			    </div>

			</div>
			<div class="col-md-6 pd0">
				 <div class="adr-oms payment-method col-md-12">
					<div id="bank_content" class="col-md-12 to-bank active-bank">
					<div class="col-md-3">
					    <img class="" width="55" src="https://www.gachvang.com/images/vietcombank.jpg">
					</div>
					<div class="col-md-9" style="margin-left:-50px">
					    <p class="margin-5">Ban đang thanh toán gói <strong class="color-red write-title"></strong></p>
					    <p class="">Số tiền thanh toán: <strong class="color-red-dark write-price"></strong><strong> VNĐ</strong></p>
					</div>
					<div class="col-md-3 padding-0">
					    <p class="margin-5 margin-top-5"><strong>Chủ tài khoản:</strong></p>
					    <p class="margin-5 margin-top-5"><strong>Ngân hàng:</strong> </p>
					    <p class="margin-5"><strong>Số tài khoản:</strong></p>
					    <p class="margin-5"><strong>Chi nhánh:</strong> </p>
					</div>
					<div class="col-md-9 padding-0">
					    <p class="margin-5 margin-top-5">Đào Thị Uyên</p>
					                    <p class="margin-5 margin-top-5">TMCP Ngoại thương Việt Nam - Vietcombank (VCB)</p>
					                    <p class="margin-5 color-red">0511000434102</p>
					                    <p class="margin-5">Chi nhánh Quận Bình Tân - TP.Hồ Chí Minh</p>
					                </div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-4">
					<input class="voucher form-controll" type="text" placeholder="Nhập mã giảm giá">
				</div>
				<div class="col-md-4 pd0"><a href="#" class="click-voucher">Voucher</a></div>
				<div class="col-md-12">
				<a class="pay btn btn-5 btn-5a fa icon-right pay-finish" type="submit"><span>Thanh Toán </span></a>
				</div>
			</div>
    	</form>
</div>
@stop