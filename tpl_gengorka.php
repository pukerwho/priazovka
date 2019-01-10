<?php
  /*
  Template Name: Генгорка
  */
?>

<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 d-none d-md-block px-0">
      <?php get_template_part( 'blocks/leftsidebar', 'default' ); ?>
    </div>
    <div class="col-md-9 col-sx-12">
    	<div class="lead text-uppercase text-weight-bold pt-5 pb-3">
        <span>Отдых в Генгорка 2019</span>
        <a href="/gengorka" class="float-right btn btn-outline-info d-none d-md-block my-2 my-sm-0 mr-md-0 mr-sm-2">Все предложения</a>
      </div>
      <div class="row">
        <?php 
          $custom_query = new WP_Query( array( 'post_type' => 'gengorka', 'orderby'   => 'rand' ) );
          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <div class="col-md-3 col-sm-12 mb-5">
            <a href="<?php the_permalink(); ?>">
      			  <?php if(rwmb_meta('hotel_alert') == 'Популярно' or rwmb_meta('hotel_alert') == 'Рекомендовано' or rwmb_meta('hotel_alert') == 'Пользуется спросом'): ?>
      			  	<div class="hotel-alert bg-success">
      			  		<?php echo rwmb_meta('hotel_alert'); ?>
      					<div class="hotel-alert_after"></div>
      			  	</div>
      			  <? elseif (rwmb_meta('hotel_alert') == 'Отличная цена' or rwmb_meta('hotel_alert') == 'Акция'): ?>
      				  <div class="hotel-alert bg-yellow">
      					<?php echo rwmb_meta('hotel_alert'); ?>
      					<div class="hotel-alert_after"></div>
      				  </div>
      		    <?php endif ?>
        			<?php echo get_the_post_thumbnail($post->ID,'post-thumba', array('class' => 'card-img-top')) ?>
            </a>
            <a href="<?php the_permalink(); ?>" class="lead text-secondary leftsidebar-link"><?php the_title(); ?></a>
            <div class="text-success"><?php if(rwmb_meta('hotel_type')){ echo rwmb_meta('hotel_type'); } ?></div> 
          </div>
        <?php endwhile; endif; ?>
        <div class="col-sm-12 d-md-none d-sm-block">
          <a href="/gengorka" class="float-md-right btn btn-outline-info my-2 my-sm-0 mr-sm-2">Все предложения</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>