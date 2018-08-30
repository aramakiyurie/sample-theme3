
<?php


	function theme_setup() {
		add_theme_support( 'custom-logo' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
		array(
			'primary2' => 'Primary Menu2'
		)
	);

	}

	add_action( 'after_setup_theme', 'theme_setup' );

	function sidebar_widgets(){
		register_sidebar(
			array(
			'name'          => 'サイドバー',
			'id'            => 'sidebar-1',
			'description'   => '画面の右にあるサイドバー',
			'before_widget' => '<section id="%1%s" class="%2%s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'  => '</h2>'
			)
		);

	}
	add_action( 'widgets_init', 'sidebar_widgets' );

	function theme_style() {
		wp_enqueue_style( 'theme-common', get_template_directory_uri() . '/css/common.css' );
		wp_enqueue_style( 'theme-style',  get_stylesheet_uri() );
		}
		add_action( 'wp_enqueue_scripts', 'theme_style');


		function theme_search_keyword( $str ) {
		if ( is_search() ) {
			$query = trim( get_search_query() );
			$query = mb_convert_kana( $query, 'as', 'UTF-8' );
			if ( !empty( $query ) ) {
				$str = str_replace( $query, '<mark>' . $query . '</mark>', $str );
			}
			return $str;
		}
	}
	add_action( 'get_the_excerpt', 'theme_search_keyword' );
	add_action( 'the_title', 'theme_search_keyword' );



?>
