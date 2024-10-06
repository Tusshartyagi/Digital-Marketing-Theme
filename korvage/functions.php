<?php

/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */

add_action('wp_enqueue_scripts', 'korvage_style');
function korvage_style()
{

	// Enqueue child theme style
	wp_enqueue_style('child-style', get_stylesheet_uri());

	// Enqueue child theme asset
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/asset/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/asset/css/font-awesome-4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('Magnific-Popup', get_stylesheet_directory_uri() . '/asset/css/magnific-popup.css');
	wp_enqueue_style('Owl-Carousel', get_stylesheet_directory_uri() . '/asset/css/owl.carousel.css');
	wp_enqueue_style('main', get_stylesheet_directory_uri() . '/asset/css/style.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/asset/css/style.scss');
    wp_enqueue_style('mavio', 'https://get.mavo.io/stable/mavo.min.css');
	wp_enqueue_style('Responsive-Css', get_stylesheet_directory_uri() . '/asset/css/responsive.css');
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap', array(), null);

	// Enqueue child theme scripts
	wp_enqueue_script('popper', get_stylesheet_directory_uri() . '/asset/js/popper.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/asset/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('carousel', get_stylesheet_directory_uri() . '/asset/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('popup', get_stylesheet_directory_uri() . '/asset/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('isotope', get_stylesheet_directory_uri() . '/asset/js/isotope.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('imageloaded', get_stylesheet_directory_uri() . '/asset/js/imageloaded.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('counterup', get_stylesheet_directory_uri() . '/asset/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('waypoint', get_stylesheet_directory_uri() . '/asset/js/waypoint.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('main', get_stylesheet_directory_uri() . '/asset/js/main.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('updated', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array('jquery'), '3.1.0', true);
    wp_enqueue_script('mavio', 'https://get.mavo.io/stable/mavo.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('amcharts-index', get_stylesheet_directory_uri() . 'https://cdn.amcharts.com/lib/5/index.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('amcharts-percent', get_stylesheet_directory_uri() . 'https://cdn.amcharts.com/lib/5/percent.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('amcharts-animated', get_stylesheet_directory_uri() . 'https://cdn.amcharts.com/lib/5/themes/Animated.js', array('jquery'), '1.0.0', true);
}