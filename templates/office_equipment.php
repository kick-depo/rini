<?php 
/* 
Template Name: Оргтехника
*/ 
get_header();
?>

<main class="mb-5">
  <div class="container">
    <div class="row">
      <h1 class="mb-4">Оргтехника в продаже</h1>
      <div class="col-lg-9 col-md-12">
        <!-- Тут должны быть кнопки -->
        <div class="rini_table_scroll">
          <table class="table table-striped table-bordered mb-5 align-middle">
            <thead>
              <tr>
                <th scope="col">Название</th>
                <th scope="col">Тип</th>
                <th class="text-center" scope="col">Цвет</th>
                <th scope="col">Состояние</th>
                <th scope="col">Цена</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <td>HP Color LaserJet 2840</td>
                <td>Лазерный</td>
                <td><span class="rini_color-square-black"></span></td>
                <td>После ремонта	</td>
                <td>7000</td>
              </tr>
              <tr>
                <td>HP Color LaserJet CP4005n</td>
                <td>Лазерный</td>
                <td><span class="rini_color-square"></span></td>
                <td>После ремонта	</td>
                <td>6000</td>
              </tr>
              <tr>
                <td>HP LaserJet 1100</td>
                <td>Лазерный</td>
                <td><span class="rini_color-square-black"></span></td>
                <td>После ремонта	</td>
                <td>3500</td>
              </tr>
              <tr>
                <td>HP LaserJet 4250dtn</td>
                <td>Лазерный</td>
                <td><span class="rini_color-square-black"></span></td>
                <td>После ремонта	</td>
                <td>8000</td>
              </tr>
              <tr>
                <td>Xerox Phaser 6121MFP/S</td>
                <td>Лазерный</td>
                <td><span class="rini_color-square"></span></td>
                <td>После ремонта	</td>
                <td>6500</td>
              </tr>
              <tr>
                <td>Xerox Phaser 6130N</td>
                <td>Лазерный</td>
                <td><span class="rini_color-square"></span></td>
                <td>После ремонта	</td>
                <td>7000</td>
              </tr>
              <tr>
                <td>Samsung CLX-3160N</td>
                <td>Лазерный</td>
                <td><span class="rini_color-square"></span></td>
                <td>После ремонта	</td>
                <td>9500</td>
              </tr>
              <tr>
                <td>Sharp AR-M236</td>
                <td>Лазерный</td>
                <td><span class="rini_color-square-black"></span></td>
                <td>После ремонта	</td>
                <td>6000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- Правый инфобар -->
      <div class="col-lg-3 col-sm-12 my-3">
        <?php get_sidebar(); ?>
        <h3 class="text-uppercase mb-3">Прайс оргтехники</h3>
        <a href="#" class="btn btn-primary">СКАЧАТЬ EXCEL</a>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>