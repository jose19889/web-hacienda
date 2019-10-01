
 <!--the breadcrubms-->
		<!-- section -->
		<section style="background:#fff; ">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- post title -->
				<!-- post thumbnail -->

       <div class="latest-news" style="background: #fff;padding: 3px;">
     
        <div class="latest-news-all">
        <br> <br>
          <div class="latest-news-left">
            <div class="post-image" style="padding: 5px 3px 3px 42px; float: left;">
              <?php the_post_thumbnail( 'small' );  ?>
            </div>
            </div>
          <div class="latest-news-right"  style="margin: 3px;">
            <h5><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h5>
           <p><?php the_content(); ?></p>
            <!--<div class="news"><?php the_time('F j, Y'); ?><span class="news-right"></span> </div>-->
          </div>
        
        </div>
      
  </div><!--end div sidebar-->


            <!--<span class="icon-bar">
              <i class="glyphicon glyphicon-tower" aria-hidden="true"></i>
            </span>-->
          
				<!-- /post thumbnail -->
				<div id="e_content"><?php //the_content(); // Dynamic Content ?></div>
				<?php the_tags( __( 'Tags: ', 'EGsolutions' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>
			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'EGsolutions' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>
					<!--<a  class="btn btn-primary btn-lg" href="mailto:jmbomio788@" role="button">Contactar</a>-->
				  
		</section>
		<!-- /section -->
 
