<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<script src="js/jquery.bxslider.js"></script>

<link href="css/jquery.bxslider.css" rel="stylesheet" />

</head>


<?php /* Template Name: BlogPage */ ?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package AccessPress Ray
 */


get_header(); 
global $post;
if(is_front_page()){
	$post_id = get_option('page_on_front');
}else{
	$post_id = $post->ID;
}
$post_class = get_post_meta( $post_id, 'accesspress_ray_sidebar_layout', true );
?>

	<div class="blog-header">
<section id="slider-banner2">	
	
	<div class="slider-wrap">
<script type="text/javascript">
            jQuery(function(){
				jQuery('.bx-slider').bxSlider({
					adaptiveHeight:true,
					pager:true,
					controls:true,
					mode:'horizontal',
					auto :true,
					pause: '4000',
					speed:'500'
									});
			});
        </script>
        
			<div class="bx-slider">
				<div class="slides">
				<img src="http://localhost/wordpress/wp-content/uploads/2015/04/blog-banner11.jpg">
				</div>
				
				<div class="slides">
				<img src="http://localhost/wordpress/wp-content/uploads/2015/04/blog-banner3.jpg">
				</div>

				<div class="slides">
				<img src="http://localhost/wordpress/wp-content/uploads/2015/04/blog-banner2.jpg">
				</div>
			</div>
            		</div>
</section><!-- #slider-banner -->



</div>


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
</div>
</div>
<?php get_footer(); ?>


<script>
$(document).ready(function(){
  $('.bxslider').bxSlider();
});

</script>