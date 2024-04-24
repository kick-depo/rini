<?php 
/* 
Template Name: Картриджи
*/ 
get_header();
?>


<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-sm-12">
        <h2>Выбрать по названию картриджа или по принтеру</h2>
        <div>
          <button class="btn btn-primary my-1">Все</button>
          <button class="btn btn-primary my-1">HP</button>
          <button class="btn btn-primary my-1">Canon</button>
          <button class="btn btn-primary my-1">Xerox</button>
          <button class="btn btn-primary my-1">Samsung</button>
          <button class="btn btn-primary my-1">Panasonic</button>
          <button class="btn btn-primary my-1">Brother</button>
          <button class="btn btn-primary my-1">Kyocera</button>
          <button class="btn btn-primary my-1">Konica</button>
          <button class="btn btn-primary my-1">lexmark</button>
          <button class="btn btn-primary my-1">Ricoh</button>
          <button class="btn btn-primary my-1">Epson</button>
          <button class="btn btn-primary my-1">PN</button>
          <button class="btn btn-primary my-1">Sharp</button>
        </div>
        <div class="rini_sort_btns my-3 py-3">
          <button class="btn btn-primary my-1">Все</button>
          <button class="btn btn-primary my-1">Лазерные</button>
          <button class="btn btn-primary my-1">Струйные</button>
        </div>
        <?php the_content(); ?>
      </div>
      <div class="col-lg-3 col-sm-12 my-3">
        <?php get_sidebar(); ?>
        <!-- <h3 class="text-uppercase">Прайс картриджей</h3>
        <a href="#" class="btn btn-primary">ONLINE</a>
        <a href="#" class="btn btn-primary">СКАЧАТЬ EXCEL</a>
        <div class="rini_conditioner my-5">
          <a href="#">
            <img src="img/conditioner-1.jpg" alt="Кондиционер">
          </a>
          <h3 class="text-uppercase">Установка и профилактика<br><a href="#">кондиционеров</a></h3>
        </div>
        <h3 class="mb-5">Скидка -10% постоянным клиентам<br>на совместимые картриджи</h3>
        <h3 class="mb-5">При самовывозе 15% скидка <br>на совместимые картриджи</h3>
        <h3 class="mb-5">Купи <span class="rini_act">любые 10 совместимых лазерных картриджей</span> — получи флеш-карту на 16ГБ </h3>
        <p>
          Изображение товара, может отличаться от реального внешнего вида. Комплектация может быть изменена производителем без предварительного уведомления. Данное описание и кол-во товара не является публичной офертой.
        </p> -->
      </div>
    </div>
  </div>  
</main>


<?php get_footer(); ?>