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
<a href="<?php the_permalink(); ?>" class="lead text-secondary leftsidebar-link">
  <?php the_title(); ?>
</a>
<div class="text-success">
  <?php if(rwmb_meta('hotel_type')){ echo rwmb_meta('hotel_type'); } ?>
</div> 