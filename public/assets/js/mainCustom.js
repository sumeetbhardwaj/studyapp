$(document).ready(function() { 
	var stickyNavTop = $('#header').offset().top;
	var stickyNav = function(){
		var scrollTop = $(window).scrollTop(); 
		
		if (scrollTop > stickyNavTop) { 
			$('#header').addClass('sticky_menu');
		} else {
			$('#header').removeClass('sticky_menu'); 
		}
	};

	stickyNav();
	
	$(window).scroll(function() {
		stickyNav();
	});
});		