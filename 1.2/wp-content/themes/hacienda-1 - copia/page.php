<?php get_header(); ?>
<?php get_template_part('breadcrumbs'); ?>
		<!-- section -->
		<section style="background: #fff;">
			<div class="container">
			<div class="row">

			<div class="col-md-8">
			<?php get_template_part('paths/content-page'); ?>
			</div>
			<br>
			<?php get_sidebar(); ?>

			</div>

		</div>
		</section>
		<!-- /section -->



<?php get_footer(); ?>
