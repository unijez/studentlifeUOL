jQuery(document).ready(function($){$(".search-toggle").on("click",function(){return $(this).toggleClass("active"),$(".header-search").slideToggle(),$(".header-search #s").focus(),!1}),$(".hero-header").slick({dots:!0,pauseOnHover:!0,arrows:!1,slidesToShow:1,slidesToScroll:1,vertical:!0,autoplay:!1,autoplaySpeed:2500,rows:0}),$("ul.comment-tabs li").click(function(){var e=$(this).attr("data-tab");$("ul.comment-tabs li").removeClass("current"),$(".comment-tab__tab-content").removeClass("current"),$(this).addClass("current"),$("#"+e).addClass("current")});var e=$(".open-button"),s=$(".close-button"),a=$(".overlay-navigation"),o=$(".nav-items"),t=$("body");a.click(function(e){e.target==this&&(t.removeClass("stop-scroll"),o.addClass("items-off"),a.addClass("overlay-fade"),setTimeout(function(){a.addClass("overlay-off")},750))}),e.on("click",function(){t.addClass("stop-scroll"),o.removeClass("items-off"),a.removeClass("overlay-off"),a.removeClass("overlay-fade")}),s.on("click",function(){t.removeClass("stop-scroll"),o.addClass("items-off"),a.addClass("overlay-fade"),setTimeout(function(){a.addClass("overlay-off")},750)})});