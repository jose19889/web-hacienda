<div class="container-fluid ">
    <div class="row footer-top">
        <div class="col-sm-4 text-center">
            <h4 class="ft-text-title">Contacto</h4>
            <h6 class="ft-desp">Company Name 
                <br>Country Name
            </h6>
            <h4 class="details">
                <a class="contact" href="tel:+977-1-4107223">
                    <i class="fa fa-phone" aria-hidden="true"></i> +977-000000</a>
                </h4>
            </div>
            <div class="col-sm-4 text-center border-left">
                <h4 class="ft-text-title">Sobre la Empresa</h4>
                <div class="address-member">
                    <p class="member">
                        <b>Mision y vision</b>  
                    </p>
                    <p class="member">
                        <b>El Responsable</b>  
                    </p>
                    <p class="member">
                        <b>datos de fundacion</b>  
                    </p>
                    <p class="member">
                        <b>Socioas</b> 
                    </p>
               </div>
           </div>
           <div class="col-sm-4 col-xs-12 text-center border-left">
            <h4 class="ft-text-title">Servicios</h4>
            <div class="pspt-dtls">
                <a href="#" class="about">servio1</a>
                <a href="#" class="team">servio1</a>
                <a href="#" class="advertise">servio1</a>
                <br><br><br><br><br><br><br>
            </div>
        </div>
    </div>

	
</div>
<footer class="footer bg-dark " style="padding:12px;">
	<div class="container">
    <p class="float-right text-white">
        <!--<a href="#" style="color:#fff;">Back to top</a>-->
       <button onclick="topFunction()" id="myBtn" title="Go to top">⇧</button> 
    </p>
    <p>&copy; <a href="<?php echo home_url('/'); ?>" style="color:#fff;"><?php bloginfo('name'); ?></a><?php echo date('Y'); ?>
     <a href="#">Terms</a><p class="text-center"> </p>
</p>
</div>
</footer>

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

<style type="text/css">
    #scroll {
    position:fixed;
    right:10px;
    bottom:10px;
    cursor:pointer;
    width:50px;
    height:50px;
    background-color:#3498db;
    text-indent:-9999px;
    display:none;
    -webkit-border-radius:60px;
    -moz-border-radius:60px;
    border-radius:60px
}
#scroll span {
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-8px;
    margin-top:-12px;
    height:0;
    width:0;
    border:8px solid transparent;
    border-bottom-color:#ffffff;
}
#scroll:hover {
    background-color:#e74c3c;
    opacity:1;filter:"alpha(opacity=100)";
    -ms-filter:"alpha(opacity=100)";
}

</style>

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

