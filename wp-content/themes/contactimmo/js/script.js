(function($){

$(document).ready(function() {
	$('#myCarousel .carousel-inner  .item:first-child').addClass("active");
	$('a.uk-position-cover').click(function(e){
         e.preventDefault();
	    });
	$('a.captionportfolio').click(function(ev){
         ev.preventDefault();
	    });

	//$('.message a').click(function(){
		//e.preventDefault();
	   //$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
	    
	//});

	$('.jsgrid').on({
	    'show.uk.modal': function(){
	    	//$( "#slidshowe ul.uk-slideshow li" ).trigger( "click" );
	        console.log("Modal is visible.");
	  //       $( "#slidshowe ul li").click(function() {
			// 	 console.log('hi jo');
			// });
			// var variableToCancelInterval = setInterval(function(){
			// 	$("#slidshowe ul li:last").click();
			// 	 console.log('hi jo');
			// }, 2000);

	    },
	    'hide.uk.modal': function(){
	        console.log("Element is not visible.");
	    }
	});
	});
    
})(jQuery);