//MINIFIER LE HEADER AU SCROLL - DESKTOP (jquery)
$.noConflict();
jQuery(document).ready(function(){
  jQuery("button").click(function(){
jQuery("p").text("jQuery is still working!");
  });
});

$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 300) {
            $(".logo").addClass("logo--mini");
            $(".header-container").addClass("header-container--mini")
            $(".top_nav").addClass("top_nav--mini");
            $(".main_nav_container").addClass("main_nav_container--mini");
            $(".main_nav_menu_link_btn").addClass("main_nav_menu_link_btn--mini");
            $(".main_nav_menu_link_btn_title").addClass("main_nav_menu_link_btn_title--mini");
            $(".main_nav_menu_link_btn_title2").addClass("main_nav_menu_link_btn_title2--mini");
            $(".main_nav_menu_submenu").addClass("main_nav_menu_submenu--mini");

        } else {
            $(".logo").removeClass("logo--mini");
            $(".header-container").removeClass("header-container--mini")
            $(".top_nav").removeClass("top_nav--mini");
            $(".main_nav_container").removeClass("main_nav_container--mini");
            $(".main_nav_menu_link_btn").removeClass("main_nav_menu_link_btn--mini");
            $(".main_nav_menu_link_btn_title").removeClass("main_nav_menu_link_btn_title--mini");
            $(".main_nav_menu_link_btn_title2").removeClass("main_nav_menu_link_btn_title2--mini");
            $(".main_nav_menu_submenu").removeClass(".main_nav_menu_submenu--mini");
        }
    });
});