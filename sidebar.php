<?php
/* 
Template Name: Сайдбар
*/ 
?>

<h3 class="text-uppercase">Заказ по телефону</h3>
<a href="tel:+74956496449">+7 (495) 649-64-49</a>
<p>Режим работы в будни:
  с 10:00 до 18:00
  в воскресенье, звонить перед выездом:
  с 12:00 до 16:00</p>
<!-- Кнопка для вызова модального окна -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Заказать обратный звонок
</button>

<!-- Модальное окно -->
<div class="rini_callback modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Обратный звонок</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <?= do_shortcode('[contact-form-7 id="5f41ec7" title="Форма обратной связи"]') ;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<h4 class="mb-5">
  БЕСПЛАТНАЯ ДОСТАВКА ОТ 800 РУБ.
</h4>
<div class="cart p-3 mb-3">
  <h5>Корзина</h5>
  <p class="cart_none">У вас нет покупок</p>
  <div class="cart_small_info d-none row cols-title rini_cartridge_border text-center mx-1 pb-1">
    <small class="col-4 text-muted">Картридж</small>
    <small class="col-4 text-muted">Цена</small>
    <small class="col-4 text-muted">Количество</small>
  </div>
  <div class="cart_wrapper"></div>
  <div class="cart_total d-none mt-2">
    <p>Итого: <span class="cart_total_price">0</span> руб.</p>
    <button class="btn btn-primary btn_order mb-2">Оформить заказ</button>
    <div class="order_form d-none">
      <?= do_shortcode('[contact-form-7 id="da884a1" title="order_cartridge"]');?>
    </div>
  </div>
</div>
<p class="mb-4"><b>Возможна оплата картой</b></p>
<p><b>ВНИМАНИЕ!</b> В связи с изменением курса рубля по отношению к иностранной валюте, цены на сайте могут отличаться от фактических, носят информационный характери не являются публичной офертой. Актуальную информацию можно получить у наших специалистов.
</p>
<div>
  <h3 class="text-uppercase">Прайс картриджей</h3>
  <a href="<?= home_url('/').'картриджи/';?>" class="btn btn-primary">ONLINE</a>
  <a href="https://docs.yandex.ru/docs/view?url=ya-browser%3A%2F%2F4DT1uXEPRrJRXlUFoewruDvajUVDmh2ypH0fQoOi7ODGASZVFOPIfEvioeQc_X7zG7wyqJxPQwD6I5KJUpWnUTP25zGNRTu58xsU_HsTByElgh5gmb23Hb39pV4X5Dgv0no_4a4iI55yI8vjjr5A7Q%3D%3D%3Fsign%3Dj2kNmWdzOknsS73UeXA6oVGdMNZ7FQobW6fRE6CVsg8%3D&name=rini_cartridges_2024-05-27.xls&nosw=1" class="btn btn-primary" target="_blank">СКАЧАТЬ EXCEL</a>
</div>