
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

$('.time_working').click(function(){
	var i = $('.count_time-working').length;
	var id= 'iad'+ i;
	var a='<script>$(".'+ id +'").kendoDateTimePicker({animation: false});</script><div class="panel col-md-6 pd0"><label class="col-md-6"><img src="img/icon/pilot-of-airplane.png"> Thời gian: <input class="count_time-working '+ id +'" name="time_working[]"  /></label></div>';
	$('.time-working').append(a);
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
function addCommas(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

$('.selectCouser').click(function(){
	var selected = $('.selectCouser option:selected');
	if (selected.length) {
		var val = selected.attr('data-price');
		var type = selected.attr('data-type');
		if( type == '2') {
				$('.planprice').text('/tháng');
		}else {
				$('.planprice').text('/giờ');
		}
    $('.price-register').val(addCommas(val));

  }
});
var starClicked = false;

$(function() {

  $('.star').click(function() {

    $(this).children('.selected').addClass('is-animated');
    $(this).children('.selected').addClass('pulse');

    var target = this;

    setTimeout(function() {
      $(target).children('.selected').removeClass('is-animated');
      $(target).children('.selected').removeClass('pulse');
    }, 1000);

    starClicked = true;
  })

  $('.half').click(function() {
    if (starClicked == true) {
      setHalfStarState(this)
    }
    $(this).closest('.rating').find('.js-score').val($(this).data('value'));

    $(this).closest('.rating').data('vote', $(this).data('value'));
    calculateAverage()
    console.log(parseInt($(this).data('value')));

  })

  $('.full').click(function() {
    if (starClicked == true) {
      setFullStarState(this)
    }
    $(this).closest('.rating').find('.js-score').val($(this).data('value'));

    $(this).find('js-average').text(parseInt($(this).data('value')));

    $(this).closest('.rating').data('vote', $(this).data('value'));
    calculateAverage()

    console.log(parseInt($(this).data('value')));
  })

  $('.half').hover(function() {
    if (starClicked == false) {
      setHalfStarState(this)
    }

  })

  $('.full').hover(function() {
    if (starClicked == false) {
      setFullStarState(this)
    }
  })

})

function updateStarState(target) {
  $(target).parent().prevAll().addClass('animate');
  $(target).parent().prevAll().children().addClass('star-colour');

  $(target).parent().nextAll().removeClass('animate');
  $(target).parent().nextAll().children().removeClass('star-colour');
}

function setHalfStarState(target) {
  $(target).addClass('star-colour');
  $(target).siblings('.full').removeClass('star-colour');
  updateStarState(target)
}

function setFullStarState(target) {
  $(target).addClass('star-colour');
  $(target).parent().addClass('animate');
  $(target).siblings('.half').addClass('star-colour');

  updateStarState(target)
}

function calculateAverage() {
  var average = 0

  $('.rating').each(function() {
    average += $(this).data('vote')
  })

  $('.js-average').val((average/ $('.rating').length).toFixed(1))
}
