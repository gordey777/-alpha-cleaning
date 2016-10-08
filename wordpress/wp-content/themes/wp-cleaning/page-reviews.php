<?php /* Template Name: Reviews Page */ get_header(); ?>
<?php get_sidebar(); ?>


    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <h1 class="page-title inner-title"><?php the_title(); ?></h1>

<?php comments_template('/reviews.php', true); ?>

      <?php the_content(); ?>
      <?php edit_post_link(); ?>

    </article>

<?php get_footer(); ?>
