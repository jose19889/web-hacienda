<?php
/*
 * La plantilla para mostrar contenido en la plantilla page.php
 * @package tct.
 */
;?>
		<br>
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<div class="image featured">
							<?php the_post_thumbnail( 'large' );  ?>
						</div>
			</a>
			<h3><span><?php the_title(); ?></span></h3>
				<p><?php the_content(); ?></p>
			</article>
			<!-- /article -->
		<?php endwhile; ?>
		<?php else: ?>
			<!-- article -->
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
			<!-- /article -->
		<?php endif; ?>
		</section>
			