(function ($) {
  "use strict";

  // count down timer function
  function countdownTimer() {
    var countDownContainer = $(".coundown");
    if (countDownContainer.length) {
      countDownContainer.countdown({
        date: "December 31, 2018 23:59:59",
      });
    }
  }
  // sticky header
  function stickyHeader() {
    var headerScrollPos = $(".header").next().offset().top;
    if ($(window).scrollTop() > headerScrollPos) {
      $(".header").addClass("header-fixed ");
    } else if ($(this).scrollTop() <= headerScrollPos) {
      $(".header").removeClass("header-fixed");
    }
  }

  function GalleryFilter() {
    if ($(".image-gallery").length) {
      $(".image-gallery").each(function () {
        var filterSelector = $(this).data("filter-class");
        var showItemOnLoad = $(this).data("show-on-load");
        if (showItemOnLoad) {
          $(this).mixItUp({
            load: {
              filter: "." + showItemOnLoad,
            },
            selectors: {
              filter: "." + filterSelector,
            },
          });
        }
        $(this).mixItUp({
          selectors: {
            filter: "." + filterSelector,
          },
        });
      });
    }
  }
  // gallery fancybox activator
  function GalleryFancyboxActivator() {
    var galleryFcb = $(".fancybox");
    if (galleryFcb.length) {
      galleryFcb.fancybox();
    }
  }
  // upcoming event filter
  function upcomingEventFilter() {
    var upcomingEventFilterContent = $("#upcoming-event .tab-content-wrap");
    if (upcomingEventFilterContent.length) {
      upcomingEventFilterContent.mixItUp();
    }
  }
  // testimonial slider
  function testimonialSlide() {
    var sliderContainer = $(".testimonial-slide");
    var customPager = $(".testimonial.custom-pager li[data-slide-index]");
    if (sliderContainer.length) {
      var slider = sliderContainer.bxSlider({
        auto: true,
        autoControls: false,
        controls: false,
        pager: false,
        autoHover: true,
        minSlides: 1,
        onSlideNext: function () {
          var current = slider.getCurrentSlide();
          customPager.each(function () {
            var Slef = $(this);
            var slideIndex = $(this).data("slide-index");
            if (slideIndex === current) {
              customPager.removeClass("active");
              Slef.addClass("active");
            }
          });
        },
      });
      customPager.each(function () {
        var slideIndex = $(this).data("slide-index");
        $(this).on("click", function () {
          customPager.removeClass("active");
          $(this).addClass("active");
          slider.goToSlide(slideIndex);
        });
      });
      $("#testimonials .custom-pager li.prev").on("click", function () {
        var current = slider.getCurrentSlide();
        slider.goToPrevSlide(current) - 1;
      });
      $("#testimonials .custom-pager li.next").on("click", function () {
        var current = slider.getCurrentSlide();
        slider.goToNextSlide(current) + 1;
      });
    }
  }
  // sponsor logo carosule
  function sponsorLogo() {
    var sponsorLogoContainer = $(".sponsor-logo");
    if (sponsorLogoContainer.length) {
      sponsorLogoContainer.owlCarousel({
        loop: true,
        margin: 100,
        nav: true,
        dots: false,
        autoWidth: true,
        navText: [
          '<i class="fa fa-angle-left"></i>',
          '<i class="fa fa-angle-right"></i>',
        ],
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
          },
          480: {
            items: 2,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 4,
          },
        },
      });
    }
  }
  function teamCarousel() {
    if ($(".team-carousel").length) {
      $(".team-carousel").owlCarousel({
        loop: true,
        margin: 50,
        nav: false,
        dots: false,
        autoWidth: true,
        navText: [
          '<i class="fa fa-angle-left"></i>',
          '<i class="fa fa-angle-right"></i>',
        ],
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
          },
          480: {
            items: 2,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 4,
          },
        },
      });
    }
  }
  function eventCarousel() {
    if ($(".event-carousel").length) {
      $(".event-carousel").owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: true,
        autoWidth: false,
        navText: [
          '<i class="fa fa-angle-left"></i>',
          '<i class="fa fa-angle-right"></i>',
        ],
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
          },
          480: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 3,
          },
        },
      });
    }
  }
  function galleryCarousel() {
    if ($(".gallery-carousel").length) {
      $(".gallery-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoWidth: false,
        navText: [
          '<i class="fa fa-angle-left"></i>',
          '<i class="fa fa-angle-right"></i>',
        ],
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
          },
          480: {
            items: 2,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 4,
          },
        },
      });
    }
  }
  // twitter feed widget
  function twitterFeedWidget() {
    if ($(".twitter").length) {
      $.ajax({
        method: "POST",
        url: "includes/twitter/tweet-api.php",
        data: {},
      }).done(function (msg) {
        $(".twitter").append(function () {
          return msg;
        });
      });
    }
  }
  function CounterNumberChanger() {
    var timer = $(".timer");
    if (timer.length) {
      timer.each(function () {
        $(this).appear(function () {
          var value = $(this).text();
          $(this).countTo({
            from: 1,
            to: value,
            speed: 3000,
          });
        });
      });
    }
  }
  function expertizeRoundCircle() {
    var rounderContainer = $(".single-expertize .icon");
    if (rounderContainer.length) {
      rounderContainer.each(function () {
        var Self = $(this);
        var value = Self.data("value");
        var size = Self.parent().width();
        var color = Self.data("fg-color");

        Self.find("span").each(function () {
          var expertCount = $(this);
          expertCount.appear(function () {
            expertCount.countTo({
              from: 1,
              to: value * 100,
              speed: 3000,
            });
          });
        });
        Self.appear(function () {
          Self.circleProgress({
            value: value,
            size: size,
            thickness: 20,
            emptyFill: "rgba(0, 0, 0, .0)",
            animation: {
              duration: 3000,
            },
            fill: {
              color: color,
            },
          });
        });
      });
    }
  }
  function featureListTab() {
    var tabContent = $(".tab-row");
    if (tabContent.length) {
      tabContent.find(".tab-content-box").hide();
      tabContent.find(".tab-content-box").eq(0).show();
      tabContent.find(".tab-title li span").on("click", function () {
        tabContent.find(".tab-title li span").removeClass("active");
        $(this).addClass("active");
        var tabName = $(this).data("tab-name");
        tabContent.find(".tab-content-box").hide();
        tabContent.find(".tab-content-box." + tabName).fadeIn(500);
      });
    }
  }
  // revolution slider
  function revolutionSliderActiver() {
    var banner = $("#banner .banner");
    if (banner.length) {
      banner.revolution({
        delay: 5000,
        startwidth: 1170,
        startheight: 820,
        startWithSlide: 0,

        fullScreenAlignForce: "on",
        autoHeight: "off",
        minHeight: "off",

        shuffle: "off",

        onHoverStop: "on",

        hideThumbsOnMobile: "off",
        hideNavDelayOnMobile: 1500,
        hideBulletsOnMobile: "off",
        hideArrowsOnMobile: "off",
        hideThumbsUnderResoluition: 0,

        hideThumbs: 1,
        hideTimerBar: "on",

        keyboardNavigation: "on",

        navigationType: "bullet",
        navigationArrows: "nexttobullets",
        navigationStyle: "preview4",

        navigationHAlign: "center",
        navigationVAlign: "bottom",
        navigationHOffset: 30,
        navigationVOffset: 30,

        soloArrowLeftHalign: "left",
        soloArrowLeftValign: "center",
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,

        soloArrowRightHalign: "right",
        soloArrowRightValign: "center",
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,

        touchenabled: "on",
        swipe_velocity: "0.7",
        swipe_max_touches: "1",
        swipe_min_touches: "1",
        drag_block_vertical: "false",

        parallax: "mouse",
        parallaxBgFreeze: "on",
        parallaxLevels: [10, 7, 4, 3, 2, 5, 4, 3, 2, 1],
        parallaxDisableOnMobile: "off",

        stopAtSlide: -1,
        stopAfterLoops: -1,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        hideSliderAtLimit: 0,

        dottedOverlay: "none",

        spinned: "spinner4",

        fullWidth: "on",
        forceFullWidth: "on",
        fullScreen: "off",
        fullScreenOffsetContainer: "#banner",
        fullScreenOffset: "0px",

        panZoomDisableOnMobile: "off",

        simplifyAll: "off",

        shadow: 0,
      });
    }
  }
  // wow activator
  function wowActivator() {
    // var wow = new WOW ({
    //   		offset: 0
    //   	});
    //   	wow.init();
  }

  //Contact Form Validation
  function contactFormValidation() {
    if ($(".contact-form").length) {
      $(".contact-form").validate({
        // initialize the plugin
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            email: true,
          },
          message: {
            required: true,
          },
          subject: {
            required: true,
          },
        },
        submitHandler: function (form) {
          // sending value with ajax request
          $.post(
            $(form).attr("action"),
            $(form).serialize(),
            function (response) {
              $(form).parent("div").append(response);
              $(form).find('input[type="text"]').val("");
              $(form).find('input[type="email"]').val("");
              $(form).find("textarea").val("");
            }
          );
          return false;
        },
      });
    }
  }
  function mobileNavToggle() {
    if ($(".header-navigation.navbar .navbar-nav .sub-menu").length) {
      $(".header-navigation.navbar .navbar-nav .sub-menu")
        .parent("li")
        .children("a")
        .append(function () {
          return '<button class="sub-nav-toggler"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>';
        });
      $(".header-navigation.navbar .navbar-nav .sub-nav-toggler").on(
        "click",
        function () {
          var Self = $(this);
          Self.parent().parent().children(".sub-menu").slideToggle();
          return false;
        }
      );
    }
  }
  if ($("#contact-form").length) {
    $("#contact-form").validate({
      submitHandler: function (form) {
        var form_btn = $(form).find('button[type="submit"]');
        var form_result_div = "#form-result";
        $(form_result_div).remove();
        form_btn.before(
          '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
        );
        var form_btn_old_msg = form_btn.html();
        form_btn.html(form_btn.prop("disabled", true).data("loading-text"));
        $(form).ajaxSubmit({
          dataType: "json",
          success: function (data) {
            if (data.status == "true") {
              $(form).find(".form-control").val("");
            }
            form_btn.prop("disabled", false).html(form_btn_old_msg);
            $(form_result_div).html(data.message).fadeIn("slow");
            setTimeout(function () {
              $(form_result_div).fadeOut("slow");
            }, 6000);
          },
        });
      },
    });
  }
  // doc ready
  $(document).on("ready", function () {
    countdownTimer();
    GalleryFancyboxActivator();
    upcomingEventFilter();
    testimonialSlide();
    sponsorLogo();
    twitterFeedWidget();
    CounterNumberChanger();
    expertizeRoundCircle();
    featureListTab();
    revolutionSliderActiver();
    wowActivator();
    contactFormValidation();
    eventCarousel();
    teamCarousel();
    GalleryFilter();
    galleryCarousel();
    mobileNavToggle();
  });
  // window load
  $(window).on("load", function () {});
  // window scroll
  $(window).on("scroll", function () {
    stickyHeader();
  });

  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });
})(jQuery);
