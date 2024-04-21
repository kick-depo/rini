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
      <p>Принтеры под картридж</p>
        <div>
        <?php $loop_analog = CFS()->get('cartridge_analog_add');
            foreach ($loop_analog as $item_analog) {
              ?>
              <a href="<?= $item_analog['cartridge_analog_link']['url'];?>"><?= $item_analog['cartridge_analog_link']['text'];?></a>
              <div>
              <pre>
                <?php print_r($loop_analog);?>
               </pre>
              </div>
              <?php
            }
            ?>

            <!-- <pre>
              <?php print_r($loop);?>
            </pre> -->
        </div>
    </div>
    <div class="col-lg-3 col-sm-12">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>