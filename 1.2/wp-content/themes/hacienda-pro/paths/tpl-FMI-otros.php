<?php /* Template Name: Infornmes FMI y otros */ 

get_header(); ?>
<!--the breadcrubms-->
<?php get_template_part('breadcrumbs'); ?>
    <section >
  <div class="container bg-content">
    <h2 class="major"><span>Cartas y memoramdums</span></h2>
    <section id="fancyTabWidget" class="tabs t-tabs">
        <ul class="nav nav-tabs fancyTabs" role="tablist">
        
                    <li class="tab fancyTab active">
                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>  
                        <a id="tab0" href="#tabBody0" role="tab" aria-controls="tabBody0" aria-selected="true" data-toggle="tab" tabindex="0"><span class="hidden-xs">Cartas </span></a>
                      <div class="whiteBlock"></div>
                    </li>
                    
                    <li class="tab fancyTab">
                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                        <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="true" data-toggle="tab" tabindex="0"><span class="hidden-xs">Memorandums</span></a>
                        <div class="whiteBlock"></div>
                    </li>
                    
                 
        </ul>
        <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
                    <div class="tab-pane  fade active in" id="tabBody0" role="tabpanel" aria-labelledby="tab0" aria-hidden="false" tabindex="0">
                        <div>
                          <div class="row">
                              
                            <div class="col-md-12">
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
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  fade" id="tabBody1" role="tabpanel" aria-labelledby="tab1" aria-hidden="true" tabindex="0">
                        <div class="row">
                              
                                <div class="col-md-12">
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
                            </div>
                    </div>
      
        </div>
  </div>
</section>
<?php get_footer(); ?>