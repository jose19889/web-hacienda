<?php
// Our custom post type function
function create_posttype() {
 
    register_post_type( 'Descargas',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Descargas' ),//dashboard name
                'singular_name' => __( 'Descarga' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Descargas'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Descargas', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Descarga', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Download', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Descarga', 'twentythirteen' ),
        'all_items'           => __( 'AllDescargas', 'twentythirteen' ),
        'view_item'           => __( 'View Descarga', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Descarga', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Descarga', 'twentythirteen' ),
        'update_item'         => __( 'Update Descarga', 'twentythirteen' ),
        'search_items'        => __( 'Search Descarga', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Descargas', 'twentythirteen' ),
        'description'         => __( 'Descarga news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Descargas', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );


// Creamos dos taxonomías, género y autor para el custom post type "team"
function create_Descargas_taxonomies() {
  /* Configuramos las etiquetas que mostraremos en el escritorio de WordPress */
  $labels = array(
    'name'             => _x( 'categories', 'taxonomy general name' ),
    'singular_name'    => _x( 'Género', 'taxonomy singular name' ),
    'search_items'     =>  __( 'Buscar por Género' ),
    'all_items'        => __( 'Todos los Géneros' ),
    'parent_item'      => __( 'Género padre' ),
    'parent_item_colon'=> __( 'Género padre:' ),
    'edit_item'        => __( 'Editar Género' ),
    'update_item'      => __( 'Actualizar Género' ),
    'add_new_item'     => __( 'Añadir nuevo Género' ),
    'new_item_name'    => __( 'Nombre del nuevo Género' ),
  );
  
  /* Registramos la taxonomía y la configuramos como jerárquica (al estilo de las categorías) */
  register_taxonomy( 'genero', array( 'Descargas' ), array(
    'hierarchical'       => true,
    'labels'             => $labels,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'genero' ),
  ));
  
  /* Si quieres añadir la siguiente taxonomía del ejemplo, sustituye esta línea por la del código correspondiente */
  
}


// add custom post categories to be display

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('Descargas');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'Descargas'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}