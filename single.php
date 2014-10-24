<?php
/* Template Name: Single Post */
?>
<?php get_header(); ?>
	<div class="content-wrap">
		<div class="blog-wrap">
			<div class="col_1">	
			<? while ( have_posts() ) : the_post(); ?>

				<div class="date">
					<?php 
						// Day
						$dateday = date('d', strtotime(get_the_date()));echo $dateday; 
						// Month
						$datemo = date('M', strtotime(get_the_date()));echo $datemo;
					?>
				</div>
				<div class="featured-image">
					<a href="<?php the_permalink();?>" rel="bookmark">
						<?php echo get_the_post_thumbnail( $post_id, '', $attr ); ?>
					</a>
				</div>
				<h2><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="post-meta">
					<span class="posted"><?php posted_in('5'); ?></span> 
				</div>
					<?php the_content(); ?>

				<?php endwhile;	?>		

				<?php comments_template(); ?>
			</div>

			<div class="col_2 sidebar">
			</div> <!-- COL 2 -->
		</div> <!-- blog wrap -->		
	</div> <!-- content wrap -->


	
<?php get_footer(); ?>
