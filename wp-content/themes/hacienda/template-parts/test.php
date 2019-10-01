
 <?php 
        $args = array( 'category_name' => 'descargas', 'orderby'=> 'ID','order'=> 'ASC','posts_per_page' => 10 );
        $the_query = new WP_Query( $args ); 
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
      <div class="card flex-row flex-wrap">
        <div class="card-header ">
             <img src="<?php echo get_template_directory_uri(); ?>/img/icon_adobe.png" width="" height="" alt="" />
        </div>
        <div class="card-block px-2">
            <h4 class="card-title"><?php the_title(); ?></h4>
            <p class="card-text"> <?php the_content(); ?></p>
            
        </div>
        <div class="w-100"></div>
        
    </div>
    <div ><br></div>

      <?php wp_reset_postdata(); ?>
      <?php endwhile; ?>
      <?php else : ?>
              <?php // no posts found message goes here ?>
      <?php endif; ?>

      <style type="text/css">
        .card {
         border:none !important ; 
         background: #fbfbfb !important 
   
      }

              .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: none !important ;
            border-bottom: none !important ;
        }

            </style>