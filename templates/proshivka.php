<?php 
/* 
Template Name: Прошивка оргтехники
*/ 
get_header();
?>

<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-sm-12">
        <?php the_content();?>
      </div>
      <div class="col-lg-3 col-sm-12 my-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>


<?php get_footer(); ?>