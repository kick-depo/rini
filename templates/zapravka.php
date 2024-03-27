<?php 
/* 
Template Name: Заправка
*/ 
get_header();
?>

<main>
  <div class="container">
    <div class="row">
      <h2>Заправка картриджей Hewlett-Packard</h2>
      <div class="col-lg-9 col-sm-12">
        <p>При выезде на заправку до 4 шт +350 руб за картридж, от 4 до 10 шт +120 руб за картридж, от 10 до 40 шт + 60 руб за картридж. Забираем в сервис, заправляем, привозим - 700 руб за доставку</p>
        <p class="mb-4"><strong>Выезд мастера на диагностику и ремонт оргтехники - 900 руб<br>
          Диагностика оргтехники в нашем сервис центре - БЕСПЛАТНО</strong>
        </p>

        <p class="text-uppercase">
          <a class="btn btn-primary my-1" href="../zapravka/zapravka.html" role="button">hp</a>
          <a class="btn btn-primary my-1" href="../zapravka/zapravka_canon.html" role="button">Canon</a>
          <a class="btn btn-primary my-1" href="../zapravka/zapravka_xerox.html" role="button">Xerox</a>
          <a class="btn btn-primary my-1" href="../zapravka/zapravka_samsung.html" role="button">Samsung</a>
          <a class="btn btn-primary my-1" href="../zapravka/zapravka_brother.html" role="button">Brother</a>
          <a class="btn btn-primary my-1" href="../zapravka/zapravka_panasonic.html" role="button">Panasonic</a>
          <a class="btn btn-primary my-1" href="../zapravka/zapravka_kyocera.html" role="button">Kyocera</a>
          <a class="btn btn-primary my-1" href="../zapravka/zapravka_ricoh.html" role="button">Ricoh</a>
          <a class="btn btn-primary" href="../zapravka/zapravka_pantum.html" role="button">Pantum</a>
        </p>

        <div class="rini_table_scroll">
          <table class="table table-striped table-bordered mb-5 align-center rini_zapravka_table">
            <thead class="align-text-top">
              <tr>
                <th scope="col">Картридж HP монохромный</th>
                <th scope="col">Ресурс</th>
                <th scope="col">Заправка</th>
                <th scope="col">Фотовал</th>
                <th scope="col">Чип</th>
                <th scope="col">Экспресс обмен</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <td>W1106A (№ 106A)</td>
                <td>1000</td>
                <td>550</td>
                <td>500</td>
                <td>350</td>
                <td>1300</td>
              </tr>
              <tr>
                <td>W1360A/W1360X</td>
                <td>1150/2600	</td>
                <td>550/680</td>
                <td>500</td>
                <td>2500</td>
                <td>-</td>
              </tr>
              <tr>
                <td>W1500A (№ 150A)</td>
                <td>975</td>
                <td>550</td>
                <td>-</td>
                <td>1800</td>
                <td>-</td>
              </tr>
              <tr>
                <td>W1510A/W1510X (№ 151A/151X)</td>
                <td>3050/9700</td>
                <td>750/1150</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="rini_table_scroll">
          <table class="table table-striped table-bordered mb-5 align-middle rini_zapravka_table">
            <thead class="align-text-top">
              <tr>
                <th scope="col">Картридж HP Цветной</th>
                <th scope="col">Ресурс</th>
                <th scope="col">Заправка</th>
                <th scope="col">Фотовал</th>
                <th scope="col">Чип</th>
                <th scope="col">Экспресс обмен</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <td>CF210A/X/CF211/212/213A</td>
                <td>1600/2400/1800</td>
                <td>1650</td>
                <td>600</td>
                <td>+</td>
                <td>2000/2100</td>
              </tr>
              <tr>
                <td>W2030A/1A/2A/3A</td>
                <td>2400/2100</td>
                <td>1650</td>
                <td>700</td>
                <td>-</td>
                <td>+</td>
              </tr>
              <tr>
                <td>W2030X/1X/2X/3X</td>
                <td>7500/6000</td>
                <td>2600</td>
                <td>700</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <td>CE250A/X</td>
                <td>5000/10500</td>
                <td>2150/2300</td>
                <td>650</td>
                <td>+</td>
                <td>2500/2600</td>
              </tr>
            </tbody>
          </table>
        </div>
 
      </div>
      <!-- Правый инфобар -->
      <div class="col-lg-3 col-sm-12 my-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>