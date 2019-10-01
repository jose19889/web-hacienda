<?php get_header(); ?>
<?php get_template_part('breadcrumbs'); ?>
		<!-- section -->
		<section>
			<div class="container">
			<div class="row">

			<div class="col-md-8 bg-content">
			<?php get_template_part('paths/content-page'); ?>
			</div>
			
			<?php get_sidebar(); ?>

			</div>
		</div>
		</section>
		<!-- /section -->
<?php get_footer(); ?>
