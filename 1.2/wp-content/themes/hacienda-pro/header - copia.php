<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

            <?php wp_head(); ?>
     <!--script for popovers-->
     <!--scroll fix menu-->       
    <script>
    /* ========================================== 
    scrollTop() >= 300
    Should be equal the the height of the header
    ========================================== */

$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('nav').addClass('fixed-header');
        $('nav div').addClass('visible-title');
    }
    else {
        $('nav').removeClass('fixed-header');
        $('nav div').removeClass('visible-title');
    }
});

</script>

    </head>
    <body <?php body_class(); ?>>

		
		<div id="page-wrapper"><!-- wrapper -->
				<!-- Header logo and contact-->
				<header id="header">
					<div class="container">
						<div class="row">
							<div class="col-md-4 ">
								<a href="<?php echo home_url(); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="navbar">
								</a>
							</div>
							<div class="col-md-4">
								
							</div>
							<div class="col-md-4 ">
								<div class="card" style="padding: 2rem;">
									<p><i class="fa fa-map-marker"></i><span> Malabo II, Frente al Ministerio del Interior</span></p>
									<p><i class="fa fa-phone"></i><span> +240 222 000 0000</span></p>
									
								</div>
							</div>
						</div>
						</div>
						<!--menu principal-->
						
				</header>

				<section class="navbar" style="background: #f0f0f0 !important;">
					<div class="container">
						<div class="row">
							<div class="container">
					        <div class="navbar-header">
					            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					            	<i class="fa fa-bars"></i>
                					<span class="sr-only"></span>
                
            					</button>

					            
					        </div>

					        <?php
					            wp_nav_menu( array(
					        'theme_location'    => 'primary',
							'depth'             => 5,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker())
					            );
					        ?>
					    <!--get the search bar-->
					    <div class="form2 hidden-xs" style="padding: 0px;">
					   		 <?php get_template_part('searchform'); ?>
						</div>
						</div>
					</div>
				</section>
				<!--menu principal-->
				
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.html">SITEMAP</a></li>
						<li>
							<a href="#">Documentacion</a>
							<ul>
								<li><a href="#">Lorem ipsum dolor</a></li>
								<li><a href="#">Magna phasellus</a></li>
								<li>
									<a href="#">Phasellus consequat</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Phasellus consequat</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
									</ul>
								</li>
								<li><a href="#">Veroeros feugiat</a></li>
							</ul>
						</li>
						<li><a href="left-sidebar.html">RECURSOS</a></li>
						<li><a href="right-sidebar.html">Right Sidebar</a></li>
						<li></li>
					</ul>
				</nav>


	
					<!-- nav -->
					
					<!-- /nav -->
			
			<!-- /header -->
