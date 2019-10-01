<!-- sidebar -->
<!--<aside class="sidebar" role="complementary">

	<?php //get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php //if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php //if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>-->
<!-- /sidebar -->
<!-- Sidebar -->

<!-- Recent Posts -->
<aside  class="col-md-4" style="background: #fcfcfc;">
<section>
<h2 class="major" style="margin: 0px 0 1em 0;"><span>Documentos recientes</span></h2>
<ul class="divided">
<li>
	<article class="box post-summary" style="margin-bottom: 1em;">
		<?php
                $weightloss = new WP_Query();
                $weightloss->query('showposts=4&cat=5');
                while ($weightloss->have_posts()) : $weightloss->the_post(); ?>
		<h4 style="font-size: 17px;"><a href="#"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></a></h4>
		<ul class="meta">
			<li class="icon fa-clock-o"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></li>
			<!--<li class="icon fa-comments"><a href="#"><?php _e( 'Published by', 'html5blank' ); ?></a></li>-->
		</ul>
		 <?php endwhile; ?>
	</article>
</li>
</ul>
</section>
<a href="http://localhost:8080/hacienda/1.2/informes-fmi-y-otros/" class="button alt">Ver Mas...</a>
<br>
<section>
	<br>
	<h2 class="major" style="margin: 0px 0 1em 0;"><span>Otros recursos</span></h2>
	<?php
                $weightloss = new WP_Query();
                $weightloss->query('showposts=2&cat=7');
                while ($weightloss->have_posts()) : $weightloss->the_post(); ?>

<!--<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>-->
<p style="margin: 12px 0 10px;">
	<div class="">
              
            </div><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
</p>

</section>

 <?php endwhile; ?>
</aside>
