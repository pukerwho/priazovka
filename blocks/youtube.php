<!-- YOUTUBE -->
<div class="lead text-uppercase text-weight-bold pt-3 mb-4">
  <span>Наш канал</span>
  <a href="https://www.youtube.com/channel/UCTwTgpDfjQ5mWbT79wk37pg" class="float-right btn btn-outline-danger d-none d-md-block my-2 my-sm-0 mr-md-0 mr-sm-2">Подписаться</a>
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