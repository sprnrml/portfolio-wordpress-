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
	wp_register_style('style', get_template_directory_uri().'/css/style.css?ver=1.0.0', array() );
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

/*カスタムメニュー
---------------------------------------------------------- */
add_theme_support( 'menus' );

/*固定ページスラッグ表示
---------------------------------------------------------- */
function add_page_columns_name($columns) {
  $columns['slug'] = "スラッグ";
  return $columns;
}
function add_page_column($column_name, $post_id) {
  if( $column_name == 'slug' ) {
    $post = get_post($post_id);
    $slug = $post->post_name;
    echo attribute_escape($slug);
  }
}
add_filter( 'manage_pages_columns', 'add_page_columns_name');
add_action( 'manage_pages_custom_column', 'add_page_column', 10, 2);

/*投稿、固定ページ画像表示（url）
---------------------------------------------------------- */
function imagepassshort($arg) {
  $content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
  return $content;
}
add_action('the_content', 'imagepassshort');

/*固定ページデフォルトの＜ｐ＞、＜ｂｒ＞削除
---------------------------------------------------------- */
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
global $post;
$remove_filter = false;
$arr_types = array('page'); //適用させる投稿タイプを指定
$post_type = get_post_type( $post->ID );
if (in_array($post_type, $arr_types)) $remove_filter = true;
if ( $remove_filter ) {
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
}
return $content;
}

add_action( 'init', 'my_add_pages_categories' ) ;
function my_add_pages_categories()
{
    register_taxonomy_for_object_type( 'category', 'page' ) ;
}
add_action( 'pre_get_posts', 'my_set_page_categories' ) ;
function my_set_page_categories( $query )
{
    if ( $query->is_category== true && $query->is_main_query()){
        $query->set( 'post_type', array( 'post', 'page', 'nav_menu_item' )) ;
    }
}
