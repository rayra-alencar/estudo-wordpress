<?php
function add_theme_scripts() {
wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '3.0', true );

  wp_enqueue_style( 'style', get_stylesheet_uri());
 
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.1', true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function custom_redirects() { 
    if ( is_front_page() ) {
        wp_redirect( home_url( '/index.php/home/' ) );
        die;
    } 
}
add_action( 'template_redirect', 'custom_redirects' );


function acf_lojas(){
  $labels = array(
    'name'                => __('Lojas'),
    'singular_name'       => __('Loja'),
    'menu_name'           => __('Lojas'),   
    'parent_item_colon'   => __('Parent Loja'),
		'all_items'           => __('Todas as Lojas'),
		'view_item'           => __('View Loja'),
    'add_new_item'        => __('Adicionar Loja'),
    'edit_item'           => __('Editar Loja'),
    'update_item'         => __('Update Loja'),
    'search_items'        => __('Search Loja'),
    'not_found'           => __('Not Found')
  );

  $args = array(
    'label'               => __('lojas'),
    'description'         => __('lojas do grupo restoque'),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields'), // elementos que vao ter no Adicionar Novo
    'menu_icon'           => 'dashicons-store', //icone
    'menu_position'       => 1,  //posicao no menu do painel de controle
    'public'              => true,
    'hierarchical'        => false,
		'show_ui'             => true, // se vai ser visivel no painel de controle  
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false, // resultado de pesquisas - padrão: publico 
	  'yarpp_support'       => true,
		'taxonomies' 	        => array('estados'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
    
  );

  register_post_type('lojas', $args);

}
add_action('init', 'acf_lojas', 0 );


add_action('init', 'acf_lojas_taxonomy', 0);




function acf_lojas_taxonomy(){

  $labels = array(
    'name'              => _x('Estados', 'taxonomy general name' ),
    'singular_name'     => _x('Estado', 'taxonomy singular name'),
    'search_items'      => __('Search Estado'),
    'all_items'         => __('Todos os Estados'),
    'parent_item'       => __('Parent Estado'),
    'parent_item_colon' => __('Parent Estado:'),
    'edit_item'         => __('Editar Estado'),
    'update_item'       => __('Update Estado'),
    'add_new_item'      => __('Adicionar Estado'),
    'new_item_name'     => __('New Estado Name'),
    'menu_name'         => __('Estados'),
  );

  register_taxonomy('estados', array('lojas'), array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'estados'),
  ));

}



function revistas(){

  $labels = array(
  'name'                => __('Revistas'),
  'singular_name'       => __('Revista'),
  'menu_name'           => __('Revistas'),   
  'parent_item_colon'   => __('Parent Revistas'),
'all_items'           => __('Todas as Revistas'),
'view_item'           => __('View Revista'),
  'add_new_item'        => __('Adicionar Revista'),
  'edit_item'           => __('Editar Revista'),
  'update_item'         => __('Update Revista'),
  'search_items'        => __('Search Revista'),
  'not_found'           => __('Not Found')
);


$args = array(
  'label'               => __('revistas'),
  'description'         => __('Editorial Le Lis Blanc - Revistas'),
  'labels'              => $labels,
  'supports'            => array('title', 'editor', 'thumbnail', 'revisions'), 
  'menu_icon'           => 'dashicons-book-alt', 
  'menu_position'       => 4,
  'public'              => true,
  'hierarchical'        => false,
'show_ui'             => true, 
'show_in_menu'        => true,
'show_in_nav_menus'   => true,
'show_in_admin_bar'   => true,
'has_archive'         => true,
'can_export'          => true,
'yarpp_support'       => true,
// 'taxonomies' 	        => array('revistas'),
'publicly_queryable'  => true,
'capability_type'     => 'page'    
);

  register_post_type('revistas', $args);

}
add_action('init', 'revistas', 0);