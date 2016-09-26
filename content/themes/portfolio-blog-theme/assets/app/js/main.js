/**
 * Title:
 *    Main Javascript
 * Description:
 *    The main Javascript file where you will write the bulk
 *    of your scripts. Make sure to include this just before
 *    the closing </body> tag.
 * Sections:
 *    $. Your Scripts
 *    $. Grunticon Loader
 */



/* $. Your Scripts - To go within the SIAF (Self invoking annonymous function)
\*----------------------------------------------------------------*/

(function($) {

    /**
     * Setup 'CustomSelect' plugin on all Select elements
     */
    if(!$('html').hasClass('ie')) {
        $("select").each(function() {
            new CustomSelect($(this));
        });
    }

})(jQuery);

/* $. Burger menu and nav
\*----------------------------------------------------------------*/

$(".icon_socialmedia").hover(function() {
  $(this).toggleClass("purple_background");
});

function header_active() {
  $(".header_fill").toggleClass("header_fill--active");
  $(".hamburger_styling, .icon_socialmedia").toggleClass("white_background");
  $(".icon_socialmedia_font").toggleClass("purple_text");
  $(".nav").toggleClass("is-hidden");

  // Fix  for IE

  var el1 = $(".hamburger_styling, .icon_socialmedia");

  el1.on("click", function() {
    el1.addClass("white_background");
    setTimeout(function() {
      el1.toggleClass("white_background");
    });
  });

  var el2 = $(".icon_socialmedia_font");

  el2.on("click", function() {
    el2.addClass("green_text");
    setTimeout(function() {
      el2.toggleClass("green_text");
    });
  });

  var el3 = $(".nav");

  el3.on("click", function() {
    el3.addClass("is-hidden");
    setTimeout(function() {
      el3.toggleClass("is-hidden");
    });
  });

  var el4 = $(".header_fill");

  el4.on("click", function() {
    el4.addClass("header_fill--active");
    setTimeout(function() {
      el4.toggleClass("header_fill--active");
    });
  });

  var el5 = $(".icon_socialmedia");

  el5.on("hover", function() {
    el5.addClass("green_background");
    setTimeout(function() {
      el5.toggleClass("green_background");
    });
  });

}

(function() {

  "use strict";

  var toggles = document.querySelectorAll(".c-hamburger");

  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };

  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      header_active();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
    });
  }
  
})();

/* $. Grunticon Load
\*----------------------------------------------------------------*/

grunticon([ 
    pathToThemes.path + "/assets/dist/grunticon/icons.data.svg.css", 
    pathToThemes.path + "/assets/dist/grunticon/icons.data.png.css", 
    pathToThemes.path + "/assets/dist/grunticon/icons.fallback.css" 
]);
