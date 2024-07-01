<?php
/* 
Template Name: Результаты поиска
*/
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-lg-9 col-sm-12">
      <?php if (have_posts()) { ?>
          <h2>Результат поиска для: <?= esc_html(get_search_query()); ?></h2>
          <?php while (have_posts()) { the_post(); ?>
            <div>
              <h3><a href="<?= esc_url(get_permalink()); ?>"><?= esc_html(get_the_title()); ?></a></h3>
              <!-- <div><?= esc_html(get_the_excerpt()); ?></div> -->
            </div>
          <?php } ?>
          <?php the_posts_navigation(); ?>
      <?php } else { ?>
          <h3>Результаты не найдены для: <?= esc_html(get_search_query()); ?></h3>
      <?php } ?>
    </div>
    <div class="col-lg-3 col-sm-12 my-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>