// Webpack Imports
import * as bootstrap from 'bootstrap';

(function () {
	'use strict';

	// Focus input if Searchform is empty
	[].forEach.call(document.querySelectorAll('.search-form'), (el) => {
		el.addEventListener('submit', function (e) {
			var search = el.querySelector('input');
			if (search.value.length < 1) {
				e.preventDefault();
				search.focus();
			}
		});
	});

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		return new bootstrap.Popover(popoverTriggerEl, {
			trigger: 'focus',
		});
	});

	
})();


document.addEventListener('DOMContentLoaded', function() {
	// Get all tab links
	var tabLinks = document.querySelectorAll('#myTab a');
  
	// Add click event listener to each tab link
	tabLinks.forEach(function(link) {
	  link.addEventListener('click', function(event) {
		event.preventDefault();
		var targetTab = this.getAttribute('href');
		
		// Hide all tab content
		document.querySelectorAll('.tab-pane').forEach(function(tab) {
		  tab.classList.remove('show', 'active');
		});
  
		// Show the clicked tab content
		document.querySelector(targetTab).classList.add('show', 'active');
	  });
	});

	var carousels = document.querySelectorAll('.carousel');
	
	carousels.forEach(function(carousel) {
	  new bootstrap.Carousel(carousel, {
		interval: false // Disable auto-rotation for manual control
	  });
	});
  });


  // Logo Slider

  document.addEventListener("DOMContentLoaded", function () {
	var carouselContainer = document.querySelector(".carousel-container");
	var carousel = document.querySelector(".logo-slides");
	var logos = logoSlides.querySelectorAll("li");
  
	carousel.addEventListener("mouseenter", function () {
	  // Pause the animation on hover
	  carousel.style.animationPlayState = "paused";
	});
  
	carousel.addEventListener("mouseleave", function () {
	  // Resume the animation when not hovering
	  carousel.style.animationPlayState = "running";
	});

  });