(function ($) {
	$(document).ready(function () {
		$(window).scroll(function() {
			if( $(window).width() > 960 ) {
				var scrollDist = 50;
			} else {
				var scrollDist = 70;
			}
			if ($(document).scrollTop() > scrollDist) {
				if( $(window).width() < 481 ) {
					$('header').addClass('activeMobile');
					$('.sitebody-content').addClass('activatedPadding');
				} else {
					$('header').addClass('active');
				}
			} else {
				if( $(window).width() < 481 ) {
					$('header').removeClass('activeMobile');
					$('.sitebody-content').removeClass('activatedPadding');
				} else {
					$('header').removeClass('active');
				}
			}
		});
	});
})(jQuery);

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
		var html = $('html');


		globalNav.click(function(e) {
			if(e.target == this) {
				body.removeClass("stop-scroll");
				html.removeClass("stop-scroll");
				itemNav.addClass("items-off");
				globalNav.addClass("overlay-fade");
				setTimeout(function() { globalNav.addClass("overlay-off") }, 750);
			}
		});

		openButton.on("click", function(){
			body.addClass("stop-scroll");
			html.addClass("stop-scroll");
			itemNav.removeClass("items-off");
			globalNav.removeClass("overlay-off");
			globalNav.removeClass("overlay-fade");
		});

		closeButton.on("click", function(){
			body.removeClass("stop-scroll");
			html.removeClass("stop-scroll");
			itemNav.addClass("items-off");
			globalNav.addClass("overlay-fade");
			setTimeout(function() { globalNav.addClass("overlay-off") }, 750);
		});


		var top = $('.sticky-box').offset().top;
		var trackOffset = $('.column-spacings').offset().top;
		var trackHeight = $('.column-spacings').outerHeight();
		var stickyBoxHeight = $('.sticky-box').height();
		var boxBottom = top + stickyBoxHeight;
		var trackBottom = trackOffset + trackHeight;
			$(window).scroll(function (event) {
				var y = $(this).scrollTop() + 92;
				if( $(window).width() > 960 ) {

					if (y >= top && (y+stickyBoxHeight) <= (trackBottom)) {
						$('.sticky-box').addClass('stuck');
					} else {
						$('.sticky-box').removeClass('stuck');
						$('.sticky-box').removeClass('bottomStuck');
					$('.sticky-box').width($('.sticky-box').parent().width());
					}
					if((y) >= (trackHeight-51)) {
						$('.sticky-box').addClass('bottomStuck');
					} else {
						$('.sticky-box').removeClass('bottomStuck');
					}
				}
			});
});
