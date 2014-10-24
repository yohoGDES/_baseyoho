<?php

// ---------------------------------------- CUSTOM FUNCTIONS ----------------------------------------  //

// CUSTOM MENUS
add_theme_support( 'menus' );
// register_nav_menu('main', 'Main Navigation');

// Nav Locations	
register_nav_menus(array(
	'primary'	=>	'Primary Navigation',
	'footer'	=>	'Footer Navigation'
));

// SIDEBARS
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Sidebar Default',
		'before_widget' => '<section class="categories archives">',
		'after_widget' => '</section>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

// THUMBNAILS
add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 217, 217, true );


// if ( function_exists( 'add_image_size' ) ) { 
// 	add_image_size( 'header', 1150, 480, false );
// }

function image_setup() {
  // Set default values for the upload media box
  update_option('image_default_align', 'none' ); // None, Left, right, center
  update_option('image_default_link_type', 'none' ); // none, file, post
  update_option('image_default_size', 'large' ); // large, medium, small, thumbnail
}

add_action('after_setup_theme', 'image_setup');


// CUSTOM POST TYPES
/*
add_action( 'init', 'create_services' );
function create_services() {		
	$labels = array(  
		'name' => _x('Services', 'post type general name'),  
		'singular_name' => _x('Program', 'post type singular name'),  
		'add_new' => _x('Add New Program', 'Program'),  
		'add_new_item' => __('Add New Program'),  
		'edit_item' => __('Edit Program'),  
		'new_item' => __('New Program'),  
		'all_items' => __('All Services'),  
		'view_item' => __('View Program'),  
		'search_items' => __('Search Services'),  
		'not_found' => __('No Program found'),  
		'not_found_in_trash' => __('No Program found in Trash'),  
		'parent_item_colon' => '',  
		'menu_name' => 'Services'  
	);
		
	$args = array(  
        'labels' => $labels,  
        'public' => true,  
        'publicly_queryable' => true,  
        'show_ui' => true,  
        'show_in_menu' => true,  
        'query_var' => true,  
        'rewrite' => array( 'slug' => '' ),
        'capability_type' => 'post',  
        'has_archive' => true,  
        'hierarchical' => true,  
        'menu_position' => null,  
        'supports' => array('title', 'editor', 'page-attributes', 'thumbnail', 'excerpt')  
    );

	register_post_type( 'Services', $args);
}
*/

// CUSTOM TAXONOMIES
/*
add_action( 'init', 'create_location_taxonomies', 0 );
add_action( 'init', 'create_volunteer_taxonomies', 0 );

function create_location_taxonomies() {
	$labels = array(
		'name'              => _x( 'Locations', 'taxonomy general name' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Locations' ),
		'all_items'         => __( 'All Locations' ),
		'parent_item'       => __( 'Parent Location' ),
		'parent_item_colon' => __( 'Parent Locations:' ),
		'edit_item'         => __( 'Edit Location' ),
		'update_item'       => __( 'Update Location' ),
		'add_new_item'      => __( 'Add Location' ),
		'new_item_name'     => __( 'New Location Name' ),
		'menu_name'         => __( 'Locations' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'locations' ),
	);

	register_taxonomy( 'locations', array( 'services' ), $args );
}
*/


// HTML IN EXCERPT
// $filters = array( 'pre_term_description' );
 
// foreach ( $filters as $filter ) {
//     remove_filter( $filter, 'wp_filter_kses' );
// }
 
// foreach ( array( 'term_description' ) as $filter ) {
//     remove_filter( $filter, 'wp_kses_data' );
// }


// CUSTOM EXCERPT LENGTH
// function wpe_excerptlength_index($length) {
// 	return 160;
// }

// function wpe_excerptmore($more) {
// 	return '...<a href="'. get_permalink().'">Read More ></a>';
// }

// function wpe_excerpt($length_callback='', $more_callback='') {
// 	global $post;
// 	if(function_exists($length_callback)){
// 		add_filter('excerpt_length', $length_callback);
// 	}
// 	if(function_exists($more_callback)){
// 		add_filter('excerpt_more', $more_callback);
// 	}
// 	$output = get_the_excerpt();
// 	$output = apply_filters('wptexturize', $output);
// 	$output = apply_filters('convert_chars', $output);
// 	$output = '<p>'.$output.'</p>';
// 	echo $output;
// }


// SCRIPTS
$version = '0.1';

function my_scripts_method() {
$version = '0.1';
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', '', '', true);
	wp_register_script( 'jqueryui', '//code.jquery.com/ui/1.10.2/jquery-ui.js', '', '', true);
	wp_register_script( 'scripts', get_template_directory_uri() . '/js/scripts-ck.js', 'jquery', $version, true);
	wp_register_script( 'infieldlabels', get_template_directory_uri() . '/js/jquery.infieldlabel.min.js', 'infieldlabels', $version, true);
	
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jqueryui' );
	wp_enqueue_script( 'scripts' );
	wp_enqueue_script( 'infieldlabels' );
	
	
	// if (is_page( 'process' )) {
	// 	wp_register_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', 'wow', '', true);
	// 	wp_enqueue_script( 'wow' );
	// }
	
}

// STYLES
function my_styles_method() {
	wp_register_style( 'screen', get_template_directory_uri() . '/stylesheets/screen.css', '' , $version, 'screen');
	wp_enqueue_style( 'screen' );
}

// GOOGLE ANALYTICS
function google_analytics() { ?>
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
<?php }


// TYPEKIT
function typekit() { 
	$typekit_code = 'xxx';?>
	
	<script type="text/javascript" src="//use.typekit.net/<?=$typekit_code?>.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php }

// ADD IT ALL
add_action('wp_footer', 'google_analytics');
add_action('wp_footer', 'typekit');
add_action('wp_enqueue_scripts', 'my_scripts_method');
add_action('wp_print_styles', 'my_styles_method');


// EXCLUDE CATEGORIES FROM SEARCH
// function posted_in($excl=''){
// 	$categories = get_the_category($post->ID);
// 	if(!empty($categories)){
// 		$exclude=$excl;
// 		$exclude = explode(",", $exclude);
// 		foreach ($categories as $cat) {
// 			$html = '';
			
// 			if(!in_array($cat->cat_ID, $exclude)) {
// 				$html .= 'Posted in <a href="' . get_category_link($cat->cat_ID) . '" ';
// 				$html .= 'class="' . $cat->slug . '" ';
// 				$html .= 'title="' . $cat->cat_name . '" >' . $cat->cat_name . ' ' . '</a>';
// 				echo $html;
// 			}
// 		}
// 	}
// }


// CATEGORY CLASS TO SINGLE PAGE
add_filter('body_class','add_category_to_single');
function add_category_to_single($classes, $class) {
	if (is_single() ) {
		global $post;
		foreach((get_the_category($post->ID)) as $category) {
			// add category slug to the $classes array
			$classes[] = $category->category_nicename;
		}
	}
	// return the $classes array
	return $classes;
}


// GRAVITY FORMS
add_filter("gform_confirmation_anchor", create_function("","return true;"));

add_filter("gform_validation_message_1, gform_validation_message_2", "change_message", 10, 2);
function change_message($message, $form){
	return "<div class='validation_error'>Oops, make sure you fill out the fields correctly!</div>";
}


// SLUG CLASS
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );



/********************************************************************************************************
*********************************************************************************************************  
** If you wish to exert more control over your thumbnails, use rpm_add_image_size.
** 
** This is included in inc/rpm_image_resize.php and it works like the default WP add_image_size
** with one important caveat. The "crop" variable at the end will accept an array of where
** you would like to lock the image. For example: 
**  
**	rpm_add_image_size( 'kevin-test', 150, 9999, array('center', 'top') );
** 
*********************************************************************************************************
********************************************************************************************************/

require_once('inc/rpm_image_resize.php');
rpm_add_image_size( 'news-featured', 729, 9999, array('center', 'top') );


// CLEAN HEADER
remove_action('wp_head', 'rsd_link'); // kill the RSD link
remove_action('wp_head', 'wlwmanifest_link'); // kill the WLW link
remove_action('wp_head', 'index_rel_link'); // kill the index link 
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // kill the prev link 
remove_action('wp_head', 'start_post_rel_link', 10, 0); // kill the start link 
remove_action('wp_head', 'feed_links', 2); // kill post and comment feeds 
remove_action('wp_head', 'feed_links_extra', 3); // kill category, author, and other extra feeds 
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // kill adjacent post links 
remove_action('wp_head', 'wp_generator'); // kill the wordpress version number // Add Custom Post Thumbnails & Taxonomies

function remove_menus () {
global $menu;
		$restricted = array(__('Links'), );
		end ($menu);
		while (prev($menu)){
			$value = explode(' ',$menu[key($menu)][0]);
			if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
		}
}
add_action('admin_menu', 'remove_menus');

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
  global $wp_meta_boxes;
	
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

  wp_add_dashboard_widget('custom_help_widget', 'Help and Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {
  echo '<p style="height:225px;">Welcome, XXXXX! This is your Wordpress admin area for managing content on XXXclientXXX.com. Are you in need of help? <br>
	<a href="http://teamcolab.com"><img style="float:left;margin-right:20px;" src="http://sagent.yohodesign.com/wp-content/themes/sagent/images/contact-rt.png"></a><br>
	<a href="mailto:info@teamcolab.com">info@teamcolab.com</a><br>
	1-804-433-3582<br>
	Twitter: @yohodesign</p>';
}

?>