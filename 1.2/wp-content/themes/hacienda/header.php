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
    </head>
    <body class="homepage is-preload">

		<div id="page-wrapper"><!-- wrapper -->
				<!-- Header logo and contact-->
				<header id="header">
					<div class="container">
						<div class="row">
							<div class="col-md-4 navbar">
								<a href="<?php echo home_url(); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="">
								</a>
							</div>
							<div class="col-md-4">
								
							</div>
							
						</div>
						</div>
						
						
				</header>
				<!--MENU PRINCIPAL-->
				<section>
				<nav class="main-nav" >
					<div class="container">
					        <div class="">
					            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					            	<i class="fa fa-bars">MENU</i>
                					<span class="sr-only"></span>
                
            					</button>
					   
					        </div>

					<div id="navbar" class="navbar-collapse collapse">
		            <?php bootstrap_nav();

		            function bootstrap_nav()
		            {
		                wp_nav_menu( array(
		                        'theme_location'    => '',
		                        'depth'             => 4,
		                        'container'         => 'div',
		                        'container_class'   => 'collapse navbar-collapse',
		                        'container_id'      => 'bs-example-navbar-collapse-1',
		                        'menu_class'        => 'nav navbar-nav',
		                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                        
		                        'walker'            => new wp_bootstrap_navwalker())
		                );
		            }

		             ?>
		              <div class="form hidden-xs" style="padding: 0px;">
				   		 <?php get_template_part('searchform'); ?>
					</div>
        </div><!--/.nav-collapse -->
					    <!--get the search bar-->
					   
					</div><!--en div container-->
				</nav>
				</section>
				<!--menu principal-->
				
				<nav id="nav">
					<ul>
						<li class="current"><a href="#">SITEMAP</a></li>
						<li>
							<a href="#">Documentacion</a>
						</li>
						<li><a href="#">RECURSOS</a></li>
						<li><a href="#">Red Ministerial</a></li>
						<li></li>
					</ul>
				</nav>


