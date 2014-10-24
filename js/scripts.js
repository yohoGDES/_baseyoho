/* Custom Scripts go here */
$(document).ready(function(){


// FitText
$(".fittext-think").fitText(0.3);
$(".fittext-red").fitText(0.2);
$(".fittext-game").fitText(1.1);
$(".fittext-brave").fitText(1.4);


// One Page Scroll
$(window).scroll(function() {
    // find the li with class 'active' and remove it
    $(".side-nav li a.active").removeClass("active");
    // get the amount the window has scrolled
    var scroll = $(window).scrollTop();
    // add the 'active' class to the correct li based on the scroll amount
    if (scroll <= $(window).height() - 280) {
        $(".one").addClass("active");
        $(".side-nav li a").removeAttr("style");
    }
    else if (scroll <= $(window).height() + 340) {
        $(".two").addClass("active").css({"background": "#e74c3b"});
        $(".side-nav li a").css({"border-color": "#e74c3b"});
    }
    else if (scroll <= $(window).height() + 960) {
        $(".three").addClass("active");
        $(".side-nav li a").removeAttr("style");
    }
    else if (scroll <= $(window).height() + 1580) {
        $(".four").addClass("active").css({"background": "#e74c3b"});
        $(".side-nav li a").css({"border-color": "#e74c3b"});
    }
    else if (scroll <= $(window).height() + 2200) {
        $(".five").addClass("active");
        $(".side-nav li a").removeAttr("style");
    }
    else {
		$(".side-nav li a").removeAttr("style");
    }
});


// Privacy Bubbles
$('.choc-7').html('<div class="bubble">Sorry</div>');
$('.choc-10').html('<div class="bubble">Nope</div>');
$('.choc-14').html('<div class="bubble">Never!</div>');
$('.choc-15').html('<div class="bubble">Nice try</div>');
$('.choc-21').html('<div class="bubble">Eh...</div>');
$('.choc-27').html('<div class="bubble">Not Telling</div>');
$('.choc-32').html('<div class="bubble">Nah</div>');
$('.choc-37').html('<div class="bubble">No way!</div>');

// Wow
new WOW().init();


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

	// Set height of Donation Sidebar
/*
	var sidebarSize = function() {
		var sidebarHeight = $('.donate-online').height() + 'px';		
		$('.donate-wrap').css({ "height" : sidebarHeight });
	
		$(sidebarHeight).resize(function() {
			sidebarSize();
		});

	};
	sidebarSize();
*/
	
	// Location Select
/*
	$( ".location-select" ).click(function() {
	$( ".locations" ).slideToggle( 'easeInOutQuart' );
	});
*/
	
	// Select Donation Type
/*
	$(function() {
		var $donateOnline = $(".donate-online");
		var $donateOptions = $(".donate-options");

		$(".options").click(function() {
			$donateOptions.animate({ left: "0" });
			$donateOnline.animate({ right: "-100%" });
		});
		$(".online").click(function() {
			$donateOnline.animate({ right: "0" });
			$donateOptions.animate({ left: "-100%" });
		});
	});
*/
	
	(function($) {
	
		var allPanels = $('.accordion > dd').hide();
//		$('.accordion dd:eq(0)').show(); show first of kind content
		$('.accordion > dt > a').click(function() {
			allPanels.slideUp();

			if($(this).parent().next().is(':hidden'))
			{
				$(this).parent().next().slideDown();
			}

			return false;
			});

	})(jQuery);
	
	(function($) {
	
//		var allPanels = $('.accordion > dd').hide();
//		$('.accordion dd:eq(0)').show(); show first of kind content
		$('.volunteer-opportunities .accordion > dt > a').click(function() {
//			allPanels.slideUp();

			if($(this).parent().next().is(':hidden'))
			{
				$(this).parent().next().slideDown();
			}

			return false;
			});

	})(jQuery);
	
	// Set field focus / blur
	$("input, textarea").focus(function() {
		$(this).addClass("curFocus");
	});
	$("input, textarea").blur(function() {
		$(this).removeClass("curFocus");
	});
	
	// Shorten state name to abbreviation
	var $states	= $('select#input_1_4_4');
	$states.find('option[value="Virginia"]').text('VA');
	/*
$states.change(function() {
		var $this	= $(this),
			state	= $this.val(),
			$option	= $this.find('option:checked').val(state);
		
		switch(state)	{
			case "Alabama" :
				shortCode = "AL";
				break;
			case "Alaska" :
				shortcode = "AK";
				break;
			case "Arizona" :
				shortCode = "AZ";
				break;
			case "Arkansas" :
				shortCode = "AR";
				break;
			case "California" :
				shortCode = "CA";
				break;
			case "Colorado" :
				shortCode = "CO";
				break;
			case "Connecticut" :
				shortCode = "CT";
				break;
			case "Delaware" :
				shortCode = "DE";
				break;
			case "District of Columbia" :
				shortCode = "DC";
				break;
			case "Florida" :
				shortCode = "FL";
				break;
			case "Georgia" :
				shortCode = "GA";
				break;
			case "Hawaii" :
				shortCode = "HI";
				break;
			case "Idaho" :
				shortCode = "ID";
				break;
			case "Illinois" :
				shortCode = "IL";
				break;
			case "Indiana" :
				shortCode = "IN";
				break;
			case "Iowa" :
				shortCode = "IA";
				break;
			case "Kansas" :
				shortCode = "KS";
				break;
			case "Kentucky" :
				shortCode = "KY";
				break;
			case "Louisiana" :
				shortCode = "LA";
				break;
			case "Maine" :
				shortCode = "ME";
				break;
			case "Maryland" :
				shortCode = "MD";
				break;
			case "Massachusetts" :
				shortCode = "MA";
				break;
			case "Michigan" :
				shortCode = "MI";
				break;
			case "Minnesota" :
				shortCode = "MN";
				break;
			case "Mississippi" :
				shortCode = "MS";
				break;
			case "Missouri" :
				shortCode = "MO";
				break;
			case "Montana" :
				shortCode = "MT";
				break;
			case "Nebraska" :
				shortCode = "NE";
				break;
			case "Nevada" :
				shortCode = "NV";
				break;
			case "New Hampshire" :
				shortCode = "NH";
				break;
			case "New Jersey" :
				shortCode = "NJ";
				break;
			case "New Mexico" :
				shortCode = "NM";
				break;
			case "New York" :
				shortCode = "NY";
				break;
			case "North Carolina" :
				shortCode = "NC";
				break;
			case "North Dakota" :
				shortCode = "ND";
				break;
			case "Ohio" :
				shortCode = "OH";
				break;
			case "Oklahoma" :
				shortCode = "OK";
				break;
			case "Oregon" :
				shortCode = "OR";
				break;
			case "Pennsylvania" :
				shortCode = "PA";
				break;
			case "Rhode Island" :
				shortCode = "RI";
				break;
			case "South Carolina" :
				shortCode = "SC";
				break;
			case "South Dakota" :
				shortCode = "SD";
				break;
			case "Tennessee" :
				shortCode = "TN";
				break;
			case "Texas" :
				shortCode = "TX";
				break;
			case "Utah" :
				shortCode = "UT";
				break;
			case "Vermont" :
				shortCode = "VT";
				break;
			case "Virginia" :
				shortCode = "VA";
				break;
			case "Washington" :
				shortCode = "WA";
				break;
			case "West Virginia" :
				shortCode = "WV";
				break;
			case "Wisconsin" :
				shortCode = "WI";
				break;
			case "Wyoming" :
				shortCode = "WY";
				break;
			case "Armed Forces Americas" :
				shortCode = "AFA";
				break;
			case "Armed Forces Europe" :
				shortCode = "AFE";
				break;
			case "Armed Forces Pacific" :
				shortCode = "AFP";
				break;
		}

		
		console.log($option + " " + shortCode);
		$option.text(shortCode);
	});
  */
});