<?php 
require get_template_directory() . '/class-wp-bootstrap-navwalker.php';
add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
add_action('after_setup_theme', 'add_menu');

function add_scripts_and_styles() {
  wp_enqueue_style('bootstrap_style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
  wp_enqueue_style('style', get_stylesheet_uri());
}


function add_menu() {
  register_nav_menu('top', 'Меню в хедере');
  register_nav_menu('bottom', 'Меню в футере');
  register_nav_menu('zapravka_menu', 'Меню заправки');
}

function custom_table_class( $custom_table_class ) {
  // Настройка классов таблицы
  $custom_table_class = str_replace( '<table>', '<table class="table table-striped table-bordered mb-5 align-center rini_zapravka_table">', $custom_table_class );
  
  $custom_table_class = preg_replace( '/<table(.*?)>(.*?)<tr(.*?)>(.*?)<\/tr>/', '<table$1>$2<thead$3>$4</thead>', $custom_table_class, 1 );

  $custom_table_class = str_replace( '<th>', '<th scope="col">', $custom_table_class );

  $custom_table_class = str_replace( '<tbody>', '<tbody class="table-group-divider">', $custom_table_class );

  return $custom_table_class;
}
function add_menu_link_attributes($atts, $item, $args) {
  // Проверяем, что это ссылка и она находится в нужном меню
  if ($args->theme_location === 'zapravka_menu') {
      // Добавляем классы к атрибутам ссылки
      $atts['class'] = 'btn btn-primary my-1';
      $title = str_replace('Заправка ', '', $title);
  }
  return $atts;
}
function change_menu_item_title($title, $item, $args, $depth) {
  // Проверяем, что это меню, к которому мы применяем изменения
  if ($args->theme_location === 'zapravka_menu') {
      // Убираем слово "Заправка" из текста ссылки
      $title = str_replace('Заправка ', '', $title);
  }
  return $title;
}
add_filter('nav_menu_item_title', 'change_menu_item_title', 10, 4);

add_filter('nav_menu_link_attributes', 'add_menu_link_attributes', 10, 3);

add_filter( 'the_content', 'custom_table_class' );

?>