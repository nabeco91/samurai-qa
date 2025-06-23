<?php 
  function my_css_script() {
    // CSSの読み込み
    wp_enqueue_style('main-style', get_theme_file_uri('/style.css'));

    // JavaScriptの読み込み
    wp_enqueue_script('my-script', get_theme_file_uri('/script.js'), array(), false, true);
  };

// アクションフック
  add_action( 'wp_enqueue_scripts', 'my_css_script' );

//カスタム投稿タイプ　アイキャッチ画像の設定有効化
  add_theme_support('post-thumbnails');
