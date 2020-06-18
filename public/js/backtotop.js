$(document).ready(function(){ 
   		 $(window).scroll(function(){ 
        	if ($(this).scrollTop() > 200) { 
           		 $('#backtotop').fadeIn(); 
        	} else { 
            	$('#backtotop').fadeOut(); 
       		} 
   		 }); 
   		 $('#backtotop').click(function(){ 
       		$("html, body").animate({ scrollTop: 0 }, 700); 
        	return false; 
   	 		}); 
		});