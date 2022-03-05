<?php
 
// 投稿画面でアイキャッチ画像を設定できるようにする
function custom_theme_setup()
{
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');


////////////////////////////////////////////////////////////////////

  
function my_load_widget_scripts() {
	wp_enqueue_script( '/script.js', array());

    // JSを読み込み
    wp_enqueue_script( 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array());
	wp_enqueue_script( 'https://unpkg.com/scrollreveal', array());
	wp_enqueue_script( 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array());

}

// wp_footerに処理を登録
add_action('wp_footer', 'my_load_widget_scripts');

//テーマディレクトリまでのパスを定数にしておくと便利です
define("DIRE", get_template_directory_uri());

function add_files(){

    wp_enqueue_style('my_style',DIRE.'/style.css');
    wp_enqueue_script('my_script',DIRE.'/script.js');

}
add_action('wp_enqueue_scripts', 'add_files');