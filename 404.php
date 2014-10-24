<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Red Thinking
 */

get_header(); ?>

<div class="error-wrap">

	<div class="error-content">
		<h2 class="not-found">Well, look at that</h2>
		<p class="error-text">You've meandered right into the belly of our evil twin site: <span class="blue">Blue Thinking</span>. Everything is boring and bland here, so we suggest you turn around and go back to where you belong.</p>
		
		<ul class="nav-back">
			<li class="button"><a href="<?php bloginfo('url'); ?>/">Go Back Home</a></li>
			<li class="button"><a href="<?php bloginfo('url'); ?>/blog">Read Our Blog</a></li>
			<li class="button"><a href="<?php bloginfo('url'); ?>/about-us">Meet Our Staff</a></li>
			<li class="button"><a href="<?php bloginfo('url'); ?>/get-started">Contact Us</a></li>
		</ul>
	</div>
	
</div>

<div class="push"></div>

<?php get_footer(); ?>