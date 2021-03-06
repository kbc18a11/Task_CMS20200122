<?php
add_theme_support('post-thumbnails');
/**
 * CSSの読み込み
 */
function inputscss(): void
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . './css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'inputscss');

/**
 * jsの読み込み
 */
function inputsjs(): void
{
    wp_enqueue_script('myscript', get_template_directory_uri() . './js/jquery-3.4.1.min.js');
    wp_enqueue_script('myscript', get_template_directory_uri() . './js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'inputsjs');

/**
 * メニュー関係
 */
add_theme_support('menus');
register_nav_menu('header-navi','ヘッダーナビ');

//カスタム投稿関係
/**
 * ニュースリリースのカスタム投稿設定
 */
function create_post_newsrelease() {
    register_post_type( 'newsrelease', [ 
        'labels' => [
            'name'          => 'ニュースリリース',
            'singular_name' => 'newsrelease',
        ],
        'public'        => true,  
        'has_archive'   => false,
        'menu_position' => 5, 
        'show_in_rest'  => true,
    ]);
}
add_action( 'init', 'create_post_newsrelease' );
/**
 * ブログ生地のカスタム投稿設定
 */
function create_post_blog() {
    register_post_type( 'blog', [ 
        'labels' => [
            'name'          => 'ブログ',
            'singular_name' => 'blog',
        ],
        'public'        => true,  
        'has_archive'   => false,
        'menu_position' => 5, 
        'show_in_rest'  => true,
    ]);
}
add_action( 'init', 'create_post_blog' );
