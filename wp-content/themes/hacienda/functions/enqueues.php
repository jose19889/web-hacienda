<?php

function b4st_enqueues() {

	/* Styles */


	wp_register_style('b4st-css', get_template_directory_uri() . '/theme/css/bootstrap.css', false,'4.1.1', null);
	wp_enqueue_style('b4st-css');

	/* STYLE FOR MAIN NAV*/
	wp_register_style('main-nav', get_template_directory_uri() . '/theme/css/main-nav.css', false, null);
	wp_enqueue_style('main-nav');

    /* STYLE sina nav*/
	wp_register_style('sina-nav', get_template_directory_uri() . '/theme/css/sina-nav.css', false, null);
	wp_enqueue_style('sina-nav');

	wp_register_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', null);
	wp_enqueue_style('font-awesome-css');

  	wp_register_style('theme_style', get_template_directory_uri() . '/theme/css/theme_style.css', false, null);
	wp_enqueue_style('theme_style');

	wp_register_style('b4st-css', get_template_directory_uri() . '/theme/css/b4st.css', false, null);
	wp_enqueue_style('b4st-css');

		/*animate css for theme*/
		wp_register_style('animate', get_template_directory_uri() . '/theme/css/animate.css', false, null);
	wp_enqueue_style('animate');

	wp_register_style('custom-sidebar', get_template_directory_uri() . '/theme/css/custom-sidebar.css', false, null);
	wp_enqueue_style('custom-sidebar');
	

	/* Scripts  for theme*/

	wp_enqueue_script( 'jquery' );
	/* Note: this enqueue above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
	https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

  	
	
	wp_register_script('sina-nav', get_template_directory_uri() . '/theme/js/sina-nav', false, null, true);
	wp_enqueue_script('sina-nav');

  	wp_register_script('bootstrap', get_template_directory_uri() . '/theme/js/bootstrap.min.js', false, '4.1.1', true);
	wp_enqueue_script('bootstrap');
	// wow animatiuon
	wp_register_script('wow', get_template_directory_uri() . '/theme/js/wow.min.js', false, null, true);
	wp_enqueue_script('wow');

	wp_register_script('b4st-js', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
	wp_enqueue_script('b4st-js');

	/* jqery addon */
	wp_register_script('jquery', get_template_directory_uri() . '/theme/js/jquery.js', false, null, true);
	wp_enqueue_script('jquery');

    /*main js addon  top button, stycky nav and moore*/
	wp_register_script('main', get_template_directory_uri() . '/theme/js/main.js', false, null, true);
	wp_enqueue_script('main');

	//wp_register_script('smartmenus1', get_template_directory_uri() . '/theme/js/jquery.smartmenus.bootstrap-4.js', false, null, true);
	//wp_enqueue_script('smartmenus1');



	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);
