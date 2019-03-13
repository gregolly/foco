<?php
// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');




// Habilitar Menus
add_theme_support('menus');

// Registrar o Menu
function register_my_menu() {
  register_nav_menu('menu-principal',__( 'Menu principal' ));
}
add_action( 'init', 'register_my_menu' );


//definir as miniaturas dos posts
add_theme_support('post-thumbnails');

add_image_size('post-thumbnails', 150, 150, true);


add_action('init', 'foco_action_init');
//adicionar custom post type
function foco_action_init(){
  //chama função custom post type
  foco_registrar_custom_post_type();
  trabalho_register_custom_type();
}

function foco_registrar_custom_post_type() {

	$Eventos = array(
		'name' => 'Eventos',
		'singular_name' => 'Eventos',
		'add_new' => 'Adicionar Novo Eventos',
		'add_new_item' => 'Adicionar Eventos',
		'edit_item' => 'Editar Eventos',
		'new_item' => 'Novo Eventos',
		'view_item' => 'Ver Eventos',
		'search_items' => 'Procurar Eventos',
		'not_found' =>  'Nenhum Eventos encontrado',
		'not_found_in_trash' => 'Nenhum Eventos na Lixeira',
		'parent_item_colon' => '',
		'menu_name' => 'Eventos'
	);

	$argsEventos = array(
		'labels' => $EventosFoco,  //Insere o Array de labels dentro do argumento de labels
		'public' => true,  //Se o Custom Type pode ser adicionado aos menus e exibidos em buscas
		'hierarchical' => false,  //Se o Custom Post pode ser hierarquico como as páginas
		'menu_position' => 5,  //Posição do menu que será exibido
		'supports' => array('title','editor','thumbnail', 'custom-fields', 'revisions'), //Quais recursos serão usados (metabox)
		'show_in_rest'=> true
    );

	register_post_type( 'Eventos' , $argsEventos );

  flush_rewrite_rules();
  
}
function trabalho_register_custom_type(){
  $Trabalhos = array(
		'name' => 'Trabalhos',
		'singular_name' => 'Trabalhos',
		'add_new' => 'Adicionar Novo Trabalhos',
		'add_new_item' => 'Adicionar Trabalhos',
		'edit_item' => 'Editar Trabalhos',
		'new_item' => 'Novo Trabalhos',
		'view_item' => 'Ver Trabalhos',
		'search_items' => 'Procurar Trabalhos',
		'not_found' =>  'Nenhum Trabalhos encontrado',
		'not_found_in_trash' => 'Nenhum Trabalhos na Lixeira',
		'parent_item_colon' => '',
		'menu_name' => 'Trabalhos'
	);

	$argsTrabalhos = array(
		'labels' => $TrabalhosFoco,  //Insere o Array de labels dentro do argumento de labels
		'public' => true,  //Se o Custom Type pode ser adicionado aos menus e exibidos em buscas
		'hierarchical' => false,  //Se o Custom Post pode ser hierarquico como as páginas
		'menu_position' => 5,  //Posição do menu que será exibido
		'supports' => array('title','editor','thumbnail', 'custom-fields', 'revisions'), //Quais recursos serão usados (metabox)
		'show_in_rest'=> true
    );

	register_post_type( 'Trabalhos' , $argsTrabalhos ); 

	flush_rewrite_rules();
}
add_action('shortcode', 'foco_registrar_custom_post_type');
add_action('trabalho', 'trabalho_register_custom_type');
?>
