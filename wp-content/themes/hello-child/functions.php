<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts' );

/**
 * Alterar Mensagem nos resultados da pesquisa
 * Inclua, Remova ou altere o texto desejado em return "Resultados para:"
 */
add_filter('elementor/utils/get_the_archive_title','archive_callback'); function archive_callback( $title ) { if ( is_search() ) { return 'Resultados para:' . get_search_query() ; } return $title; }