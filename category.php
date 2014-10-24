<?php get_header(); ?>
	<div class="content-wrap">
		
			<?php
			if ( have_posts() ) :
			$cur_cat_id = get_cat_id( single_cat_title("",false) );
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' 	 => 'post',
			    	'post_status' 	 => 'publish',
			    	'posts_per_page' => 10,
			    	'order' 		 => 'DESC',
			    	'paged' 		 => $paged, 
			    	'orderby' 		 => 'DATE',
			    	'cat' 		 => $cur_cat_id
				);
				
				query_posts($args); ?>
		<div class="blog-wrap">
			<div class="col_1">	
			<h1><?php single_cat_title( $prefix = '', $display = true ); ?></h1>
				<ul class="posts">
				<? while ( have_posts() ) : the_post(); ?>
					<li>
						<div class="date">
							<div class="event-date"><?php $dateday = date('d', strtotime(get_the_date()));echo $dateday;?> <span class="month"><?php $datemo = date('M', strtotime(get_the_date()));echo $datemo;?></span>
							</div>
						</div>
						<div class="featured-image">
							<a href="<?php the_permalink();?>" rel="bookmark">
								<?php echo get_the_post_thumbnail( $post_id, 'news-featured', $attr ); ?>
							</a>
						</div>
						<h2><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<div class="post-meta">
							<span class="posted"><?php posted_in('5'); ?></span> 
						</div>
						<div class="excerpt"> <?php the_excerpt(); ?></div>
						<a href="<?php the_permalink();?>" rel="bookmark" class="continue <?php 
						$categories = get_the_category($post->ID);
				      	foreach ($categories as $cat) {
				      		echo ' ' . $cat->slug;
				      		}    	?>">Read More</a>
					</li>
				<?php endwhile;	?>		
				</ul>
		
				<?php 
					if(function_exists('wp_paginate')) {
						wp_paginate();
					} else {
						echo "wp-paginate non-existent";
					}
				?>
				<?php else : ?>
				<h2 class="center">Not Found</h2>
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php 
					endif;
					wp_reset_postdata();
				?>
			</div>
			<div class="col_2 sidebar">
			
			</div> <!-- COL 2 -->
		</div>
	</div>


<?php get_footer(); ?>
