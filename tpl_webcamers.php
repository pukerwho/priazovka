<?php
/*
Template Name: Веб-камеры
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
        <div class="row">
          <?php 
            $custom_query = new WP_Query( array( 'post_type' => 'webcamers', 'orderby'   => 'rand' ) );
            if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <div class="col-md-4 col-sm-12 mb-5">
              <?php get_template_part('blocks/box-card') ?>
            </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="webcamers-more text-center">
              <div class="btn btn-outline-info">Загрузить еще</div>
            </div>    
          </div>
        </div>
      <?php endwhile; else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>