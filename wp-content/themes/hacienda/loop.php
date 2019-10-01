 <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <!-- article -->
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <div class="card flex-row flex-wrap">
        <div class="card-header border-0">
          <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
      </a>
    <?php endif; ?>
        </div>
        <div class="card-block px-2">
            <h4 class="card-title"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
            <p class="card-text">
              <?php The_excerpt_readmoore(); ?>

            </p>
              <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
              <br>
              <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
            <a href="#" class="btn btn-primary">BUTTON</a>
        </div>
        <div class="w-100"></div>
       
    </div>
  </article>

<?php endwhile; ?>

<?php else: ?>

  <!-- article -->
  <article>
    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
  </article>
  <!-- /article -->

<?php endif; ?>
