<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="картриджи, картриджи к принтерам, картриджи hp, картриджи canon, картриджи xerox, картриджи samsung, картриджи panasonic, интернет магазин, доставка картриджей">
  <meta name="description" content="Картриджи к оргтехнике. Лучшие цены, бесплатная доставка картриджей по Москве.">
  <title>
    <?php
    if(is_404()) {
      echo 'Ошибка 404';
    } else {
      echo the_title() . ' Rini.ru - Картриджи, расходные материалы для оргтехники.';
    }
    ;?>
  </title>
  <?php wp_head(); ?>
</head>
<body>

<header class="mb-4">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= home_url(); ?>">
        <img src="<?= home_url( '/' ).'rini-logo/';?>" alt="Логотип">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarContent">
        <?php 
          wp_nav_menu( [
            'theme_location' => 'top',
            'container' => false,
            'menu_class' => 'navbar-nav me-auto',
            'depth' => 2,
            'menu_id' => '',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
          ] );?>

      </div>
        
      <form class="d-flex me-2 my-2 form-search" action="">
        <input class="form-control" type="search" placeholder="Поиск">
        <button class="btn btn-outline-secondary rini-btn">Найти</button>
      </form>
    </div>
  </nav>
</header>
