<?php /* Template Name: Presupuesto general 2018 */ 

get_header(); ?>
  <?php get_template_part('breadcrumbs'); ?>
<section style="background: #fff;">
    <div class="container">
       <div class="row">
             <?php get_template_part('paths/pge-sidebar'); ?>
              <div class="col-md-8">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <!--ley  pge 2018-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            Ley
                                        </a>
                                    </h4>
                                </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="latest-news" style="background: #fff;padding: 3px;">
                              <?php
                                    $weightloss = new WP_Query();
                                    $weightloss->query('showposts=4&cat=9');
                                    while ($weightloss->have_posts()) : $weightloss->the_post(); ?>
                                <div class="latest-news-left">
                                    <div class="post-image" style="padding: 5px 3px 3px 13px; float: left;">
                                     <?php the_post_thumbnail( 'small' );  ?>
                                    </div>
                                </div>
                              <div class="latest-news-right">
                                    <h6 style="margin: 3px;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6>
                                   <p><?php the_content(); ?></p>
                                   <hr>
                                    <!--<div class="news"><?php the_time('F j, Y'); ?><span class="news-right"></span> </div>-->
                              </div>
                                <?php endwhile; ?>
                            </div>
                                
                            </div>
                            </div>
                            <!--anexo pge 2018-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            Anexo
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <div class="latest-news" style="background: #fff;padding: 3px;">
                                          <?php
                                                $weightloss = new WP_Query();
                                                $weightloss->query('showposts=4&cat=10');
                                                while ($weightloss->have_posts()) : $weightloss->the_post(); ?>
                                            <div class="latest-news-left">
                                                <div class="post-image" style="padding: 5px 3px 3px 13px; float: left;">
                                                 <?php the_post_thumbnail( 'small' );  ?>
                                                </div>
                                            </div>
                                              <div class="latest-news-right">
                                            <h6 style="margin: 3px;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6>
                                               <p><?php the_content(); ?></p>
                                               <hr>
                                                <!--<div class="news"><?php the_time('F j, Y'); ?><span class="news-right"></span> </div>-->
                                              </div>
                                                    <?php endwhile; ?>
                                            </div>
                              
                                        </div>
                                    </div>
                            </div>
                        <!--liquidacion pge 2018-->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        Liquidacion
                                    </a>
                                </h4>
                            </div>     
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="latest-news" style="background: #fff;padding: 3px;">
                                          <?php
                                                $weightloss = new WP_Query();
                                                $weightloss->query('showposts=4&cat=11');
                                                while ($weightloss->have_posts()) : $weightloss->the_post(); ?>
                                                <div class="latest-news-left">
                                                        <div class="post-image" style="padding: 5px 3px 3px 13px; float: left;">
                                                         <?php the_post_thumbnail( 'small' );  ?>
                                                        </div>
                                                </div>
                                              <div class="latest-news-right">
                                                    <h6 style="margin: 3px;"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h6>
                                                   <p><?php the_content(); ?></p>
                                                   <hr>
                                                    <!--<div class="news"><?php the_time('F j, Y'); ?><span class="news-right"></span> </div>-->
                                              </div>
                                                <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>