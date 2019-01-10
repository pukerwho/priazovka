<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 d-none d-md-block px-0">
      <?php get_template_part( 'blocks/leftsidebar', 'default' ); ?>
    </div>
    <div class="col-md-9 col-sx-12">
      <div class="lead pt-5 pb-3">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <div><?php the_content(); ?></div>
        <?php endwhile; else: ?>
          <p><?php _e('Пусто'); ?></p>
        <?php endif; ?>
      </div>
      <!-- ФОТОАЛЬБОМ -->
      <div class="row">
        <div class="col-md-12">
          <?php get_template_part('blocks/photoalbum/photoalbum-block'); ?>
        </div>
      </div>
      <!-- Отдых в Геническе -->
      <div class="lead text-uppercase text-weight-bold pt-5 pb-3">
        <span>Отдых в Геническе 2018</span>
        <a href="/rest-in-genichesk" class="float-right btn btn-outline-info d-none d-md-block my-2 my-sm-0 mr-md-0 mr-sm-2">Все предложения</a>
      </div>
      <div class="row">
        <?php 
          $custom_query = new WP_Query( array( 'post_type' => 'genichesk','posts_per_page'=>'8', 'orderby'   => 'rand' ) );
          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <div class="col-md-3 col-sm-12 mb-5">
            <?php get_template_part('blocks/hotels/hotel-card'); ?>
          </div>
        <?php endwhile; endif; ?>
        <div class="col-sm-12 d-md-none d-sm-block">
          <a href="/rest-in-genichesk" class="float-md-right btn btn-outline-info my-2 my-sm-0 mr-sm-2">Все предложения</a>
        </div>
      </div>
      
      <!-- Отдых в Генгорке -->
      <div class="lead text-uppercase text-weight-bold pt-3 pb-3">
        <span>Отдых в Генгорке 2018</span>
        <a href="/rest-in-gengorka" class="float-right btn btn-outline-info d-none d-md-block my-2 my-sm-0 mr-md-0 mr-sm-2">Все предложения</a>
      </div>
      <div class="row">
        <?php 
          $custom_query = new WP_Query( array( 'post_type' => 'gengorka','posts_per_page'=>'8', 'orderby'   => 'rand' ) );
          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <div class="col-md-3 mb-5">
            <?php get_template_part('blocks/hotels/hotel-card'); ?>
          </div>
        <?php endwhile; endif; ?>
        <div class="col-sm-12 d-md-none d-sm-block">
          <a href="/rest-in-gengorka" class="float-md-right btn btn-outline-info my-2 my-sm-0 mr-sm-2">Все предложения</a>
        </div>
      </div>
      <!-- ПРИАЗОВКА -->
      <div class="row">
        <div class="col-md-12">
          <div class="mycard">
            <div class="text-side bg-prime float-left d-flex justify-content-center align-items-center text-white flex-column">
              <div class="display-4 text-uppercase">Газета</div>
              <div class="lead py-3">Приазовская правда</div>
              <div><a href="http://forum.genichesk.com.ua/" class="display-4 text-white border-bottom">Читать</a></div>
            </div>
            <div class="img-side float-left">
              <img src="http://www.navigator-ukraina.com.ua/media/k2/items/cache/6577c6b0fbc4ba9ae61ff6583dc67c84_XL.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Отдых в Счастливцево -->
      <div class="lead text-uppercase text-weight-bold pt-5 pb-3">
        <span>Отдых в Счастливцево 2018</span>
        <a href="/rest-in-schastlivtsevo" class="float-right btn btn-outline-info d-none d-md-block my-2 my-sm-0 mr-md-0 mr-sm-2">Все предложения</a>
      </div>
      <div class="row">
        <?php 
          $custom_query = new WP_Query( array( 'post_type' => 'shchaslyvtsevo','posts_per_page'=>'8', 'orderby'   => 'rand' ) );
          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <div class="col-md-3 mb-5">
            <?php get_template_part('blocks/hotels/hotel-card'); ?>
          </div>
        <?php endwhile; endif; ?>
        <div class="col-sm-12 d-md-none d-sm-block">
          <a href="/rest-in-schastlivtsevo" class="float-md-right btn btn-outline-info my-2 my-sm-0 mr-sm-2">Все предложения</a>
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
                  <?php get_template_part('blocks/hotels/hotel-card'); ?>
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
        <a href="/rest-in-strelkovoe" class="float-right btn btn-outline-info d-none d-md-block my-2 my-sm-0 mr-md-0 mr-sm-2">Все предложения</a>
      </div>
      <div class="row">
        <?php 
          $custom_query = new WP_Query( array( 'post_type' => 'strelkovoehotels','posts_per_page'=>'8', 'orderby'   => 'rand' ) );
          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <div class="col-md-3 mb-5">
            <?php get_template_part('blocks/hotels/hotel-card'); ?>
          </div>
        <?php endwhile; endif; ?>
        <div class="col-sm-12 d-md-none d-sm-block">
          <a href="/rest-in-strelkovoe" class="float-md-right btn btn-outline-info my-2 my-sm-0 mr-sm-2">Все предложения</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>