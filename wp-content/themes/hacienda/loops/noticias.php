
 <section class="blog-me pt-100 py-2 wow fadeInDown" data-wow-delay="1s" id="blog" style="*background: rgb(249, 249, 249) none repeat scroll 0% 0%;">
         <div class="container">
            
          <h2 class="line"><span>Actualidad</span></h2>
            <div class="row">
               <?php 
                 $args = array( 'category_name' => 'blog', 'posts_per_page' => 4 );
                 $the_query = new WP_Query( $args ); 
                 ?>
                 <?php if ( $the_query->have_posts() ) : ?>
                 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
               <div class="col-lg-4 col-md-6">
                  <!-- Single Blog -->
                  <div class="single-blog">
                     <div class="blog-img">
                         <?php the_post_thumbnail('medium', array('class' => 'mx-auto')); ?>
                        <div class="post-category">
                           <a href="#">Noticias</a>
                        </div>
                     </div>
                     <div class="blog-content">
                        <div class="blog-title">
                           <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                           <div class="meta">
                              <ul>
                                 <li>04 June 2018</li>
                              </ul>
                           </div>
                        </div>
                        <p><?php onn_excerpt('onn_index');  ?></p>
                        <!--<a href="#" class="box_btn">read more</a>-->
                     </div>
                  </div>
               </div>
         <?php wp_reset_postdata(); ?>
               <?php endwhile; ?>
               <?php else : ?>
                       <?php // no posts found message goes here ?>
               <?php endif; ?>
            </div>
         </div>
         <div class="site-space"><br></div>
      </section>
