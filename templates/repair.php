<?php 
/* 
Template Name: Ремонт
*/ 
get_header();
?>

  <main>
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-9 col-sm-12">
          <h2 class="mb-3">Ремонт Оргтехники</h2>
          <a href="proshivka.html" class="btn btn-primary mb-4" role="Button">Прошивка оргтехники</a>
          <?php the_content(); ?>
          <!-- <div class="card mb-4">
            <h5 class="card-header">Услуги</h5>
            <div class="card-body">
              <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">Выезд мастера в пределах МКАД — от 900 руб</li>
                <li class="list-group-item">Диагностика у нас — 0 руб</li>
                <li class="list-group-item">Забрать аппарат в ремонт и привезти после ремонта — 1000 руб</li>
              </ul>
              <h5 class="card-title">Монохром лазерные</h5>
              <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">Профилактика принтера А4 без доп.оборудования — от 900 руб</li>
                <li class="list-group-item">Профилактика принтера А3 без доп.оборудования — от 1200 руб</li>
                <li class="list-group-item">Профилактика МФУ А4 без доп.оборудования — от 1200 руб</li>
                <li class="list-group-item">Профилактика МФУ А3 без доп.оборудования — от 1500 руб</li>
                <li class="list-group-item">Замена роликов захвата бумаги — от 600 руб + ролик</li>
                <li class="list-group-item">Замена тормозной площадки и роликов отделения — от  600 руб руб + площадка/ролик отделения</li>
                <li class="list-group-item">Замена основных блоков А4 (питание ,лазер, платы) — от 1200 руб + блок</li>
                <li class="list-group-item">Замена основных блоков А3 — от 1800 руб + блок</li>
                <li class="list-group-item">Замена термопленки А4 — от 1500 руб + термопленка</li>
                <li class="list-group-item">Замена термопленки А3 — от 2650 руб + термопленка</li>
                <li class="list-group-item">Замена тефлонового вала А4 — от 1500 руб + тефлон</li>
                <li class="list-group-item">Замена тефлонового вала А3 — от 2400 руб + тефлон</li>
                <li class="list-group-item">Восстановление прошивки — от 1500 руб</li>
                <li class="list-group-item">Ремонт — от 900</li>
              </ul>
              <h5 class="card-title">Цветные лазерные</h5>
              <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">Профилактика принтера А4 без доп.оборудования — от 1500 руб</li>
                <li class="list-group-item">Профилактика принтера А3 без доп.оборудования — от 2000 руб</li>
                <li class="list-group-item">Профилактика МФУ А4 без доп.оборудования — от 1800 руб</li>
                <li class="list-group-item">Профилактика МФУ А3 без доп.оборудования — от 3500 руб</li>
                <li class="list-group-item">Замена роликов захвата бумаги — от 900 руб + ролик</li>
                <li class="list-group-item">Замена тормозной площадки и роликов отделения — от  900 руб руб + площадка/ролик отделения</li>
                <li class="list-group-item">Замена основных блоков А4 (питание ,лазер, платы) — от 1500 руб + блок</li>
                <li class="list-group-item">Замена основных блоков А3 — от 2000 руб + блок</li>
                <li class="list-group-item">Замена термопленки А4 — от 2000 руб + термопленка</li>
                <li class="list-group-item">Замена термопленки А3 — от 2800 руб + термопленка</li>
                <li class="list-group-item">Замена Тефлонового вала А4 — от 1800 руб + тефлон</li>
                <li class="list-group-item">Замена тефлонового вала А3 — от 2650 руб + тефлон</li>
                <li class="list-group-item">Восстановление прошивки — от 1500 руб</li>
                <li class="list-group-item">Чистка лазера — от 3000 руб</li>
                <li class="list-group-item">Ремонт — от 1500 руб</li>
              </ul>
            </div>
          </div> -->
        </div>

        <!-- Правый инфобар -->
        <div class="col-lg-3 col-sm-12 my-5">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>