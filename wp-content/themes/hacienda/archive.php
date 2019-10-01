<?php get_header(); ?>
<br>
	<!-- section -->
		<section class="bg-white">
			<div class="container">
				<div class="row">
				<div class="col-md-8 ">
					<div class="pb-2">
					<h1><?php _e( 'Archivos', 'html5blank' ); ?></h1>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>
				</div>
				</div>
				<!--render de sidebar-->
				<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>

				
			</div>
		
		</section>
		<!-- /section -->




<?php get_footer(); ?>
