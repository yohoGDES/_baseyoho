<?php get_header(); ?>
	<section class="row">	
		<h1>Search Results</h1>
		
		<section class="twelve columns" id="search-results">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h3>
			<?php the_excerpt();?>
		<?php endwhile; ?>
	
		<?php else : ?>
	
			<p>No posts found. Try a different search?</p>
			<?php get_search_form(); ?>
	
		<?php endif; ?>
		</section>
		<aside class="four columns">
			<?php get_sidebar(); ?>
		</aside>
	</section>
<?php get_footer(); ?>
