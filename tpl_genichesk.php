<?php
/*
Template Name: Геническ
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
            $custom_query = new WP_Query( array( 'post_type' => 'genichesk', 'orderby'   => 'rand' ) );
            if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <div class="col-md-3 col-sm-12 mb-5">
              <?php get_template_part('blocks/hotels/hotel-card') ?>
            </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="genichesk-more text-center">
              <div class="btn btn-outline-info">Еще варианты</div>
            </div>    
          </div>
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