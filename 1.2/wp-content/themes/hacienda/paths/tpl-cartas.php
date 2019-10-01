
      <div class="latest-news" style="background: #fff;padding: 3px;">
        <h3><?php ///echo pll_e('Noticias Destacadas')?></h3>
        <hr style="border-top: 2px solid #ebecec;padding: 6px;">
        <div class="latest-news-all">
          <?php
                $weightloss = new WP_Query();
                $weightloss->query('showposts=4&cat=5');
                while ($weightloss->have_posts()) : $weightloss->the_post(); ?>
          <div class="latest-news-left">
            <div class="thumbnail">
              <?php the_post_thumbnail( 'small' );  ?>
            </div>
            </div>
          <div class="latest-news-right">
            <h5 style="margin: 3px;"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h5>
           <p><?php the_content(); ?></p>
         
            <hr>
            <!--<div class="news"><?php the_time('F j, Y'); ?><span class="news-right"></span> </div>-->
          </div>
           <?php endwhile; ?>
        </div>
      
  </div><!--end div sidebar-->
  <style type="text/css">
    /* latest news*/
.latest-news > h3 {
       color: #333;
    font-size: 24px;
    font-weight: 500;
    line-height: 20px;
    margin-bottom: 20px;
    color: #198ce8;
}
.latest-news-all {
    *border-bottom: 1px solid #ddd;
    display: block;
    margin-bottom: 20px;
    overflow: hidden;
    padding-bottom: 20px;
  
}

.latest-news-left {
    display: inline-block;
    float: left;
    padding-right: 20px;
}
.latest-news-right > p {
    color: #333;
    font-size: 13px;
    font-weight: 500;
    margin-bottom: 9px;
}
.news span.news-left {
    padding-right: 18px;
}
 
.news span {
    color: #333;
    font-size: 12px;
    font-weight: normal;
}
  </style>