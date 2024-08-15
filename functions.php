<?php
function my_files() {

// css読み込み
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css", array(), filemtime(get_theme_file_path('/style.css')), "all");
    wp_enqueue_style("service", get_template_directory_uri() . "/service.css", array(), filemtime(get_theme_file_path('/service.css')), "all");
    wp_enqueue_style("recruit", get_template_directory_uri() . "/recruit.css", array(), filemtime(get_theme_file_path('/recruit.css')), "all");
    wp_enqueue_style("recruit-new", get_template_directory_uri() . "/recruit-new.css", array(), filemtime(get_theme_file_path('/recruit-new.css')), "all");


// jQueryの読み込み
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0' );
// js読み込み
    wp_enqueue_script("slick", get_template_directory_uri() . "/js/slick.js", array("jquery"), filemtime(get_theme_file_path('/js/slick.js')), true);
    wp_enqueue_script("slick.min", get_template_directory_uri() . "/js/slick.min.js", array("jquery"), filemtime(get_theme_file_path('/js/slick.min.js')), true);
    wp_enqueue_script("main", get_template_directory_uri() . "/js/main.js", array("jquery"), filemtime(get_theme_file_path('/js/main.js')), true);

  }

  add_action("wp_enqueue_scripts", "my_files");


  add_action( 'init', 'create_post_type' );
function create_post_type() {

    register_post_type( 'new', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => '新卒', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'new',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => false, // アーカイブ機能ON/OFF
        'menu_position' => 5,     // 管理画面上での配置場所
        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
        
    ]);


    register_post_type('half', //カスタム投稿タイプ名
        array( //オプション
          'label' => '中途',
          'public' => true,
          'has_archive' => true,
          'menu_position' => 5,
          'show_in_rest' => true,
          'supports' => array(
            // サポートする機能を記述
          ),
        )
      );


}

?>



