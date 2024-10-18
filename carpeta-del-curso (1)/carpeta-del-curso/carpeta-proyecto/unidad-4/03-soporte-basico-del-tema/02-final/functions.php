<?php

/**
 * Configuración básica del tema
 */
function domestika_setup_theme() {
	// HTML5 para los formularios de búsqueda, comentarios, galerías...
	$supports = [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	];
	add_theme_support( 'html5', $supports );

	// Soporte para etiqueta <title> dentro de <head>
	add_theme_support( 'title-tag' );

	// Soporte para imágenes destacadas
	add_theme_support( 'post-thumbnails' );

	// Soporte para Feed automático para posts y comentarios
	add_theme_support( 'automatic-feed-links' );

	// Anchura del contenido. Sirve especialmente para vídeos embebidos.
	$GLOBALS['content_width'] = 1130;
}
add_action( 'after_setup_theme', 'domestika_setup_theme' );

/**
 * Añade todos los scripts y estilos necesarios para el funcionamiento del tema.
 */
function domestika_enqueue_scripts() {
	wp_enqueue_style( 'domestika-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'domestika_enqueue_scripts' );
