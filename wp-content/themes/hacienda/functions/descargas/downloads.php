<?php
/**
 * Custom "Download" custom type for tutorial on Jayj.dk
 *
 * @link http://jayj.dk/2011/download-cpt-wordpress
 * @link http://jayj.dk/2011/download-cpt-wordpress-part-2
 */

/**
 * Add the download post type
 */
function jayj_create_download_post_type() {

  register_post_type( 'jayj_download', array(
    'description'         => 'The latest downloads',
    'has_archive'         => 'downloads', // The archive slug
    'rewrite'             => array( 'slug' => 'download' ), // The individual download slug
    'supports'            => array( 'title', 'excerpt', 'thumbnail', 'custom-fields' ),
    'public'              => true,
    'show_ui'             => true,
    'exclude_from_search' => true,
    'labels' => array(
      'name'               => 'Descargas',
      'add_new'            => 'Add New',
      'add_new_item'       => 'Add New Download',
      'edit'               => 'Edit',
      'edit_item'          => 'Edit Download',
      'new_item'           => 'New Download',
      'view'               => 'View Download',
      'view_item'          => 'View Download',
      'search_items'       => 'Search Downloads',
      'not_found'          => 'No downloads found',
      'not_found_in_trash' => 'No downloads found in Trash',
    )
  ));

  /*
   * "Download Categories" taxonomy
   */
  register_taxonomy( 'download-categories', array( 'jayj_download' ), array(
    'labels'       => array(
      'name'          => 'Download Categories',
      'singular_name' => 'Download Category'
    ),
    'rewrite'      => array( 'slug' => 'download-types' ), // slug base
    'public'       => true,
    'hierarchical' => true,
  ));
}

add_action( 'init', 'jayj_create_download_post_type' );

/**
 * Download archive pages
 */
function jayj_download_cpt_archives( $query ) {

  if ( ( is_post_type_archive( 'jayj_download' ) || is_tax( 'download-categories' ) ) && $query->is_main_query() ) {

    // Limit the number of downloads on one page.
    $query->set( 'posts_per_page', 50 );

    // Exclude hidden downloads
    $query->set( 'meta_query', array(
      array(
        'key'     => '_hide_download',
        'value'   => 1,
        'compare' => '!=',
      ),
    ));

  }

  /* Download categories archive page. */
  if ( is_tax( 'download-categories' ) && $query->is_main_query() ) {
    $query->set( 'post_type', 'jayj_download' );
  }

  return $query;
}

add_action( 'pre_get_posts', 'jayj_download_cpt_archives' );

/*
 * Meta box
 *
 * Adds the download meta box for the download post type
 */
function jayj_meta_box_download() {
  add_meta_box( 'jayj-meta-box-download', 'Download Settings', 'jayj_meta_box_download_display', 'jayj_download', 'normal', 'high' );
}

add_action( 'add_meta_boxes', 'jayj_meta_box_download' );

/**
 * Displays the download meta box
 */
function jayj_meta_box_download_display( $object, $box ) {

  // Default values
  $defaults = array(
    'file'    => '',
    'version' => '1.0',
    'postid'  => '',
    // Add more!
  );

  // Get the post meta
  $download = get_post_meta( $object->ID, 'download', true );

  // Merge them the post meta with the default values
  $download = wp_parse_args( $download, $defaults );
?>

  <input type="hidden" name="jayj-meta-box-download" value="<?php echo wp_create_nonce( basename( __FILE__ ) ); ?>" />

    <h2>The ID for this download is: <strong><?php the_ID(); ?></strong></h2>

    <table class="form-table">

        <thead><tr><th><span class="description">None of the fields are required</span></th></tr></thead>

        <tr>
            <th><label for="download-hide">Hide download</label></th>
            <td>
              <?php $hide = get_post_meta( $object->ID, '_hide_download', true ); ?>
        <label><input type="checkbox" name="download-hide" id="download-hide" value="1" <?php checked( '1', $hide ); ?> />
        <span class="description">Check this if you don't want to show the download at the archive page</span></label>
            </td>
        </tr>

        <tr>
            <th><label for="download-file">File</label></th>
            <td>
                <input type="text" id="download-file" size="60" name="download-file" value="<?php echo esc_url( $download['file'] ); ?>" />
                <input type="button" id="upload-file-button"  class="button" value="Upload file" />
                <label for="download-file"><span class="description">Upload or link to download file</span></label>
            </td>
        </tr>

        <tr>
            <th><label for="download-version">Version</label></th>
            <td>
                <input type="text" id="download-version" name="download-version" value="<?php echo esc_attr( $download['version'] ); ?>" size="3" />
            </td>
        </tr>

        <tr>
            <th><label for="download-count">Download count</label></th>
            <td>
              <?php $count = isset( $object->ID ) ? get_post_meta( $object->ID, 'download_count', true ) : 0; ?>
              <input type="number" id="download-count" name="download-count" value="<?php echo absint( $count ); ?>" size="7" min="0" />
        <?php printf( '<p>This file has been downloaded <b>%d</b> times (updated automatically)</p>', absint( $count ) ); ?>
            </td>
        </tr>

        <tr>
            <th><label for="download-postid">Post ID</label></th>
            <td>
              <label><input type="text" id="download-postid" name="download-postid" value="<?php echo absint( $download['postid'] ); ?>" size="3" />
              <span class="description">ID of the post which the download is associated with</span></label>
                <?php if ( ! empty( $download['postid'] ) ) { ?>
                  <p>This download is associated with <a href="<?php echo get_permalink( $download['postid'] ); ?>"><?php echo get_the_title( $download['postid'] ); ?></a></p>
                <?php } ?>
            </td>
        </tr>

    </table>

<?php
}

/**
 * Save the download information
 */
function jayj_meta_box_download_save( $post_id, $post ) {

  /* Verify that the post type supports the meta box and the nonce before preceding. */
  if ( ! isset( $_POST['jayj-meta-box-download'] ) || ! wp_verify_nonce( $_POST['jayj-meta-box-download'], basename( __FILE__ ) ) ) {
    return $post_id;
  }

  /* Don't save them if... */
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
  if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) return;
  if ( defined( 'DOING_CRON' ) && DOING_CRON ) return;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) ) {
    return $post_id;
  }

  /*
   * Add and sanitize the download meta
   */
  update_post_meta( $post_id, 'download', array(
    'file'    => esc_url_raw( $_POST['download-file'] ),
    'version' => strip_tags( $_POST['download-version'] ),
    'postid'  => absint( $_POST['download-postid'] ),
    // Add your own if you've added fields
  ) );

  // Seperate the download count and "hide" from the rest
  update_post_meta( $post_id, 'download_count', absint( $_POST['download-count'] ) );
  update_post_meta( $post_id, '_hide_download', ( $_POST['download-hide'] == 1 ? 1 : 0 ) );
}

add_action( 'save_post', 'jayj_meta_box_download_save', 10, 2 );

/**
 * Adds the script needed for the file upload
 */
function jayj_download_metabox_script() {

  $screen = get_current_screen();

  // Make sure we are on the Download screen
  if ( isset( $screen->post_type ) && 'jayj_download' == $screen->post_type ) : ?>

    <script type="text/javascript">
      jQuery(document).ready(function($){

        var formfield;

        // Open upload window
        $( '#upload-file-button' ).on( 'click', function() {
          formfield = $( '#download-file' ).attr( 'name' );
          tb_show( '', 'media-upload.php?type=image&amp;TB_iframe=true' );
          return false;
        });

        // user inserts file into post. only run custom if user started process using the above process
        // window.send_to_editor(html) is how wp would normally handle the received data
        window.original_send_to_editor = window.send_to_editor;

        window.send_to_editor = function( html ) {
          if ( formfield ) {
            // Get the src value from the image
            fileurl = $( 'img', html ).attr( 'src' );

            // The upload is not an image! Get the href instead
            if ( fileurl === undefined ) {
              fileurl = $(html).attr( 'href' );
            }

            // Insert it into the text box and close
            $( '#download-file' ).val( fileurl );

            tb_remove();
          } else {
            window.original_send_to_editor( html );
          }
        };
      });
        </script>

  <?php
  endif;
}

add_action( 'admin_footer', 'jayj_download_metabox_script' );

/*
 * Download counter function
 */
function jayj_count_and_redirect() {

  // Return if the post is not a download
  if ( ! is_singular( 'jayj_download' ) ) {
    return;
  }

  $download_id = get_queried_object_id();

  $postmeta = get_post_meta( $download_id, 'download', true );
  $count_meta = get_post_meta( $download_id, 'download_count', true );

  // Get the count
  $count = isset( $download_id ) ? $count_meta : 0;

  // Handle the redirect
  $redirect = isset( $download_id ) ? $postmeta['file'] : '';

  if ( ! empty( $redirect ) ) :
    wp_redirect( esc_url_raw( $redirect ), 301 );
    update_post_meta( $download_id, 'download_count', $count + 1 ); // Update the count
    exit;
  else :
    // Redirect failed, redirect to home
    wp_redirect( home_url(), 302 );
    exit;
  endif;
}

add_action( 'template_redirect', 'jayj_count_and_redirect' );


/**
 * Download shortcode
 *
 * ID: ID of the download
 * Format: box or inline. Default is box
 * Title: The title on the links
 * Show_count: Show the download count? If true, the count will be appended to the title as well. Default true, set any value to make it false
 * Thumbnail: Show download thumbnail? Default false, set any value to make it true. Only for 'box' downloads
 *
 * Content: You can add content (like a description) by adding text between the opening and closing shortcode. [download]Content here[/download]
 */
function jayj_download_shortcode( $atts, $content = null ) {

  // Default values
  extract( shortcode_atts( array(
    'id'         => '',
    'format'     => 'box', // or inline
    'title'      => '',
    'show_count' => true,
    'thumbnail'  => false
  ), $atts ) );

  // No ID, return
  if ( empty( $id ) ) {
    return '<em>Error: No download found</em>';
  }

  // Get download
  $download = get_post( $id );

  // The ID doesn't belong to a download, return
  if ( $download->post_type != 'jayj_download' ) {
    return '<em>Error: The download is not valid</em>';
  }

  /**
   * Format: box
   */
  if ( 'box' == $format ) :

    $meta = get_post_meta( $id, 'download', true );
    $count_meta = get_post_meta( $id, 'download_count', true );

    // Start content
    ob_start();
  ?>

        <div class="single-download" id="single-download-<?php echo intval( $id ); ?>">
          <?php
        // Get the title, either from shortcode or the title of the download
        $title = ( $title ) ? $title : 'Download ' .  $download->post_title;

        // Append count to title
        if ( $show_count === true ) {
          $title .= ' (Downloaded ' . number_format( $count_meta ) . ' times)';
        }
      ?>

            <!-- Thumbnail -->
      <?php if ( $thumbnail !== false && has_post_thumbnail( $id ) ) { ?>
        <a href="<?php echo get_permalink( $id ); ?>" title="<?php echo esc_attr( $title ); ?>"><?php echo get_the_post_thumbnail( $id, 'thumbnail' ); ?></a>
      <?php } ?>

            <?php if ( ! empty( $content ) ) { ?>
        <div class="download-text"><?php echo $content; ?></div>
      <?php } ?>

      <a href="<?php echo get_permalink( $id ); ?>" title="<?php echo esc_attr( $title ); ?>" class="download-link">Download</a>

            <?php
        // Show count
        if ( $show_count === true ) {
          echo '<span class="download-count">' . sprintf( __( 'Downloaded %s times', 'yourtextdomain' ), number_format( $count_meta ) ) . '</span>';
        }
      ?>
    </div> <!-- .single-download -->

  <?php
    // Return the content
    return ob_get_clean();

  endif; // 'box' == $format

  /**
   * Format: inline
   */
  if ( 'inline' == $format ) :

    $count_meta = get_post_meta( $id, 'download_count', true );

    // Get the title, either from shortcode or the title of the download
    $title = ( $title ) ? $title : 'Download ' .  $download->post_title;

    // Append count to title
    if ( $show_count === true ) {
      $title .= ' (Downloaded ' . number_format( $count_meta ) . ' times)';
    }

    // Get content
    $content = ( empty( $content ) ) ? 'Download ' .  $download->post_title : $content;

    return '<a href="' . get_permalink( $id ) . '" class="inline-download" title="' .  esc_attr( $title ) . '">' . $content . '</a>';
  endif; // 'inline' == $format

  return;
}

add_shortcode( 'download', 'jayj_download_shortcode' );

/**
 * Register the widgets
 */
function jayj_downloads_widgets_init() {
  register_widget( 'Jayj_Popular_Downloads_Widget' );
  register_widget( 'Jayj_Latest_Downloads_Widget' );
}

add_action( 'widgets_init', 'jayj_downloads_widgets_init' );

/**
 * Custom Widget for displaying the most popular downloads
 *
 * Learn more: http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class Jayj_Popular_Downloads_Widget extends WP_Widget {

  /**
   * Set up the widget's unique name, ID, class, description, and other options
   */
  function __construct() {

    /* Set up the widget options. */
    $widget_options = array(
      'classname'   => 'widget_jayj_popular_downloads',
      'description' => 'Use this widget to list your most popular downloads'
    );

    /* Create the widget. */
    $this->WP_Widget(
      'jayj-popular-downloads',   // $this->id_base
      'Popular Downloads',        // $this->name
      $widget_options             // $this->widget_options
    );

    $this->alt_option_name = 'widget_jayj_popular_downloads';

    add_action( 'save_post',    array( $this, 'flush_widget_cache' ) );
    add_action( 'deleted_post', array( $this, 'flush_widget_cache' ) );
    add_action( 'switch_theme', array( $this, 'flush_widget_cache' ) );
  }

  /**
   * Outputs the HTML for this widget.
   *
   * @param array An array of standard parameters for widgets in this theme
   * @param array An array of settings for this widget instance
   * @return void Echoes it's output
   **/
  function widget( $args, $instance ) {
    $cache = wp_cache_get( 'widget_jayj_popular_downloads', 'widget' );

    if ( ! is_array( $cache ) ) {
      $cache = array();
    }

    if ( ! isset( $args['widget_id'] ) ) {
      $args['widget_id'] = null;
    }

    if ( isset( $cache[$args['widget_id']] ) ) {
      echo $cache[$args['widget_id']];
      return;
    }

    ob_start();
    extract( $args, EXTR_SKIP );

    $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Popular Downloads', 'yourtextdomain' ) : $instance['title'], $instance, $this->id_base);

    /* Create the query. */
    $popular_downloads_args = array(
      'post_type'      => 'jayj_download',
      'posts_per_page' => (int) $instance['number'],
      'no_found_rows'  => true,
      'post_status'    => 'publish',

      // Order by download count
      'meta_key'       => 'download_count',
      'orderby'        => 'meta_value_num',
      'order'          => 'DESC',

      // Exclude hidden downloads
      'meta_query'     => array(
        array(
          'key'     => '_hide_download',
          'value'   => 1,
          'compare' => '!=',
        ),
      ),
    );

    $popular_downloads = new WP_Query( $popular_downloads_args );

    if ( $popular_downloads->have_posts() ) :

      echo $before_widget;

        echo $before_title . $title . $after_title;
  ?>

    <ol>
    <?php while ( $popular_downloads->have_posts() ) : $popular_downloads->the_post(); ?>

      <li class="widget-entry-title">
        <?php $count = get_post_meta( get_the_ID(), 'download_count', true ); ?>

        <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Download %s', 'yourtextdomain' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?>&nbsp;<span>&rarr;</span></a>

                <span class="download-count">
          Downloads: <?php echo number_format( $count ); ?>
        </span>
      </li>

    <?php endwhile; ?>
    </ol>

  <?php
    echo $after_widget;

    // Reset the post globals as this query will have stomped on it
    wp_reset_postdata();

    // end check for ephemeral posts
    endif;

    $cache[$args['widget_id']] = ob_get_flush();
    wp_cache_set( 'widget_jayj_popular_downloads', $cache, 'widget' );
  }

  /**
   * Deals with the settings when they are saved by the admin. Here is
   * where any validation should be dealt with.
   **/
  function update( $new_instance, $old_instance ) {
    $instance           = $old_instance;

    $instance['title']  = strip_tags( $new_instance['title'] );
    $instance['number'] = (int) $new_instance['number'];

    /* Flush the cache */
    $this->flush_widget_cache();

    $alloptions = wp_cache_get( 'alloptions', 'options' );

    if ( isset( $alloptions['widget_jayj_popular_downloads'] ) ) {
      delete_option( 'widget_jayj_popular_downloads' );
    }

    return $instance;
  }

  function flush_widget_cache() {
    wp_cache_delete( 'widget_jayj_popular_downloads', 'widget' );
  }

  /**
   * Displays the form for this widget on the Widgets page of the WP Admin area.
   **/
  function form( $instance ) {
    $title  = isset( $instance['title']) ? esc_attr( $instance['title'] ) : '';
    $number = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
?>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'twentyeleven' ); ?></label>
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
      </p>

      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php _e( 'Number of posts to show:', 'twentyeleven' ); ?></label>
        <input id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" size="3" />
      </p>
    <?php
  }
}

/**
 * Custom Widget for displaying the latest downloads
 *
 * Learn more: http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class Jayj_Latest_Downloads_Widget extends WP_Widget {

  /**
   * Set up the widget's unique name, ID, class, description, and other options
   */
  function __construct() {

    /* Set up the widget options. */
    $widget_options = array(
      'classname'   => 'widget_jayj_latest_downloads',
      'description' => 'Use this widget to list your latest downloads'
    );

    /* Create the widget. */
    $this->WP_Widget(
      'jayj-latest-downloads',  // $this->id_base
      'Latest Downloads',       // $this->name
      $widget_options           // $this->widget_options
    );

    $this->alt_option_name = 'widget_jayj_latest_downloads';

    add_action( 'save_post', array( $this, 'flush_widget_cache' ) );
    add_action( 'deleted_post', array( $this, 'flush_widget_cache' ) );
    add_action( 'switch_theme', array( $this, 'flush_widget_cache' ) );
  }

  /**
   * Outputs the HTML for this widget.
   *
   * @param array An array of standard parameters for widgets in this theme
   * @param array An array of settings for this widget instance
   * @return void Echoes it's output
   **/
  function widget( $args, $instance ) {
    $cache = wp_cache_get( 'widget_jayj_latest_downloads', 'widget' );

    if ( !is_array( $cache ) ) {
      $cache = array();
    }

    if ( ! isset( $args['widget_id'] ) ) {
      $args['widget_id'] = null;
    }

    if ( isset( $cache[$args['widget_id']] ) ) {
      echo $cache[$args['widget_id']];
      return;
    }

    ob_start();
    extract( $args, EXTR_SKIP );

    $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Latest Downloads', 'yourtextdomain' ) : $instance['title'], $instance, $this->id_base);

    $latest_downloads_args = array(
      'post_type'      => 'jayj_download',
      'order'          => 'DESC',
      'posts_per_page' => (int) $instance['number'],
      'no_found_rows'  => true,
      'post_status'    => 'publish',

      // Exclude hidden downloads
      'meta_query'     => array(
        array(
          'key'     => '_hide_download',
          'value'   => 1,
          'compare' => '!=',
        ),
      ),
    );

    $latest_downloads = new WP_Query( $latest_downloads_args );

    if ( $latest_downloads->have_posts() ) :

      echo $before_widget;

        echo $before_title . $title . $after_title;
  ?>

    <ol>
    <?php while ( $latest_downloads->have_posts() ) : $latest_downloads->the_post(); ?>

      <li class="widget-entry-title">
        <?php $count = get_post_meta( get_the_ID(), 'download_count', true ); ?>

        <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Download %s', 'yourtextdomain' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?>&nbsp;<span>&rarr;</span></a>

                <span class="download-count">
          Downloads: <?php echo number_format( $count ); ?>
        </span>
      </li>

    <?php endwhile; ?>
    </ol>

  <?php

    echo $after_widget;

    // Reset the post globals as this query will have stomped on it
    wp_reset_postdata();

    endif;

    $cache[$args['widget_id']] = ob_get_flush();
    wp_cache_set( 'widget_jayj_latest_downloads', $cache, 'widget' );
  }

  /**
   * Deals with the settings when they are saved by the admin. Here is
   * where any validation should be dealt with.
   **/
  function update( $new_instance, $old_instance ) {
    $instance           = $old_instance;
    $instance['title']  = strip_tags( $new_instance['title'] );
    $instance['number'] = (int) $new_instance['number'];

    /* Flush the cache */
    $this->flush_widget_cache();

    $alloptions = wp_cache_get( 'alloptions', 'options' );
    if ( isset( $alloptions['widget_jayj_latest_downloads'] ) ) {
      delete_option( 'widget_jayj_latest_downloads' );
    }

    return $instance;
  }

  function flush_widget_cache() {
    wp_cache_delete( 'widget_jayj_latest_downloads', 'widget' );
  }

  /**
   * Displays the form for this widget on the Widgets page of the WP Admin area.
   **/
  function form( $instance ) {
    $title = isset( $instance['title']) ? esc_attr( $instance['title'] ) : '';
    $number = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
?>
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'twentyeleven' ); ?></label>
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
      </p>

      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php _e( 'Number of posts to show:', 'twentyeleven' ); ?></label>
        <input id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" size="3" />
      </p>
    <?php
  }
}

?>
