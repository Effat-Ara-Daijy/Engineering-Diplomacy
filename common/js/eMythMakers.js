$(document).ready(function() {

    // sticky-menu

    $(window).scroll(function () {
    if($(window).scrollTop() > 20) {
    	$(".header-area").addClass('sticky');
    } else {
    	$(".header-area").removeClass('sticky');
    }
    });

    // search-top-js
    $(document).ready(function() {

        $(".fa-search").click(function() {
            $(".search-box").toggle();
            $("input[type='text']").focus();
        });

    });


    //BackToTop
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('#back_to_top').fadeIn();
            } else {
                $('#back_to_top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back_to_top').click(function() {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        $('#back_to_top').tooltip('show');

    });


    // back-to
    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '300');
    });


    // mobilel menu js
    $(".mobile-topbar .bars i").on("click", function () {
        $(".mobile-menu-overlay,.mobile-menu-main").addClass("active");
        return false;
    });
    
    $(".close-mobile-menu,.mobile-menu-overlay").on("click", function () {
        $(".mobile-menu-overlay,.mobile-menu-main").removeClass("active");
    });
    
    $(document).ready(function () {
        $(".accordion-click").click(function () {
            let submenu = $(this).closest(".sub-mobile-menu").find("ul");
            $(".sub-mobile-menu ul").not(submenu).slideUp(300);
            $(".accordion-click i").not($(this).find("i")).removeClass("fa-angle-up").addClass("fa-angle-down");

            if (submenu.is(":visible")) {
                submenu.slideUp(300);
                $(this).find("i").removeClass("fa-angle-up").addClass("fa-angle-down");
            } else {
                submenu.slideDown(300);
                $(this).find("i").removeClass("fa-angle-down").addClass("fa-angle-up");
            }
        });
    });
    // $(document).ready(function () {
    //     $(".accordion-click2").click(function () {
    //         let submenu = $(this).closest(".sub-mobile-menu2").find("ul");
    //         $(".sub-mobile-menu2 ul").not(submenu).slideUp(300);
    //         $(".accordion-click2 i").not($(this).find("i")).removeClass("fa-angle-up").addClass("fa-angle-down");

    //         if (submenu.is(":visible")) {
    //             submenu.slideUp(300);
    //             $(this).find("i").removeClass("fa-angle-up").addClass("fa-angle-down");
    //         } else {
    //             submenu.slideDown(300);
    //             $(this).find("i").removeClass("fa-angle-down").addClass("fa-angle-up");
    //         }
    //     });
    // });

});


// hero-slider-js-here
$(document).ready(function () {
  $('.DiploCommon-workshop-slider').slick({
	dots: false,
	fade: false,
	arrows: true,
	infinite: true,
	speed: 1000,
	lazyLoad: 'ondemand',
    prevArrow: '<span class="priv_arrow"><i class="fa-solid fa-arrow-left-long"></i></span>',
	nextArrow: '<span class="next_arrow"><i class="fa-solid fa-arrow-right-long"></i></span>',
	autoplay: true,
	slidesToShow: 2,
	slidesToScroll: 1,
	responsive: [
	  {
		breakpoint: 1023,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  infinite: true,
		  dots: true,
		}
	  },
	  {
		breakpoint: 992,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  },
	  {
		breakpoint: 768,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  },
	  {
		breakpoint: 600,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  },
	  {
		breakpoint: 480,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  }

	]

  }).slickAnimation();
});




