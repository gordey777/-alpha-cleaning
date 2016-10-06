<aside class="sidebar" role="complementary">

          <div class="widget">
            <h5 class="white-after ">НАШИ УСЛУГИ</h5>
            <?php wpeSideNav(); ?>
<!--             <ul>
  <li class="cat-item-none"><a href="#">Химчистка ковров</a></li>
  <li class="cat-item-none"><a href="#">Деликатная чистка ковра</a></li>
  <li class="cat-item-none"><a href="#">Химчистка ковролина</a></li>
  <li class="cat-item-none"><a href="#">Химчистка мягкой мебели</a></li>
  <li class="cat-item-none"><a href="#">Химчистка кожанной мебели</a></li>
  <li class="cat-item-none"><a href="#">Химчистка диванов</a></li>
</ul> -->
          </div><!-- widget -->
          <div class="contacts-side">
            <h5 class="blue-after">
              <p>звоните</p>
              <p>по телефону</p>
              <p>в москве</p>
            </h5>
            <h5 class="blue">(495) 644-58-85</h5>
            <a href="#openModal" class="side-button">ОНЛАЙН ЗАКАЗ</a>
          </div><!-- /.contacts-side -->
          <div class="reviews-side">
            <h5 class="blue-after">Пример виджета</h5>
            <a href="#" class="side-button">ВСЕ ОТЗЫВЫ</a>
          </div><!-- /.reviews-side -->


  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

    <!-- If you want display static widget content - write code here
		RU: Здесь код вывода того, что необходимо для статического контента виджетов -->

  <?php endif; ?>

</aside><!-- /sidebar -->
