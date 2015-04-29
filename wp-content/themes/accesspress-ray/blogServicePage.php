<?php /* Template Name: ServicesPage */ ?>
<?php
get_header(); 
global $post;
if(is_front_page()){
	$post_id = get_option('page_on_front');
}else{
	$post_id = $post->ID;
}
$post_class = get_post_meta( $post_id, 'accesspress_ray_sidebar_layout', true );
?>




<div class="ak-container">

	
<div class="inner-pages-wrapper clearfix">

<?php 
	if ($post_class=='both-sidebar') { ?>
		<div id="primary-wrap" class="clearfix"> 
	<?php }
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_sidebar('left'); 

	if ($post_class=='both-sidebar') { ?>
		</div> 
	<?php }

get_sidebar('right'); ?>

			<div class= "services-gallery clearfix">

				<ul class="row-1">
					<li ><a href="#"><img src="http://localhost/wordpress/wp-content/uploads/2015/03/media-icon-300x300.png" alt="media icon"  class="alignnone size-medium wp-image-65" />
						<span class="icon-desc" > 
							<span><ul>
								<li>Consumer and Trade Publicity</li>
								<li>Broadcast Placements</li>
								<li>Press Conferences/Briefings</li>
								<li>Webinars</li>
								<li>Press Kits/Press Release Writing</li>
								<li>Feature Stories</li>
							</ul></span>
						</span></a>
						

						<div class="service-title">Media Relations</div></li>

					<li><a href="#"><img src="http://localhost/wordpress/wp-content/uploads/2015/04/content-creation-300x300.png" alt="content creation icon" class="alignnone size-medium wp-image-67" />
						<span class="icon-desc"> 
							<span><ul>
								<li>Case Studies</li>
								<li>Blog Writing and Management</li>
								<li>Web Design</li>
								<br/>
								<li>Infographic Design</li>
								<li>Newsletters</li>
								<li>Brochures, Product Catalogs, Point-of-Purchase</li>
								<li>Social Media Management</li>
								<li>Email Marketing</li>
							</ul>

					</span></span>
					</a><div class="service-title">Content Creation</div></li>

					<li><a href="#"><img src="http://localhost/wordpress/wp-content/uploads/2015/03/corporate-comm-icon-300x300.png" alt="corporate comm icon" class="alignnone size-medium wp-image-66" />
					<span class="icon-desc"> 
							<span><ul>
								<li>Corporate Identity</li>
								<li>Crisis Communications</li>
								<li>Events</li>
								<li>Employee Communication</li>
								<li>Industry Relations</li>

								<li>Thought Leadership</li>
							</ul>

					</span></span>
				</a>
					<div class="service-title">Corporate Communications</div></li>

			</ul>

			<ul class="row-2">
				<li><a href="#"><img src="http://localhost/wordpress/wp-content/uploads/2015/03/sales-icons-300x300.png" alt="sales icons" class="alignnone size-medium wp-image-62" />
				<span class="icon-desc"> 
							<span><ul>
								<li>Trade Show Promotion</li>
								<li>Direct Mail</li>
								<li>Special Customer Programs</li>
								<li>Consumer and Trade Advertising</li>
							</ul>

					</span></span></a>

					<div class="service-title">Sales Support</div></li>

				
				<li><a href="#"><img src="http://localhost/wordpress/wp-content/uploads/2015/03/marketing-icon-300x300.png" alt="marketing icon" class="alignnone size-medium wp-image-63" />
				<span class="icon-desc"> 
							<span><ul>
								<li>Public Relations Planning</li>
								<li>Strategic Brand Messaging</li>
								<li>Positioning</li>
							
							</ul>

					</span></span></a><div class="service-title">Marketing Strategy</div></li>

				




			</ul>


			</div>	


			<div class= "services-mobile clearfix">

				<ul class="mobile-services-icons">
					<li><a id="mobile-mr" onclick="return false;" href="#"><img src="http://localhost/wordpress/wp-content/uploads/2015/03/media-icon-300x300.png" alt="media icon"  class="alignnone size-medium wp-image-65" />
						<span class="icon-desc" id="mr-mobile-desc"> 
							<span><ul>
								<li>Consumer and Trade Publicity</li>
								<li>Broadcast Placements</li>
								<li>Press Conferences/Briefings</li>
								<li>Webinars</li>
								<li>Press Kits/Press Release Writing</li>
								<li>Feature Stories</li>
							</ul></span>
						</span></a>
						


						<div class="service-title">Media Relations</div></li>

					<li><a id="mobile-cc" onclick="return false;" href="#"><img src="http://localhost/wordpress/wp-content/uploads/2015/04/content-creation-300x300.png" alt="content creation icon" class="alignnone size-medium wp-image-67" />
						<span class="icon-desc" id="cc-mobile-desc"> 
							<span><ul>
								<li>Case Studies</li>
								<li>Blog Writing and Management</li>
								<li>Web Design</li>
								<li>Infographic Design</li>
								<li>Newsletters</li>
								<li>Brochures, Product Catalogs, Point-of-Purchase</li>
								<li>Social Media Management</li>
								<li>Email Marketing</li>
							</ul>

					</span></span>
					</a><div class="service-title">Content Creation</div></li>

					<li><a href="#"  onclick="return false;" id="mobile-comm"><img src="http://localhost/wordpress/wp-content/uploads/2015/03/corporate-comm-icon-300x300.png" alt="corporate comm icon" class="alignnone size-medium wp-image-66" />
					<span class="icon-desc" id="comm-mobile-desc"> 
							<span><ul>
								<li>Corporate Identity</li>
								<li>Crisis Communications</li>
								<li>Events</li>
								<li>Thought Leadership</li>
								<li>Employee Communication</li>
								<li>Industry Relations</li>
							</ul>

					</span></span>
				</a>
					<div class="service-title">Corporate Communications</div></li>

			
				<li><a href="#" onclick="return false;" id="mobile-ss"><img src="http://localhost/wordpress/wp-content/uploads/2015/03/sales-icons-300x300.png" alt="sales icons" class="alignnone size-medium wp-image-62" />
				<span class="icon-desc" id="ss-mobile-desc"> 
							<span><ul>
								<li>Trade Show Promotion</li>
								<li>Direct Mail</li>
								<li>Special Customer Programs</li>
								<li>Consumer and Trade Advertising</li>

							</ul>

					</span></span></a><div class="service-title">Sales Support</div></li>

				
				<li><a href="#" onclick="return false;" id="mobile-ms"><img src="http://localhost/wordpress/wp-content/uploads/2015/03/marketing-icon-300x300.png" alt="marketing icon" class="alignnone size-medium wp-image-63" />
				<span class="icon-desc" id="ms-mobile-desc">  
							<span><ul>
								<li>Public Relations Planning</li>
								<li>Strategic Brand Messaging</li>
								<li>Positioning</li>
							
							</ul>

					</span></span></a>

					<div class="service-title">Marketing Strategy</div></li>

				




			</ul>


			</div>	

<!--CLIENTS SECTION-->


<h1 id="clients">Our Clients </h1>
<p><i>A sample of our past and current clients</i></p>

<div class= "clients-gallery clearfix">	

	
	<div class="client-row1 clearfix">
	
	<ul class="client-hover">
		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/mitsubishi-logo-1024x435.png" alt="Mitsubishi Electric"/>
		
			<span class="client-desc"> 
						<span class="inner">
							<ul>
								<li>Media Relations</li>
								<li>Content Creation</li>
								<li>Corporate Communications</li>
								<li>Sales Support</li>
								<li>Marketing Strategy</li>
								
							</ul>
						</span></span>
					</li>

		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/odl-logo-1024x300.png" alt="ODL"/>
				<span class="client-desc"> 
						<span class="inner">
							<ul>
								<li>Media Relations</li>
								<li>Content Creation</li>
								<li>Corporate Communications</li>
								<li>Sales Support</li>
								<li>Marketing Strategy</li>
								
							</ul>
						</span></span>
			</li>

		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/wholetrees-logo-1024x251.png" alt="WholeTrees"/>
			<span class="client-desc"> 
						<span class="inner">
							<ul>
								<li>Media Relations</li>
								<li>Marketing Strategy</li>
								
							</ul>
						</span></span>
		</li>

		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/broan-logo-1024x471.png" alt="Broan NuTone"/>
			<span class="client-desc"> 
						<span class="inner">
							<ul>
								<li>Media Relations</li>
								<li>Content Creation</li>
								<li>Corporate Communications</li>
								<li>Sales Support</li>
								<li>Marketing Strategy</li>
								
							</ul>
						</span></span></li>

	
				

	</ul>	

</div>

	

<div class="client-row2">

<ul class="client-hover">

		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/fluke-logo-1024x139.png" alt="Fluke"/>
		<span class="client-desc" style="bottom: 55px; margin-left: -150px;"> 
						<span class="inner">
							<ul>
								<li>Media Relations</li>
								<li>Content Creation</li>
								<li>Corporate Communications</li>
																
							</ul>
						</span></span></li>

		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/velux-logo-1024x341.png" alt="Velux"/>
		<span class="client-desc"> 
						<span class="inner">
							<ul>
								<li>Media Relations</li>
								<li>Content Creation</li>
							
																
							</ul>
						</span></span></li>

		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/marvin-logo1.png" alt="Marvin"/></li>


		<li><img class="client-icons" id="timberlake" src="http://localhost/wordpress/wp-content/uploads/2015/04/timberlake-logo-1024x181.png" alt="Timberlake"/>
		<span class="client-desc" style="bottom: 55px;"> 
						<span class="inner">
							<ul>
								<li>Media Relations</li>
								<li>Content Creation</li>
								<li>Corporate Communications</li>
								<li>Sales Support</li>
								<li>Marketing Strategy</li>
																
							</ul>
						</span></span></li>

	

		

	</ul>	

</div>	



<div class="client-row3">
	<ul class="client-hover">
	

		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/NAHB_logo1.png" alt="NAHB"/></li>

		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/JamesHardieLogo-e1375817454323.png" alt="James Hardie"/></li>

		
			<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/generac-logo-1024x227.png" alt="Generac"/></li>

			<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/Wolverine.png" alt="Wolverine"/></li>

		
	</ul>	

</div>

<div class="client-row4">
	<ul class="client-hover">
		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/nari-logo-1.png" alt="NARI"/></li>

		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/amprobe.jpg" alt="Amprobe"/></li>

		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/liquid-nails.png" alt="Liquid Nails"/></li>

		<li><img src="http://localhost/wordpress/wp-content/uploads/2015/04/windsor-one.png" alt="Windsor"/></li>
		

	
	</ul>	

</div>

</div>

</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript">
$("#mobile-mr").click(function(){
  $("#mr-mobile-desc").toggle();
});  </script>

<script type="text/javascript">
$("#mobile-cc").click(function(){
  $("#cc-mobile-desc").toggle();
});  </script>

<script type="text/javascript">
$("#mobile-comm").click(function(){
  $("#comm-mobile-desc").toggle();
});  </script>

<script type="text/javascript">
$("#mobile-ss").click(function(){
  $("#ss-mobile-desc").toggle();
});  </script>

<script type="text/javascript">
$("#mobile-ms").click(function(){
  $("#ms-mobile-desc").toggle();
});  </script>






<?php get_footer(); ?>
