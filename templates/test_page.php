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
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-3" data-id="01">
            <img src="http://rini-ru-wp/wp-content/uploads/cartridge-1.jpg" class=" product-img card-img-top cartridge_img" alt="...">
            <div class="card-body">
              <h5 class="card-title">Карточка картриджа</h5>
              <h6 class="card-subtitle mb-3 text-muted ">КАРТРИДЖ HP H567</h6>
              <p>Информация о картридже</p>
              <p>Количество картриджей в упаковке: <span data-items-in-box>1</span></p>
              <p>Цена: <span class="price__currency">1600</span> руб.</p>
              <div class="items counter-wrapper mb-3">
                <div class="test_items items__control" data-action="minus">-</div>
                <div class="test_items items__current" data-counter>1</div>
                <div class="test_items items__control" data-action="plus">+</div>
              </div>
              <button data-cart class="btn btn-primary">Купить</button>
            </div>
          </div>
          <div class="card mb-3" data-id="02">
            <img src="http://rini-ru-wp/wp-content/uploads/hp_cf218a.jpg_320.jpg" class=" product-img card-img-top cartridge_img" alt="...">
            <div class="card-body">
              <h5 class="card-title">Карточка картриджа</h5>
              <h6 class="card-subtitle mb-3 text-muted ">КАРТРИДЖ HP W1106A (106A)</h6>
              <p>Информация о картридже</p>
              <p>Количество картриджей в упаковке: <span data-items-in-box>1</span></p>
              <p>Цена: <span class="price__currency">2300</span> руб.</p>
              <div class="items counter-wrapper mb-3">
                <div class="test_items items__control" data-action="minus">-</div>
                <div class="test_items items__current" data-counter>1</div>
                <div class="test_items items__control" data-action="plus">+</div>
              </div>
              <button data-cart class="btn btn-primary">Купить</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mb-3" data-id="03">
            <img src="http://rini-ru-wp/wp-content/uploads/cartridge-3.jpg" class=" product-img card-img-top cartridge_img" alt="...">
            <div class="card-body">
              <h5 class="card-title">Карточка картриджа</h5>
              <h6 class="card-subtitle mb-3 text-muted ">КАРТРИДЖ CANON 765</h6>
              <p>Информация о картридже</p>
              <p>Количество картриджей в упаковке: <span data-items-in-box>1</span></p>
              <p>Цена: <span class="price__currency">1900</span> руб.</p>
              <div class="items counter-wrapper mb-3">
                <div class="test_items items__control" data-action="minus">-</div>
                <div class="test_items items__current" data-counter>1</div>
                <div class="test_items items__control" data-action="plus">+</div>
              </div>
              <button data-cart class="btn btn-primary">Купить</button>
            </div> 
          </div>
          <div class="card mb-3" data-id="04">
            <img src="http://rini-ru-wp/wp-content/uploads/hp-q2612a.jpg_320.jpg" class=" product-img card-img-top cartridge_img" alt="...">
            <div class="card-body">
              <h5 class="card-title">Карточка картриджа</h5>
              <h6 class="card-subtitle mb-3 text-muted ">КАРТРИДЖ XEROX 54CHARM</h6>
              <p>Информация о картридже</p>
              <p>Количество картриджей в упаковке: <span data-items-in-box>1</span></p>
              <p>Цена: <span class="price__currency">1750</span> руб.</p>
              <div class="items counter-wrapper mb-3">
                <div class="test_items items__control" data-action="minus">-</div>
                <div class="test_items items__current" data-counter>1</div>
                <div class="test_items items__control" data-action="plus">+</div>
              </div>
              <button data-cart class="btn btn-primary">Купить</button>
            </div>
          </div>
          </div>
          <div class="col-lg-4">
            <div class="row cart-item">
              <div class="col-4">Картридж</div>
              <div class="col-4">2100</div>
              <div class="col-4 change_value">
                <button class="btn btn-change_value">-</button>
                <span class="current-value">1</span>
                <button class="btn btn-change_value">+</button>
              </div>
            </div>

            <!-- <div class="cart">
              <h5 class="mb-1">Корзина</h5>
              <p data-cart-empty>У вас нет покупок</p>
              <div class="cart-wrapper"></div>
              <div class="cart-total">
                <p>Итого: <span class="cart-total__price">0</span> руб.</p>
              </div>
              <div id=order-form class="d-none">
                <form action="">
                  <div class="mb-2 me-1">Имя:<input type="text" name="" id=""></div>
                  <div class="mb-2 me-1">Телефон:<input type="tel" name="" id=""></div>
                  <div class="mb-2 me-1">E-mail:<input type="email" name="" id=""></div>
                  <div class="mb-2 me-1">Когда вам можно звонить<input type="text" name="" id=""></div>
                  <div class="mb-2 me-1">Адрес доставки<input type="text" name="" id=""></div>
                  <div class="mb-2 me-1">Желаемое время доставки<input type="text" name="" id=""></div>
                  <div class="mb-2 me-1">Карта или купон <input type="text" name="" id="" placeholder="№"></div>
                  <input type="submit" value="Отправить">
                </form>
              </div>
            </div> -->
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



<?php get_footer(); ?>