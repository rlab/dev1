var UMD = {};

(function() {

  // UMD.Common - code designed to run on every page 
  UMD.Common = function() { 
    var that = this,
        $window = $(window);

    this.$main_nav = $('.main_nav');
    this.$blurb  = $('.blurb');
    this.responsive_viewport = $window.width();

    //fix margin-left on menu for IE 8
    if(this.responsive_viewport >= 1064){
      $('.main_nav .wrap > ul li:nth-child(2)').css('margin-left', 98);
    }
      
    this.initMobileMenu();
    this.initFancyBox();
    this.enableSearchSubmitIcon();

    $window.resize(function() {
      that.responsive_viewport = $window.width();
      return true;
    });
  };

  UMD.Common.prototype = { 
    enableSearchSubmitIcon: function() {
      $('#search_submit').click(function(e) {
        e.preventDefault();
        $(this).parent('form').submit();
        return true;
      });
    },
    getViewportWidth: function() {
      return this.responsive_viewport;
    },
    initMobileMenu: function() {
      var $main_nav           = $('.main_nav'),
          $main_nav_items     = $('.nav_items', $main_nav);

      $('#mobile_menu', $main_nav).click(function(e) {
        e.preventDefault();
      
        // close if open, otherwise open 
        if( $main_nav_items.hasClass('open') ) {
          $main_nav_items.stop(true, true).slideUp(200);
          $main_nav_items.removeClass('open');
          return false;
        } else {
          $main_nav_items.stop(true, true).slideDown(200);
          $main_nav_items.addClass('open');
          return false;
        }
      });
    },
    initFancyBox: function() {
      //do fancybox stuff
      $('.fancybox').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        helpers : {
          media : {}
        }
      });
    }
  };

  // init common code - code that 
  var common = UMD.common = new UMD.Common(); 

  // code that only runs on homepage
  UMD.MobileBlurb = function() { 
    var that      = this,
        $window   = $(window);

    this.is_mobile = false;
    this.is_open   = false;
    this.$header = $('header.home');
    
    // we're not on the homepage if header not found
    if (!this.$header.length) return this;
    
    this.$toggle = $('.toggle', this.$header);
    this.$blurb  = $('.blurb', this.$header).show();

    if (common.getViewportWidth() < 768) {
      this.close();
      this.is_mobile = true;
    }

    // icon click handler
    this.$toggle.click(function(e) {
      e.preventDefault();

      var width = $(window).width(); 
      
      // do nothing if viewport not under 768
      if (width >= 768) return false; 

      if (that.is_open) {
        that.close(true, width);
      } else { 
        that.open(width);
      }
      return false;
    });
    
    // on resize
    $window.resize(function() {
      var width = $(window).width();

      if(width < 768) {
        // adjust width and set to close position 
        that.close(false, width);
        if (!that.is_modile) that.is_mobile = true;
      } 
      // un-collapse blurbs if moving from mobile to non-mobile 
      else if (that.is_mobile) {
        that.$blurb.css('width', '');
        that.$blurb.css('right', '');
        that.$blurb.show();
        that.is_mobile = false;
      }
      return true;
    });
  };

  UMD.MobileBlurb.prototype = {
    open: function(width) {
      var icon_width  = 40,
          icon_offset = width - icon_width;

      // animate icon and blurb to the left
      this.$toggle.animate({ 'right': icon_offset}, 200);
      this.$blurb.width(width - icon_width).animate({ 'right': 0 }, 200);
      this.is_open = true;
    },
    // pass in width when using in window resize handler
    // the handler will sometimes fire before the handler that
    // sets common.getViewportWidth()
    close: function(animate, width) {
      width = width || common.getViewportWidth();

      if (animate) {
        this.$toggle.animate({ 'right': 0 }, 200);
        this.$blurb.animate({ 'right': -1 * width }, 200);
        //this.$blurb.animate({ 'left': 0 }, 200);
      } else {
        this.$toggle.css('right', 0);
        this.$blurb.width(width).css('right', (-1 * width) + 'px');
      }
      this.is_open = false;
    }
  };

  var mobile_blurb = UMD.mobile_blurb = new UMD.MobileBlurb();

}());


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

// ADD IE support for placeholder text on input fields
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
        $('.special_focus_collapse, header.expandable').click(function(e) {
          e.stopPropagation();
          $(this).parent('#prospective_students').toggleClass('collapsed');
          $(this).siblings('.special_focus_info').slideToggle(200);
          return false;
        })
      
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
    if( responsive_viewport >= 1280 ) {
			var minSlides = 4;
			var maxSlides = 4;
		} 		else
		 if( responsive_viewport >= 1064 ) {
			var minSlides = 4;
			var maxSlides = 4;
		} else if( responsive_viewport >= 768 ) {
			var minSlides = 2;
			var maxSlides = 2;
		} else if( responsive_viewport >= 480 ){
			var minSlides = 1;
			var maxSlides = 1;
		} else {
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
