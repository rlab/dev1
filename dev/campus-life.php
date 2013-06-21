<?php
	$pagename = 'campus-life'; //all lowercase, no spaces. Used for class assignments
	$pagetitle = 'Campus Life'; //Used for the page's Title attribute
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
					<li><img src="img/photobar/campus_life01.jpg" alt="" /></li>
					<li><img src="img/photobar/campus_life02.jpg" alt="" /></li>
				</ul>
				
				
			</div>
			
		</header>
		
		<!-- HEADER BLOCK END-->
       
       
       
       
       
       
       
       	<!-- PAGE HEADER BLOCK START-->
       	<header class="page_header">
       		
       		<div class="wrap">
       			<div class="ninecol">
		       		<h1><?php echo $pagetitle; ?></h1>
		       		<p class="breadcrumbs"><a href="#">Home</a> &raquo; <span class="current"><?php echo $pagetitle; ?></span></p>
       			</div>
       		</div>
       		
       	</header>
		<!-- PAGE HEADER BLOCK END-->
       
       
       
       
       
       
       
       	<!-- PAGE BLOCK START-->
        <div class="wrap page clearfix">
       		
       		<aside class="threecol side_nav first">
       			<div class="page_links">
       				<ul>
       					<li><a href="#">Life in the D</a></li>
       					<li><a href="#">Student Organizations</a></li>
       					<li><a href="#">Community Involvement</a></li>
       					<li><a href="#">Working &amp; Studying</a></li>
       					<li><a href="#">Housing</a></li>
       					<li><a href="#">Health &amp; Wellness</a></li>
       					<li><a href="#">Athletics</a></li>
       				</ul>
       			</div>
       			<div class="resources">
       				<h6>Related Links</h6>
       				<ul>
       					<li><a href="#">Calendar</a></li>
       					<li><a href="#">Campus Safety</a></li>
       					<li><a href="#">Campus Map</a></li>
       					<li><a href="#">University Center</a></li>
       					<li><a href="#">Shuttle &amp; Parking</a></li>
       					<li><a href="#">Student Services Finder</a></li>
       					<li><a href="#">Office of Student Engagement</a></li>
       				</ul>
       			</div>
       		</aside>
       		
       		
       		
       		
       		
       		<div class="content sixcol">
       		
       			<div class="intro_copy content_block">
       				<p>Catchy, clever, interesting. Let the dynamic content do most of the work here but use this text to frame what people will find on this page.</p>
	   				<p>2nd paragraph guides students to resources and opportunities highlighted on inside pages of this section</p>
		   			<p>Links in text: University Center, Campus Shuttles/Transportation, Parking</p>
       			</div>
       			
       			<div class="finder content_block">
       				<h4>Departments &amp; Programs</h4>
       				<div class="searchbar">
		        		<form>
		        			<input type="text" name="search" id="search_field" placeholder="How do you want to get involved?" />
							<img src="img/search.png" alt="Submit Icon" id="search_submit" />
		        		</form>
		        	</div>
		        	<p><a href="#">Start your search here.</a> Omnis iste natus error sit learn to be voluptatem accusantium in the world dolor emque in the school quasus remper.</p>
		        	<ul>
			        	<li><a href="#">View All Student Organizations</a></li>
		        	</ul>
       			</div>
       			
       			<div class="topics content_block">
       				<h4>Find your place at um-dearborn</h4>
       				<p>Omnis iste natus error sit volupta accusantium in the lauda, totam rem and  resource periam, eaque ipsa quae ab illo inventore.</p>
       				<ul class="topic_blocks">
       					<li class="topic_bg_red"><a href="#"><span>Groups &amp; CLubs</span></a></li>
       					<li class="topic_bg_orange"><a href="#"><span>Athletics</span></a></li>
       					<li class="topic_bg_green"><a href="#"><span>Community Service</span></a></li>
       					<li class="topic_bg_teal"><a href="#"><span>Greek Life</span></a></li>
       				</ul>
       			</div>
       			
       			<div class="topics content_block">
       				<h4>Preparing For A Career</h4>
       				<ul class="topic_blocks">
       					<li class="topic_bg01"><a href="#"><span>Organizations</span></a></li>
       					<li class="topic_bg02"><a href="#"><span>Internships &amp; COOPS</span></a></li>
       				</ul>
       			</div>
       			
       		</div><!--/content-->
       		
       		
       		
       		
       		
       		<aside class="sidebar threecol last">
       			
       			<ul class="widgets">
       				
       				<li>
       					<div class="video_widget">
       						<div class="widget_wrap">
			       				<a href="http://www.youtube.com/watch?v=NNAm2tm2p5A" class="video_thumbnail fancybox">
			       					<img src="img/youtube_static/campus_life_02.jpg" alt="" />
			       					<div class="overlay">
			       						<img src="img/video_preview_text.png" alt="" />
			       					</div>
			       				</a>
			       				<table class="play_bar">
			       					<tbody>
			       						<tr>
			       							<td class="play_button"><a href="http://www.youtube.com/watch?v=NNAm2tm2p5A" class="fancybox"><img src="img/video_play_button.png" /></a></td>
			       							<td class="video_title"><a href="http://www.youtube.com/watch?v=NNAm2tm2p5A" class="fancybox">A Day in the Life</a></td>
			       						</tr>
			       					</tbody>
			       				</table>
       						</div>
       						<p class="video_caption">Meet Jeanette Whiting, UM-Dearborn's campus gardener.</p>
       					</div>
       				</li>
       				
       				<li>
       					<div class="question_block">
       						<h4>Did You Know? <span class="question_icon">?</span></h4>
       						<p>We currently enroll nearly 9,100 students. <a href="#">More &raquo;</a></p>
       						<p class="learn_more">See more <a href="#">Facts &amp; Figures &raquo;</a></p>
       					</div>
       				</li>
       				
       				<li>
       					<div class="bold_topic">
       						<a href="#" class="topic_image">
       							<img src="img/widgets/bold_topics/housing.jpg" alt="" />
       						</a>
       						<a href="#" class="topic_block"><span>Housing</span></a>
       					</div>
       				</li>
       				
       				<li>
       					<div class="bold_topic">
       						<a href="#" class="topic_image">
       							<img src="img/widgets/bold_topics/difference_makers.jpg" alt="" />
       						</a>
       						<a href="#" class="topic_block"><span>Difference Makers</span></a>
       					</div>
       				</li>
       				
       			</ul>
       			
       		</aside>
       		
       		<div class="clearfix"></div>
       		
       	</div>
		<!-- PAGE BLOCK END-->	
       
       

       
       
       
       	<!-- NEWS SCROLLER BLOCK START -->
       	<div class="carousel news section tan_bg" style="border-bottom: none;">
       		<div class="wrap">
       			
       			<header class="section_header">
       				<h4>Current News</h4>
       				<select>
       					<option>General</option>
       					<option>College Of Business</option>
       					<option>Sciences</option>
       					<option>Letters</option>
       					<option>College Of Arts</option>
       				</select>
       				<ul class="section_header_links">
       					<li class="first"><a href="#">Advanced Search</a></li>
       					<li><a href="#">Newsroom</a></li>
       				</ul>
       			</header>
       			
       			<ul class="slides clearfix">
       				<li>
       					<a href="#"><img src="img/slides/news-img09.jpg" alt="" class="slide_image" /></a>
       					<h3><a href="#">Two UM-Dearborn students chosen for Cannes Film Fesitival internship program</a></h3>
       					<p>Amanda Lewan crafted her acting skills in the basement of her childhood home. "I remember I used to make up stories in my mind and act out the scenes by myself," she said.</p>
       				</li>
       				<li>
       					<a href="#"><img src="img/slides/news-img04.jpg" alt="" class="slide_image" /></a>
       					<h3><a href="#">Headline Text is 20px Book Antiqua and is limited to Three Lines</a></h3>
       					<p>Teaser summary here with no linked text. even though this blurb is shorter, it doesn't need to be.</p>
       				</li>
       				<li>
       					<a href="#"><img src="img/slides/news-img05.jpg" alt="" class="slide_image" /></a>
       					<h3><a href="#">The new visionaries</a></h3>
       					<p>University of Michigan-Dearborn conferred nearly 800 degrees during two commencement ceremonies April 28, including 596 undergraduate degrees and 193 graduate degrees.</p>
       				</li>
       				<li>
       					<a href="#"><img src="img/slides/news-img06.jpg" alt="" class="slide_image" /></a>
       					<h3><a href="#">Regents approve schematic designs for Science Building renovations</a></h3>
       					<p>University of Michigan-Dearborn moved one step closer in its pursuit to provide students, faculty and staff with a 21st century science experience.</p>
       				</li>
       				<li>
       					<a href="#"><img src="img/slides/default.png" alt="" class="slide_image" /></a>
       					<h3><a href="#">Student awards recognize passion for leadership and academics</a></h3>
       					<p>What does it look like to pursue a passion? For Jamilah Alhashidi, it's a transformational experience.</p>
       				</li>
       				<li>
       					<a href="#"><img src="img/slides/news-img08.jpg" alt="" class="slide_image" /></a>
       					<h3><a href="#">Nature's calling</a></h3>
       					<p>A group of blind children gathered around a picnic table cluttered with shovels, plants, pots and plenty of dirt.</p>
       				</li>
       			</ul>
       		</div>
       	</div>
		 <!-- NEWS SCROLLER BLOCK END-->	
       
       
       
       
       
       
       
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