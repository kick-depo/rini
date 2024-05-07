<?php
/*
Template Name: Тестовая страница
*/
get_header();
?>
<div class="container">
  <div class="row">
    <h2 class="mb-4">Тестовая таблица</h2>
    <div class="col-lg-9 col-sm-12">
      <div class="order_form">
        <?= do_shortcode('[contact-form-7 id="da884a1" title="order_cartridge"]');?>
      </div>
    </div>
    <div class="col-lg-3 col-sm-12">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>