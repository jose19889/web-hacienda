<?php get_header(); ?>
	<!-- section -->
	<?php get_template_part('breadcrumbs'); ?>
	<section  class="" style="background: #fff;">
		
		<div class="container">
			
		<div class="row">
			<div class="col-md-8">
				<?php get_template_part('paths/single-post'); ?>
			</div>
			<!--get sidebar-->
			<?php get_sidebar(); ?>
				
		</div>
	</div>
	

	</section>
	



	<!-- /section -->


<?php get_footer(); ?>
