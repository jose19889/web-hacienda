<div class="archivos">
		<?php
$year_prev = null;
$months = $wpdb->get_results(	"SELECT DISTINCT MONTH( post_date ) AS month ,
								YEAR( post_date ) AS year,
								COUNT( id ) as post_count FROM $wpdb->posts
								WHERE post_status = 'publish' and post_date <= now( )
								and post_type = 'post'
								GROUP BY month , year
								ORDER BY post_date DESC");
foreach($months as $month) :
	$year_current = $month->year;
	if ($year_current != $year_prev){
		if ($year_prev != null){?>
		</ul>
		<?php } ?>
	<h3 class="list-group-item active"><span class="glyphicon glyphicon-home"></span> Archivos</h3>
	<ul class="list-group">
	<?php } ?>
	<li class="list-group-item"><span class="glyphicon glyphicon-tasks">
		<a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
			<span class="archive-month"><?php echo date("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></span>
			<span class="archive-count"><?php echo $month->post_count; ?></span>
		</a>
	</li>
<?php $year_prev = $year_current;
endforeach; ?>
</ul>
	</div>