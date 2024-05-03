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
        <div class="row">
        <div class="col-lg-6 col-sm-12">
          <h2><?= the_title(); ?></h2>
          <div>
            <img id="main-image" class="img-fluid" src="<?= CFS()->get('cartridge_photo') ;?>" alt="Изображение картриджа">
          </div>
          <div class="rini_cartridge_gallery">
            <p>Фотографии совместимого картриджа:</p>
            <?php $loop = CFS()->get('cartridge_compatible_photo_add');
            foreach ($loop as $item) {
              ?>
                <img class="thumbnail" src="<?= $item['cartridge_compatible_photo'];?>" alt="Фото совместимого картриджа">
              <?php
            }
            ?>
          </div>
          <div class="rini_cartridge_gallery">
            <p>Фотографии оригинального картриджа</p>
            <?php $loop = CFS()->get('cartridge_original_photo_add');
            foreach ($loop as $item) {
              ?>
                <img class="thumbnail" src="<?= $item['cartridge_original_photo'];?>" alt="Фото совместимого картриджа">
              <?php
            }
            ?>
          </div>
          <div>
            <p>Дополнительная информация</p>
            <p><?= CFS()->get('cartridge_dopinfo');?></p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="rini_cartridge_border">
            <p class="mb-1 fs-4 fw-bold">Совместимый</p>
            <p class="fs-3"><?= CFS()->get('cartridge_compatible_price');?> руб.</p>
            <p class="mb-1 text-muted">Цена совместимых картриджей от 10 шт. - <span><?= CFS()->get('cartridge_compatible_price_10');?> руб.</span></p>
          </div>
          <div class="rini_cartridge_border">
            <p class="mb-1 fs-4 fw-bold">Заправка</p>
            <p class="fs-3"><?= CFS()->get('cartridge_refill_price');?> руб.</p>
          </div>
          <div class="rini_cartridge_border mt-3 pb-3">
            <p class="mb-1 fs-4 fw-bold">Оригинальный</p>
            <p class="fs-3"><?= CFS()->get('cartridge_original_price');?> руб.</p>
            <p class="mb-1 text-muted">Цена оригинальных картриджей от 10 шт. - <span><?= CFS()->get('cartridge_original_price_10');?> руб.</span></p>
          </div>
          <div class="rini_cartridge_border">
            <div class="row my-2">
              <div class="col-6">Ресурс</div>
              <div class="col-6"><?= CFS()->get('cartridge_resource');?> страниц</div>
            </div>
          </div>
          <div class="rini_cartridge_border mb-5">
            <div class="row my-2">
              <div class="col-6">Цвет</div>
              <div class="col-6"><span class="d-block my-1" style="height: 14px; width: 14px; background-color: <?= CFS()->get('cartridge_color');?>"></span></div>
            </div>
          </div>
          <div class="rini_cartridge_border mb-5">
            <p class="mb-1 fw-bold fs-5">Принтеры под картридж</p>
            <p class="fw-bold fs-5"><?= the_title();?></p>
            <div class="mb-4">
              <?php $loop = CFS()->get('cartridge_printers_add');
                foreach ($loop as $item) {
                  ?>
                  <p class="my-1"><?= $item['cartridge_printers_manufacturer'];?></p>
                  <?php
                  foreach ($item['cartridge_add'] as $item2) {
                    ?>
                    <a href="<?= $item2['cartridge_printers']['url'];?>" class="fw-bold fs-6">
                      <span class="me-2"><?= $item2['cartridge_printers']['text'];?></span>
                    </a>
                    <?php
                  }
                }
                ?>
            </div>
          </div>
          <div class="rini_cartridge_border mb-5">
            <p class="mb-1 fw-bold fs-5">Аналоги картриджа</p>
            <p class="fw-bold fs-5"><?php the_title();?></p>
            <div class="row">
              <div>
                <?php $loop_analog = CFS()->get('cartridge_analog_add');
                foreach ($loop_analog as $item_analog) {
                  ?>
                  <a href="<?= $item_analog['cartridge_analog_link']['url'];?>" class="fw-bold fs-5"><?= $item_analog['cartridge_analog_link']['text'];?></a>
                  <div class="row mt-2">
                    <div class="col-2 text-center">
                      <p class="mb-1">Цвет</p>
                      <p class="d-flex align-items-center justify-content-center p-3"><span class="d-block span-align" style="height: 14px; width: 14px; background-color: <?= $item_analog['cartridge_analog_color'];?>"></span></p>
                    </div>
                    <div class="col-2 text-center">
                      <p class="mb-1">Ресурс</p>
                      <small class="text-muted">страниц</small>
                      <p><?= $item_analog['cartridge_analog_resource'];?></p>
                    </div>
                    <div class="col-5 text-center">
                      <p class="mb-1">Совместимые</p>
                      <div class="row">
                        <div class="col-6">
                          <small class="text-muted">1 шт., руб.</small>
                          <p><?= $item_analog['cartridge_analog_compatible_price'];?></p>
                        </div>
                        <div class="col-6">
                          <small class="text-muted">10 шт., руб.</small>
                          <p><?= $item_analog['cartridge_analog_compatible_price_10'];?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-3 text-center">
                      <p class="mb-1">Ориг.</p>
                      <small class="text-muted">1 шт., руб.</small>
                      <p><?= $item_analog['cartridge_analog_original_price'];?></p>
                    </div>
                  </div>
                  <?php
                }
                ?>
              </div>
            </div>
          </div>
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
