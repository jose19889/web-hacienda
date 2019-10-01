
      <div class="latest-news" style="background: #fff;padding: 3px;">
      
        <hr style="border-top: 2px solid #ebecec;padding: 6px;">
        <div class="latest-news-all">
          <?php
                $weightloss = new WP_Query();
                $weightloss->query('showposts=4&cat=6');
                while ($weightloss->have_posts()) : $weightloss->the_post(); ?>
          <div class="latest-news-left">
            <div class="thumbnail" style="padding: 10px;">
              <?php the_post_thumbnail( 'small' );  ?>
            </div>
            </div>
          <div class="latest-news-right">
            <h5 style="margin: 3px;"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h5>
           <p><?php the_content(); ?></p>
           <br>
            <hr>
            <!--<div class="news"><?php the_time('F j, Y'); ?><span class="news-right"></span> </div>-->
          </div>
           <?php endwhile; ?>
        </div>
      
  </div><!--end div sidebar-->