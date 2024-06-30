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
        <div class="rini_zapravka_menu text-uppercase mb-3">
          <?php         
            wp_nav_menu(array(
                'theme_location' => 'cartridge_menu',
                'container' => false,
                'items_wrap' => '%3$s',
                'link_class' => 'btn btn-primary', 
            ));
          ?>
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