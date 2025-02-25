<?php
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function meu_tema_scripts() {
    // Registrar Bootstrap
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Registrar CSS do tema
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');

function meu_tema_setup() {
    register_nav_menus(array(
        'menu-principal' => 'Menu Principal',
    ));
}
add_action('after_setup_theme', 'meu_tema_setup');

wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
