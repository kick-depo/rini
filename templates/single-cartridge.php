<?php 
/* 
Template Name: Страница картриджа
*/ 
get_header();
?>

<main>
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-9 col-sm-12">
        <div class="row">
        <div class="col-lg-6 col-sm-12">
          <h2 class="cart_cartridge-title"><?= the_title(); ?></h2>
          <div>
            <img id="main-image" class="img-fluid" src="<?= CFS()->get('cartridge_photo') ;?>" alt="Изображение картриджа">
          </div>
          <?php if (CFS()->get('cartridge_original_photo_exist')) {
            ?>
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
            <?php
          }
          ?>
          <?php if (CFS()->get('cartridge_compatible_photo_exist')) {
            ?>
            <div class="rini_cartridge_gallery mb-3">
            <p>Фотографии оригинального картриджа:</p>
            <?php $loop = CFS()->get('cartridge_original_photo_add');
            foreach ($loop as $item) {
              ?>
                <img class="thumbnail" src="<?= $item['cartridge_original_photo'];?>" alt="Фото совместимого картриджа">
              <?php
            }
            ?>
          </div>
          <?php
          }
          ?>
          <div>
            <p>Информация о картридже <span class="fw-bold"><?= the_title();?></span>:</p>
            <p><?= CFS()->get('cartridge_info');?></p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <?php if (CFS()->get('cartridge_compatible_price')) {
            ?>
            <div class="rini_cartridge_border cart_cartridge" data-type="Совместимый">
              <p class="mb-1 fs-4 fw-bold">Совместимый</p>
              <div class="row">
                <div class="col-8">
                  <p class="fs-3"><span class="cart_cartridge-price"><?= CFS()->get('cartridge_compatible_price');?></span> руб.</p> 
                </div>
                <div class="col-4">
                  <button class="btn btn-primary btn-buy_compatible cart_buy-button" data-cart >Купить</button>
                </div>
              </div>
            <?php if (CFS()->get('cartridge_compatible_price_10')) {
              ?>
                <p class="mb-1 text-muted">Цена совместимых картриджей от 10 шт. - <span class="cartridge_compatible_price_10"><?= CFS()->get('cartridge_compatible_price_10');?></span> руб.</p>
              <?php
              }
            ?>   
          </div>
          <?php
          }
          ?>
          <?php if (CFS()->get('cartridge_original_price')) {
            ?>
          <div class="rini_cartridge_border mt-3 pb-2 cart_cartridge" data-type="Оригинальный">
            <p class="mb-1 fs-4 fw-bold">Оригинальный</p>
             <div class="row">
              <div class="col-8">
                <p class="fs-3"><span class="cart_cartridge-price"><?= CFS()->get('cartridge_original_price');?></span> руб.</p>
              </div>
              <div class="col-4">
                <button class="btn btn-primary btn-buy_orignal cart_buy-button" data-cart>Купить</button>
              </div>
             </div>
            <?php if (CFS()->get('cartridge_original_price_10')) {
              ?>
              <p class="mb-1 text-muted">Цена оригинальных картриджей от 10 шт. - <span><?= CFS()->get('cartridge_original_price_10');?> руб.</span></p>
              <?php
            }
            ?>
          </div>
          <?php
          }
          ?>
          <?php if (CFS()->get('cartridge_refill_price')) {
            ?>
            <div class="rini_cartridge_border mt-3 pb-2 cart_cartridge" data-type="Заправка">
              <p class="mb-1 fs-4 fw-bold">Заправка</p>
              <div class="row">
                <div class="col-8">
                  <p class="fs-3"><span class="cart_cartridge-price"><?= CFS()->get('cartridge_refill_price');?></span> руб.</p>
                </div>
                <div class="col-4">
                  <button class="btn btn-success btn-buy_refill cart_buy-button" data-cart>Заправить</button>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
            <div class="rini_cartridge_border mt-3 pb-3" >
              <div class="row">
                <p class="mb-1 fs-4 fw-bold">Дополнительно</p>
                <div class="row justify">
                  <div class="col text-center cart_cartridge" data-type="Фотовал">
                    <p class="mb-1 fs-6 fw-bold">Фотовал</p>
                    <p><span class="cart_cartridge-price"><?= CFS()->get('cartridge_photoval_price');?></span> руб.</p>
                    <button class="btn btn-primary cart_buy-button" data-cart>Купить</button>
                  </div>
                  <div class="col text-center cart_cartridge" data-type="Чип">
                    <p class="mb-1 fs-6 fw-bold">Чип</p>
                    <p><span class="cart_cartridge-price"><?= CFS()->get('cartridge_chip_price');?></span> руб.</p>
                    <button class="btn btn-primary cart_buy-button" data-cart>Купить</button>
                  </div>
                </div>
              </div>
            </div>

          <?php if (CFS()->get('cartridge_dopinfo')) {
            ?>
            <div class="rini_cartridge_border">
              <p class="mt-2"><?= CFS()->get('cartridge_dopinfo');?></p>
          </div>
          <?php
          }
          ?>
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
          <?php if (CFS()->get('cartridge_printers_exist')) {
            ?>
            <div class="rini_cartridge_border pb-3 mb-5">
              <p class="mb-1 fw-bold fs-5">Принтеры под картридж</p>
              <p class="fw-bold fs-5"><?= the_title();?></p>
              <?php
              $loop = CFS()->get('cartridge_printers_add');
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
          <?php
          }
          ?>

          <?php if (CFS()->get('cartridge_analog_exist')) {
            ?>
              <p class="mb-1 fw-bold fs-5">Аналоги картриджа</p>
              <p class="fw-bold fs-5"><?php the_title();?></p>
              <div class="mb-5">
                <?php $loop_analog = CFS()->get('cartridge_analog_add');
                foreach ($loop_analog as $item_analog) {
                  ?>
                  <div class="rini_cartridge_border mb-3">
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
                </div>
                  <?php
                }
                ?>
              </div>

          <?php
          }
          ?>
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
