<?php get_header(); ?>
	<section class="row">	
		<section class="sixteen columns" id="front-page-content">
			<?php query_posts('pagename=home'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content();?>
			<?php endwhile; ?>
		</section>
	</section>

</section><!-- ENDING SECTION FOR RIGHT COL --> 

<?php get_footer(); ?>
