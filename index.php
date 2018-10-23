<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 d-none d-md-block px-0">
      <?php get_template_part( 'blocks/leftsidebar', 'default' ); ?>
    </div>
    <div class="col-md-9 col-sx-12">
      <div class="lead pt-5 pb-3">
        <h1>Отдых в Геническе и на Арабатской стрелке</h1>
        <p>Приветствуем Вас на страничке, посвященной отдыху в городе Геническ и на Арабатской стрелке. </p><p>Это уютный курортный городок на берегу Азовского моря в Украине. Здесь Вы можете вспомнить о летнем отпуске и <mark>найти себе подходящее место для отдыха</mark>, узнать больше о самом мелком (и теплом) Азовском море в мире.</p>
      </div>
      <!-- ФОРУМ -->
      <div class="row">
        <div class="col-md-12">
          <div class="mycard">
            <div class="text-side bg-prime float-left d-flex justify-content-center align-items-center text-white flex-column">
              <div class="display-4 text-uppercase">Форум</div>
              <div class="lead py-3">Присоединяйся к общению!</div>
              <div><a href="http://forum.genichesk.com.ua/" class="display-4 text-white border-bottom">Клик</a></div>
            </div>
            <div class="img-side float-left">
              <img src="http://www.navigator-ukraina.com.ua/media/k2/items/cache/6577c6b0fbc4ba9ae61ff6583dc67c84_XL.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Отдых в Геническе -->
      <div class="lead text-uppercase text-weight-bold pt-5 pb-3">
        <span>Отдых в Геническе 2018</span>
        <a href="<?php echo get_post_type_archive_link( 'genicheskhotels' ); ?>" class="float-right btn btn-outline-info d-none d-md-block my-2 my-sm-0 mr-md-0 mr-sm-2">Все предложения</a>
      </div>
      <div class="row">
        <?php 
          $custom_query = new WP_Query( array( 'post_type' => 'genichesk','posts_per_page'=>'8', 'orderby'   => 'rand' ) );
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
          <a href="/genichesk" class="float-md-right btn btn-outline-info my-2 my-sm-0 mr-sm-2">Все предложения</a>
        </div>
      </div>
      <!-- YOUTUBE -->
      <div class="lead text-uppercase text-weight-bold pt-3 mb-4">
        <span>Наш канал</span>
        <a href="<?php echo get_post_type_archive_link( 'genicheskhotels' ); ?>" class="float-right btn btn-outline-danger d-none d-md-block my-2 my-sm-0 mr-md-0 mr-sm-2">Подписаться</a>
      </div>
      <div class="row mb-5 clear-both">
        <?php 
          $custom_query = new WP_Query( array( 'post_type' => 'youtubes','posts_per_page'=>'3', 'orderby'   => 'rand' ) );
          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <div class="col-md-4 col-sm-12">
            <iframe width="100%" height="180" src="https://www.youtube.com/embed/<?php if(rwmb_meta('youtube_code')){ echo rwmb_meta('youtube_code'); } ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <a href="https://www.youtube.com/watch?v=<?php if(rwmb_meta('youtube_code')){ echo rwmb_meta('youtube_code'); } ?>" target="_blank" class="lead text-secondary leftsidebar-link"><?php the_title(); ?></a>
          </div>
        <?php endwhile; endif; ?>
        <div class="col-sm-12 d-md-none d-sm-block">
          <a href="https://www.youtube.com/channel/UCTwTgpDfjQ5mWbT79wk37pg" class="float-md-right btn btn-outline-danger my-2 my-sm-0 mr-sm-2">Подписаться</a>
        </div>
      </div>
      <!-- Отдых в Генгорке -->
      <div class="lead text-uppercase text-weight-bold pt-3 pb-3">
        <span>Отдых в Генгорке 2018</span>
        <a href="<?php echo get_post_type_archive_link( 'gengorkahotels' ); ?>" class="float-right btn btn-outline-info d-none d-md-block my-2 my-sm-0 mr-md-0 mr-sm-2">Все предложения</a>
      </div>
      <div class="row">
        <?php 
          $custom_query = new WP_Query( array( 'post_type' => 'gengorkahotels','posts_per_page'=>'8', 'orderby'   => 'rand' ) );
          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <div class="col-md-3 mb-5">
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
          <a href="<?php echo get_post_type_archive_link( 'gengorkahotels' ); ?>" class="float-md-right btn btn-outline-info my-2 my-sm-0 mr-sm-2">Все предложения</a>
        </div>
      </div>
      <!-- ФОТОАЛЬБОМ -->
      <div class="row">
        <div class="col-md-12">
          <div class="mycard">
            <div class="img-side float-left">
              <img src="http://www.navigator-ukraina.com.ua/media/k2/items/cache/6577c6b0fbc4ba9ae61ff6583dc67c84_XL.jpg" alt="">
            </div>
            <div class="text-side bg-success float-left d-flex justify-content-center align-items-center text-white flex-column">
              <div class="display-4 text-uppercase">Фотоальбом</div>
              <div class="lead text-center py-3 px-3">Фото Геническа и Арабатской стрелки!</div>
              <div><a href="http://album.genichesk.com.ua/" class="display-4 text-white border-bottom">Клик</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Отдых в Счастливцево -->
      <div class="lead text-uppercase text-weight-bold pt-5 pb-3">
        <span>Отдых в Счастливцево 2018</span>
        <a href="<?php echo get_post_type_archive_link( 'schastlivtsevohotels' ); ?>" class="float-right btn btn-outline-info d-none d-md-block my-2 my-sm-0 mr-md-0 mr-sm-2">Все предложения</a>
      </div>
      <div class="row">
        <?php 
          $custom_query = new WP_Query( array( 'post_type' => 'schastlivtsevohotels','posts_per_page'=>'8', 'orderby'   => 'rand' ) );
          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <div class="col-md-3 mb-5">
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
          <a href="<?php echo get_post_type_archive_link( 'schastlivtsevohotels' ); ?>" class="float-md-right btn btn-outline-info my-2 my-sm-0 mr-sm-2">Все предложения</a>
        </div>
      </div>
      <!-- ЛУЧШЕЕ ПРЕДЛОЖЕНИЕ -->
      <div class="lead text-uppercase text-weight-bold pt-5 pb-3">
        <span>Сейчас просматривают</span>
      </div>
      <div class="row mb-5">
        <div class="col-md-12">
          <div class="swiper-container swiper-nowgenich">
            <div class="swiper-wrapper">
              <?php 
                $custom_query = new WP_Query( array( 'post_type' => array('genicheskhotels','gengorkahotels','schastlivtsevohotels', 'strelkovoehotels'), 'orderby'   => 'rand' ) );
                if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                <div class="swiper-slide">
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
            </div>
            <div class="swiper-button-next swiper-nowgenich-button-next"></div>
            <div class="swiper-button-prev swiper-nowgenich-button-prev"></div>
          </div>
        </div>
      </div>
      <!-- Отдых в Стрелковом -->
      <div class="lead text-uppercase text-weight-bold pt-5 pb-3">
        <span>Отдых в Стрелковом 2018</span>
        <a href="<?php echo get_post_type_archive_link( 'strelkovoehotels' ); ?>" class="float-right btn btn-outline-info d-none d-md-block my-2 my-sm-0 mr-md-0 mr-sm-2">Все предложения</a>
      </div>
      <div class="row">
        <?php 
          $custom_query = new WP_Query( array( 'post_type' => 'strelkovoehotels','posts_per_page'=>'8', 'orderby'   => 'rand' ) );
          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <div class="col-md-3 mb-5">
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
          <a href="<?php echo get_post_type_archive_link( 'schastlivtsevohotels' ); ?>" class="float-md-right btn btn-outline-info my-2 my-sm-0 mr-sm-2">Все предложения</a>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>