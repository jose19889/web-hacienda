<?php /* Template Name: Infornmes FMI y otros2 */ 

get_header(); ?> 
<!--the breadcrubms-->
<?php get_template_part('breadcrumbs'); ?>
<section style="background:#fff;">
<div class="container">
     <h2 class="major"><span>Cartas y memoramdums</span></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable-panel">
                <div class="tabbable-line">
                    <ul class="nav nav-tabs ">
                        <li class="active">
                            <a href="#tab_default_1" data-toggle="tab">
                            Cartas</a>
                        </li>
                        <li>
                            <a href="#tab_default_2" data-toggle="tab">
                            Memorandums</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_default_1">
                           <?php
                        $weightloss = new WP_Query();
                        $weightloss->query('showposts=4&cat=5');
                        while ($weightloss->have_posts()) : $weightloss->the_post(); ?>
                        <ul class="list-group">
                          <li class="list-group-item"><h2> <?php the_post_thumbnail( 'small' );  ?><a href="<?php the_permalink() ?>" rel="bookmark">
                            <?php the_title(); ?><?php the_content(); ?></h2>
                          </li>
                        </ul>
                        <?php endwhile; ?>
                        </div>
                        <div class="tab-pane" id="tab_default_2">
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
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
       

    </section>
<?php get_footer(); ?>