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
          <a href="<?= home_url('/').'прошивка/';?>" class="btn btn-primary mb-4" role="Button">Прошивка оргтехники</a>
          <div class="rini_fixed_column_table">
          <?php the_content(); ?>
          </div> 
        </div>
        <div class="col-lg-3 col-sm-12 my-5">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>