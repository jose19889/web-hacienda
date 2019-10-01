<!-- search -->
<form style="margin: 5px;" class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input class="btn btn-alert search-input" type="search" name="s" placeholder="<?php echo pll_e('buscar...')?>">
	<input type="hidden" name="lang" value="<?php echo(PLL_LANGUAGE_CODE); ?>"/>
	<button class="btn btn-alert" type="submit" role="button"><?php _e( '', '' ); ?><i class="fa fa-search"></i></button>
</form>
<!-- /search -->
