<?php
	$pagename = 'home';
	$pagetitle = 'Home';
	$pagetype = 'home'; //used to pull in certain header elements
?>
<?php include_once('_inc/header.php'); ?>

        <!-- HEADER BLOCK START-->

		<div class="quicklinks">
				
				<div class="wrap">
				
			   <?php include_once('_inc/quick_links.php'); ?>	
			   				
					<div class="searchbar threecol last">
		        		<form>
		        			<input type="text" name="search" id="search_field" placeholder="Search" />
		        			<input type="submit" name="submit" id="search_submit" value="Search" />
		        		</form>
		        	</div>
	        	
				</div>
				
			</div>
		
		<!-- HEADER BLOCK END-->
       
		
		<!-- HEADER BLOCK START-->

		<header class="home">
			
			<div class="header_graphic">
				
				<div class="header_image wrap" style="background-image:url('img/header_backgrounds/cardinal.jpg');"></div>
				
				<div class="m-container">
					<div class="m-wrapper">
						<img id="m-left" src="img/m/left01.png" alt="" />
						<img id="m-top" src="img/m/top01.png" alt="" />
						<img id="m-right" src="img/m/right01.png" alt="" />
						<img id="m-bottom" src="img/m/bottom01.png" alt="" />
					</div>
				</div>
				
				<div class="wrap titleblock">
					<h1>Dearborn</h1>
					<div class="header_blurb">
						<a href="#" class="toggle"></a>
						<div class="blurb">
							<span class="title">Who's moving back to Motown?</span>
							<span><a href="#">Our <strong>Rouge River Banding Station</strong> reposted new fall data that's turning heads.</a></span><a class="arrow" href="#"><img src="img/caption-arrow.png" /></a>
						</div>
					</div>
				</div>
				
			</div>
			
			<?php include_once('_inc/main_nav.php'); ?>
			
		</header>
		
		<!-- HEADER BLOCK END-->	
       
       
       
       
       
       
       
       	<!-- INTRO BLOCK START-->

		<div id="home-intro" class="wrap">
			
			<div class="ninecol intro_text">
				<h1>The University that's changing Michigan.</h1>
				<p>We hail from every corner of the region, state, nation, and world, coming together in the heart of American industry. We are <a href="#">leaders</a>, innovators, activists, athletes, and intellectuals, each of us doing our best to strengthen our <a href="#">cultures and communities</a>. Michigan is changing - <a href="#">we're ready</a>.</p>
			</div>
			
			<!--
			<div class="threecol last info_connect">
				<table>
					<thead>
						<tr>
							<th colspan="2">Information For</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="#">Students</a></td>
							<td><a href="#">Faculty</a></td>
						</tr>
						<tr>
							<td><a href="#">Alumni</a></td>
							<td><a href="#">Staff</a></td>
						</tr>
						<tr>
							<td><a href="#">Families</a></td>
							<td><a href="#">Visitors</a></td>
						</tr>
					</tbody>
				</table>
			</div>
			-->
			
		</div>
		
		<!-- INTRO BLOCK END-->	
       
       
       
       
       
       
       
       	<!-- SPECIAL FOCUS BLOCK START-->
       	
        
        <div id="prospective_students" class="special_focus">
        	
			<div class="background_images">
				<div class="left_images">
					<img src="img/p-students-side01.jpg" alt="" />
				</div>
				<div class="spacer"></div>
				<div class="left_images">
					<img src="img/p-students-side02.jpg" alt="" />
				</div>
			</div>
        	
        	<header class="expandable">
        		
        		<div class="wrap">
        			
        			<h4>Future Students</h3>
        			<img class="p-students_m" src="img/transparent-m.png" alt="" />
        			<div class="clearfix"></div>
        			
        		</div>
        		
        	</header>
        	
        	<div class="wrap special_focus_info">
        		
        		<div class="p-students_callout ninecol first">
        			
        			<div class="p-students_image">
	        			<img src="img/p-students01.jpg" alt="Michigan Students Walking" />
	        		</div>
        			
        			<div class="p-students_copy">
	        			<h2>Get a Michigan degree with a Dearborn drivetrain.</h2>
	        			<p>Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. <a href="#">Nulla at nulla justo</a>.
	        			</p>
        			</div>
        			
        		</div>
        		
        		<div class="p-students_menu threecol last">
        			
        			<ul>
        				
        				<li class="apply_now odd"><a href="#">Apply Now!</a></li>
        				<li class="even"><a href="#">Find Your Major</a></li>
        				<li class="odd"><a href="#">Transfer to UM-Dearborn</a></li>
        				<li class="even"><a href="#">Estimate Your Costs</a></li>
        				<li class="odd"><a href="#">Schedule a Tour</a></li>
        				
        			</ul>
        			
        		</div>
        		
        		<div class="clearfix"></div>
        		
        	</div>
        	
        	<div class="special_focus_collapse">
        		<div class="wrap">
        			<a href="#" class="threecol last"><img src="img/p-students_close.png" /></a>
        		</div>
        	</div>
        	
        </div>
		
		<!-- SPECIAL FOCUS BLOCK END-->	
       
       

       
       
       
       	<!-- NEWS SCROLLER BLOCK START -->
       	<div class="carousel news tan_bg section" style="border-top: none;">
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
       					<a href="#"><img src="img/slides/news-img01.jpg" alt="" class="slide_image" /></a>
       					<h3><a href="#">Spray Titanium Helps Hips to be Square</a></h3>
       					<p>UM-Dearborn just conferred its first Ph.D. in automotive systems engineering - but Dr. Xuan Zhou's research <a href="#">goes much deeper.</a></p>
       				</li>
       				<li>
       					<a href="#"><img src="img/slides/news-img02.png" alt="" class="slide_image" /></a>
       					<h3><a href="#">Space &amp; Relationships</a></h3>
       					<p>University of Michigan-Dearborn compliments urban studies programs with a <a href="#">new minor in geography.</a></p>
       				</li>
       				<li>
       					<a href="#"><img src="img/slides/news-img03.jpg" alt="" class="slide_image" /></a>
       					<h3><a href="#">Short title, long blurb</a></h3>
       					<p>For best results, the length of all headlines and summaries should be kept relatively consistent.</p>
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
       				<li>
       					<a href="#"><img src="img/slides/news-img09.jpg" alt="" class="slide_image" /></a>
       					<h3><a href="#">Two UM-Dearborn students chosen for Cannes Film Fesitival internship program</a></h3>
       					<p>Amanda Lewan crafted her acting skills in the basement of her childhood home. "I remember I used to make up stories in my mind and act out the scenes by myself," she said.</p>
       				</li>
       			</ul>
       		</div>
       	</div>
		 <!-- NEWS SCROLLER BLOCK END-->	
       
       

       
       
       
       	<!-- EVENTS BLOCK START -->
       	<div id="home_events_section" class="events_slider section">
       		
       		<div class="wrap">
       			
       			<header class="section_header">
       				<h4>Upcoming Events</h4>
       				<select>
       					<option>Today</option>
       					<option>This Week</option>
       					<option>This Semester</option>
       					<option>This Year</option>
       					<option>All Events</option>
       				</select>
       				<ul class="section_header_links">
       					<li class="first"><a href="#">View Calendar &raquo;</a></li>
       				</ul>
       			</header>
       			
       			<ul class="slides clearfix">
       				
       				<li>
       					<div class="event_wrapper">
       						<div class="event_header"><span>Admissions</span></div>
       						<div class="event_title"><a href="#">Graduate Open House</a></div>
       						<div class="event_datetime_wrap clearfix">
       							<div class="event_cal_icon"><span class="month">Feb</span><span class="day">16</span></div>
       							<div class="event_datetime"><a href="#"><span class="date">Tuesday, Feb 16<span class="superscript">th</span></span><span class="time">4:00pm - 7:00pm</span></a></div>
       						</div>
       					</div>
       				</li>
       				<li>
       					<div class="event_wrapper">
       						<div class="event_header"><span>Health &amp; Human Services</span></div>
       						<div class="event_title"><a href="#">SEI Lecture Series</a></div>
       						<div class="event_datetime_wrap clearfix">
       							<div class="event_cal_icon"><span class="month">Feb</span><span class="day">26</span></div>
       							<div class="event_datetime"><a href="#"><span class="date">Wednesday, Feb 26<span class="superscript">th</span></span><span class="time">11:00am - 1:00pm</span></a></div>
       						</div>
       					</div>
       				</li>
       				<li>
       					<div class="event_wrapper">
       						<div class="event_header"><span>School of Education</span></div>
       						<div class="event_title"><a href="#">Next Gen Science Standards</a></div>
       						<div class="event_datetime_wrap clearfix">
       							<div class="event_cal_icon"><span class="month">Feb</span><span class="day">27</span></div>
       							<div class="event_datetime"><a href="#"><span class="date">Thursday, Feb 27<span class="superscript">th</span></span><span class="time">All Day</span></a></div>
       						</div>
       					</div>
       				</li>
       				<li>
       					<div class="event_wrapper">
       						<div class="event_header"><span>College of Business</span></div>
       						<div class="event_title"><a href="#">Career Paths in Economics</a></div>
       						<div class="event_datetime_wrap clearfix">
       							<div class="event_cal_icon"><span class="month">Mar</span><span class="day">1</span></div>
       							<div class="event_datetime"><a href="#"><span class="date">Monday, Mar 1<span class="superscript">st</span></span><span class="time">8:00pm</span></a></div>
       						</div>
       					</div>
       				</li>
       				<li>
       					<div class="event_wrapper">
       						<div class="event_header"><span>Admissions</span></div>
       						<div class="event_title"><a href="#">Transfer Night</a></div>
       						<div class="event_datetime_wrap clearfix">
       							<div class="event_cal_icon"><span class="month">May</span><span class="day">22</span></div>
       							<div class="event_datetime"><a href="#"><span class="date">Wednesday, May 22<span class="superscript">nd</span></span><span class="time">5:00pm - 8:00pm</span></a></div>
       						</div>
       					</div>
       				</li>
       				<li>
       					<div class="event_wrapper">
       						<div class="event_header"><span>Center for Labor and Community Studies</span></div>
       						<div class="event_title"><a href="#">2013 New Workers Conference</a></div>
       						<div class="event_datetime_wrap clearfix">
       							<div class="event_cal_icon"><span class="month">June</span><span class="day">28</span></div>
       							<div class="event_datetime"><a href="#"><span class="date">Friday, June 28<span class="superscript">th</span></span><span class="time">7:30am - 5:00pm</span></a></div>
       						</div>
       					</div>
       				</li>
       				
       			</ul>
       			
       		</div>
       		
       	</div>
		 <!-- EVENTS BLOCK END-->	
       
       
       
       
       
       
       
       	<!-- CALLOUTS BLOCK START-->
       	<div id="home-footer-callouts" class="tan_bg">
	       	<div class="callouts wrap">
	       		<ul class="callout-blocks">
	       			<li class="sixcol callout-block first">
		       			<a href="#"><img src="img/callout01.png" alt="" /></a>
	       			</li>
	       			<li class="threecol callout-block">
		       			<a href="#"><img src="img/callout02.png" alt="" /></a>
	       			</li>
	       			<li class="threecol callout-block last">
		       			<a href="#"><img src="img/callout03.png" alt="" /></a>
	       			</li>
	       		</ul>
	       	</div>
       	</div>
		<!-- CALLOUTS BLOCK END-->	
       
       
       
       
       
       
       
       	<!-- FOOTER BLOCK START-->
       	<div id="main_footer" class="poly_bg">
	       	<div class="wrap">
	       	
	       		<div class="footer_header">
	       			<img class="footer_logo" src="img/footer_logo.png" />
	       			<h5>The University of Michigan-Dearborn</h5>
	       			<ul class="social_icons">
		       			<li class="facebook"><a href="#">Find us on Facebook</a></li>
		       			<li class="twitter"><a href="#">Follow us on Twitter</a></li>
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
       
       
       
       
       
       
       
       	<!-- MAP BLOCK START-->
       	<div id="campus_map">
			
			<div class="wrap">
			
				<div id="quote">"Trees are among the most useful things grown." - <em>Henry Ford</em></div>
				<a href="#" id="map_open_close"><span class="open_or_close">Open</span> Campus Map<img src="img/map_arrow.png" alt="map close arrow" class="open" /></a>
				
			
			</div>
			
			<img id="campus_map_image" src="img/map-for-web.jpg" />
			
		</div>
		<!-- MAP BLOCK END-->
       
       
       
       
       
       
       
<?php include_once('_inc/footer.php'); ?>
