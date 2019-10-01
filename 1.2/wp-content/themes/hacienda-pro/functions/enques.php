
<?php

// Load hacienda scripts
function hacienda_scripts() {
    // default theme
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ), '' );
        // script for html5 theme
     wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array( 'jquery' ), '' );  
      wp_enqueue_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array( 'jquery' ), '' ); 
        wp_enqueue_script('browser', get_template_directory_uri() . '/assets/js/browser.min.js', array( 'jquery' ), '' );

         wp_enqueue_script('jquery.dropotron', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js', array( 'jquery' ), '' );

         wp_enqueue_script('jquery.scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array( 'jquery' ), '' );
   wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '' );
 wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js', array( 'jquery' ), '' );
  wp_enqueue_script('modernizr.custom', get_template_directory_uri() . '/assets/js/modernizr.custom.29473.js', array( 'jquery' ), '' );



}
add_action('wp_enqueue_scripts', 'hacienda_scripts'); // Add Theme Stylesheet


// Load hacienda styles
function hacienda_styles() {

    wp_enqueue_style('hacienda_styles', get_stylesheet_uri() );

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css',array(), '' );     

    // font-awesome CSS
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css',array(), '' ); 

    wp_enqueue_style('custom.css', get_template_directory_uri() . '/assets/css/custom.css',array(), '' );
  
    wp_enqueue_style('menu', get_template_directory_uri() . '/assets/css/main.css',array(), '' );  

    //wp_enqueue_style('style', get_template_directory_uri() . '/style.css',array(), '' );                
                                
}
add_action('wp_enqueue_scripts', 'hacienda_styles'); // Add Theme Stylesheet