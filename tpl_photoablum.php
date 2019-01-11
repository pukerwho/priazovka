<?php
/*
Template Name: Фотоальбом
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
            $custom_query = new WP_Query( array( 'post_type' => 'photoalbums' ) );
            if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <div class="col-md-12">
              <div class="photoalbum-title mb-4">
                <h2><?php the_title(); ?></h2>
              </div>
             <div class="photoalbum-img mb-5">
              <?php 
                $images = rwmb_meta( 'meta-photoalbum-img', array( 'size' => 'large' ) );
                $title_img = get_the_title();
                foreach ( $images as $image ) {
                  echo '<div class="photoalbum-img__item mb-2"><a href="', $image['full_url'], '" data-lightbox="', $title_img,'" data-title="', $title_img,'"><img src="', $image['url'], '"></a></div>';
              } 
              ?>
             </div>
            </div>
            
          <?php endwhile; endif; ?>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="videos-more text-center">
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