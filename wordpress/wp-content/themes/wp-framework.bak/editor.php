<?php get_header();?>
<div id="middle" class="full_width">
    <div class="container clearfix">
      <div id="mid_bird"></div>
      <div id="mid_baloon"></div>
      <?php tfuse_header_content('header');?>
      <div class="content_wrapper">
        <?php  tfuse_shortcode_content('before'); ?>
        <div class="title_top">
          <?php tfuse_gallery_title();?>
          <div class="filter">
            <?php tfuse_show_portfolio_filter(); ?>
          </div>
        </div>
          <div class="content">
            <div class="clearfix gallery postajax">
                <?php if (have_posts())
                   { $count = 0;
                       while (have_posts()) : the_post(); $count++;
                            get_template_part('listing', 'galleries');
                       endwhile;
                   }
                   else
                   { ?>
                       <h5><?php _e('Sorry, no posts matched your criteria.', 'tfuse'); ?></h5>
                <?php } ?>
            </div>
            <?php tfuse_choose_pagination();?>
          </div>
        <div class="clear"></div>
        <?php tfuse_shortcode_content('after'); ?>
      </div>
      <div class="big_button_box">
        <a href="http://darina-centr.ru/?page_id=693" class="btn_custom" hidefocus="true" style="opacity: 1; outline: none;">
          <strong>Заполните нашу анкету!</strong>
        </a>
      </div>
      <div id="bottom_bee"></div>

    </div>
</div>
<?php  $id = tfuse_get_cat_id();?>
<input type="hidden" value="<?php echo $id; ?>" name="current_cat"  />
<input type="hidden" value="yes" name="is_this_gallery"  />

<?php get_footer();?>
