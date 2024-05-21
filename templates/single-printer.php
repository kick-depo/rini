<?php 
/* 
Template Name: Страница принтера
*/ 
get_header();
?>

<main>
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-9 col-sm-12">
        <h1>Принтер <?php the_title(); ?></h1>
        <div class="mb-5">
          <img src="<?= CFS()->get('printer_img');?>" alt="Изображение принтера">
        </div>
        <div class="mb-5">
          <h4>Информация о принтере <span> <? the_title();?></span></h4>
          <p><?= CFS()->get('printer_info');?></p>
        </div>
        <div class="cartridge_for_printer_wrapper">
          <div class="cartridge_wrapper_title">
            <div class="row mb-2">
              <div class="col-3">Картридж</div>
              <div class="col d-flex justify-content-center">Цвет</div>
              <div class="col d-flex justify-content-center">
               <div>
                <div>Ресурс</div>
                <small class="text-muted">страниц</small>
               </div>
              </div>
              <div class="col d-flex justify-content-center">
                <div class="text-center">
                  <div>Совместимые</div>
                  <small class="text-muted">Цена, руб.</small>
                  <div class="d-flex justify-content-around">
                    <small class="text-muted">1 шт.</small>
                    <small class="text-muted">10 шт.</small>
                  </div>
                </div>
              </div>
              <div class="col d-flex justify-content-center">
                <div class="text-center">
                  <div>Ориг</div>
                  <small class="text-muted">Цена, руб.</small>
                  <div>
                    <small class="text-muted">1 шт.</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="cartridge_wrapper">
              <div class="cartridge_wrapper_item rini_cartridge_border mb-3 pb-3">
                <div class="row">
                  <div class="col-3">HP CF218A (18A)</div>
                  <div class="col d-flex justify-content-center"><span class="d-block"style="width: 14px; height: 14px; background-color: #000"></span>
                  </div>
                  <div class="col d-flex justify-content-center">1400</div>
                  <div class="col d-flex justify-content-center">
                    <div class="row d-flex justify-content-center">
                      <div class="col fw-bold">1600</div>
                      <div class="col fw-bold">1500</div>
                    </div>
                  </div>
                  <div class="col d-flex justify-content-center fw-bold">9660</div>
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
