$(document).ready(function(){
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('header').addClass('header-scroll', 500, "easeOutCubic");   
			$('.link-scroll').removeClass('d-none');  
			$('.link-scroll').addClass('d-inline', 500, "swing");
			$('.logo-scroll').removeClass('d-none');  
			$('.logo-scroll').addClass('d-inline', 500, "swing");
			$('.logo').addClass('d-none', 500, "swing");
            //$('header').switchClass( "", "header-scroll", 1000, "swing" );   
		} else {
			$('header').removeClass('header-scroll');
			$('.link-scroll').removeClass('d-inline');
			$('.link-scroll').addClass('d-none', 500, "swing");
			$('.logo-scroll').removeClass('d-inline');
			$('.logo-scroll').addClass('d-none', 500, "swing");
			$('.logo').removeClass('d-none');
		}
    });
    
});

