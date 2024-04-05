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

function custom_table_class( $custom_table_class ) {
  // Настройка классов таблицы
  $custom_table_class = str_replace( '<table>', '<table class="table table-striped table-bordered mb-5 align-center rini_zapravka_table">', $custom_table_class );
  
  $custom_table_class = preg_replace( '/<table(.*?)>(.*?)<tr(.*?)>(.*?)<\/tr>/', '<table$1>$2<thead$3>$4</thead>', $custom_table_class, 1 );

  $custom_table_class = str_replace( '<th>', '<th scope="col">', $custom_table_class );

  $custom_table_class = str_replace( '<tbody>', '<tbody class="table-group-divider">', $custom_table_class );

  return $custom_table_class;
}
add_filter( 'the_content', 'custom_table_class' );

?>