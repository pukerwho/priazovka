<?php
/*
Template Name: Вопросы-Ответы
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 d-none d-md-block px-0">
      <?php get_template_part( 'blocks/leftsidebar', 'default' ); ?>
    </div>
    <div class="col-md-9 col-sx-12">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page-title pt-5 mb-5">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="page-description">
          <?php the_content(); ?>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?php comments_template(); ?>
          </div>
        </div>
      <?php endwhile; else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>