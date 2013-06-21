<?php
/* Design Presentation Slideshow
Displays images in images/, sequentially, with permalinks. Control using buttons in the upper left or the left-arrow/j and right-arrow/k keys to navigate (or space to play/pause)
To show just one image, adding "-single" to the permalink hash will disable navigating/advancing of any kind
Some options: */
$autostart = false; // true/false -- should it start playing automatically? Regardless, it’ll never autoplay when accessing a permalinked image
$autodelay = 2000; // int -- when auto-advancing, how long should we view each image (ms)
$clicktonext = true; // true/false -- does clicking anywhere on the page show the next image?
$showcontrols = 1; // 0: never show controls; 1 (default): show them on mouseover; 2: always show controls (if there’s more than one image)
$homepage = '../'; // URL of the presentation homepage; default '../' -- use false or an empty string to hide the link
// Don't mess with this:
$files = glob('images/{*.jpg,*.jpeg,*.png,*.gif,*.JPG,*.JPEG,*.PNG,*.GIF}',GLOB_BRACE) or die('<html><body><h2>Please add at least one image to <em>images/</em>.</h2><p>See the source code of this file for further instructions.</p></body></html>');
$images = json_encode($files);
$home = ($homepage ? '<a href="'.$homepage.'" id="home">&laquo; Return to presentation homepage</a>' : '');
$settings = json_encode(array('auto'=>$autostart,'delay'=>$autodelay,'clicktonext'=>$clicktonext,'controls'=>$showcontrols));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	<title>UM-Dearborn + White Whale Web Services</title>
	<style type="text/css">
		/* Tweak these styles */
		body { background-image:none; background-color:#F7F2EF; } /* Any body styles needed for background images, etc */
		#spacer { width:980px; } /* Spacer width/height sets the scrollable region for the page REGARDLESS of the actual image dimensions */
	</style>
	<style type="text/css">
		/* But don’t edit these ones: */
		body { padding:0; margin:0; }
		#spinner { position:fixed; top:0%; left:0; width:100%; height:100%; z-index:1000; background:#333 url(data:image/gif;base64,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) no-repeat center center; }
		#spacer { display:block; margin:0 auto; }
		.slide { display:none; width:100%; background-repeat:no-repeat; background-position:center top; position:absolute; top:0; left:0; }
		#controls { position:fixed; top:0; left:0; font-family:sans-serif; font-size:0.875em; cursor:pointer; z-index:800; background-color:#000; overflow:hidden; display:none; padding:0 5px; border:solid #333; border-width:0 1px 1px 0; -webkit-border-radius:0 0 10px 0; -moz-border-radius:0 0 10px 0; border-radius:0 0 10px 0; opacity:0.8; }
			#controls a { display:block; float:left; padding:8px 10px; color:#aaa; text-decoration:none; width:10px; background-image:url(data:image/gif;base64,R0lGODlheAA8AOZYAIyMjNLS0m5ubqWlpZaWlmRkZMPDw4KCgmZmZgYGBhgYGCQkJAQEBIaGhpmZmcnJyQoKCg8PDw4ODhISEhUVFR4eHkRERJKSkkJCQtvb25iYmOTk5AkJCRsbG05OToSEhDw8PAwMDJycnH5+fmNjY7q6uhQUFPb29sbGxr29vS0tLbGxsaSkpBAQEDAwMFpaWurq6ggICHV1dXZ2djY2Nnx8fFRUVCYmJoiIiEhISDo6OszMzHR0dFdXVyIiIhwcHPPz84qKiigoKM/PzxoaGoCAgDMzMywsLFhYWKKiolJSUjk5OScnJ66urioqKnt7ezg4OOHh4cDAwDQ0NCAgIGhoaKqqqv///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAFgALAAAAAB4ADwAAAf/gFiCg4SFhoeIiYqLjI2Oj5CRkpOUlZaXmJmam5ydnp+goaKjpKWmp6ikEpqrmT+plwo1mjUKmQA8JpxHFhZTg1C9QpYtFwCaABcTmABWLEgxmgJWVgeDzVYFlRDNx7dWABCX2FYaIJnT1dfU2pMJH9TezNQfCZbk1A0+l+nWgtjtIjGYQQ0csoIzGFTCV7BKi0r91mWblC7ewYICFhbcaCWJB4WSIv5jJwkDR3njOGKgxJAjjmiRRGIBKInBiI0o720cAVJSy4IIQlCk5m8mSUkQGhTMqTGfOJYcqRWhApGoxICRJFyw+M3KhVZQNxLQwc/qyImUJmgw+E3DMp3U/1gosVdW3VmskiqIYMpSRIV5VgToQmfWKNpKCxpoarDgVpAbnGTSjKWJiCYXnjAgQOBhkI3N52CJHk26tOnTqFOrXs26tevXsGPLnk27tu3buHPr3s27t+/fryloEp7Jye0FJTSVaIwpQJO/mzRz9gzakoIMATQFyNCh+ZUTH4RmGnDlioFBAcoTqBQhffZM7iNcSl9+w4vx5c8Lor9+EgcU5b3n3RUocGAJfeVd8YARl5BnHnrqubNCggLOl+AKdE2CYIJXiGALJQ7qhwV/kzgYoHYcDlDJhhwCIUOGkIQI4RX9QUICh1dUeCCOJFDCIo47iBdjfjPW+EgCKXCo45KKHKYAIyQ/JujAW5HIuF+EkkTwAIUolveAfD7iWJ4UmIFI5JU0UkJBBifCV14GxIXJYRQ9NHjmiFhO0sEGOaK4QXc7lnfCEwba+SCaRkqiAgxL+giDCgMOAB0mVuKZpiU0PKDJAzTAN8QSnFRK4iXMYcKEJjl4QoIDDsgwyAis3gfcrLTWauutuOaq66689ppJIAA7); background-repeat:no-repeat; overflow:hidden; text-indent:-999em; }
			#prev { background-position:0 0; }
			#prev:hover { background-position:0 -30px; }
			#next { background-position:-30px 0; }
			#next:hover { background-position:-30px -30px; }
			#play { background-position:-60px 0; }
			#play:hover { background-position:-60px -30px; }
			#play.playing { background-position:-90px 0; }
			#play.playing:hover { background-position:-90px -30px; }
			#controls #menu,#controls #home { width:auto; text-indent:0; background:none; margin-top:-1px; }
			#controls #home { border-left:1px solid #333; margin-left:10px; }
			#menu:hover,#home:hover { color:#fff; }
		#preload { width:0; height:0; overflow:hidden; position:absolute; top:0; left:-1px; z-index:0; }
		#whiteout { display:none; width:100%; height:100%; position:fixed; top:0; left:0; z-index:890; }
		#thumbnails { width:786px; background-color:#000; position:absolute; top:30px; left:50%; margin-left:-394px; z-index:900; text-align:center; display:none; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; border:1px solid #333; }
			#thumbnails img { cursor:pointer; margin:30px 20px; border:1px solid #333; }
			#thumbnails img:hover { border-color:#999; }
	</style>
</head>
<body>
<div id="spinner"></div>
<div id="preload"></div>
<div id="thumbnails"></div>
<div id="whiteout"></div>
<div id="spacer"></div>
<div id="controls">
	<a href="#" id="prev" title="Previous image">Previous</a>
	<a href="#" id="next" title="Next image">Next</a>
	<a href="#" id="menu">Show all</a>
	<a href="#" id="play" title="Auto advance">Play</a>
	<?php echo $home; ?>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.js"></script>
<script type="text/javascript">
var images = <?php echo $images; ?>,
	settings = <?php echo $settings; ?>;
$(function() {
	var current = 0, // pointer for the current image
		slides, // the set of slides
		controls = $('#controls'), // the controls div
		preload = $('#preload'), // the preload div
		thumbnails = $('#thumbnails'), // the thumbnail div
		whiteout = $('#whiteout'), // the whiteout overlay
		spinner = $('#spinner'), // the spinner div
		spacer = $('#spacer'), // the spacer div
		timer, // timer
		showSlide = function(index) { // to show a slide
			var slide = slides.eq(index), // the slide
				height = $('#img-'+slide.attr('id')).height(); // get its height from the corresponding img element
			if(!location.hash.match(/-single$/)) location.hash = slide.attr('id').replace('_DOT_','.'); // set the hash to the new image, unless we're locked on a single image
			slide.height(height).css('z-index',100).show() // show the slide, near the bottom of the stacking order and with the appropriate height
				.siblings('.slide:visible').fadeOut(600,function() { // find any siblings and fade them out
					slide.css('z-index',200); // then bump the slide up in the stacking order
				});
			spacer.animate({height:height},200); // and set the scrolling region spacer to the slide's height
		};
	if(location.hash.length>1) { // if there’s a permalink
		current = images.indexOf('images/'+location.hash.substr(1).replace(/-single$/,'')); // find the pointer
		if(current<0) current = 0; // if it wasn't found, start at the first image
		settings.auto = false; // and disable auto-advancing
		if(location.hash.match(/-single$/)) { // if we're locking the navigation to a single image
			images = [images[current]]; // reduce the set to just that image
			current = 0; // with the index of 0
		}
	}
	$.each(images,function() { // with each image
		var id = this.substr(7).replace('.','_DOT_');
		$('<div style="background-image:url('+this+');" id="'+id+'" class="slide"/>').appendTo('body'); // append it as a slide
		$('<img src="'+this+'" id="img-'+id+'" alt="Design mockup"/>').appendTo(preload); // add the image to the force cache div
		$('<img src="'+this+'" title="'+this.substr(7)+'" alt="Design mockup" width="200"/>').appendTo(thumbnails); // add the image to the force cache div
	});
	slides = $('.slide'); // add the slides to the slide set
	if(images.length>1) { // if there's more than one image
		if(slides.filter(':animated').length) { return false; } // abort if animating currently
		var next = $('#next'), // store the next button
			prev = $('#prev'), // previous button
			play = $('#play'); // and play button
		if(settings.controls) { // if we ever show the controls
			controls.show(); // show them
			if(settings.controls==1) { // if we should hide them until hover
				controls.css('opacity',0) // fade them out
					.hover(function() { // and when hovering over them
						controls.stop().fadeTo(200,0.8); // fade them in
					},function() { // and when hovering off
						controls.stop().fadeTo(200,0); // fade them out
					});
			}
		}
		next.add(prev).click(function() {  // the next/prev buttons
			current = current + ($(this).is('#next') ? 1 : -1); // increment (or decrement) the current slide
			if(current==images.length) current = 0; // if we've gone too high, wrap around
			if(current<0) current = images.length-1; // or if we've gone to low, wrap around
			showSlide(current);
			return false; // and cancel the original click
		});
		$('#menu').click(function() { // "Show all"
			thumbnails.fadeIn(400); // fade in the thumb overlay
			whiteout.show(); // and show the whiteout div
			return false; // and cancel the original click
		});
		play.click(function() { // Auto advance
			$(this).toggleClass('playing'); // toggle the 'playing' state
			if($(this).is('.playing')) { // if we're now paused
				timer = setInterval(function() { // set the timer
					next.click(); // to click the next button
				},settings.delay+600); // at specified interval + 600 (for the fade)
			} else {
				clearInterval(timer); // otherwise, clear the timer
			}
			return false; // and cancel the original click
		});
		thumbnails.children('img').click(function() { // clicking on a thumbnail
			current = $(this).index(); // sets that image to the current
			showSlide(current); // shows it
			thumbnails.fadeOut(400); // and hides the thumbnail overlay
			whiteout.hide(); // and hide the whiteout div
		});
		whiteout.click(function() { // clicking on the whiteout div
			thumbnails.fadeOut(400); // and hides the thumbnail overlay
			whiteout.hide(); // and hide the whiteout div
		});
		$(document).keydown(function(e) { // on key press
			switch(e.keyCode) { // based on which key was pressed
				case 39: // right arrow
				case 107: // k
				case 75: // K
					e.preventDefault(); // prevent any action
					next.click(); // and show the next image
				break;
				case 37: // left arrow
				case 106: // j
				case 74: // J
					e.preventDefault(); // prevent any action
					prev.click(); 
				break;
				case 32: // space
					e.preventDefault(); // prevent any action
					play.click(); // toggle play/pause state
				break;
			}
			if(e.charCode==106||e.charCode==74||e.charCode==32) { // j/J/space
				if(current.next().length) current.next().makeCurrent();
			} else if(e.charCode==107||e.charCode==75) { // k/K
				if(current.prev().length) current.prev().makeCurrent();
			} else { return; }		});
		if(settings.auto) {
			play.click();
		}
		if(settings.clicktonext) { // if clicking each image should bring you to the next one
			slides.css('cursor','pointer').click(function() { // add the pointer cursor, and when clicking
				next.click();
			});
		}
	}
	preload.whenloaded(function() { // when all the images are loaded, either fresh or from cache
		showSlide(current); // show the current slide
		slides.eq(current).css('z-index',200);
		spinner.fadeOut(); // and fade out the spinner
	});
});

$.fn.extend({
	whenloaded:function(callback) { // when all images have loaded
		var loadable = 'img,object,audio,video,iframe', // selector for elements with the load event
			elements = this.find(loadable), // get the list of loadable elements
			loaded = 0; // and the number that have loaded so far
		if(this.is(loadable)) elements.add(this); // add the current element if its loadable
		elements.each(function() { // get each element
			if(this.complete) loaded++; // if it's already loaded, increment the counter
			else {
				$(this).load(function() { // otherwise, attach a load event
					if(++loaded==elements.length) callback.apply(this); // that increments the counter and checks if its time to run the callback
				});
			}
		});
		if(elements.length==loaded) callback.apply(this); // if the elements are all loaded, apply the callback immediately	
		return this; // return the original element for chaining
	}
});
</script>
</body>
</html>