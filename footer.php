    </section>
    <footer class="border-top py-5">
      <div class="container">
        <div class="row mb-3">
          <div class="col-md-4">
            <a href="<?php echo home_url(); ?>">Отдых в Геническе и на Арабатской стрелке</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="site-description">
              
            </div>
            <ul class="list-inline social lead py-3">
              <?php if (ale_get_option('fb')) : ?>
                <li class="list-inline-item"><a href="<?php echo ale_option('fb'); ?>" class="text-info"><i class="fab fa-facebook-f text-center border-info"></i></a></li>
              <?php endif; ?>
              <?php if (ale_get_option('telegram')) : ?>
                <li class="list-inline-item"><a href="<?php echo ale_option('telegram'); ?>" class="text-info"><i class="fab fa-telegram-plane text-center border-info"></i></a></li>
              <?php endif; ?>
            </ul>
          </div>
          <div class="col-md-3">
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
          <div class="col-md-3">
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
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>