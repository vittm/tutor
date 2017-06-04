
$(window).scroll(function() {
		if ($(this).scrollTop() > 3) {
			$('.global-header').addClass('sticky');
		}
		else {
			$('.global-header').removeClass('sticky');
		}
	});



$('.global-header__toggle').click(function(){
	alert('message');
});

$(".time-post").kendoDateTimePicker({animation: false});

$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});


$(document).ready( function ()
{

	$('.location-class ').change(function()
	{

		if($('.athome').prop('selected') === true){
			$('.select-athome').show();
		}else{
			$('.select-athome').hide();
		}

	});

});

function addTarget() {
	var v= $('.add-target').val();


	var s = '<div class="col-md-6 pd0"> <label>'+ '<input type="checkbox" name="target_mess[]" value='+ '"' + v + '">' + ' ' + v + '</label></div>';
	$('.target-checkbox').append(s);
}

function addDiploma(){
	var a= '<div class="panel col-md-12 pd0 top15"><label class="col-md-6"><img src="img/icon/pilot-of-airplane.png"> Cấp bậc: <input type="text" name="level-learn[]"> </label><label class="col-md-6"><img src="img/icon/graduate.png"> Nơi cấp/ Nơi học tập: <input type="text" name="location-learn[]"> </label><label class="col-md-6"><img src="img/icon/diploma.png"> Bằng Cấp: <input type="text" name="diploma-learn[]"> </label><label class="col-md-6"><img src="img/icon/medal.png"> Huy chương/ Giải thưởng: <input type="text" name="medal-learn[]"> </label></div>';
	$('.level-edit').append(a);
}

function addLevel(){
	var a= '<div class="panel col-md-12 pd0"><label class="col-md-6"><img src="img/icon/pilot-of-airplane.png"> Chức vụ: <input type="text" name="level_exp[]"> </label><label class="col-md-6"><img src="img/icon/graduate.png"> Nơi làm việc: <input type="text" name="location-exp[]"> </label><label class="col-md-6"><img src="img/icon/diploma.png"> Mô tả:  <textarea class="col-md-12 des" name="des-exp[]"></textarea>  </label><label class="col-md-6"><img src="img/icon/medal.png"> Thời Gian: <input type="text" name="time-exp[]"> </label></div>';
	$('.working-edit').append(a);
}

function addClasslearn(){
	var a= '<label class="col-md-6 pd0">Môn học: <input type="text" name="subject_class" class="form-control" value=""> </label><label class="col-md-6 pd0">Giá: <input type="text" name="price_class" value=""> </label><textarea rows="20" cols="70" class="ckeditor" id="editor1" name="content_teach" placeholder="Nội dung dạy"> </textarea><textarea rows="20" cols="70" placeholder="Phương pháp dạy" class="ckeditor" id="editor1" name="method_teach"></textarea>';
	$('.learn-class').append(a);
}

$('.time_working').click(function(){
	var i = $('.count_time-working').length;
	var id= 'iad'+ i;
	var a='<script>$(".'+ id +'").kendoDateTimePicker({animation: false});</script><div class="panel col-md-6 pd0"><label class="col-md-6"><img src="img/icon/pilot-of-airplane.png"> Thời gian: <input class="count_time-working '+ id +'" name="time_working[]"  /></label></div>';
	$('.time-working').append(a);
});


$('.time_working').click(function(){
	var i = $('.count_time-working').length;
	var id= 'time-post'+ i;
	var a='<script>$(".'+ id +'").kendoDateTimePicker({animation: false});</script><div class="panel col-md-6 pd0"><label class="col-md-12 pd0"><input class="count_time-working '+ id +'" name="time-post[]"  /></label></div>';
	$('.time_posts').append(a);
});

$(window).scroll(function() {

		if ($(this).scrollTop() > 3) {
			$('.fix-title').addClass('sticky');
		}
		else {
			$('.fix-title').removeClass('sticky');
		}
	});
$(".iad").kendoDateTimePicker({animation: false});
$(function(){
	$('.more-read').click(function(){
		$('.content-info').css({'height':'100%','-webkit-transition':'height 0.5s ease-out'}).fadeIn();
		$(this).hide();
	});
});
// Social Sharing Dropdown
$( "#social-share" ).click(function() {
  $("#social").toggleClass("visible").slideToggle(200);
});

// Follow User Button
$(".username")
  .hover(function addUser() {
	$(this).text("+");
  });

// Open Modal Window
$("#initial").click(function(e) {
  $(".detail_email #modal").toggleClass("visible").slideToggle(200);
});

// Close Modal Window
$(".detail_email #close").click(function() {
  $(".detail_email #modal").toggleClass("hidden").toggle();
});

function showMyImage(fileInput) {
		var files = fileInput.files;
		for (var i = 0; i < files.length; i++) {
			var file = files[i];
			var imageType = /image.*/;
			if (!file.type.match(imageType)) {
				continue;
			}
			var img=document.getElementById("thumbnil");
			img.file = file;
			var reader = new FileReader();
			reader.onload = (function(aImg) {
				return function(e) {
					aImg.src = e.target.result;
				};
			})(img);
			reader.readAsDataURL(file);
		}
	}

	function showMyImage(fileInput) {
			var files = fileInput.files;
			for (var i = 0; i < files.length; i++) {
				var file = files[i];
				var imageType = /image.*/;
				if (!file.type.match(imageType)) {
					continue;
				}
				var img=document.getElementById("edit_img_profile");
				img.file = file;
				var reader = new FileReader();
				reader.onload = (function(aImg) {
					return function(e) {
						aImg.src = e.target.result;
					};
				})(img);
				reader.readAsDataURL(file);
			}
		}
$('.list-profile').click(function(){
	var url= $(this).attr('data-href');
	location.replace(url);
});
$('.star').click(function(e){
  var length = $('.review-container .star').length;
  var selected = $('.review-container .star').index($(this));
  $( ".review-container .star" ).each(function( index ) {
  if(index <= selected){

  $(this).addClass("active");
   var start = $('.review-container .star.active').length;
	$('.start-review').val(start);
  }else{
    $(this).removeClass("active");

  }

});

});

// setup slidizle
$('[data-slidizle]').slidizle({
	beforeChange : function(api) {
		console.log('previous', api.getPreviousSlide().index());
		console.log('current', api.getCurrentSlide().index());
		console.log('next', api.getNextSlide().index());
		console.log('previous active', api.getPreviousActiveSlide().index());
	}
});

	$('.job-edit').keypress(function(){
		$('.university').val(' ');
		if( $(this).val() == 'sinh viê' || $(this).val() == 'sinh vie' || $(this).val() == 'Sinh Viê' || $(this).val() == 'Sinh Vie' || $(this).val() == 'Sinh V'){
			$('.university').show();
		}
		else {
			$('.university').hide();
		}
	});

var $slider = $('#progressbar-slider');
				// $slider.slidizle();
				var $progressbar = $slider.find('.slider-progressbar');
					api = $slider.data('slidizle_api');

				$slider.bind('slidizle.change', function(e, api) {
					console.log('change');
					$progressbar.stop().css('width', 0);
				});
				$slider.bind('slidizle.pause', function(e, api) {
					$progressbar.stop();
					console.log('timer pause', api.getCurrentTimeout(), api.getTotalTimeout(), api.getRemainingTimeout());
				});
				$slider.bind('slidizle.play slidizle.resume slidizle.change', function(e, api) {
					console.log('timer start', api.getCurrentTimeout(), api.getTotalTimeout(), api.getRemainingTimeout());

					// do nothing is is hover
					if (api.isHover()) return;

					// manage progressbar :
					$progressbar.animate({
						width : '100%'
					}, api.getRemainingTimeout());
				});



$('.add-cart').click(function(){
	var title_cart= $(this).parents('.item').children('.title-pay').text();
	var price_cart= $(this).parents('.item').children('.val-price').text();
	var cart = {
		item: title_cart,
		price: price_cart
	};
	var jsonStr = JSON.stringify( cart );
	sessionStorage.setItem( "cart", jsonStr );
	var cartValue = sessionStorage.getItem( "cart" );
	var cartObj = JSON.parse( cartValue );
});

// if(window.sessionStorage !== null) {
// 	var session = window.sessionStorage,
// 	data = JSON.parse(session.getItem('cart'));
// 	$('.write-title').text(data.item);
// 	$('.write-price').text(data.price);
// 	$('.pay').attr('href','https://www.nganluong.vn/button_payment.php?receiver=uyendao0302@gmail.com&product_name='+data.item+'&price='+data.price+'&return_url=http://witayl.com');
// }
function clickdesktop( button, content) {
	$(document).on('click', function (e) {
		$('.' + content).hide();
	});
	$('.' + button + ',' + '.' + content).on('click', function (e) {
		e.stopPropagation();
	});
}


/*clickdesktop('dropdown--post-dropdown', 'dropdown__menu');
$('.counter').counterUp({
			delay: 10,
			time: 1000
		});*/


(function($, window, document, undefined) {
$(window).on('scroll', function(){
	$timeline_block.each(function(){
		if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
			$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
		}
	});
});
});
