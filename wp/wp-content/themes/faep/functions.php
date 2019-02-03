<?php
	//Limpa o Wordpress
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

	// Custom Post Type
	function custom_post_type_cursos() {
		register_post_type('cursos', array(
			'label' => 'cursos',
			'description' => 'cursos',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array('slug' => 'cursos', 'with_front' => true),
			'query_var' => true,
			'supports' => array('title', 'editor', 'page-attributes','post-formats'),
			'taxonomies' => array('category'),

			'labels' => array (
				'name' => 'cursos',
				'singular_name' => 'curso',
				'menu_name' => 'cursos',
				'add_new' => 'Adicionar Novo',
				'add_new_item' => 'Adicionar Novo Curso',
				'edit' => 'Editar',
				'edit_item' => 'Editar curso',
				'new_item' => 'Novo curso',
				'view' => 'Ver curso',
				'view_item' => 'Ver curso',
				'search_items' => 'Procurar curso',
				'not_found' => 'Nenhum Curso Encontrado',
				'not_found_in_trash' => 'Nenhum Cursos Encontrado no Lixo',
			)
		));
	}
	add_action('init', 'custom_post_type_cursos');


	// Custom Post Type
	function custom_post_type_eventos() {
		register_post_type('eventos', array(
			'label' => 'eventos',
			'description' => 'eventos',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array('slug' => 'eventos', 'with_front' => true),
			'query_var' => true,
			'supports' => array('title', 'editor', 'page-attributes','post-formats'),
			'taxonomies' => array('category'),

			'labels' => array (
				'name' => 'eventos',
				'singular_name' => 'evento',
				'menu_name' => 'eventos',
				'add_new' => 'Adicionar Novo',
				'add_new_item' => 'Adicionar Novo Evento',
				'edit' => 'Editar',
				'edit_item' => 'Editar Evento',
				'new_item' => 'Novo Evento',
				'view' => 'Ver evento',
				'view_item' => 'Ver evento',
				'search_items' => 'Procurar evento',
				'not_found' => 'Nenhum Evento Encontrado',
				'not_found_in_trash' => 'Nenhum Eventos Encontrado no Lixo',
			)
		));
	}
	add_action('init', 'custom_post_type_eventos');

	function wordpress_pagination() {
            global $wp_query;
 
            $big = 999999999;
 
            echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages
            ) );
      }

?>