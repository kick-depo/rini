<?php 
/* 
Template Name: Покупка Б/У
*/ 
get_header();
?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-12">
          <h2>Покупка использованных картриджей</h2>
          <p class="mb-4">Картриджи принимаются ТОЛЬКО по предварительному согласованию всех наименований по телефону <a href="tel:+74956496449">+7 (495) 649-64-49</a></p>
        </div>
        <div class="col-lg-9 col-md-12">
          <div class="rini_table_scroll rini_fixed_column_table">
            <?php echo the_content();?>
          </div>         
        </div>

        <!-- Правый инфобар -->
        <div class="col-lg-3 col-sm-12 my-3">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>