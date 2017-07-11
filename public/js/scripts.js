
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

$(window).scroll(function() {

		if ($(this).scrollTop() > 3) {
			$('.fix-title').addClass('sticky');
		}
		else {
			$('.fix-title').removeClass('sticky');
		}
	});

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

$('.list-profile').click(function(){
	var url= $(this).attr('data-href');
	location.replace(url);
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
$('.price-add-course').keydown(function(){
	// skip for arrow keys
	if(event.which >= 37 && event.which <= 40) return;

	// format number
	$(this).val(function(index, value) {
		return value
		.replace(/\D/g, "")
		.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
		;
	});
});
$('.selectCouser').click(function(){
	var selected = $('.selectCouser option:selected');
	$('.price-register').val(' ');
	if (selected.length) {
		var val = selected.attr('data-price');
		var type = selected.attr('data-type');
		if( type == '2') {
				$('.planprice').text('/Tháng');
				$('.detail-register').hide();
				$('.price-register').val(addCommas(val));
		}else {
				$('.planprice').text('/Tháng');
				$('.detail-register').show();
		}
  }
});
$('.plantime, .planmoment').keyup(function(){
	var selected = $('.selectCouser option:selected');
	var val = selected.attr('data-price');
	var planmoment = $('.planmoment').val();
	var plantime = $('.plantime').val();
	var calculate = (planmoment  * 4) * plantime * val;
	$('.price-register').val(addCommas(calculate));
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

    $(this).find('user-ratinge').text(parseInt($(this).data('value')));

    $(this).closest('.rating').data('vote', $(this).data('value'));
    calculateAverage()

    console.log(parseInt($(this).data('value')));
  })

  $('.half').hover(function() {
      setHalfStarState(this)
  })

  $('.full').hover(function() {
      setFullStarState(this)
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

$('.course-search').focus(function(){
	$('.select-course').show();
})
$('.select-course li').click(function(){
	var text = $(this).text();
	var value= $(this).attr('value');
	$('.course-search').val(text);
	$('.course-value').val(value);
});

function clickdesktop( button, content) {
	$(document).on('click', function (e) {
		$('.' + content).hide();
	});
	$('.' + button + ',' + '.' + content).on('click', function (e) {
		e.stopPropagation();
	});
}

$(document).on('click', function () {
    $('.select-course').hide();
});
$('.course-search, .distric-edit').on('click', function (e) {
    e.stopPropagation();
});

$('INPUT[type="file"]').change(function () {
    var ext = $('.multiple-flie').val().split('.').pop().toLowerCase();
    if($.inArray(ext, ['gif','png','jpg','jpeg','mp4','avi','mov','flv']) == -1) {
      $('.btn').attr('disabled',true)
    }
});

$('.img-c').click(function(){
	var clone = $(this).clone();
	$('.zoom-picture').remove();
	$('body').append('<div class="col-md-12 zoom-picture"><div class="zoom-picture__content"></div></div>');
	$('.zoom-picture__content').append(clone);
	$('.zoom-picture .img-c').removeClass('col-md-6');
	$('html').css('overflow-y','hidden');
})
$(document).on('click', function () {
    $('.zoom-picture').remove();
		$('html').css('overflow-y','auto');
});
$('.img-c').on('click', function (e) {
    e.stopPropagation();
});
