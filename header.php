<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php echo(is_search()) ? '<meta name="robots" content="noindex, nofollow" />' : ''; ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
<meta name="description" content="<?php bloginfo('description');?>">
<meta name="google-site-verification" content="">
<meta name="author" content="Scarbrough Studios">
<meta name="Copyright" content="<?php echo ' Copyright' . bloginfo('name') . '. All Rights Reserved.';?>">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=10.0,initial-scale=1.0" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!--[if lt IE 9]>
	    <script type="text/javascript" 
	        src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
	    </script>
	<![endif]-->

<link rel="stylesheet" id="main-styles" href="<?php bloginfo('template_directory'); ?>/stylesheets/screen.css" type="text/css" media="all" />
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="header">
	<a class="logo" href="<?php bloginfo('url') ?>"></a>
	
	<nav role="navigation" class="nav">
		<?php wp_nav_menu('theme_location=primary'); ?>
	</nav>
	
	<!-- <div class="socials">
		<ul class="social-nav">
			<li><a class="fb" href="http://www.facebook.com/xxx" target="_blank"></a></li>
			<li><a class="tw" href="http://www.twitter.com/xxx" target="_blank"></a></li>
			<li><a class="ig" href="http://www.instagram.com/xxx" target="_blank"></a></li>
			<li><a class="yt" href="http://www.youtube.com/xxx" target="_blank"></a></li>
			<li><a class="in" href="http://www.linkedin.com/company/xxx" target="_blank"></a></li>
		</ul>
	</div> -->
	
</div><!-- END Header -->

<div class="global-wrap"> <!-- Ends in footer -->
	
