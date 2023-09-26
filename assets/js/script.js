(function ($) {

  "use strict";

    if ($(".programs-carousel").length) {
    $(".programs-carousel").owlCarousel({
      loop: false,
      margin: 30,
      nav: false,
      dots:true,
      smartSpeed: 700,
      autoplay: 10000,
      autoplayTimeout: 10000,
      navText: [
        '<span class="icon fa fa-angle-left"></span>',
        '<span class="icon fa fa-angle-right"></span>'
      ],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        992: {
          items: 3
        },
        1200: {
          items: 3
        },
        1500: {
          items: 3
        },
        1600: {
          items: 3
        }
      }
    });
  }

      if ($(".programs-three-carousel").length) {
    $(".programs-three-carousel").owlCarousel({
      loop: false,
      margin: 30,
      nav: false,
      dots:true,
      smartSpeed: 700,
      autoplay: 10000,
      autoplayTimeout: 10000,
      navText: [
        '<span class="icon fa fa-angle-left"></span>',
        '<span class="icon fa fa-angle-right"></span>'
      ],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        992: {
          items: 3
        },
        1200: {
          items: 3
        },
        1500: {
          items: 3
        },
        1600: {
          items: 3
        }
      }
    });
  }

  //Update Header Style and Scroll to Top
  function headerStyle() {
    if ($(".main-header").length) {
      var windowpos = $(window).scrollTop();
      var siteHeader = $(".main-header");
      var sticky_header = $(".main-header .sticky-header");
      if (windowpos > 120) {
        siteHeader.addClass("fixed-header");
        sticky_header.addClass("animated slideInDown");
      } else {
        siteHeader.removeClass("fixed-header");
        sticky_header.removeClass("animated slideInDown");
      }
    }
  }

  headerStyle();

    // Elements Animation

    if ($(".wow").length) {

      var wow = new WOW({

        boxClass: "wow", // animated element css class (default is wow)

        animateClass: "animated", // animation css class (default is animated)

        offset: 0, // distance to the element when triggering the animation (default is 0)

        mobile: false, // trigger animations on mobile devices (default is true)

        live: true // act on asynchronously loaded content (default is true)

      });

      wow.init();

    }

      $(window).on("load", function () {

    // swiper slider



    const swiperElm = document.querySelectorAll(".thm-swiper__slider");



    swiperElm.forEach(function (swiperelm) {

      const swiperOptions = JSON.parse(swiperelm.dataset.swiperOptions);

      let thmSwiperSlider = new Swiper(swiperelm, swiperOptions);

    });

  });

  /* ==========================================================================

     When document is Scrollig, do

     ========================================================================== */



  $(window).on("scroll", function () {
    headerStyle();

    if ($(".scroll-to-top").length) {

      var strickyScrollPos = 100;

      if ($(window).scrollTop() > strickyScrollPos) {

        $(".scroll-to-top").fadeIn(500);

      } else if ($(this).scrollTop() <= strickyScrollPos) {

        $(".scroll-to-top").fadeOut(500);

      }

    }

  });



  /* ==========================================================================

     When document is Resized, do

     ========================================================================== */



  $(window).on("resize", function () {});



  // window.document.onkeydown = function(e) {

  //   if (!e) {

  //     e = event;

  //   }

  //   if (e.keyCode == 27) {

  //     lightbox_close();

  //   }

  // }

  // let vid_open = document.getElementById('vid-open');

  // let vid_close = document.getElementById('boxclose');

  // let vid_fade = document.getElementById('fade');

  // vid_open.onclick = function() {

  //   lightbox_open();

  //   return false;

  // };

  // vid_close.onclick = function() {

  //   lightbox_close();

  // };

  // vid_fade.onclick = function() {

  //   lightbox_close();

  // };

  // function lightbox_open() {

  //   var lightBoxVideo = document.getElementById("VisaChipCardVideo");

  //   document.getElementById('light').style.display = 'block';

  //   document.getElementById('fade').style.display = 'block';

  //   lightBoxVideo.play();

  // }

  

  // function lightbox_close() {

  //   var lightBoxVideo = document.getElementById("VisaChipCardVideo");

  //   document.getElementById('light').style.display = 'none';

  //   document.getElementById('fade').style.display = 'none';

  //   lightBoxVideo.pause();

  // }

  



})(window.jQuery);