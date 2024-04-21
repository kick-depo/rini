<?php 
/* 
Template Name: Страница картриджа
*/ 
get_header();
?>

<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-sm-12">
        <div class="col-lg-6 col-sm-12">
          <h2><?= the_title(); ?></h2>
          <div>
            <img src="<?= CFS()->get('cartridge_photo') ;?>" alt="Изображение картриджа">
          </div>
          <div>
            <p>Фотографии совместимого картриджа:</p>
            <?php $loop = CFS()->get('cartridge_compatible_photo_add');
            foreach ($loop as $item) {
              ?>
              <img src="<?= $item['cartridge_compatible_photo'];?>" alt="Фото совместимого картриджа">
              <?php
            }
            ?>

            <!-- <img src="" alt="Фото совместимого картриджа"> -->
          </div>
          <div>
            <p>Фотографии оригинального картриджа</p>
            <?php $loop = CFS()->get('cartridge_original_photo_add');
            foreach ($loop as $item) {
              ?>
              <img src="<?= $item['cartridge_original_photo'];?>" alt="Фото совместимого картриджа">
              <?php
            }
            ?>
            <!-- <img src="" alt="Фото оригинального картриджа"> -->
          </div>
          <div>
            <p>Дополнительная информация</p>
            <p><?= CFS()->get('cartridge_dopinfo');?></p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div>
            <p>Совместимый</p>
            <p><?= CFS()->get('cartridge_compatible_price');?></p>
            <p>Цена совместимых картриджей от 10 шт.</p>
            <p><?= CFS()->get('cartridge_compatible_price_10');?></p>
          </div>
          <div>
            <p>Оригинальный</p>
            <p><?= CFS()->get('cartridge_original_price');?></p>
            <p>Цена совместимых картриджей от 10 шт.</p>
            <p><?= CFS()->get('cartridge_original_price_10');?></p>
          </div>
          <div>
            <p>Ресурс</p>
            <p><?= CFS()->get('cartridge_resource');?></p>
          </div>
          <div>
            <p>Цвет</p>
            <p><span class="d-block" style="height: 14px; width: 14px; background-color: <?= CFS()->get('cartridge_color');?>"></span></p>
          </div>
        </div>
        <div>
          <p>Принтеры под картридж</p>
          <div>
          <?php $loop = CFS()->get('cartridge_printers_add');
            foreach ($loop as $item) {
              ?>
              <p><?= $item['cartridge_printers_manufacturer'];?></p>
              <?php
              foreach ($item['cartridge_add'] as $item2) {
                ?>
                <a href="<?= $item2['cartridge_printers']['url'];?>">
                  <p><?= $item2['cartridge_printers']['text'];?></p>
                </a>
                <?php
              }
            }
            ?>
          </div>
        </div>
        <div>
          <p>Аналоги картриджа</p>
          <p><?php the_title();?></p>
          <div>
            <?php $loop_analog = CFS()->get('cartridge_analog_add');
            foreach ($loop_analog as $item_analog) {
              ?>
              <a href="<?= $item_analog['cartridge_analog_link']['url'];?>"><?= $item_analog['cartridge_analog_link']['text'];?></a>
              <div>
                <p>Цвет</p>
                <p><span class="d-block" style="height: 14px; width: 14px; background-color: <?= $item_analog['cartridge_analog_color'];?>"></span></p>
              </div>
              <div>
                <p>Ресурс</p>
                <p><?= $item_analog['cartridge_analog_resource'];?></p>
              </div>
              <div>
                <p>Совместимые</p>
                <p><?= $item_analog['cartridge_analog_compatible_price'];?></p>
                <p><?= $item_analog['cartridge_analog_compatible_price_10'];?></p>
              </div>
              <div>
                <p>Ориг.</p>
                <p><?= $item_analog['cartridge_analog_original_price'];?></p>
              </div>
              <?php
            }
            ?>

            <!-- <a href="">HP W1106A (106A) БЕЗ ЧИПА</a> -->
            <!-- <div>
              <p>Цвет</p>
              <div></div>
            </div> -->
            <!-- <div>
              <p>Ресурс</p>
              <p></p>
            </div> -->
            <!-- <div>
              <p>Совместимые</p>
              <p></p>
              <p></p>
            </div> -->
            <!-- <div>
              <p>Ориг.</p>
              <p></p>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-12">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
