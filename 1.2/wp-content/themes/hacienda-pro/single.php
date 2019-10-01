<?php get_header(); ?>
	<!-- section -->
	<?php get_template_part('breadcrumbs'); ?>
	<section>
		<div class="container ">
		<div class="row">
			<div class="col-md-8 bg-content">
				<?php get_template_part('paths/single-post'); ?>
			</div>
			<!--get sidebar-->
			<?php get_sidebar(); ?>
				
		</div>
	</div>
	</section>
	



	<!-- /section -->


<?php get_footer(); ?>
