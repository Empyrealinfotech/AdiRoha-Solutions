
// menu-active-start
// $(document).ready(function(){
//   let file_name = document.location.pathname.match(/[^\/]+$/)[0];
//   if($('.mobile-menu-box ul li a[href="'+file_name+'"]').length>0){
//     $($('.mobile-menu-box ul li a[href="'+file_name+'"]')[0]).closest('li').addClass('active');
//   }
//   $(document).on('click', '.emp-back-menu a', function(e){
//     $(document).find(".sub-items").removeClass("active-sub-menu");
//     e.stopPropagation();
//   });
//   $(document).on('click', '.sub-items', function() {
//     $(this).addClass("active-sub-menu");
//   });
// });
// menu-active-end

$(document).ready(function($) {

	// Whole Script Strict Mode Syntax
	"use strict";

	$(window).ready(function(){
		// Loader JS Start
		var href 			= document.location.href;
		var lastPathSegment = href.substr(href.lastIndexOf('/') + 1);

		var url 	= $(location).attr('href'),
    	parts 		= url.split("/"),
    	last_part 	= parts[parts.length-2];
		if(lastPathSegment!=='blogs' && last_part!=='category' && lastPathSegment!=='portfolio'){
			$('.loader-box').fadeOut();
		}
		//if(window.location.pathname.indexOf('blogs')===false){
			//$('.loader-box').fadeOut();
		//}
		 // Loader JS End
	    $('body').removeClass('fixed');
		 // Wow Animation JS Start
		new WOW().init(); 
		 // Wow Animation JS Start
	});


	// Smooth Scrolling JS Start
	if(window.location.hash){
		// smooth scroll to the anchor id
		$('html,body').animate({
			scrollTop:$(window.location.hash).offset().top - 100
			},1000,'swing');
		} else {
			setTimeout( function() { scroll(0,0); }, 1);
		}
	
		jQuery('a[href*=\\#]:not([href$=\\#])').on('click', function(evt) {
			
			evt.preventDefault();
			var url = $(this).attr('href');
			var id = url.substring(url.lastIndexOf('#'));
			if ($(id).length > 0) {
				$('html, body').animate({ 
					scrollTop: $(id).offset().top - 100
				},1000);
			}
			else{
				window.location.href = url;
			}
		});
	// Smooth Scrolling JS End

	// Scroll To Top JS Start
	$('#scroll-to-top').on('click', function() {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });
	$(window).on( 'scroll', function() {
	  if ($(window).scrollTop() > 300) {
	    $("#scroll-to-top").fadeIn(500);
	  } else {
	    $("#scroll-to-top").fadeOut(500);
	  }
	});
	// Scroll To Top JS End

	// Sticky Header JS Start
	$(window).on( 'scroll', function(){
	  if ($(window).scrollTop() >= 100) {
	    $('.site-header').addClass('sticky-header');
	   }
	   else {
	    $('.site-header').removeClass('sticky-header');
	   }
	});
	// Sticky Header JS End

	// Toogle Menu Mobile JS Start
	$(".toggle-button").on( 'click', function(){
		$(".main-navigation").toggleClass('toggle-menu');
		$(".header-menu .black-shadow").fadeToggle();
	});
	// $(".main-navigation ul li a").on( 'click', function(){
	// 	$(".main-navigation").removeClass('toggle-menu');
	// 	$(".header-menu .black-shadow").fadeOut();
	// });
	// $(".main-navigation ul li.sub-items>a").on( 'click', function(){
	// 	$(".main-navigation").addClass('toggle-menu');
	// 	$(".header-menu .black-shadow").stop();
	// });
	$(".header-menu .black-shadow").on( 'click', function(){
		$(this).fadeOut();
		$(".main-navigation").removeClass('toggle-menu');
	});
	// Toogle Menu Mobile JS End

	// Portfolio Slider JS Start
	$('.portfolio-slider').slick({
	  infinite: true,
	  slidesToShow: 2,
	  slidesToScroll: 1,
	  prevArrow: '<button class="slick-arrow prev-arrow"></button>',
	  nextArrow: '<button class="slick-arrow next-arrow"></button>',
	  arrows: false,
	  dots: true,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  responsive: [
  	  {
  	  	breakpoint: 992,
  	  	settings: {
  	  		slidesToShow: 1,
  	  	}
  	  },
  	  {
  	  	breakpoint: 768,
  	  	settings: {
  	  		slidesToShow: 1
  	  	}
  	  }
    ]
	});
	// Testimonial Slider JS End

	// Team Slider JS Start
	$('.team-slider').slick({
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  prevArrow: '<button class="slick-arrow prev-arrow"></button>',
	  nextArrow: '<button class="slick-arrow next-arrow"></button>',
	  arrows: true,
	  dots: true,
	  autoplay: true,
	  autoplaySpeed: 3000,
	  centerMode: true,
	  responsive: [
  	  {
  	  	breakpoint: 1200,
  	  	settings: {
  	  		slidesToShow: 3,
  	  	}
  	  },
  	  {
  	  	breakpoint: 992,
  	  	settings: {
  	  		slidesToShow: 2,
			centerMode: false,
			arrows: false,
  	  	}
  	  },
  	  {
  	  	breakpoint: 768,
  	  	settings: {
  	  		slidesToShow: 1,
			centerMode: false,
			arrows: false,
  	  	}
  	  }
    ]
	});
	// Team Slider JS End

	// Review Slider JS Start
	$('.review-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-arrow prev-arrow"></button>',
		nextArrow: '<button class="slick-arrow next-arrow"></button>',
		arrows: true,
		dots: false,
		autoplay: true,
		autoplaySpeed: 2000,
	  });
	  // Review Slider JS End

	// Pricing Switchig JS Start
	$('body').on('click','.pricing-switch a',function(){
		$('.pricing-switch a').removeClass('active');
		$(this).addClass('active');
		var id = $(this).attr('id');
		if(id == 'monthly'){
			$('.monthly_text').show();
			$('.yearly_text').hide();
		}
		else {
			$('.yearly_text').show();
			$('.monthly_text').hide();
		}
	});
	// Pricing Switchig JS End

	if ($(window).width() < 992) {
		// Submenu For Mobile JS Start
		// $('body').on('click', '.main-navigation ul li.sub-items>a', function() {
    //         if (($(this).parent().hasClass('active-sub-menu'))) {
    //         $(this).parent().removeClass('active-sub-menu');
    //         $(this).parent().find('ul').slideUp();
    //         } else {
    //             $(this).parent().addClass('active-sub-menu');
    //             $(this).parent().find('ul').slideDown();
    //         }
    //     });
		// Submenu For Mobile JS End

		// Pricing Mobile Slider JS Start
		$('.pricing-slider').slick({
			infinite: true,
			slidesToShow: 2,
			slidesToScroll: 1,
			prevArrow: '<button class="slick-arrow prev-arrow"></button>',
			nextArrow: '<button class="slick-arrow next-arrow"></button>',
			arrows: false,
			dots: true,
			autoplay: true,
			responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
			}
		]
		});
		// Pricing Mobile Slider JS End

		// Blog Mobile Slider JS Start
		$('.blog-slider').slick({
			infinite: true,
			slidesToShow: 2,
			slidesToScroll: 1,
			prevArrow: '<button class="slick-arrow prev-arrow"></button>',
			nextArrow: '<button class="slick-arrow next-arrow"></button>',
			arrows: false,
			dots: true,
			autoplay: true,
			responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
			}
		]
		});
		// Blog Mobile Slider JS End

		// Team Page Mobile Slider JS Start
		$('.page-team-mobile-slider').slick({
			infinite: true,
			slidesToShow: 2,
			slidesToScroll: 1,
			prevArrow: '<button class="slick-arrow prev-arrow"></button>',
			nextArrow: '<button class="slick-arrow next-arrow"></button>',
			arrows: false,
			dots: true,
			autoplay: true,
			autoplaySpeed: 3000,
			centerMode: false,
			responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				centerMode: false,
				arrows: false,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				centerMode: false,
				arrows: false,
				}
			}
		]
		});
		// Team Page Mobile Slider JS End

	}
});
