<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 d-none d-md-block px-0">
      <?php get_template_part( 'blocks/leftsidebar', 'default' ); ?>
    </div>
    <div class="col-md-9">
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		<div class="single-top-img pt-5 pb-3">
    			<?php echo get_the_post_thumbnail($post->ID); ?>	
    		</div>
	    <div class="d-flex align-items-center justify-content-between flex-column flex-md-row">
			<div class="py-3">
				<h1><?php the_title(); ?></h1>
				<div class="text-success"><?php if(rwmb_meta('hotel_type')){ echo rwmb_meta('hotel_type'); } ?></div>	
			</div>
			<div class="d-none d-md-block">
				<div class="lead text-success text-right">
					Популярно!
				</div>
				<div>
					За прошлую неделю это объявление посмотрели более 700 раз	
				</div>
			</div>
			<!-- ДЛЯ МОБИЛЬНОЙ ВЕРСИИ -->
			<div class="d-md-none d-block">
				<?php if(rwmb_meta('hotel_visit')): ?>
					<div class="lead text-success my-3">
						Популярно!
					</div>
					<div>
						За прошлую неделю это объявление посмотрели более <?php echo rwmb_meta('hotel_visit'); ?> раз	
					</div>
					<hr>
				<?php endif ?>
      			<div class="lead text-uppercase text-weight-bold my-3">
      				Адрес
      			</div>
      			<?php if(rwmb_meta('hotel_address')){ echo rwmb_meta('hotel_address'); } ?>
      			<hr>
      			<div class="lead text-uppercase text-weight-bold my-3">
      				Контакты
      			</div>
      			<?php 
      				$values = rwmb_meta( 'hotel_phone' );
							foreach ( $values as $value ) : ?> 
						  
						  <p><?php echo $value ?></p>
						
						<?php endforeach; ?>
						<div>
							Для звонка <mark>из Белоруссии</mark> не забывайте набирать <mark>код Украины</mark>, выглядит это так <mark>8-10-38</mark>-055-34-58-479
						</div>
						<hr>
      			<div class="text-info">
      				Не забудьте сказать что Вы нашли <?php the_title(); ?> на сайте priazovka.com
      			</div>
      			<hr>
			</div>
	  	</div>
    		<div class="row px-0 mx-0">
      		<div class="col-md-8 pl-0 pr-md-5 pr-sm-0 border-right">
	      		<div class="single-content">
	      			<?php the_content(); ?>	
	      		</div>
	      		<hr>
	      		<h3>Обсуждение</h3>
	      		<?php comments_template(); ?>
      		</div>
      		<div class="col-md-4 bg-light">
				<div class="d-none d-md-block">
					<?php if(rwmb_meta('hotel_visit')): ?>
						<div class="lead text-success my-3">
							Популярно!
						</div>
						<div>
							За прошлую неделю это объявление посмотрели более <?php echo rwmb_meta('hotel_visit'); ?> раз	
						</div>
						<hr>
					<?php endif ?>
					<div class="lead text-uppercase text-weight-bold my-3">
						Адрес
					</div>
					<?php if(rwmb_meta('hotel_address')){ echo rwmb_meta('hotel_address'); } ?>
					<hr>
					<div class="lead text-uppercase text-weight-bold my-3">
						Контакты
					</div>
					<?php 
						$values = rwmb_meta( 'hotel_phone' );
								foreach ( $values as $value ) : ?> 

							  <p><?php echo $value ?></p>

							<?php endforeach; ?>
							<div>
								Для звонка <mark>из Белоруссии</mark> не забывайте набирать <mark>код Украины</mark>, выглядит это так <mark>8-10-38</mark>-055-34-58-479
							</div>
							<hr>
					<div class="text-info">
						Не забудьте сказать что Вы нашли <?php the_title(); ?> на сайте priazovka.com
					</div>
					<hr>
				</div>
      			<div class="lead text-uppercase text-weight-bold my-3">
		  				Другие варианты
		  			</div>
		  			<div class="row">
			  			<?php 
			          $custom_query = new WP_Query( array( 'post_type' => 'genichesk','posts_per_page'=>'4', 'orderby'   => 'rand' ) );
			          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			          <div class="col-md-12 pb-5">
			            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'post-thumba', array('class' => 'card-img-top')) ?></a>
			            <a href="<?php the_permalink(); ?>" class="lead text-secondary leftsidebar-link"><?php the_title(); ?></a>
			            <div class="text-success"><?php if(rwmb_meta('hotel_type')){ echo rwmb_meta('hotel_type'); } ?></div> 
			          </div>
			        <?php endwhile; endif; ?>
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