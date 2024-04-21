<?php 
/* 
Template Name: Оргтехника
*/ 
get_header();
?>

<main class="mb-5">
  <div class="container">
    <div class="row">
      <h1 class="mb-4">Оргтехника в продаже</h1>
      <div class="col-lg-9 col-md-12">
        <!-- Тут должны быть кнопки -->
        <div class="rini_table_scroll">
          <?php the_content(); ?>
        </div>
      </div>
      <!-- Правый инфобар -->
      <div class="col-lg-3 col-sm-12 my-3">
        <?php get_sidebar(); ?>
        <h3 class="text-uppercase mb-3">Прайс оргтехники</h3>
        <a href="#" class="btn btn-primary">СКАЧАТЬ EXCEL</a>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>