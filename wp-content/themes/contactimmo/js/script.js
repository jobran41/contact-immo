(function($){

$(document).ready(function() {
	$('#myCarousel .carousel-inner  .item:first-child').addClass("active");
	$('a.uk-position-cover').click(function(e){
         e.preventDefault();
	    });
	$('a.captionportfolio').click(function(ev){
         ev.preventDefault();
	    });
	});
    
})(jQuery);