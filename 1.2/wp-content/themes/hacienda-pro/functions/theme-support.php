<?php
/*------------------------------------*\
    Main Function for minhacienda
\*------------------------------------*/


// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}
// ad filter for nav argumnets
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation


// admin bar options
function remove_admin_bar()
{
    return false;
}

add_filter('show_admin_bar', 'remove_admin_bar'); 
// Remove Admin bar

/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/
add_theme_support( 'post-thumbnails' ); 
// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_mincultura()
{
    register_taxonomy_for_object_type('category', 'mincultura'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'mincultura');
    register_post_type('mincultura', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('mincultura Custom Post', 'mincultura'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'mincultura'),
            'add_new' => __('Add New', 'steelproyects'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'steelproyects'),
            'edit' => __('Edit', 'steelproyects'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'steelproyects'),
            'new_item' => __('New HTML5 Blank Custom Post', 'steelproyects'),
            'view' => __('View HTML5 Blank Custom Post', 'steelproyects'),
            'view_item' => __('View HTML5 Blank Custom Post', 'steelproyects'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'steelproyects'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'steelproyects'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'steelproyects')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

// Modify the excerpt length to fit better in the slideshow
add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {
    return 20; 
}


// Custom Excerptsfunction get_excerpt( $count ) {
function excerpt( $limit ) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
return $excerpt;
}
function content($limit) {
$content = explode(' ', get_the_content(), $limit);
if (count($content)>=$limit) {
array_pop($content);
$content = implode(" ",$content).'...';
} else {
$content = implode(" ",$content);
}
$content = preg_replace('/[.+]/','', $content);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
return $content;
}

// the excerpt and read moore functions
function tn_excerpt_more( $more ) {
return sprintf( '<br><br><a class="read-more" href="%1$s">%2$s</a>',
get_permalink( get_the_ID() ),
__( 'Leer mas..', 'textdomain' )
);
}
add_filter( 'excerpt_more', 'tn_excerpt_more' );


?>
