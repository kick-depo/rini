<?php 
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
add_action('after_setup_theme', 'add_menu');
function add_scripts_and_styles() {
  wp_enqueue_style('bootstrap_style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
  wp_enqueue_style('style', get_stylesheet_uri());
}
function add_menu() {
  register_nav_menu('top', 'Меню в хедере');
  register_nav_menu('bottom', 'Меню в футере');
}

?>