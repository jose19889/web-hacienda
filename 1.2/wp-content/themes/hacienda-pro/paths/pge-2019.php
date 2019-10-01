<?php /* Template Name: Presupuesto general 2019 */ 

get_header(); ?>
  <?php get_template_part('breadcrumbs'); ?>
<section style="background: #fff;">
<div class="container">
   <div class="row">
    <?php get_template_part('paths/pge-sidebar'); ?>
  <div class="col-md-8">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

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
      
        <hr style="border-top: 2px solid #ebecec;padding: 6px;">
        <div class="latest-news-all">
          <h3>hello world</h3>
        </div>
      
  </div><!--end div sidebar-->
            </div>
        </div>

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
                    <h3>hello world</h3>
                </div>
            </div>
        </div>

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
                    <h3>hello world</h3>
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