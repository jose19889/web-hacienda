<?php

function b4st_setup() {
	add_editor_style('theme/css/editor-style.css');
	add_theme_support('post-thumbnails');
	update_option('thumbnail_size_w', 170);
	update_option('medium_size_w', 470);
	update_option('large_size_w', 800);
}
add_action('init', 'b4st_setup');

if (! isset($content_width))
	$content_width = 800;

function The_excerpt_readmoore() {
	return '&nbsp; <a href="'. get_permalink() . '">' . '&hellip;<br><br> '  . ' <class="box_btn" style=" background: #284852!important;
    padding: 10px; color:#fff;">' . __('Read more >>', 'b4st'). '</a></p>';
}
add_filter('excerpt_more', 'The_excerpt_readmoore');

// Add post formats support. See http://codex.wordpress.org/Post_Formats
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));



// Custom Excerpts
function onn_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}


// Create the Custom Excerpts callback
function onn_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}
