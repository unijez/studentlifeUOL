jQuery(document).ready(function($){$(".search-toggle").on("click",function(){return $(this).toggleClass("active"),$(".header-search").slideToggle(),$(".header-search #s").focus(),!1}),$(".hero-header").slick({dots:!0,pauseOnHover:!0,arrows:!1,slidesToShow:1,slidesToScroll:1,vertical:!0,autoplay:!0,autoplaySpeed:2500}),$("ul.comment-tabs li").click(function(){var e=$(this).attr("data-tab");$("ul.comment-tabs li").removeClass("current"),$(".comment-tab__tab-content").removeClass("current"),$(this).addClass("current"),$("#"+e).addClass("current")});var e=$(".mobile-menu-button"),t=$(".mobile-navigation"),a=$("body");e.on("click",function(){$(this).toggleClass("menu-active"),t.toggleClass("menu-active"),a.toggleClass("stop-scroll"),t.slideToggle()})});