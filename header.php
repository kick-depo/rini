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
      the_title();
    }
    ;?>
  </title>
  <link href="style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
  <?php wp_head(); ?>
</head>
<body>

<header class="mb-4">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= home_url(); ?>">
        <img class="" src="img/rini-logo.png" alt="Логотип">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="cartridge.html">Картриджи</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="zapravka/zapravka.html">Заправка</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bu.html">Покупка Б/У</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="office-equipment.html">Оргтехника</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="condition.html">Установка</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="repair.html">Ремонт</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Контакты</a>
          </li>
        </ul>
      </div>
        
      <form class="d-flex me-2 my-2 form-search" action="">
        <input class="form-control" type="search" placeholder="Поиск">
        <button class="btn btn-outline-secondary rini-btn">Найти</button>
      </form>
    </div>
  </nav>
</header>
