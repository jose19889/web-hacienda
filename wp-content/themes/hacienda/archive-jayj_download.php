<?php
/**
 * The template for displaying downloads from the "Download" post type
 */

get_header(); ?>

    <section id="primary">
        <div id="content" role="main">

        <?php if ( have_posts() ) : ?>

        <header class="page-header">
        	<h1 class="page-title"><?php post_type_archive_title(); ?></h1>
        </header>

        <?php twentyeleven_content_nav( 'nav-above' ); ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post();

			// Get the download meta
            $download       = get_post_meta( $post->ID, 'download', true );
            $download_count = get_post_meta( $post->ID, 'download_count', true );
		?>

            <article id="download-<?php the_ID(); ?>" <?php post_class(); ?>>

            	<header class="entry-header">
                    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Download %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title( '', ' <span>&rarr;</span>' ); ?> </a></h1>

                    <div class="entry-meta">
                    	<?php
							/*
							 * Show download meta data, such as category and version
							 */
							$show_sep = false;

							if ( ! empty( $download['postid'] ) )
								$show_sep = '<span class="sep">|</span>';

							// The download category
							echo get_the_term_list( $post->ID, 'download-categories', 'Type: ', ' ', $show_sep );

							// Is the download associated with a post?
							if ( ! empty( $download['postid'] ) )
								echo '<a href="' . get_permalink( $download['postid'] ) . '" title="Read the post ' . get_the_title( $download['postid'] ) . '">Read the post</a>';

							$show_sep = false;

							if ( ! empty( $download['version'] ) ) {
								$show_sep = '<span class="sep">|</span>';
								echo $show_sep . 'Version ' . $download['version'];
							}
						?>
                    </div><!-- .entry-meta -->

                    <?php
						// Download thumbnail
                        if ( has_post_thumbnail() )
                            the_post_thumbnail( 'thumbnail' );
                    ?>
                </header><!--.entry-header-->

                <div class="download-description">
					<?php echo $post->post_excerpt; // We can't use the_excerpt because some themes has a "Continue reading..." link ?>
				</div><!-- .download-description -->

                <footer class="entry-meta">
                	<a href="<?php the_permalink(); ?>" class="download-btn"><?php printf( __( 'Download &#8220;%s&#8221;', 'twentyeleven' ), get_the_title() ); ?></a>
                    <span class="download-count"><?php printf( __( 'Downloaded %s times', 'twentyeleven' ), number_format( $download_count ) ); ?></span>
                </footer><!--.entry-meta-->

            </article><!-- #download-<?php the_ID(); ?> -->

        <?php endwhile; ?>

        <?php twentyeleven_content_nav( 'nav-below' ); ?>

        <?php else : ?>

            <article id="post-0" class="post no-results not-found">
                <header class="entry-header">
                	<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
                </header><!-- .entry-header -->

                <div class="entry-content">
                	<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
                	<?php get_search_form(); ?>
                </div><!-- .entry-content -->
        	</article><!-- #post-0 -->

        <?php endif; ?>

        </div><!-- #content -->
    </section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
