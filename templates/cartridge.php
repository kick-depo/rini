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
      </div>
    </div>
  </div>  
</main>


<?php get_footer(); ?>