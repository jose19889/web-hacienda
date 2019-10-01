			<div id="footer">
					<div class="container">
						<div class="row">
							<section class="col-md-3 ">
								<br><br>
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/images/escudo1.png"  alt="" class="image featured" /></a>
							</figure>
							</section>
							<section class="col-md-3">
								<br><br>
								<h3><h2 class="major"><span>Institucional</span></h2></h3>
								<ul class="list-unstyled quick-links">
									<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Sobre Nosotros</a></li>
		    						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Organigrama</a></li>
		    						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Historia del ministerio</a></li>
		    						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Funciones</a></li>

		    						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>servicios</a></li>
		    						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Otros servicios</a></li>
								</ul>
							</section>
							<section class="col-md-3">
								<br><br>
								<h3><h2 class="major"><span>Documnentos de Interes</span></h2></h3>
								<ul class="list-unstyled quick-links">
		    						
		    						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>cartas</a></li>
		    						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Memoramdums</a></li>
		    						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Presupuesto general</a></li>
    							</ul>
							</section>

							<section class="col-md-3">
								<br><br>
								<h3><h2 class="major"><span>Noticias</span></h2></h3>
								<ul class="list-unstyled quick-links">
		    						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Fondo Monetario</a></li>
		    						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Cumbre sipopo</a></li>
		    						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Revista Africa</a></li>
		    						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Reunio de concertacion</a></li>
    							</ul>
							</section>

							<section class="col-md-12 ">
								<br><br>
								<h3><h2 class="major"><span>Siganos en:</span></h2></h3>
										<ul class="contact" style="text-align: center;">
											<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
											<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
											
											<li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
											<li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
										</ul>
										<br><br>
							</section>

						</div>
					</div>


				</div>

		</div>
			<!-- Footer -->
				

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
</script>
	</body>
</html>
