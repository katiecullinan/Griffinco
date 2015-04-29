<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package AccessPress Ray
 */
?>
<?php 
global $post, $accesspress_ray_options;
$accesspress_ray_settings = get_option( 'accesspress_ray_options', $accesspress_ray_options );
?>
	</div><!-- #content -->

	<footer id="colophon">
	<?php 
		if ( is_active_sidebar( 'footer-1' ) ||  is_active_sidebar( 'footer-2' )  || is_active_sidebar( 'footer-3' )  || is_active_sidebar( 'footer-4' ) ) : ?>
		<div id="top-footer">
		<div class="ak-container">
			<div class="footer1 footer">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<?php dynamic_sidebar( 'footer-1' ); ?>
				<?php endif; ?>	
			</div>

			<div class="footer2 footer">
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<?php dynamic_sidebar( 'footer-2' ); ?>
				<?php endif; ?>	
			</div>

			<div class="clearfix hide"></div>

			<div class="footer3 footer">
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<?php dynamic_sidebar( 'footer-3' ); ?>
				<?php endif; ?>	
			</div>

			<div class="footer4 footer">
				<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
					<?php dynamic_sidebar( 'footer-4' ); ?>
				<?php endif; ?>	
			</div>
		</div>
		</div>
		<?php endif; ?>

		<div id="middle-footer" class="footer-menu">
			<div class="ak-container">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); 	?>
			</div>
		</div>


		<div id="bottom-footer">
		<div class="ak-container">
			
            <div class="footer-wrap clearfix">
			
            <div class="footer-contact">
            <div class="address clearfix">
        	<strong>Griffin &amp; Company, Inc. </strong><br/>
            3050 K Street NW <br/>
            Suite 210<br/>
            Washington, DC 20007
				</div>
                
          <div class="contact-numbers clearfix">
        	<strong>Contact us at:</strong><br/>
            	202.625.2515 <br/>
                888.420.0256<br/>
                info@griffinco.com
				</div>
                
            <div class="google-map clearfix">	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3104.952982121523!2d-77.06048349999999!3d38.902190499999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b64c46c3fb73%3A0x7aed7e917d7c28c3!2s3050+K+St+NW%2C+Washington%2C+DC+20007!5e0!3m2!1sen!2sus!4v1426259124346" width="400" height="200" frameborder="0" style="border:0"></iframe>
            </div>
            </div>
                
               <div class="copyright">
					<?php _e('Copyright', 'accesspress_ray'); ?> &copy; <?php echo date('Y') ?> 
					<a href="<?php echo home_url(); ?>">
					<?php if(!empty($accesspress_ray_settings['footer_copyright'])){
						echo $accesspress_ray_settings['footer_copyright']; 
						}else{
							echo bloginfo('name');
						} ?>
					</a> 
				</div><!-- .copyright -->
                
				<?php if($accesspress_ray_settings['show_social_footer'] == 0){?>
			<div class="footer-socials clearfix">
	            <?php
					do_action( 'accesspress_ray_social_links' ); 
				?>
			</div>
			<?php } ?>
            </div><!-- .footer-wrap -->

		
		</div>
		</div>
        
	</footer><!-- #colophon -->
</div><!-- #page -->

<!--<div class="multi-border">
	<ul>
		<li class="dark-green"></li>
		<li class="yellow"></li>
		<li class="cream"></li>
		<li class="orange"></li>
		<li class="light-green"></li>				
	</ul>
</div>
-->
<?php wp_footer(); ?>

</body>
 
</html>
