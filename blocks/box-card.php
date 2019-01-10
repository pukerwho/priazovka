<a href="<?php the_permalink(); ?>" class="box-link">
	<div class="box">
		<div class="box-img mb-3">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
			<div class="play"></div>
		</div>
		<div class="box-title mb-3">
			<?php the_title(); ?>
		</div>
	</div>
</a>