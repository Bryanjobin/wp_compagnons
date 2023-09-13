//MINIFIER LE HEADER AU SCROLL - DESKTOP (jquery)
jQuery(function($) {
  // Vérifie la largeur de l'écran au chargement de la page
  var screenWidth = window.innerWidth;

  // Fonction pour gérer le redimensionnement de l'écran
  function handleResize() {
      screenWidth = window.innerWidth;

      // Vérifie si la largeur de l'écran est supérieure ou égale à 1200px
      if (screenWidth >= 1400) {
          $(window).on("scroll", function() {
              if($(window).scrollTop() > 50) {
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
      }
  }

  // Appel initial de la fonction pour gérer la largeur de l'écran
  handleResize();

  // Gère le redimensionnement de l'écran
  $(window).on("resize", handleResize);
});