

$(function() {
    "use strict";
    /* ==========================================================================
       Number animation
       ========================================================================== */


    $('.counter').waypoint(function() {

        var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');

        $('.total-number-1').animateNumber({
            // number: 20, //change value here
            numberStep: comma_separator_number_step
        }, 2000);

        $('.total-number-2').animateNumber({
            // number: 5000, //change value here
            numberStep: comma_separator_number_step
        }, 2000);

        $('.total-number-3').animateNumber({
            // number: 10, //change value here
            numberStep: comma_separator_number_step
        }, 2000);

        $('.total-number-4').animateNumber({
            // number: 3000, //change value here
            numberStep: comma_separator_number_step
        }, 2000);



    }, {
        offset: '80%'

    });


    /* ==========================================================================
   sticky nav
   ========================================================================== */

    $('.navbar-default').waypoint('sticky', {
        offset: 30
    });




    /* ==========================================================================
   Tabs
   ========================================================================== */

    $('#schedule-days a').click(function(e) {
        e.preventDefault()
        $(this).tab('show')
    })


    /* ==========================================================================
   team
   ========================================================================== */

    $(".speaker-slider").owlCarousel({

        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 2]

    });


    /* ==========================================================================
   Smooth Scroll
   ========================================================================== */

    $('a[href*=#]:not([href=#], #schedule-days a, .event-speaker a)').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top - 40)
                }, 1000);
                return false;
            }
        }
    });



    /* ==========================================================================
   Speaker bio
   ========================================================================== */


    var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;


    $('#speaker').find('.event-speaker a[data-type*="speaker-"]').on('click', function(event) {
        event.preventDefault();
        var selected_member = $(this).data('type');
        $('.cd-speaker-bio.' + selected_member + '').addClass('slide-in');
        $('.cd-speaker-bio-close').addClass('is-visible');


        if (is_firefox) {
            $('main').addClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
                $('body').addClass('overflow-hidden');
            });
        } else {
            $('main').addClass('slide-out');
            $('body').addClass('overflow-hidden');
        }

    });


    $(document).on('click', '.cd-overlay, .cd-speaker-bio-close', function(event) {
        event.preventDefault();
        $('.cd-speaker-bio').removeClass('slide-in');
        $('.cd-speaker-bio-close').removeClass('is-visible');

        if (is_firefox) {
            $('main').removeClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
                $('body').removeClass('overflow-hidden');
            });
        } else {
            $('main').removeClass('slide-out');
            $('body').removeClass('overflow-hidden');
        }
    });


    /* ==========================================================================
   ScrollTop Button
   ========================================================================== */


    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('.scroll-top a').fadeIn(200);
        } else {
            $('.scroll-top a').fadeOut(200);
        }
    });


    $('.scroll-top a').click(function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

	/* ==========================================================================
	   Collapse nav bar
	   ========================================================================== */
	$(".navbar-nav li a").on('click', function() {
	    $(".navbar-collapse").collapse('hide');
	});

});
