<?php get_header(); ?>
	<div class="content-wrap">
		
	<?php
	if ( have_posts() ) :
?>
		<div class="blog-wrap">
			<div class="col_1">	
			<h1>Archives </h1>
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
				<?php endwhile; endif;	?>		
				</ul>
		
			</div>
			<div class="col_2 sidebar">
			
			</div> <!-- COL 2 -->
		</div> <!--- Blog Wrap -->
	</div> <!-- Content Wrap -->


<?php get_footer(); ?>


