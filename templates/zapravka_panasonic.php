<?php 
/* 
Template Name: Заправка Panasonic
*/ 
get_header();
?>

<main>
  <div class="container">
    <div class="row">
      <h2>Заправка картриджей Panasonic</h2>
      <div class="col-lg-9 col-sm-12">
        <p>При выезде на заправку до 4 шт +350 руб за картридж, от 4 до 10 шт +120 руб за картридж, от 10 до 40 шт + 60 руб за картридж. Забираем в сервис, заправляем, привозим - 700 руб за доставку</p>
        <p class="mb-4"><strong>Выезд мастера на диагностику и ремонт оргтехники - 900 руб<br>
          Диагностика оргтехники в нашем сервис центре - БЕСПЛАТНО</strong>
        </p>

        <div class="rini_zapravka_menu text-uppercase mb-3">
        <?php         
          wp_nav_menu(array(
              'theme_location' => 'zapravka_menu',
              'container' => false,
              'items_wrap' => '%3$s',
              'link_class' => 'btn btn-primary', 
          ));
        ?>
        </div>

        <div class="rini_table_scroll">
          <?php echo the_content();?>
        </div>
 
      </div>
      <!-- Правый инфобар -->
      <div class="col-lg-3 col-sm-12 my-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>