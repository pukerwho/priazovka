<?php
// Include your functions files here
include('inc/enqueues.php');
// Add your theme support ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
function customThemeSupport() {
    global $wp_version;
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    // let wordpress manage the title
    add_theme_support( 'title-tag' );
    //add_theme_support( 'custom-background', $args );
    //add_theme_support( 'custom-header', $args );
    // Automatic feed links compatibility
    if( version_compare( $wp_version, '3.0', '>=' ) ) {
        add_theme_support( 'automatic-feed-links' );
    } else {
        automatic_feed_links();
    }
}
add_action( 'after_setup_theme', 'customThemeSupport' );
// Content width
if( !isset( $content_width ) ) {
    // @TODO : edit the value for your own specifications
    $content_width = 960;
}
// Register menus, use wp_nav_menu() to display menu to your template ( cf : http://codex.wordpress.org/Function_Reference/wp_nav_menu )
register_nav_menus( array(
    'main_menu' => __( 'Menu principal', 'minimal-blank-theme' ) //@TODO : change i18n domain name to yours
) );
// Register sidebars
function registerThemeSidebars() {
    if( !function_exists( 'register_sidebar' ) ) {
        return;
    }
    register_sidebar( array(
        'name' => 'Main sidebar',
        'id' => 'main-sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'registerThemeSidebars' );
function addAdminEditorStyle() {
    add_editor_style( get_stylesheet_directory_uri() . 'css/editor-style.css' );
};
// подключаем файлы со стилями
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    wp_enqueue_style( 'editor-style', get_stylesheet_directory_uri() . '/css/style.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_register_script( 'loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );
 

    wp_localize_script( 'loadmore', 'loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 
        'posts' => json_encode( $wp_query->query_vars ), 
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );
 
    wp_enqueue_script( 'loadmore' );
};
function loadmore_ajax_handler(){
 
    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; 
    $args['post_status'] = 'publish';
 
   
    query_posts( $args );
 
    if( have_posts() ) :
 
        
        while( have_posts() ): the_post();
            get_template_part( 'blocks/default/loop', 'default' );
        
        endwhile;
 
    endif;
    die; 
}

add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); 
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); 


function add_theme_menu_item() {
    add_menu_page("Мои настройки", "Мои настройки", "manage_options", "theme-panel", "theme_settings_page", null, 99);
    //register our settings
    register_setting( 'my-settings-group', 'facebook_link' );
    register_setting( 'my-settings-group', 'twitter_link' );
    register_setting( 'my-settings-group', 'google_link' );
    register_setting( 'my-settings-group', 'pinterest_link' );
}

add_action("admin_menu", "add_theme_menu_item");

function theme_settings_page() {
    include 'form-file.php';
}

function create_post_type() {
  register_post_type( 'genichesk',
    array(
      'labels' => array(
          'name' => __( 'Геническ' ),
          'singular_name' => __( 'Запись' )
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );

  register_post_type( 'gengorka',
    array(
      'labels' => array(
          'name' => __( 'Генгорка' ),
          'singular_name' => __( 'Запись' )
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );

  register_post_type( 'shchaslyvtsevo',
    array(
      'labels' => array(
          'name' => __( 'Счастливцево' ),
          'singular_name' => __( 'Запись' )
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );

  register_post_type( 'strelkovoe',
    array(
      'labels' => array(
          'name' => __( 'Стрелковое' ),
          'singular_name' => __( 'Запись' )
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );
}

add_action( 'init', 'create_post_type' );

function your_prefix_get_meta_box( $meta_boxes ) {
  $prefix = 'meta-';

  $meta_boxes[] = array(
    'id' => 'hotel-cities',
    'title' => esc_html__( 'Информация', 'hotel-cities' ),
    'post_types' => array('genichesk','gengorka', 'shchaslyvtsevo', 'strelkovoe'),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
      array(
        'name'        => 'Тип',
        'label_description' => 'Частный-сектор? Мини-пансионат?',
        'id'          => 'hotel_type',
        'type'        => 'text',
        'clone'       => false,
        'placeholder' => 'Что это?',
        'size'        => 30,
        // Datalist
        'datalist'    => array(
          // Unique ID for datalist. Optional.
          'id'      => 'text_datalist',
          // List of predefined options
          'options' => array(
              'Частный сектор',
              'Мини-пансионат',
              'Отель',
              'Пансионат',
              'База отдыха',
          ),
        ),
      ),
      array(
        'name'  => 'Адрес',
        'id'    => 'hotel_address',
        'size'        => 50,
        'field_type' => 'textarea',
      ),
      array(
        'name'  => 'Телефоны',
        'id'    => 'hotel_phone',
        'size'        => 50,
        'field_type' => 'text',
        'clone' => true,
      ),
      array(
        'name'  => 'Просмотров',
        'id'    => 'hotel_visit',
        'size'        => 50,
        'field_type' => 'text',
      ),
      array(
        'name'        => 'На картинке текст',
        'label_description' => 'Популярно? Отличная цена',
        'id'          => 'hotel_alert',
        'type'        => 'text',
        'clone'       => false,
        'placeholder' => 'Нужно выбрать',
        'size'        => 30,
        // Datalist
        'datalist'    => array(
          // Unique ID for datalist. Optional.
          'id'      => 'text_datalist_alert',
          // List of predefined options
          'options' => array(
            'Популярно',
            'Пользуется спросом',
            'Отличная цена',
            'Акция',
            'Рекомендовано',
          ),
        ),
      ),
    )
  );
  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'your_prefix_get_meta_box' );