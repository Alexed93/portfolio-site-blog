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
    // if(!$('html').hasClass('ie')) {
    //     $("select").each(function() {
    //         new CustomSelect($(this));
    //     });
    // }

/* $. Burger menu and nav
\*----------------------------------------------------------------*/

  function header_active() {
    $(".header_fill").toggleClass("header_fill--active");
    $(".nav--primary").toggleClass("nav--active");
    $(".hamburger_styling, .socialmedia-icon").toggleClass("white_background");
    $(".socialmedia-icon__font").toggleClass("purple_text");
    $(".header--secondary").toggleClass("white_text");
    $(".header--secondary").toggleClass("white_background");

    // Fix  for IE

    var el1 = $(".hamburger_styling, .socialmedia-icon");

    el1.on("click", function() {
      el1.addClass("white_background");
      setTimeout(function() {
        el1.toggleClass("white_background");
      });
    });

    var el2 = $(".socialmedia-icon__font");

    el2.on("click", function() {
      el2.addClass("green_text");
      setTimeout(function() {
        el2.toggleClass("green_text");
      });
    });

    var el3 = $(".header_fill");

    el3.on("click", function() {
      el3.addClass("header_fill--active");
      setTimeout(function() {
        el3.toggleClass("header_fill--active");
      });
    });

    var el4 = $(".socialmedia-icon");

    el4.on("hover", function() {
      el4.addClass("green_background");
      setTimeout(function() {
        el4.toggleClass("green_background");
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

  /* $. Slick-slider 
  \*----------------------------------------------------------------*/

  var nextArrow = jQuery("#carouselNextArrow");
  var prevArrow = jQuery("#carouselPrevArrow"); // $(".carousel--prev-arrow");

  // When the slick slider initialises take the element with the class
  // .slick-dots and move it to our specific container
  jQuery(".slick_carousel").on('init', function(event, slick){
    jQuery(this).find(".slick-dots").appendTo(".slick-dots-container");
  });

  $('.slick_carousel').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    autoplay: true,
    prevArrow: prevArrow,
    nextArrow: nextArrow,
    dots: true,
    
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          settings: 'unslick'
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  /* $. Slick-lightbox
  \*----------------------------------------------------------------*/

  $('.slick_carousel').slickLightbox({
    itemSelector: '> div > div > div > a',
    caption: 'caption',
    prevArrow: prevArrow,
    nextArrow: nextArrow,
    captionPosition: 'bottom'
  });

  $('.project_screen').slickLightbox({
    itemSelector: '> a',
    caption: 'caption',
    prevArrow: prevArrow,
    nextArrow: nextArrow,
    captionPosition: 'bottom'
  });

  $('.screenshot').slickLightbox({
    itemSelector: '> a',
    caption: 'caption',
    prevArrow: prevArrow,
    nextArrow: nextArrow,
    captionPosition: 'bottom'
  });

  /* $. Timeline
  \*----------------------------------------------------------------*/

  (function() {

    'use strict';

    // define variables
    var items = document.querySelectorAll(".timeline li");

    // check if an element is in viewport
    // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);

  })();

  /* $. Circle stats
  \*----------------------------------------------------------------*/

  var el = $('.statcircle'),
      inited = false;

  el.appear({ force_process: true });

  el.on('appear', function() {
    if (!inited) {
      el.circleProgress({});
      inited = true;
    }
  });

  $('.statcircle-1').circleProgress({
    value: 0.90,
    size: 150,
    fill: {
       color: "#331749"
    },
    thickness: 5,
  });

  $('.statcircle-2').circleProgress({
    value: 0.70,
    size: 150,
    fill: {
       color: "#331749"
    },
    thickness: 5,
  });

  $('.statcircle-3').circleProgress({
    value: 0.80,
    size: 150,
    fill: {
       color: "#331749"
    },
    thickness: 5,
  });

  (function() {

  'use strict';

  // define variables
  var items = document.querySelectorAll(".statcircle");

  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= ((window.innerHeight || document.documentElement.clientHeight) * 0.9 ) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("scale");
        setTimeout(function () {
          $(".statcircle_number").addClass("fadein");
        }, 1000);
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);

  })();

  /* $. Testimonial slider
  \*----------------------------------------------------------------*/

  $('.testimonial_slider').unslider({
    autoplay: true,
    delay: 8000,
  });

  /* $. Smooth scrolling
  \*----------------------------------------------------------------*/

  $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
          || location.hostname == this.hostname) {

          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
             if (target.length) {
               $('html,body').animate({
                   scrollTop: target.offset().top
              }, 1000);
              return false;
          }
      }
  });

  /* $. Contact form file toggle
  \*----------------------------------------------------------------*/

  // $('.attach-file-yes').click(function() {
  //   $('.attach-file-box').removeClass('is-hidden');
  // });

  // $('.attach-file-no').click(function() {
  //   $('.attach-file-box').addClass('is-hidden');
  // });

  /* $. Contact form send
  \*----------------------------------------------------------------*/
  $(function(){
    $('#form').submit(function(e){
      // Stop the form actually posting
      e.preventDefault();

      // Send the request
      $.post('pathToThemes.path + "contact.php"',  {
          name: $('#name').val(),
          email: $('#email').val(),
          number: $('#number').val(),
          enquirytype: $('#enquiry-options').val(),
          message: $('#comments').val(),
          attachment: $('#file').val()
          
      }, function(d){
          // Here we handle the response from the script
          // We are just going to alert the result for now
          alert(d);
          // $('#result').html(d);
          $('#submit-button').attr('disabled', 'disabled')
      });
    });
  });

/*----------- END */

})(jQuery);

/* $. Grunticon Load
\*----------------------------------------------------------------*/

grunticon([ 
    pathToThemes.path + "/assets/dist/grunticon/icons.data.svg.css", 
    pathToThemes.path + "/assets/dist/grunticon/icons.data.png.css", 
    pathToThemes.path + "/assets/dist/grunticon/icons.fallback.css" 
]);
