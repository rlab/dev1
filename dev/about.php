<?php
	$pagename = 'about'; //all lowercase, no spaces. Used for class assignments
	$pagetitle = 'About'; //Used for the page's Title attribute
	$pagetype = 'default'; //used to pull in certain header elements
?>
<?php include_once('_inc/header.php'); ?>

	    <!-- HEADER BLOCK START-->

		<header class="interior">
			
			<div class="quicklinks">
				
				<div class="wrap">
				
    			<?php include_once('_inc/quick_links.php'); ?>					

					
					<div class="searchbar threecol last">
		        		<form>
		        			<input type="text" name="search" id="search_field" placeholder="Search" />
							<img src="img/search.png" alt="Submit Icon" id="search_submit" />
		        		</form>
		        	</div>
	        	
				</div>
				
			</div>
			
			<?php include_once('_inc/main_nav.php'); ?>
			
			<div class="photobar">
				
				<ul class="photobar_photos">
					<li><img src="img/photobar/about01.jpg" alt="" /></li>
					<li><img src="img/photobar/about02.jpg" alt="" /></li>
				</ul>
				
				
			</div>
			
		</header>
		
		<!-- HEADER BLOCK END-->
       
       
       
       
       
       
       
       	<!-- PAGE HEADER BLOCK START-->
        <header class="page_header">
       		
       		<div class="wrap">
       			<div class="ninecol">
		       		<h1>About UM-Dearborn</h1>
		       		<p class="breadcrumbs"><a href="#">Home</a> &raquo; <span class="current"><?php echo $pagetitle; ?></span></p>
       			</div>
       		</div>
       		
       	</header>
		<!-- PAGE HEADER BLOCK END-->
       
       
       
       
       
       
       
       	<!-- PAGE BLOCK START-->
       	<div class="wrap page">
       		
       		<aside class="threecol side_nav first">
       			<div class="page_links">
       				<ul>
       					<li><a href="#">Mission &amp; Vision</a></li>
       					<li><a href="#">History</a></li>
       					<li><a href="#">Facts &amp; Figures</a></li>
       					<li><a href="#">Leadership</a></li>
       					<li><a href="#">Awards &amp; Accreditations</a></li>
       					<li><a href="#">Visit Campus</a></li>
       				</ul>
       			</div>
       			<div class="resources">
       				<h6>Academic Resources</h6>
       				<ul>
       					<li><a href="#">Office Finder</a></li>
       					<li><a href="#">People Finder</a></li>
       					<li><a href="#">Employment</a></li>
       					<li><a href="#">Contact Information</a></li>
       				</ul>
       			</div>
       		</aside>
       		
       		
       		
       		
       		
       		<div class="content sixcol">
       		
       			<div class="intro_copy content_block">
       				<p><strong>A degree that makes a difference.</strong><br/>We educate and empower future leaders, serve and strengthen our local communities, and together, we're <a href="#">revitalizing Michigan</a> and changing the world. We are the University of Michigan- Dearborn.</p>
       			</div>
       			
       			<p>It began with a gift of 196 acres from the Ford Motor Company in 1959. Since then, UM-Dearborn has grown into one of the region's best public universities.</p>

	   			<p>Our <a href="#">beautiful campus</a> is home to 9,100 undergraduate and graduate students studying the liberal arts and sciences, health and education, engineering and computer science, and business management. They represent the full spectrum of our region's rich diversity and come from all backgrounds and beliefs to get a <a href="#">Michigan education</a> with a <a href="#">Dearborn difference</a>.</p>
       			
       			<div class="topics content_block">
       				<h4>History &amp; Facts</h4>
       				<ul class="topic_blocks">
       					<li class="topic_bg01"><a href="#">Timeline</a></li>
       					<li class="topic_bg02"><a href="#">Facts &amp; Figures</a></li>
       				</ul>
       			</div>
       			<div class="topics content_block">
       				<h4>Explore Campus</h4>
       				<ul class="topic_blocks">
       					<li class="topic_bg01"><a href="#">Campus Map</a></li>
       					<li class="topic_bg02"><a href="#">Campus Photos</a></li>
       				</ul>
       			</div>
       			
       			<p><strong>Smaller Classes, Bigger Opportunities</strong><br/>
		   			We focus on you. The average class size is just 24 students, so your peers and professors will know your name, your ideas, and your ambitions. <a href="#">World-class</a> faculty will support you in and out of the classroom, encouraging you to challenge yourself, put your passions to practice, and broaden your horizons. </p>

				<p><strong>Education through Experience</strong><br/>
					Our students spearhead new initiatives to <a href="#">clean up nearby neighborhoods</a> and <a href="#">tutor local schoolchildren in math and physics</a>. They organize community events to <a href="#">raise funds and awareness for the region's homeless veterans</a>, work side by side with professors <a href="#">researching Detroit's entrepreneurial ecosystem</a>, and <a href="#">visit textile manufacturers</a> in Italy to present new business strategies. And they do it all while pursuing their degree, and often working at least part-time. </p>

				<p>We offer over <a href="#">100 academic programs</a>, more than <a href="#">160 student organizations</a>, hundreds of <a href="#">internship and co-op</a> placements, and ample research and <a href="#">study abroad</a> options. </p>

				<p>Your education is yours to customize and with our <a href="#">high level of personal support</a>, there's no limit to what you can and will accomplish. </p>
       			
       		</div><!--/content-->
       		
       		
       		
       		
       		
       		<aside class="sidebar threecol last">
       			
       			<ul class="widgets">
       				
       				<li>
       					<div class="video_widget">
       						<div class="widget_wrap">
			       				<a href="http://www.youtube.com/watch?v=wlWeiEil9jY" class="video_thumbnail fancybox">
			       					<img src="img/youtube_static/about_01.jpg" alt="" />
			       					<div class="overlay">
			       						<img src="img/video_preview_text.png" alt="" />
			       					</div>
			       				</a>
			       				<table class="play_bar">
			       					<tbody>
			       						<tr>
			       							<td class="play_button"><a href="http://www.youtube.com/watch?v=wlWeiEil9jY" class="fancybox"><img src="img/video_play_button.png" /></a></td>
			       							<td class="video_title"><a href="http://www.youtube.com/watch?v=wlWeiEil9jY" class="fancybox">My Story - Natalie Jolly</a></td>
			       						</tr>
			       					</tbody>
			       				</table>
       						</div>
       						<p class="video_caption">Video caption soluta nobis est elige di optio sint que nihil impedit quo.</p>
       					</div>
       				</li>
       				
       				<li>
       					<div class="call2act">
       						<ul class="top-m">
       							<img src="img/widgets/call2act/m-logo.png" />
       							<li class="first"><a href="#">Apply to UM-Dearborn</a></li>
       							<li><a href="#">Request Information</a></li>
       						</ul>
       					</div>
       				</li>
       				
       				<li>
       					<div class="text_widget">
       						<h4>Publications</h4>
       						<ul class="bullets">
       							<li><a href="#">Legacy Magazine</a></li>
       							<li><a href="#">Campus Viewbook</a></li>
       							<li><a href="#">Year in Review</a></li>
       							<li><a href="#">Alumni E-News</a></li>
       						</ul>
       					</div>
       				</li>
       				
       				<li>
       					<div class="question_block">
       						<h4>Did You Know? <span class="question_icon">?</span></h4>
       						<p>One third of campus, more than 70 acres, is maintained as one of the largest natural areas in metropolitan Detroit. <a href="#">More &raquo;</a></p>
       						<p class="learn_more">Learn more about <a href="#">Our Campus &raquo;</a></p>
       					</div>
       				</li>
       				
       			</ul>
       			
       		</aside>
       		
       		<div class="clearfix"></div>
       		
       	</div>
		<!-- PAGE BLOCK END-->	
       
       
       
       
       
       
       
       	<!-- FOOTER BLOCK START-->
        <div id="main_footer" class="poly_bg">
	       	<div class="wrap">

	       		<div class="footer_header">
	       			<img class="footer_logo" src="img/footer_logo.png" />
	       			<h5>The University of Michigan-Dearborn</h5>
	       			<ul class="social_icons">
						<li class="facebook">
							<a href="#"><img src="img/facebook.png" /></a>
							<a href="#"><span class="find_us">Find us on Facebook</span></a>
						</li>
						<li class="twitter">
							<a href="#"><img src="img/twitter.png" /></a>
							<a href="#"><span class="find_us">Follow us on Twitter</span></a>
						</li>
	       			</ul>
	       			<div class="clearfix"></div>
	       		</div>
	       		
	       		<p class="address">
	       			4901 Evergreen Road<br/>
	       			Dearborn, Michigan 48128<br />
	       			(313) 593-5000<br/>
	       			<a href="#" class="button">Contact Us</a>
	       		</p>
	       		
	       		<div class="footer_links">
	       			
	       			<ul>
						<li><a href="#">Webmail</a></li>
						<li><a href="#">UM-Dearborn Connect</a></li>
						<li><a href="#">CourseTools</a></li>
						<li><a href="#">Wolverine Access</a></li>
					</ul>
					<ul>
						<li><a href="#">Maps &amp; Directions</a></li>
						<li><a href="#">Where to Eat</a></li>
						<li><a href="#">Where to Stay</a></li>
						<li><a href="#">Bookstore</a></li>
					</ul>
					<ul>
						<li><a href="#">Accessibility</a></li>
						<li><a href="#">Sitemap</a></li>
						<li><a href="#">Privacy Statement</a></li>
						<li><a href="#">Social Media</a></li>
					</ul>
					<ul>
						<li><a href="#">Employment Info</a></li>
						<li><a href="#">Emergency Info</a></li>
						<li><a href="#">Directory</a></li>
						<li><a href="#">Ann Arbor</a> | <a href="#">Flint</a></li>
					</ul>
	       			
	       		</div>
	       		
	       		<div class="clearfix"></div>
	       	</div>
       	</div>
		<!-- FOOTER BLOCK END-->

<?php include_once('_inc/footer.php'); ?>