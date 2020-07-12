<?php
/* titleの読み込み
----------------------------------------------------------*/
add_theme_support( 'title-tag' );

/* CSSの読み込み
---------------------------------------------------------- */
function register_stylesheet() { //読み込むCSSを登録する
	wp_register_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css');
    wp_register_style('slick', get_template_directory_uri().'/css/slick.css');
	wp_register_style('reset', get_template_directory_uri().'/css/reset.css');
	wp_register_style('style', get_template_directory_uri().'/css/style.css');
}
function add_stylesheet() { //登録したCSSを以下の順番で読み込む
	register_stylesheet();
	wp_enqueue_style('reset', '', array(), '1.0', false);
	wp_enqueue_style('style', '', array(), '1.0', false);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

/* スクリプトの読み込み
---------------------------------------------------------- */
function themes_file_scripts() {
if(is_admin()) return; //管理画面ではスクリプトは読み込まない
wp_deregister_script( 'jquery'); //デフォルトの jQuery は読み込まない
//CDN から読み込む
wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '1.11.3', true);
// wp_enqueue_script( 'jquery-mig', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js', array(), '1.2.1', true);
wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/js/slick.min.js', array(), '20151215', true );
wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');

}
add_action( 'wp_enqueue_scripts', 'themes_file_scripts' );
