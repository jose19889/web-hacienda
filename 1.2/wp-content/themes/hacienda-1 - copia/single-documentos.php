<?php
/*
 * Template Name: single documentos
 * Template Post Type: post, page, product
 */
 get_header();  ?>

 <?php get_template_part('breadcrumbs'); ?>
 
	<section  class="" style="background: #fff;">
		
		<div class="container">
			
		<div class="row">
			<div class="col-md-8">
				<?php get_template_part('paths/documentos-single'); ?>
			</div>
			<!--get sidebar-->
			<?php get_sidebar(); ?>
				
		</div>
	</div>
	

	</section>
	

	<!-- /section -->


<?php get_footer(); ?>