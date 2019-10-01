<?php get_header(); ?>

	<section style="background: #fff;">
		<!-- section -->
		<div class="container">
			 <h2 class="major"><span></span></h2>
			<div class="row">
				<div class="col-md-8">
			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php //get_template_part('pagination'); ?>

		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
		</div>
		
	</div>
</section> 


<?php get_footer(); ?>
