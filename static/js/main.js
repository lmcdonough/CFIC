  $( document ).ready(function() {
        $(".btn-toggle-top").on("click", function() {
			$( ".top-nav-toggle" ).slideToggle('slow');		
		});
	});
	
		  $( document ).ready(function() {
        $(".btn-second-nav").on("click", function() {
			$( ".second-nav-toggle" ).slideToggle('slow');			
		});
	});

	$(document).ready(function() {
	
 		if ($(window).width() < 750){
			
			$( ".slicknav_menu" ).css('display', 'block');
			$( ".product_mobile" ).show();
			$( ".product_desktop" ).hide();
		}
		else{
			$( ".product_mobile" ).hide();
			$( ".product_desktop" ).show();			
			$( ".slicknav_menu" ).css('display', 'none');	
		
		};	
	});

$(window).resize(function() {
 		if ($(window).width() < 750){
			$( ".slicknav_menu" ).css('display', 'block');
			$( ".product_mobile" ).show();
			$( ".product_desktop" ).hide();			
		}
		else{
			$( ".slicknav_menu" ).css('display', 'none');	
			$( ".product_mobile" ).hide();
			$( ".product_desktop" ).show();	
		
		};	
});

	$(document).ready(function() {
		if ($(window).width() > 750){
			$( ".second_nav_desktop" ).removeClass('nav_hidden');			
		};	
	});

$(window).resize(function() {
 		if ($(window).width() > 750){
			$( ".second_nav_desktop" ).removeClass('nav_hidden');			
		}
		else{
			$( ".second_nav_desktop" ).addClass('nav_hidden');	
		
		};	
});
	
	$(document).ready(function() {
    // Optimalisation: Store the references outside the event handler:
    var $window = $(window);    

    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize > 480) {
            //if the window is greater than 440px wide then turn on jScrollPane..			
			$( ".phone-only" ).hide();		
            };
        }
   
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
 });
 
		
	$( document ).ready(function() {
		$('.settings-toggle').hoverIntent(function() {			
			$(this).find('.settings-menu').slideDown(400);
		}, function() {
			$(this).find('.settings-menu').stop().slideUp(400);
		});
		});

/*$( document ).ready(function() {	
	$('.testing').hover(function() {
		alert('yup');
	});
	});
*/
		$( document ).ready(function() {
			$(".url").on("click", function() {	
				location = $(this).attr('href');
				window.location(location);
			});
		});
		