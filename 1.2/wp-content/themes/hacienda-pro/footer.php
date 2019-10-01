			<!-- Footer -->
				<footer id="footer">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-12">

								<!-- About -->
									

							</div>
							<div class="col-12">

								<!-- Contact -->
									<section>
										<h2 class="major"><span>Contactarnos en:</span></h2>
										<ul class="contact">
											<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
											<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
											<li><a class="icon fa-instagram" href="#"><span class="label">Instagram</span></a></li>
											<li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
											<li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
										</ul>
									</section>

							</div>
						</div>

						<!-- Copyright -->
							<div id="copyright">
								<ul class="menu">
									<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
								</ul>
							</div>

					</div>
				</footer>
				

		</div>
<footer class="footer bg-dark" style= "padding:22px; background: black;">
		<div class="container">
			<p class="copyright">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('', 'SteelproyectySL'); ?>
				<a href="//wordpress.org" title="WordPress"></a>Todos Los Derechos Reservados<a href="//Steelproyectysl.com" title="Steelproyectysl"></a>.
			</p>
			</div>
		</footer>
		
		</div>

		<!-- /wrapper -->

		<?php wp_footer(); ?>

<!--SUBMENU MAGIG MOVE-->
<script>
    (function($){
        $(document).ready(function(){
            $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                event.preventDefault(); 
                event.stopPropagation(); 
                $(this).parent().siblings().removeClass('open');
                $(this).parent().toggleClass('open');
            });
        }); 
    })(jQuery);
</script>
<!--NAV WALKER LEVEL 3 MENU-->
<!--level 3 navwalker-->
<script>
    (function($){
        $(document).ready(function(){
            $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                event.preventDefault(); 
                event.stopPropagation(); 
                $(this).parent().siblings().removeClass('open');
                $(this).parent().toggleClass('open');
            });
        }); 
    })(jQuery);
</script>

<!--hove effect2-->
<script>
$(document).ready(function(){
  $(".dropdown").on("hide.bs.dropdown", function(){
    $(".btn").html('Dropdown <span class="caret"></span>');
  });
  $(".dropdown").on("show.bs.dropdown", function(){
    $(".btn").html('Dropdown <span class="caret caret-up"></span>');
  });
});
</script>
 <!--<a id="back2Top" title="Back to top" href="#">&#10148;</a>-->
<!--top button-->
	</body>
</html>
