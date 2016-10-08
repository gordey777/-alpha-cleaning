<aside class="sidebar" role="complementary">

          <div class="widget">
            <h5 class="white-after ">НАШИ УСЛУГИ</h5>
            <?php wpeSideNav(); ?>

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
            <h5 class="blue-after">отзывы о нас</h5>
            <ul>
              <?php
              $args = array(
              'number' => 3,
              'orderby' => 'comment_date',
              'order' => 'DESC',
              //'post_id' => 0,
              'type' => 'comment', // только комментарии, без пингов и т.д...
              );

              if( $comments = get_comments( $args ) ){

                foreach( $comments as $comment ){
                  $city = get_comment_meta(get_comment_ID(), 'city', true);

                  $comm_short_txt = mb_substr( strip_tags( $comment->comment_content ), 0, 200 ) .'...';

                  echo
                  '<li>'.
                  '<p class="rev-name">'.
                  $comment->comment_author
                  .'</p>'.
                  '<p class="rev-adres">'.$city.'</p>'
                  .'<p class="rev-cont">'.$comm_short_txt.'</p>'.
                  '</li>';
                }

              }?>
            </ul>
            <a href="/?page_id=23" class="side-button">ВСЕ ОТЗЫВЫ</a>
          </div><!-- /.reviews-side -->


  <?php //if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php //dynamic_sidebar( 'widgetarea1' ); ?>
  <?php //else : ?>

    <!-- If you want display static widget content - write code here
		RU: Здесь код вывода того, что необходимо для статического контента виджетов -->

  <?php //endif; ?>

</aside><!-- /sidebar -->
