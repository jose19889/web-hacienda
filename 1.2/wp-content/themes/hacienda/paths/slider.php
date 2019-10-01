<?php
$slides = array(); 
$args = array( 'cat' => 3, 'nopaging'=>true, 'posts_per_page'=>3 );
$slider_query = new WP_Query( $args );
if ( $slider_query->have_posts() ) {
    while ( $slider_query->have_posts() ) {
        $slider_query->the_post();
        if(has_post_thumbnail()){
            $temp = array();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'post-thumbnails', true);
            $thumb_url = $thumb_url_array[0];
            $temp['title'] = get_the_title();
            $temp['excerpt'] = get_the_excerpt();
            $temp['image'] = $thumb_url;
            $slides[] = $temp;
        }
    }
} 
wp_reset_postdata();
?>

<?php if(count($slides) > 0) { ?>
<div class="container">
<div id="carousel-example-generic" class=" carousel slide carousel-fade caption-animate" 
data-ride="carousel" data-interval="3000" data-pause="null" >
  
    <ol class="carousel-indicators">
        <?php for($i=0;$i<count($slides);$i++) { ?>
        <li data-target="#carousel-example-generic " data-slide-to="<?php echo $i ?>" <?php if($i==0) { ?>class="active"<?php } ?>></li>
        <?php } ?>
    </ol>

    <div class="carousel-inner" role="listbox">
       <div class="timer"></div> 
        <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
        <div class="item <?php if($i == 0) { ?>active<?php } ?>">
            <img src="<?php echo $image ?>" alt="<?php echo esc_attr($title); ?>">
            <div class="carousel-caption fadeInDown"><h3><?php echo $title; ?></h3><p><?php echo $excerpt; ?></p></div>
        </div>
        <?php $i++; } ?>
    </div>

    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>

</div>
</div>

<?php } ?>


<!--time for slider-->
<script type="text/javascript">
    /* Slider (work in progress)
 * 03/09/2015 by Andrew Errico
 */
$(function() {

    // slider type
    $t = "slide"; // opitions are fade and slide
    //variables
    $d = 3000;  // duration per slide
    
    $n = $('.slide').length; //number of slides
    $w = $('.slide').width(); // slide width
    $c = $('.container').width(); // container width
    $ss = $n * $w; // slideshow width
  
    
      function timer() {
        $('.timer').animate({"width":$w}, $d);
        $('.timer').animate({"width":0}, 0);
    }
    
    function slide() {
      timer();
        var setSlideCSS = {
            'width' : $c
        }
        var setSlideShowCSS = {
            'width' : $ss // set width of slideshow container
        }
        $('.slide').css(setSlideCSS);
        $('.slideshow').css(setSlideShowCSS); 
        
        
        setInterval(function() {
            timer();
            $('.slideshow').animate({"left": -$w}, $s, function(){
                // to create infinite loop
                $('.slideshow').css('left',0).append( $('.slide:first'));
            });
        }, $d);
        
    }
    
    if ($t == "fade") {
        fadeInOut();
        
    } if ($t == "slide") {
        slide();
        
    } else {
      
    }
});
</script>
