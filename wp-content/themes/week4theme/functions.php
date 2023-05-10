<?php
function c13theme_script_enqueue(){
  wp_enqueue_style('customstyle', get_template_directory_uri().'/custom/custom.css', [], '1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri().'/custom/custom.js', [], '1.0.0', true);
};
add_action('wp_enqueue_scripts', 'c13theme_script_enqueue');

//Adding menus
function wkfour_theme_setup(){
  add_theme_support('menus');
  register_nav_menu('primary', 'primary header');
  register_nav_menu('footer', 'footer nav');

}

add_action('init', 'wkfour_theme_setup');

function themename_post_formats_setup() {
    add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
}
add_action( 'after_setup_theme', 'themename_post_formats_setup' );

add_theme_support('post-thumbnails');

// CUSTOM POST TYPES
function portfolio_post_type(){
  $labels = [
    'name' => 'portfolios',
    'singular_name' => 'portfolio',
    'add_new' => 'Add portfolio item',
    'all_items' => 'All Portfolios',
    'add_new_item' =>'Edit Items',
    'new_item' => 'New Item',
    'view_item' => 'View Items',
    'search_item' => 'Search Portfolio',
    'not_found' => 'No Item found',
    'not_found_in_trash' => 'No Item found in trash',
    'parent_item_colon' => 'Parent Item'
  ];

  $args = [
    'labels' => $labels,
    'public' => true,
    'has_archives' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability' => 'post',
    'hierarchical' => false,
    'supports' => [
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revision',
    ],
    'taxonomies' => [
      'category',
      'post_tag',
      'menu_postion' => 5
    ]
  ];

  register_post_type('portfolio', $args);
}

add_action('init', 'portfolio_post_type');