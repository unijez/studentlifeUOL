!function(o){o(document).ready(function(){o(window).scroll(function(){if(960<o(window).width())var s=50;else var s=70;o(document).scrollTop()>s?o(window).width()<481?(o("header").addClass("activeMobile"),o(".main-slider").addClass("activatedPadding")):o("header").addClass("active"):o(window).width()<481?(o("header").removeClass("activeMobile"),o(".main-slider").removeClass("activatedPadding")):o("header").removeClass("active")})})}(jQuery),jQuery(document).ready(function(e){
// Toggle search form
e(".search-toggle").on("click",function(){return e(this).toggleClass("active"),e(".header-search").slideToggle(),e(".header-search #s").focus(),!1}),
//	Slider Plugin
e(".hero-header").slick({dots:!0,pauseOnHover:!0,arrows:!1,slidesToShow:1,slidesToScroll:1,vertical:!0,autoplay:!0,autoplaySpeed:5500,rows:0}),
//	Comment Tabs
e("ul.comment-tabs li").click(function(){var s=e(this).attr("data-tab");e("ul.comment-tabs li").removeClass("current"),e(".comment-tab__tab-content").removeClass("current"),e(this).addClass("current"),e("#"+s).addClass("current")})
/************Mobile Menu************/;var s=e(".open-button"),o=e(".close-button"),a=e(".overlay-navigation"),t=e(".nav-items"),l=e("body"),i=e("html");a.click(function(s){s.target==this&&(l.removeClass("stop-scroll"),i.removeClass("stop-scroll"),t.addClass("items-off"),a.addClass("overlay-fade"),setTimeout(function(){a.addClass("overlay-off")},750))}),s.on("click",function(){l.addClass("stop-scroll"),i.addClass("stop-scroll"),t.removeClass("items-off"),a.removeClass("overlay-off"),a.removeClass("overlay-fade")}),o.on("click",function(){l.removeClass("stop-scroll"),i.removeClass("stop-scroll"),t.addClass("items-off"),a.addClass("overlay-fade"),setTimeout(function(){a.addClass("overlay-off")},750)});var c=e(".sticky-box").offset().top,r=e(".column-spacings").offset().top,d=e(".column-spacings").outerHeight(),n=e(".sticky-box").height(),u=c+n,v=r+d;e(window).scroll(function(s){var o=e(this).scrollTop()+92;960<e(window).width()&&(c<=o&&o+n<=v?e(".sticky-box").addClass("stuck"):(e(".sticky-box").removeClass("stuck"),e(".sticky-box").removeClass("bottomStuck"),e(".sticky-box").width(e(".sticky-box").parent().width())),d-51<=o?e(".sticky-box").addClass("bottomStuck"):e(".sticky-box").removeClass("bottomStuck"))})});