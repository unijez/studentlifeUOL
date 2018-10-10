jQuery(document).ready(function($) {

// Toggle search form
$(".search-toggle").on("click", function(){
	$(this).toggleClass("active");
	$(".header-search").slideToggle();
	$(".header-search #s").focus();
	return false;
});

//	Slider Plugin

	$('.hero-header').slick({
		dots: true,
		pauseOnHover: true,
		arrows: false,
		slidesToShow: 1,
	  slidesToScroll: 1,
		vertical: true,
	  autoplay: true,
	  autoplaySpeed: 5500,
	  rows: 0
	});

//	Comment Tabs

$('ul.comment-tabs li').click(function(){

		var tab_id = $(this).attr('data-tab');

		$('ul.comment-tabs li').removeClass('current');
		$('.comment-tab__tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})



	 /************Mobile Menu************/

	 	var openButton = $('.open-button');
		var closeButton = $('.close-button');
	 	var globalNav = $('.overlay-navigation');
		var itemNav = $('.nav-items');
		var body = $('body');


		globalNav.click(function(e) {
			if(e.target == this) {
				body.removeClass("stop-scroll");
				itemNav.addClass("items-off");
				globalNav.addClass("overlay-fade");
				setTimeout(function() { globalNav.addClass("overlay-off") }, 750);
			}
		});

		openButton.on("click", function(){
			body.addClass("stop-scroll");
			itemNav.removeClass("items-off");
			globalNav.removeClass("overlay-off");
			globalNav.removeClass("overlay-fade");
		});

		closeButton.on("click", function(){
			body.removeClass("stop-scroll");
			itemNav.addClass("items-off");
			globalNav.addClass("overlay-fade");
			setTimeout(function() { globalNav.addClass("overlay-off") }, 750);
		});

		var top = $('.sticky-box').offset().top;
		  $(window).scroll(function (event) {
		    var y = $(this).scrollTop() + 120;
		    if (y >= top)
		      $('.sticky-box').addClass('stuck');
		    else
		      $('.sticky-box').removeClass('stuck');
		    $('.sticky-box').width($('.sticky-box').parent().width());
		  });
});

(function ($) {
	$(document).ready(function () {
		$(window).scroll(function() {
			if ($(document).scrollTop() > 150) {
				$('header').addClass('active');
			} else {
				$('header').removeClass('active');
			}
		});
	});
})(jQuery);
