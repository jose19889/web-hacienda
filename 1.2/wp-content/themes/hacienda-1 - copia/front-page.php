<?php /* Template Name: front-page */ get_header(); ?>


<!-- BANNER Y ULTIMOS RECURSOS -->
		<section class ="bg-section" style="padding: 30px;">
			<div class="container">
				<div class="row ">
					<section class="box blog">
						<div>
							<div class="col-md-4 col-md-12">
							<div class="sidebar">
								<p class="button alt"><i class="fa fa-clock-o"></i> Ultimos recursos</p>
									<!--<h3><i class="fa fa-home"></i>Ultimos Recursos</h3>-->
								<!-- Archives -->
								 <?php
					                $weightloss = new WP_Query();
					                $weightloss->query('showposts=4&cat=4');
					                while ($weightloss->have_posts()) : $weightloss->the_post(); ?>
									<ul class="divided">
										<li>
											<article class="major">
											</article>
										</li>
										
										<li>
											<article class="box post-summary">
												<p><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></p>
												<ul class="meta">
							
													<li class="icon fa fa-download"><?php the_content(); // Dynamic Content ?></li>
												</ul>
											</article>
										</li>

										
									 <?php endwhile; ?>
								</ul>
								<!--<a href="#" class="button alt">Archives</a>-->
						</div>
					</div>
							<div class="col-md-8 col-12-md-12">
								<div class="content">

									<!-- Featured Post -->
							<article class="box post">
								<a href="#" class="image featured">
								<img src="<?php echo get_template_directory_uri(); ?>/images/hacienda-slider.jpg"  alt="" class="image featured" /></a>
							</article>

								</div>
							</div>
					</div>
				</section>
				</div>
			</div>
		</section>
	<!--  DOCUMENTOS DE INTERESES -->
	<div class="col-md-12 bg-section">
	<!-- Features -->
		<section class="container box features">
			<h2 class="major"><span>Documentos de Interes</span></h2>
			<div>
				<div class="row">
					<div class="col-md-3 col-md-6 col-md-12">
						<!-- Feature --> 
						<ul class="special">
							<li><a href="http://localhost:8080/hacienda/1.2/informes-fmi-y-otros/" class="icon fa-book"><span class="label"></span></a></li>
								<h4 class="text-center"><a href="#">Informe FMI y otros</a></h4>
						</ul>
					</div>
					<div class="col-md-3 col-md-6 col-md-12">
						<!-- Feature -->
						<ul class="special">
							<li><a href="http://localhost:8080/hacienda/1.2/informes-fmi-y-otros/" class="icon fa-university"><span class="label"></span></a></li>
							<h4 class="text-center"><a href="http://localhost:8080/hacienda/1.2/informes-fmi-y-otros/">Cartas y Memorandums</a></h4>
						</ul>
					</div>
					<div class="col-md-3 col-md-6 col-md-12">
						<ul class="special">
							<li><a href="#" class="icon fa-area-chart "><span class="label">Magnifier</span></a></li>
							<h4 class="text-center"><a href="#">Indicadores Economicos</a></h4>
						</ul>
					</div>
					<div class="col-md-3 col-md-6 col-md-12">
						<ul class="special">
							<li><a href="http://localhost:8080/hacienda/1.2/presupuetso-general-del-estado/" class="icon fa-money"><span class="label"></span></a></li>
							<h4><a href="http://localhost:8080/hacienda/1.2/presupuetso-general-del-estado/">Presupuesto general del estado</a></h4>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>

<!--  BLOG -->
<div class="col-md-12 bg-section">
	<section style="background: #fff;">
		<div class="container">	
			<h2 class="major"><span>Blog</span></h2>	
		<div class="row">
			<?php
			        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			        query_posts(array(
			            'post_type'      => 'post', // You can add a custom post type if you like
			            'paged'          => $paged,
			             'category_name' => 'blog',
			            'posts_per_page' => 3
			        ));
			        if ( have_posts() ) : ?>
			        <?php while ( have_posts() ) : the_post(); ?>						<!--section de noticias-->
		    <div class="col-md-4">
		        <div class="owl-carousel">
		            <div class="post-slide">
		                <div class="post-img">
		                  		 <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
								      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								        <?php the_post_thumbnail(array(730,320)); //Declare pixel size you need inside the array ?>
								      </a>
							    <?php endif; ?>
		                    <div class="over-layer">
		                        <ul class="post-link">
		                            <li>
		                            	 <a href="<?php the_permalink(); ?>"  class="fa fa-link" title="<?php the_title(); ?>">
								      </a>
		                            </li>
		                        </ul>
		                    </div>
		                    <div class="post-date">
		                        <!--<span class="date"><?php //the_time('g:i a'); ?></span>-->
		                        <span class="month"><?php the_time('F j, Y'); ?></span>
		                    </div>
		                </div>
		                <div class="post-content">
		                    <h3 class="post-title">
		                       <a href="<?php the_permalink(); ?>"><?php the_title()?></a>
		                    </h3>
		                    <p class="post-description"><?php echo excerpt(30); ?></p>
		                    <a href="#" class="read-more">veer mas..</a>
		                </div>
		            </div>
		        </div>
		    </div>
		    <?php endwhile; ?>
		        <!--pagination-->
		        <?php if (function_exists("pagination")) {
		          pagination($custom_query->max_num_pages);
		      } ?>
		</div>
		
			<?php else : ?>
		        <h2><?php //echo pll_e('No se ha encontrado resultados.')?></h2>
		<?php endif; ?>
			<br>
		<div class="col-12" align="center">
			<a href="#" class="button alt">Ver Mas...</a>
		</div>
		</div>
	</section>
</div>

<!-- ENTIDADES -->
<div class="col-md-12" style="background: #fff;padding: 30px;">
	<section class="container ">
			<div class="row">
				<div class="col-md-8 ">
					<h2 class="major"><span>Entidades</span></h2>
					<article class="box post">
						<a href="#" class="image featured">
						   <img src="<?php echo get_template_directory_uri(); ?>/images/tesoreria.jpg"  alt="" class="image featured" />
					   </a>

						<p>
							<b>TESORERIA GENERAL DEL ESTADO</b>, feugiat sit amet ornare in, a hendrerit in
							lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
						</p>
					</article>
					<a href="http://localhost:8080/hacienda/1.2/tesoreia-general-del-estado/" class="button alt">Ver Mas...</a>
				</div>
				<!--sidabar entidades de hacienda-->
				<div class="col-md-4  features-text">
				<br>
					<h2 class="major"><span></span></h2> 
					<!--SIDEBAR HORIZONTE 2020-->
					<div class="thumbnail">
				        <img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>
							/images/hr2020.jpg" alt="Logo">
				    </div>
				    <!--SIDEBAR HORIZONTE ANIF-->
					<div class="thumbnail">
				        <img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>
							/images/anif.jpg" alt="Logo">
				    </div>
				    <!--SIDEBAR HORIZONTE INEGE-->
				    <div class="thumbnail">
				        <img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>
							/images/inege.jpg" alt="Logo">
				    </div>
				</div>
			</div>
</div>


<?php get_footer(); ?>
