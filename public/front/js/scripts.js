/* Description: Custom JS file */


// aos
AOS.init();

/* Navigation*/
// Collapse the navbar by adding the top-nav-collapse class
window.onscroll = function () {
	scrollFunction();
	// scrollFunctionBTT();
};

window.onload = function () {
	scrollFunction();
};

function scrollFunction() {
	if (document.documentElement.scrollTop > 30) {
		document.getElementById("navbarExample").classList.add("top-nav-collapse");
	} else if ( document.documentElement.scrollTop < 30 ) {
		document.getElementById("navbarExample").classList.remove("top-nav-collapse");
	}
}

// Navbar on mobile
let elements = document.querySelectorAll(".nav-link:not(.dropdown-toggle)");

for (let i = 0; i < elements.length; i++) {
	elements[i].addEventListener("click", () => {
		document.querySelector(".offcanvas-collapse").classList.toggle("open");
	});
}

document.querySelector(".navbar-toggler").addEventListener("click", () => {
  document.querySelector(".offcanvas-collapse").classList.toggle("open");
});

document.querySelector(".navbar-toggler-close").addEventListener("click", () => {
  document.querySelector(".offcanvas-collapse").classList.toggle("open");
});


// On hover
const dropdownCheck = document.querySelector('.dropdown');

$(document).ready(function(){
  $(".dropdown").hover(            
      function() {
          $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
          $(this).toggleClass('open'); 
      },
      function() {
          $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
          $(this).toggleClass('open');
      }
  );
  $(".dropdown").click(function() {
    $(this).toggleClass('open');
      // $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
      // $(this).toggleClass('open');
  });
});



/* Back To Top Button */
// Get the button
// myButton = document.getElementById("myBtn");

// function scrollFunctionBTT() {
// 	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
// 		myButton.style.display = "block";
// 	} else {
// 		myButton.style.display = "none";
// 	}
// }

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0; // for Safari
	document.documentElement.scrollTop = 0; // for Chrome, Firefox, IE and Opera
}