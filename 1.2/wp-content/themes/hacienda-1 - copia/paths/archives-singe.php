

<!--loop sttyling 2-->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-md-3">
 <div class="latest-news" style="background: #fff;padding: 3px;">
        <hr style="border-top: 2px solid #ebecec;padding: 6px;">
        <div class="latest-news-all">
          
          <div class="card-body latest-news-left">
            <div class="thumbnail" style="padding: 10px;">
              <i class="fa fa-book fa-2x"></i>
              <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php //the_post_thumbnail( 'medium' );  ?>
			</a>
		<?php endif; ?>
            </div>
            </div>
          <div class="latest-news-right">
            <h3 style="margin: 3px;"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt()?></p>
            <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="author"><?php _e( '', 'html5blank' ); ?> <?php //the_author_posts_link(); ?></span>
           <br>
            <hr>
            <!--<div class="news"><?php the_time('F j, Y'); ?><span class="news-right"></span> </div>-->
          </div>
          
        </div>
      
  </div><!--end div sidebar-->
</div>
</article>
<?php endwhile; ?>
<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php// _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
    <h2><?php echo pll_e('Sorry, nothing to display.', 'html5blank' )?></h2>
	</article>
  <hr>
	<!-- /article -->

<?php endif; ?>

