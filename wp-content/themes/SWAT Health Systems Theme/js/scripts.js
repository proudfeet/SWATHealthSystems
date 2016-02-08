(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		console.log("heyo");
		jQuery("#menu-toggle__button").click(function(ev){
			ev.preventDefault();
			jQuery(".nav").toggleClass("tablet-nav-offscreen");
		});

		$(".about-us__wrapper a").click(function(ev){
			ev.preventDefault();
		});
		
		$("#method__link").click(function(){
			$(".method__content").toggleClass("off-page");
		});

		$("#philosophy__link").click(function(){
			$(".philosophy__content").toggleClass("off-page");
		});

		$("#background__link").click(function(){
			$(".background__content").toggleClass("off-page");
		});

		$("#goal__link").click(function(){
			$(".goal__content").toggleClass("off-page");
		});
	});
	
})(jQuery, this);
