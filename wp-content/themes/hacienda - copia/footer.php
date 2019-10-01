
<footer class="webintern-footer">
<div class="webintern-footer-inner">
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-3 ">
<!-- webintern_footer_title -->
<h4 class="webintern_footer_title h5"><small>Datos Economicos</small></h4>
<ul class="webintern-footer-list">
<li><a href="#">Conyuntura Econoomica</a></li>
<li><a href="#">Inidicadores economicos</a></li>
<li><a href="#">Informes FMI y otros</a></li>
</ul>
<div class="empty-space xs-25"></div>
</div>
<div class="col-sm-6 col-md-3 footer-2">
<!-- webintern_footer_title -->
<h4 class="webintern_footer_title h5"><small>Sobre Nosotros</small></h4>
<ul class="webintern-footer-list">
<li><a href="#">Organigrama</a></li>
<li><a href="#">Historia</a></li>
<li><a href="#">Normativa Contable </a></li>
<li><a href="#">Reglamneto Organico</a></li>
</ul>
<div class="empty-space xs-25 sm-25"></div>
</div>
<div class="col-sm-6 col-md-3 footer-3">
<!-- webintern_footer_title -->
<h4 class="webintern_footer_title h5"><small>Datos Economicos</small></h4>
<ul class="webintern-footer-list">
<li><a href="#">Conyuntura Econoomica</a></li>
<li><a href="#">Inidicadores economicos</a></li>
<li><a href="#">Informes FMI y otros</a></li>
</ul>
<div class="empty-space xs-25"></div>
</div>
<div class="col-xs-12 col-md-3 col-sm-6">
<div class="marg-sm-b30"></div>
<!-- webintern_footer_title -->
<h4 class="webintern_footer_title h5"><small>Subscribe Newsletter</small></h4>
<div class="empty-space marg-lg-b20"></div>
<!--
<div class="simple-text last dark ">
<p>Get latest updates and offers.</p>
</div>
-->
<div class="empty-space marg-lg-b15"></div>
<!-- TT-SUBSCRIBE -->
<form method="post">
<div class="tt-subscribe">
<input type="text" required="" placeholder="Enter your email">
<div class="tt-subscribe-submit">
<i class="fa fa-envelope" aria-hidden="true"></i>
<input type="submit" value="">
</div>
</div>
</form>
<div class="empty-space marg-lg-b30"></div>
<!-- TT-SOCAIL -->
<ul class="tt-socail">
<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="tt-copy">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="tt-copy-left">
<p class="float-right text-white">
       
       <button onclick="topFunction()" id="myBtn" title="Go to top">⇧</button> 
    </p>
  <p>&copy; <a href="<?php echo home_url('/'); ?>" style="color:#fff;"><?php bloginfo('name'); ?></a>
    <?php echo date('Y'); ?>
     <a href="#" class="text-white">Todos los Derechos Reservados</a><p class="text-center"> </p></div>
</div>

</div>
</div>
</div>
</footer>


<!--<footer class="footer bg-dark " style="padding:12px;">
	<div class="container">
    <p class="float-right text-white">
       
       <button onclick="topFunction()" id="myBtn" title="Go to top">⇧</button> 
    </p>
    <p>&copy; <a href="<?php echo home_url('/'); ?>" style="color:#fff;"><?php bloginfo('name'); ?></a><?php echo date('Y'); ?>
     <a href="#">Terms</a><p class="text-center"> </p>
</p>
</div>
</footer>-->

<!--undefined script-->
<script>
window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>

<!--stycly header script-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!--render top button-->
<script type="text/javascript">
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 
</script>



<!--preloader-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script type="text/javascript">
   //paste this code under the head tag or in a separate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    }); 
</script>-->

<script>

</script>
  </body>
</html>



<?php wp_footer(); ?>

