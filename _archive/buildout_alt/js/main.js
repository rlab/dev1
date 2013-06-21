/******************************************
*******************************************

RANDOM INCLUDES & FUNCTIONS

*******************************************
******************************************/
/**
 * Equal Heights Plugin
 * Equalize the heights of elements. Great for columns or any elements
 * that need to be the same size (floats, etc).
 * 
 * Version 1.0
 * Updated 12/10/2008
 *
 * Copyright (c) 2008 Rob Glazebrook (cssnewbie.com) 
 *
 * Usage: $(object).equalHeights([minHeight], [maxHeight]);
 * 
 * Example 1: $(".cols").equalHeights(); Sets all columns to the same height.
 * Example 2: $(".cols").equalHeights(400); Sets all cols to at least 400px tall.
 * Example 3: $(".cols").equalHeights(100,300); Cols are at least 100 but no more
 * than 300 pixels tall. Elements with too much content will gain a scrollbar.
 * 
 */

// Add equal heights support for various elements when called
(function($) {
	$.fn.equalHeights = function(minHeight, maxHeight) {
		tallest = (minHeight) ? minHeight : 0;
		this.each(function() {
			if($(this).height() > tallest) {
				tallest = $(this).height();
			}
		});
		if((maxHeight) && tallest > maxHeight) tallest = maxHeight;
		return this.each(function() {
			$(this).height(tallest).css("overflow","auto");
		});
	}
})(jQuery);

// ADD IE support for placehilde rtext on input fields
function setPlaceholderText() {
	var PLACEHOLDER_SUPPORTED = 'placeholder' in document.createElement('input');
	if (PLACEHOLDER_SUPPORTED || !$(':input[placeholder]').length) {
		return;
	}

	$(':input[placeholder]').each(function() {
		var el = $(this);
		var text = el.attr('placeholder');

		function add_placeholder() {
			if (!el.val() || el.val() === text) {
				el.val(text).addClass('placeholder_text');
			}
		}
		
		add_placeholder();

		el.focus(function() {
			if (el.val() === text) {
				el.val('').removeClass('placeholder_text');;
			}
		}).blur(function() {
			if (!el.val()) {
				el.val(text).addClass('placeholder_text');;
			}
		});

		el.closest('form').submit(function() {
			if (el.val() === text) {
				el.val('');
			}
		}).bind('reset', function() {
			setTimeout(add_placeholder, 50);
		});
	});
}

// Include this at the bottom of your html file.
$(document).ready(function(){
  setPlaceholderText();
});



/******************************************
*******************************************

DOCUMENT READY

*******************************************
******************************************/
jQuery(document).ready(function($) {
	
	var responsive_viewport = $(window).width();
	
	$('#mobile_menu').click(function(){
	
		if( $(this).siblings('ul').hasClass('open') ) {
			
			$(this).siblings('ul').stop(true, true).slideUp(200);
			$(this).siblings('ul').removeClass('open');
			return false;
			
		} else {
			
			$(this).siblings('ul').stop(true, true).slideDown(200);
			$(this).siblings('ul').addClass('open');
			return false;
			
		}
	});
	
	
	//do fancybox stuff
	$('.fancybox').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
 
	
	//fix margin-left on menu for IE 8
	if( responsive_viewport >= 1064){
		$('.main_nav .wrap > ul li:nth-child(2)').css('margin-left', 98);
	}
	
	//set blurb width on page load and do icon animation stuff
	var iconWidth = 40;
	var iconOffset = responsive_viewport - iconWidth;
	
	if( responsive_viewport < 1064){
			
		$('.blurb').width(0);
		//turn it to block
		$('.blurb').show();
		
		$('.toggle').click(function(){
			
			
			
			if( !$(this).hasClass('open') ) {
				
				//add Class
				$(this).addClass('open');
				//shift icon to the left
				$(this).animate({ 'right':iconOffset }, 200);
				//shift blurb with icon
				$('.blurb').animate({ 'width': iconOffset },200);
				
			} else if( $(this).hasClass('open') ){
				
				$(this).removeClass('open');
				//reset icon back to normal position
				$(this).animate({ 'right':0 }, 200);
				//shift blurb with icon
				$('.blurb').animate({ 'width': 0 },200);
				
			}
			
			return false;
			
		});
	
	}
	
}); /* end of as page load scripts */











/******************************************
*******************************************

WINDOW LOAD

*******************************************
******************************************/
(function($){
	$(window).load(function() {
		
		
		/************************************
	    get viewport width
	    ************************************/
	    var responsive_viewport = $(window).width();
	    
	    
	    /************************************
	    if is below 481px
	    ************************************
	    
	    If you need more screen size-specific code, you can use this same framework
	    
	    if (responsive_viewport < 481) {
	    	
	    }
	    */
	    
	    /************************************
	    if is LARGER than or EQUAL to 768px
	    ************************************/
	    if (responsive_viewport >= 768) {
	    	
		    //map open/close schtuff
	    	var mapHeight = $('#campus_map_image').height() + 60;
    	
	    	$('#map_open_close').toggle(function(){
		    	
		    	//replace text
		    	var text = 'Close'
		    	$(this).children('.open_or_close').text(text);
		    	
		    	//toggle arrow class
		    	$(this).children('img').removeClass('open');
		    	$(this).children('img').addClass('close');
		    	
		    	//stuff that happens when you open
		    	$('#campus_map').animate({
			    	height: mapHeight
		    	}, 400);
		    	//auto scroll to bottom
		    	$('html, body').animate({
			    	scrollTop: $(document).height()
		    	}, 400);
		    	//kill href
		    	return false;
		    	
	    	}, function(){
		    	
		    	//replace text
		    	var text = 'Open'
		    	$(this).children('.open_or_close').text(text);
		    	
		    	//toggle arrow class
		    	$(this).children('img').removeClass('close');
		    	$(this).children('img').addClass('open');
		    	
		    	//stuff that happens when you close
		    	$('#campus_map').animate({
			    	height: 100
		    	}, 400);
		    	//auto scroll to bottom
		    	$('html, body').animate({
			    	scrollTop: $(document).height()
		    	}, 400);
		    	//kill href
		    	return false;
		    	
	    	});
	    	
	    	
	    }
	    
	    
	    /************************************
	    if is LARGER than 1030px
	    ************************************/
	    if (responsive_viewport >= 1030) {
	        
	        //menu collapse
	        $('.special_focus_collapse').each(function(){
		        $(this).click(function(){
			        $(this).siblings('.special_focus_info').slideUp(200);
			        $(this).fadeOut();
			        $(this).siblings('header.expandable').addClass('collapsed');
			        return false;
		        });
	        });
	        $('header.expandable').each(function(){
		        $(this).click(function(){
			        $(this).siblings('.special_focus_info').slideDown(200);
			        $(this).siblings('.special_focus_collapse').fadeIn();
			        $(this).removeClass('collapsed');
			        return false;
		        });
	        });
	        
	    }
	    
	    
	    
	    
	    /************************************
	    ALL OTHER WINDOW LOADS
	    ************************************/
		
		//M block header stuff
		var delaySpeed = 200;
		var animationSpeed = 500;
		timer = setInterval(function(){
			$notLoaded = $('.m-wrapper > img').not('.loaded');
			$notLoaded.eq(Math.floor(Math.random()*$notLoaded.length))
				.animate({ opacity: 1 }, animationSpeed)
				.addClass('loaded');
			if($notLoaded.length == 0) {
				clearInterval(timer);
			}
		}, delaySpeed);
	
		
		
		//NEWS SLIDER OPTIONS
		var slideWidth = null;
		var slideMargin = null;
		var minSlides = null;
		var maxSlides = null;
		if( responsive_viewport >= 1064 ) {
			var slideWidth = 226;
			var slideMargin = 32;
			var minSlides = 4;
			var maxSlides = 4;
		} else if( responsive_viewport >= 768 ) {
			var slideWidth = 354;
			var slideMargin = 20;
			var minSlides = 2;
			var maxSlides = 2;
		} else if( responsive_viewport >= 480 ){
			var slideWidth = 430;
			var slideMargin = 30;
			var minSlides = 1;
			var maxSlides = 1;
		} else {
			var slideWidth = 270;
			var slideMargin = 30;
			var minSlides = 1;
			var maxSlides = 1;
		}
		var slider = $('.carousel ul.slides').bxSlider({
			slideWidth: slideWidth,
			minSlides: 1,
			maxSlides: 4,
			slideMargin: slideMargin,
			pager: false,
			prevText: "Prev Article",
			nextText: "Next Article",
			moveSlides: 1
		});
		
		
		if(responsive_viewport >= 1064){
			var eventSlideWidth = 242;
			var eventSlideMargin = 16;
		} else {
			var eventSlideMargin = slideMargin;
			var eventSlideWidth = slideWidth;
		}
		//EVENTS SLIDER OPTIONS
		var slider = $('.events_slider ul.slides').bxSlider({
			slideWidth: eventSlideWidth,
			minSlides: 1,
			maxSlides: 4,
			slideMargin: eventSlideMargin,
			pager: false,
			prevText: "Prev Article",
			nextText: "Next Article",
			moveSlides: 1
		});
		
		//make topic blocks that are grouped together always the same height, also add a bit of responsive nth-child goodness for aweful IE
		$('ul.topic_blocks').each(function(){
			$(this).find('span').equalHeights();
			if(responsive_viewport >= 768){
				$(this).children('li:nth-child(2n)').css('margin-right', 0);
			
			}
		});
		
		
	

	});
})(jQuery);












/******************************************
*******************************************

WINDOW RESIZE

*******************************************
******************************************/
(function($){
	$(window).resize(function() {
		
		var responsive_viewport = $(window).width();
		
		//do these two things so a window resize responsive 'check' doesnt break the nav menu
		if(responsive_viewport < 1064){
			$('.main_nav .wrap > ul').hide();
		}
		if(responsive_viewport >= 1064){
			$('.main_nav .wrap > ul').show();
		}


	});
})(jQuery);
