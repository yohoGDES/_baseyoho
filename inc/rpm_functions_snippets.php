<?php 
/*

// Add Excerpt Field for Page
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}


// Shortcode Example
function <<name>>_code( $atts ) {
    
    $attributes = shortcode_atts(array('num' => '1', 'user_id' => 'kevin'), $atts );
    $number = $attributes['num'];
    $user = $attributes['user_id'];

    $output = $number . ' ' . $user;
    
    return $output;
}
add_shortcode( 'recent_donation', '<<name>>_code' );


// This shows how to add counts of custom post types to the dashboard
function my_right_now() {
    $num_projects = wp_count_posts( 'projects' );

    $num = number_format_i18n( $num_projects->publish );
    $text = _n( 'Project', 'Projects', $num_projects->publish );
    if ( current_user_can( 'edit_pages' ) ) { 
        $num = "<a href='edit.php?post_type=projects'>$num</a>";
        $text = "<a href='edit.php?post_type=projects'>$text</a>";
    }   

    echo '<tr>';
    echo '<td class="first b b_pages">' . $num . '</td>';
    echo '<td class="t pages">' . $text . '</td>';
    echo '</tr>';
}
add_action( 'right_now_content_table_end', 'my_right_now' );

*/

// Add Custom Post Thumbnails & Taxonomies
/*

register_post_type('who_we_are', array(
    'labels' => array( 
        'name'          => 'Who We Are',
        'singular_name' => 'Who We Are Slide',
        'menu_name'     => 'Who We Are',
        'all_items'     => 'Who We Are',
        'add_new'       => 'Who We Are Slides',
        'add_new_item'  => 'Add New Slide',
        'edit_item'     => 'Edit Slide',
        'new_item'      => 'New Slide',
        'view_item'     => 'View Slide',
        'search_items'  => 'Search Slides',
        'not_found'     => 'No slides found', 
        'not_found_in_trash' => 'No slides found in the trash',
    ),
    'description'           => 'These content items populate the "Who We Are" section of the homepage',
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 4,
    'capability_type'       => 'page',
    'hierarchical'          => false,
    'rewrite'               => true,
    'query_var'             => 'who_we_are',
    'supports'              => array('title', 'editor',), //title, editor, author, thumbnail, excerpt, trackbacks, custom-fields, comments, revisions, page-attributes, post-formats
    'taxonomies'            => array('post_tag', 'category')
));


add_action( 'init', 'build_taxonomies', 0 );
function build_taxonomies() {
    register_taxonomy( 'taxo', 'custom', array( 'hierarchical' => true, 'label' => 'Custom Taxonomy', 'query_var' => true, 'rewrite' => true ) ); 
}

// Add Default Category/Tag boxes to a custom post type:

add_action('init', 'add_default_boxes');
 
function add_default_boxes() {
    register_taxonomy_for_object_type('category', '<<cpt-slug>>');
    register_taxonomy_for_object_type('post_tag', '<<cpt-slug>>');
}


// Enqueue scripts you may need in the admin area
function my_admin_init() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-datepicker', get_template_directory_uri() . '/javascripts/jquery-ui-1.9.2.custom-min.js', array('jquery', 'jquery-ui-core') );
    wp_enqueue_style('jquery.ui.theme', get_template_directory_uri() . '/stylesheets/jquery-ui-1.9.2.custom.min.css');
    wp_enqueue_style('admin-css', get_template_directory_uri() . '/stylesheets/admin.css');
}
add_action('admin_init', 'my_admin_init');

// Add content to the wp_footer on the admin side
function my_admin_footer() {
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.datepicker').datepicker({
            dateFormat : 'mm-dd-yy'
        });
    });
    </script>
    <?php
}
add_action('admin_footer', 'my_admin_footer');


// *******************************************************************************************************
// *******************************************************************************************************  
//
// Add Custom Meta Boxes
// 
// add_action('add_meta_boxes', 'add_meta_<<type>>_function')
//
// 
// *******************************************************************************************************
// *******************************************************************************************************

add_action( 'add_meta_boxes', add_meta_<<type>>_function' );

function add_meta_<<type>>_function()
{
    add_meta_box ('id','title', 'meta_<<type>>_callback_function', 'post_type', 'display_location', 'priority/order', 'callback_arguments' );
}

function meta_<<type>>_callback_function( $post )
{
    // Get values for filling in the inputs if we have them.
    $metaType = get_post_meta( $post->ID, '_meta_<<type>>', true );
    
    // Nonce to verify intention later
    wp_nonce_field( 'save_quote_meta', 'custom_nonce' );
    ?>
    
    // Build User Input View Here
    <div id="metaType">
        <label for="metaType">Label</label>
        <input type="text" id="_meta_<<type>>" name="_meta_<<type>>" value="<?php echo $metaType;?>" />
    </div>   
<?php

}

add_action( 'save_post', 'meta_<<type>>_save' );
function meta_<<type>>_save( $id ) {
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    
    if( !isset( $_POST['event_nonce'] ) || !wp_verify_nonce( $_POST['event_nonce'], 'save_event_meta' ) ) return;
    
    if( !current_user_can( 'edit_post' ) ) return;
    
    $allowed = array(
        'p' => array()
    );
    
    if( isset( $_POST['_meta_<<type>>'] ) )
        update_post_meta( $id, '_meta_<<type>>', wp_kses( $_POST['_meta_<<type>>']) );   
}

*/
?>