<?php 
/* Template Name: single-descargas */

 get_header(); ?>

<?php//get_template_part('loops/breadcrumbs');?>


<section class="sec-padding section-light py-5">
      <div class="container">

         <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                     <h4>Nuestro Equipo</h4>
                  </div>
               </div>
            </div>
        <div class="row">
         
        <?php 
        $args = array( 'post_type' => 'team', 'orderby'=> 'ID','order'=> 'ASC','posts_per_page' => 10 );
        $the_query = new WP_Query( $args ); 
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
          <!--end title-->
          
          <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom  pb-3">
            <div class="ce-feature-box-38">
              <div class="img-box">
                <div class="bg-circle-box">
                 <div class="img">
                  <!--<img src="http://gsrthemes.com/qcode/images/21.png"alt="" class="img-responsive">-->
                    <?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?>
                </div>
                  <div class="circle"></div>
                </div>
              </div>
              <div class="text-box white text-left">
                <h5 class="less-mar-1 title"><?php the_title(); ?></h5>
                <p class="text-primary subtitle text-primary "><?php the_content();?></p>
                <br>
                
              </div>
            </div>

          </div>
          <!--end item-->
                <?php wp_reset_postdata(); ?>
      <?php endwhile; ?>
      <?php else : ?>
              <?php // no posts found message goes here ?>
      <?php endif; ?>
         
          <!--end item-->
          
         
          <!--end item-->
      <div class="clearfix"></div>       
        </div>
      </div>
    </section>


     <ul>
   
</ul>
           <!--===============================code==========================-->


 

<?php get_footer(); ?>
