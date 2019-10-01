<?php /* Template Name: Presupuesto general */ 

get_header(); ?>

<?php get_template_part('breadcrumbs'); ?>
    <section style="background: #fff; padding: 30px;">
                    <div class="container">

                        <div class="row ">
                            <div class="col-md-12">
                                <!-- Blog -->
        <section class="box blog">
            <div>
     <div class="row">
                 <div class="col-md-6 col-md-12">
                   <section class="ac-container">
                     <div>
                    <input id="ac-1" name="accordion-1" type="checkbox" />
                    <label for="ac-1"> Presupuesto General del Estado  2019</label>
                    <article class="ac-large">
                        <?php
                        $weightloss = new WP_Query();
                        $weightloss->query('showposts=4&cat=7');
                        while ($weightloss->have_posts()) : $weightloss->the_post(); ?>
                        <ul class="list-group">
                          <li class="list-group-item"><h2> <?php the_post_thumbnail( 'small' );  ?><a href="<?php the_permalink() ?>" rel="bookmark">
                            <?php the_title(); ?><?php the_content(); ?></h2>
                          </li>
                        </ul>
                        <?php endwhile; ?>
                    </article>
                </div>
                </section>                                      <!--<h2 class="major"><span><?php //the_title(); ?></span></h2>-->
            
                 </div>

                 <div class="col-md-6 col-md-12">
                   <section class="ac-container">
                     <div>
                    <input id="ac-2" name="accordion-2" type="checkbox" />
                    <label for="ac-2">Presupuesto General del Estado 2018</label>
                    <article class="ac-large">
                        <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
                    </article>
                </div>
                </section>                                      <!--<h2 class="major"><span><?php //the_title(); ?></span></h2>-->
                                                  <!--<h2 class="major"><span><?php //the_title(); ?></span></h2>-->
            
                 </div>
        
            

                                                            
                                            
                                            </div>
                                        </div>
                                    </section>

                            </div>
                            </section>

<?php get_footer(); ?>