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
      <h1><?= CFS()->get('test_1'); ?></h1>
      <h2><?= CFS()->get('test_2'); ?></h2>
      <h3><?= CFS()->get('test_3'); ?></h3>
    </div>
    <div class="col-lg-3 col-sm-12">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>