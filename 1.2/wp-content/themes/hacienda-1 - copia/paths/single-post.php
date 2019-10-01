<br>
<section class="box feature">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- post title -->
					<!-- post thumbnail -->
	            <div class="image featured">
	              <?php the_post_thumbnail( 'large' );  ?>
	          </div>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<ul class="meta">			
					<li class=""></li>
					<li class="icon fa fa-clock-o"><?php the_time('F j, Y'); ?><span class="news-right"></span></li>
					
				</ul>
				<p>
					<?php the_content(); ?>
				</p>
				<?php //the_tags( __( 'Tags: ', 'EGsolutions' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
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
				  
		</article>
	</section>
		<!-- section -->
		
 

	 