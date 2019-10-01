<?php get_header();

/*
 *Template name: PGE-ESTADO
 * @package hacienda.
 */
 ?>

<?php //get_template_part('loops/noticias');?>
<section class="py-5">
	<div class="container">
   
   
   
	<div class="row">

  </div>

</section>
<div class="container">

  <hr>
  <div class="row">
    <div class="col-md-2 mb-3">
        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><button type="button" class="btn btn-secondary btn-lg">PGE 2019</button></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><button type="button" class="btn btn-secondary btn-lg">PGE 2018</button></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><button type="button" class="btn btn-secondary btn-lg">PGE 2017</button></a>
  </li>
</ul>
    </div>
    <!-- /.col-md-4 -->
        <div class="col-md-10">
      <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
 
    <?php get_template_part('template-parts/pge-209');?>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <h2>Profile</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eveniet earum. Sed accusantium eligendi molestiae quo hic velit nobis et, tempora placeat ratione rem blanditiis voluptates vel ipsam? Facilis, earum!</p>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <h2>Contact</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eveniet earum. Sed accusantium eligendi molestiae quo hic velit nobis et, tempora placeat ratione rem blanditiis voluptates vel ipsam? Facilis, earum!</p>
  
  </div>
</div>
    </div>
    <!-- /.col-md-8 -->
  </div>
  
  
  
</div>
<!-- /.container -->
<style type="text/css">


.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color:transparent  !important;
}



</style>
<?php get_footer(); ?>