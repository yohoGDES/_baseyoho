<?php 
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="home-wrap">
	
	
	
<?php endwhile;	?>	
<?php else : ?>
	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php 
	endif;
	wp_reset_postdata();
?>
	
 	</div> <!-- END Home Wrap -->

<?php get_footer(); ?>
