<?php
/**
 * Default Template
 *
 * @package WordPress
 * @subpackage Red Thinking
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'header', false, '' );
?>

<div class="page-wrap row">
	<div class="page-content">
		
		<?php if ( has_post_thumbnail() ) { ?>
		<div class="page-header-bg twelve columns" data-type="background" style="background-image: url('<?php echo $src[0]; ?>')"></div>
		<?php } ?>
			
		
		<div class="twelve columns">
			<h1 class="title"><?php the_title();?></h1>
			<?php the_content();?>
		</div>
	</div> <!-- end page-content -->
</div> <!-- end page-wrap -->

<?php endwhile;	else : endif; wp_reset_postdata(); ?>

<div class="push"></div>

<?php get_footer(); ?>
