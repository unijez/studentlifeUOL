!function(o){o(document).ready(function(){o(window).scroll(function(){if(960<o(window).width())var s=50;else var s=70;o(document).scrollTop()>s?o(window).width()<481?(o("header").addClass("activeMobile"),o(".sitebody-content").addClass("activatedPadding")):o("header").addClass("active"):o(window).width()<481?(o("header").removeClass("activeMobile"),o(".sitebody-content").removeClass("activatedPadding")):o("header").removeClass("active")})})}(jQuery),jQuery(document).ready(function(e){
// Toggle search form
e(".search-toggle").on("click",function(){return e(this).toggleClass("active"),e(".header-search").slideToggle(),e(".header-search #s").focus(),!1}),
//	Slider Plugin
e(".hero-header").slick({dots:!0,pauseOnHover:!0,arrows:!1,slidesToShow:1,slidesToScroll:1,vertical:!0,autoplay:!0,autoplaySpeed:5500,rows:0}),
//	Comment Tabs
e("ul.comment-tabs li").click(function(){var s=e(this).attr("data-tab");e("ul.comment-tabs li").removeClass("current"),e(".comment-tab__tab-content").removeClass("current"),e(this).addClass("current"),e("#"+s).addClass("current")})
/************Mobile Menu************/;var s=e(".open-button"),o=e(".close-button"),t=e(".overlay-navigation"),a=e(".nav-items"),l=e("body"),c=e("html");t.click(function(s){s.target==this&&(l.removeClass("stop-scroll"),c.removeClass("stop-scroll"),a.addClass("items-off"),t.addClass("overlay-fade"),setTimeout(function(){t.addClass("overlay-off")},750))}),s.on("click",function(){l.addClass("stop-scroll"),c.addClass("stop-scroll"),a.removeClass("items-off"),t.removeClass("overlay-off"),t.removeClass("overlay-fade")}),o.on("click",function(){l.removeClass("stop-scroll"),c.removeClass("stop-scroll"),a.addClass("items-off"),t.addClass("overlay-fade"),setTimeout(function(){t.addClass("overlay-off")},750)});var i=e(".sticky-box").offset().top,r=e(".column-spacings").offset().top,d=e(".column-spacings").outerHeight(),n=e(".sticky-box").height(),u=i+n,v=r+d;e(window).scroll(function(s){var o=e(this).scrollTop()+92;960<e(window).width()&&(i<=o&&o+n<=v?e(".sticky-box").addClass("stuck"):(e(".sticky-box").removeClass("stuck"),e(".sticky-box").removeClass("bottomStuck"),e(".sticky-box").width(e(".sticky-box").parent().width())),d-51<=o?e(".sticky-box").addClass("bottomStuck"):e(".sticky-box").removeClass("bottomStuck"))})});