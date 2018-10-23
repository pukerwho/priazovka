<div class="bg-sidebar px-4 py-5 border-right">
	<div>
		<h2 class="lead text-info text-uppercase pt-1 pb-3">Меню</h2>
		<?php wp_nav_menu( array(
			'theme_location'  => '',
			'menu'            => 'mainmenu', 
			'container'       => 'div', 
			'container_class' => '', 
			'container_id'    => '',
			'menu_class'      => 'menu', 
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<div class="leftsidebar-menu">%3$s</div>',
			'depth'           => 0,
			'walker'          => '',
		)); ?>
	</div>
	<div class="mb-5">
		<h2 class="lead text-uppercase pt-5 pb-3"><a href="<?php echo get_post_type_archive_link( 'genicheskhotels' ); ?>" class="text-info">Отдых в Геническе</a></h2>
		<?php 
	    $custom_query = new WP_Query( array( 'post_type' => 'genichesk', 'posts_per_page'=>'10' ) );
	    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
	    	<div class="mb-2">
	    		<?php echo get_the_post_thumbnail($post->ID,'post-thumba', array('class' => 'sidebar-img rounded-circle mr-3')) ?><a href="<?php the_permalink(); ?>" class="text-secondary leftsidebar-link"><?php the_title(); ?></a>
	    	</div>
	  <?php endwhile; endif; ?>
	</div>
		<div class="weather-block border border-info p-3">
		<div class="lead">
			Погода в Геническе
		</div>
		<hr>
		<div id="weather"></div>	
	</div>
	<div>
		<h2 class="lead text-uppercase pt-5 pb-3"><a href="<?php echo get_post_type_archive_link( 'gengorka' ); ?>" class="text-info">Отдых в Генгорке</a></h2>
		<?php 
	    $custom_query = new WP_Query( array( 'post_type' => 'gengorka','posts_per_page'=>'10' ) );
	    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
	    	<div class="mb-2">
	    		<?php echo get_the_post_thumbnail($post->ID,'post-thumba', array('class' => 'sidebar-img rounded-circle mr-3')) ?><a href="<?php the_permalink(); ?>" class="text-secondary leftsidebar-link"><?php the_title(); ?></a>
	    	</div>
	  <?php endwhile; endif; ?>
	</div>
	<div>
		<h2 class="lead text-uppercase pt-5 pb-3"><a href="<?php echo get_post_type_archive_link( 'schastlivtsevohotels' ); ?>" class="text-info">Отдых в Счастливцево</a></h2>
		<?php 
	    $custom_query = new WP_Query( array( 'post_type' => 'shchaslyvtsevo','posts_per_page'=>'10' ) );
	    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
	    	<div class="mb-2">
	    		<?php echo get_the_post_thumbnail($post->ID,'post-thumba', array('class' => 'sidebar-img rounded-circle mr-3')) ?><a href="<?php the_permalink(); ?>" class="text-secondary leftsidebar-link"><?php the_title(); ?></a>
	    	</div>
	  <?php endwhile; endif; ?>
	</div>
	<div>
		<h2 class="lead text-uppercase pt-5 pb-3"><a href="<?php echo get_post_type_archive_link( 'strelkovoehotels' ); ?>" class="text-info">Отдых в Стрелковом</a></h2>
		<?php 
	    $custom_query = new WP_Query( array( 'post_type' => 'strelkovoe','posts_per_page'=>'10' ) );
	    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
	    	<div class="mb-2">
	    		<?php echo get_the_post_thumbnail($post->ID,'post-thumba', array('class' => 'sidebar-img rounded-circle mr-3')) ?><a href="<?php the_permalink(); ?>" class="text-secondary leftsidebar-link"><?php the_title(); ?></a>
	    	</div>
	  <?php endwhile; endif; ?>
	  <div>
			<h2 class="lead text-uppercase pt-5 pb-3"><a href="<?php echo get_post_type_archive_link( 'dostop' ); ?>" class="text-info">Достопримечательности</a></h2>
			<?php 
		    $custom_query = new WP_Query( array( 'post_type' => 'dostop','posts_per_page'=>'10' ) );
		    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
		    	<div class="mb-2">
		    		<?php echo get_the_post_thumbnail($post->ID,'post-thumba', array('class' => 'sidebar-img rounded-circle mr-3')) ?><a href="<?php the_permalink(); ?>" class="text-secondary leftsidebar-link"><?php the_title(); ?></a>
		    	</div>
		  <?php endwhile; endif; ?>
		</div>
		<div>
			<h2 class="lead text-uppercase pt-5 pb-3"><a href="<?php echo get_post_type_archive_link( 'videos' ); ?>" class="text-info">Видео</a></h2>
			<?php 
		    $custom_query = new WP_Query( array( 'post_type' => 'videos','posts_per_page'=>'10' ) );
		    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
		    	<div class="mb-2">
		    		<?php echo get_the_post_thumbnail($post->ID,'post-thumba', array('class' => 'sidebar-img rounded-circle mr-3')) ?><a href="<?php the_permalink(); ?>" class="text-secondary leftsidebar-link"><?php the_title(); ?></a>
		    	</div>
		  <?php endwhile; endif; ?>
		</div>
		<div>
			<h2 class="lead text-uppercase pt-5 pb-3"><a href="<?php echo get_post_type_archive_link( 'webcamers' ); ?>" class="text-info">WEB-Камеры</a></h2>
			<?php 
		    $custom_query = new WP_Query( array( 'post_type' => 'webcamers','posts_per_page'=>'10' ) );
		    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
		    	<div class="mb-2">
		    		<?php echo get_the_post_thumbnail($post->ID,'post-thumba', array('class' => 'sidebar-img rounded-circle mr-3')) ?><a href="<?php the_permalink(); ?>" class="text-secondary leftsidebar-link"><?php the_title(); ?></a>
		    	</div>
		  <?php endwhile; endif; ?>
		</div>
	</div>
</div>