<?php get_header();

/*
 *Template name: Descargas
 * @package hacienda.
 */
 ?>

<section class="sec-padding section-light py-5">
      <div class="container">

         <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                     <h4>Nuestro Equipo</h4>
                  </div>
               </div>
            </div>
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12 margin-bottom  pb-3">
            <div class="">
         <?php get_template_part('template-parts/test');?>
       </div>
            </div>
          <!--end title-->
          


          <!--end item-->
      <aside class="col-md-4 sidebar">
        <?php dynamic_sidebar('sidebar-widget-area'); ?>
      </aside>

         
          <!--end item-->
          
         
          <!--end item-->    
        </div>
      </div>
    </section>



<?php get_footer(); ?>