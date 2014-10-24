/* Custom Scripts go here */
$(document).ready(function(){


// Home Page - Find window width and height and apply to element
var windowSize = function() {
		// Find height of window and set as var
		
		// var h = $(window).height() - 90;
		//var fullheight = $(window).height() + 'px';
		
		//$('.home-intro').css({ "height" : fullheight });
		// Set wrap to width and height of window
		// $('.home #global-wrapper').css({ "width" : w, "height" : h });
		
	};
		windowSize();
		
	$(window).resize(function() {
		windowSize();
	});


// INFIELD LABELS
	$("label").inFieldLabels();
    
/*
	// Parallax Header      
	$('.page-header-bg[data-type="background"]').each(function(){
		var $bgobj = $(this); // assigning the object
		var $window = $(window);
		$(window).ready(function() {
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));

		// Put together our final background position
			var coords = '50% '+ yPos + 'px';
	 
		// Move the background
            $bgobj.css({ backgroundPosition: coords });
		});
	});
*/

	// scroll body to 0px on click
		$('.back-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});


// Accordian functionality
// 	(function($) {
	
// 		var allPanels = $('.accordion > dd').hide();
// //		$('.accordion dd:eq(0)').show(); show first of kind content
// 		$('.accordion > dt > a').click(function() {
// 			allPanels.slideUp();

// 			if($(this).parent().next().is(':hidden'))
// 			{
// 				$(this).parent().next().slideDown();
// 			}

// 			return false;
// 			});

// 	})(jQuery);
	

	
	// Set field focus / blur
	$("input, textarea").focus(function() {
		$(this).addClass("curFocus");
	});
	$("input, textarea").blur(function() {
		$(this).removeClass("curFocus");
	});
	
});