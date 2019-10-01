<?php get_header(); ?>
<section class="container">
    <div class="row pt-2 pb-2 pt-5">
        <!------------------------------
        render descargas path
        -------------------------------->
          <?php get_template_part('loops/descargas');?>

          <!------------------------------
        render main slider
        -------------------------------->
            <?php get_template_part('loops/slider');?>
      </div>
    </div>
</section>

 <!------------------------------
  acesso rapido de la pagina
 -------------------------------->
<?php get_template_part('loops/sobre-nosotros');?>
<!------------------------------
  ultimas noticias
 -------------------------------->
<?php //get_template_part('loops/servicios');?>
<!------------------------------
  banner tesoreria
 -------------------------------->
 <?php get_template_part('loops/porfolio');?>
<!--<div class="container">
  <div class="row">
    
    <div class="<?php //if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php //else: ?>col-sm-12<?php //endif; ?>">
      <div id="content" role="main">
        <?php //get_template_part('loops/content', get_post_format()); ?>
      </div>
    </div>
    
    <div class="col-sm-4" id="sidebar" role="navigation">
       <?php //get_sidebar(); ?>
    </div>-->
    
  </div><!-- /.row -->
</div><!-- /.container -->
<!------------------------------
  otros
 -------------------------------->
<?php get_template_part('loops/noticias');?>

<?php get_footer(); ?>
