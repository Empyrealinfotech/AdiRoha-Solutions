/*==========

Theme Name: EliteBizz - Multipurpose Business Agency HTML5 Template
Theme Version: 1.0

==========*/

/*==========
----- JS INDEX -----
1.Whole Script Strict Mode Syntax
2.Experience Progress Bar JS
==========*/

$(document).ready(function($) {

	// Whole Script Strict Mode Syntax
	"use strict";

	var a = 0;
	var b = 0;
	$(window).on('scroll', function() {
	// Experience Progress Bar JS Start
		var oTop = $('#progress_bar').offset().top - window.innerHeight;
		if (a === 0 && $(window).scrollTop() > oTop) {
			$('.experience-counting').each(function() {
			  var $this = $(this),
			      countTo = $this.attr('data-count');
			  
			  $({ countNum: $this.text()}).animate({
			    countNum: countTo
			  },

			  {

			    duration: 2000,
			    easing:'linear',
			    step: function() {
			      $this.text(Math.floor(this.countNum));
			    },
			    complete: function() {
			      $this.text(this.countNum);
			    }

			  });  
			  
			});
		a = 1;
	  	}

		var oTop2 = $('#progress_bar').offset().top - window.innerHeight;
		if (b === 0 && $(window).scrollTop() > oTop2) {
			$(".experience-skill-bar").each(function(){
				$(this).find(".experience-skill-bar-inner").animate({
					width: $(this).attr("data-width")
				},2000);
			});
		}
	// Experience Progress Bar JS Start

	});

});