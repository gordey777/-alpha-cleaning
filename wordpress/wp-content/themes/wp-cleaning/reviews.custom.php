<div class="comments">

  <a href="#modalRew">ДОБАВИТЬ ОТЗЫВ</a>

<?php if (post_password_required()) : ?>
  <p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'wpeasy' ); ?></p>
</div>

  <?php return; endif; ?>

<?php if (have_comments()) : ?>



  <ul class="comments-blok">
    <?php wp_list_comments( ); ?>
  </ul><!-- /.comments-blok -->

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

  <p><?php _e( 'Comments are closed here.', 'wpeasy' ); ?></p>

<?php endif; ?>

          <div class="add-rev">

            <div id="modalRew" class="modalRewiews">
              <div>
                <a href="#close" title="Закрыть" id="mod-close" class="close"></a>
              <?php
$cusomformreviews = array(
  'fields'               => array(
          'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' /></p>',

          'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',

          'city'  => '<p class="comment-form-email"><label for="city">' . __( 'Улица, район' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
          '<input id="city" name="city" ' . ( $html5 ? 'type="city"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_city'] ) . '" size="30" aria-describedby="city-notes"' . $aria_req . $html_req  . ' /></p>',

        ),
  'comment_field'        => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="30" rows="8"  aria-required="true" required="required"></textarea></p>',
  'must_log_in'          => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
  'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( '<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Вы зашли как :%2$s</a>. <a href="%3$s">Вийти?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
  'comment_notes_before' => '',
  'comment_notes_after'  => '',
  'id_form'              => 'commentform',
  'id_submit'            => 'submit',
  'class_form'           => 'comment-form',
  'class_submit'         => 'submit',
  'name_submit'          => 'submit',
  'title_reply'          => __( 'Оставте отзыв' ),
  'title_reply_to'       => __( 'Leave a Reply to %s' ),
  'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
  'title_reply_after'    => '</h3>',
  'cancel_reply_before'  => ' <small>',
  'cancel_reply_after'   => '</small>',
  'cancel_reply_link'    => __( 'Cancel reply' ),
  'label_submit'         => __( 'ОСТАВИТЬ ОТЗЫВ' ),
  'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
  'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
  'format'               => 'xhtml',
);

comment_form(  );
 ?>


              </div>
            </div>
          </div><!-- /.add-rev -->



</div>
