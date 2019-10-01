<!DOCTYPE html>
<html class="no-js">
<head>
  <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--------------------------------------------
    top header
--------------------------------------------->

 
    <!--most top info -->
  <div class=" address" style="height: 40px; background: #0F6256 !important">
    <div class="container">
    
  </div>
  </div>
<!--------------------------------------------
    logo and search area
--------------------------------------------->
 <header data-toggle="sticky-onscroll">
  <div class="logo-search py-3 bg-white" >
    <div class="container">
        <div class="row">
          <div class="col-xs-12 col-lg-4">
             <a class="sina-brand" href="#">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="desktop">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo-mobile" class="navbar-brand mobile">
             </a>
          </div>

        <div class="col-xs-12 col-lg-4 offset-4">
         <form class="form-inline mt-2 mt-md-0 pt-5" >
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
</div>
  </div>
</div>

<!--------------------------------------------
  main navbar for website
--------------------------------------------->
  <nav class="sina-nav mobile-sidebar  "  >
    <div class="container">
      <div class="sina-nav-header social-on">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
       
       
      </div><!-- .sina-nav-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <!--<ul class="sina-menu" data-in="fadeInLeft" data-out="fadeInOut">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#about">Contact</a></li>
          <li class="sina-nav-cta-btn"><a href="#">Free trail</a></li>
        </ul>-->

          <?php
        wp_nav_menu( array(
          'theme_location'    => 'navbar',
          'container'       => false,
          'menu_class'          => 'sina-menu ',
          'fallback_cb'         => '__return_false',
          'items_wrap'          => '<ul id="%1$s" class="sina-menu mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
          'depth'               => 5,
            'walker'            => new b4st_walker_nav_menu()
        ) );
      ?>
         
      </div><!-- /.navbar-collapse -->
    </div><!-- .container -->

    <!-- Start widget-bar -->
   
   
    <!-- End widget-bar -->
  </nav>
</header>