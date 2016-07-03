<?php

/**
@ Khai bao hang gia tri
	@ THEME_URL = lay duong dan thu muc theme
	@ CORE = lay duong dan cua thu muc /core
**/
define( 'THEME_URL', get_stylesheet_directory() );
define ( 'CORE', THEME_URL . "/core" );

/**
@ Nhung file /core/init.php
**/
require_once( CORE . "/init.php" );

/**
@ Thiet lap chieu rong noi dung
**/
if ( !isset($content_width) ) {
	$content_width = 620;
}

/**
@ Khai bao chuc nang cua theme 
**/
if ( !function_exists('phongdat_theme_setup') ) {
	function phongdat_theme_setup() {

		/* Thiet lap textdomain */
		$language_folder = THEME_URL . '/languages';
		load_theme_textdomain( 'phongdat', $language_folder );
		/* Tu dong them link RSS len <head> **/
		add_theme_support( 'automatic-feed-links' );

		/* Them post thumbnail */
		add_theme_support( 'post-thumbnails' );

		/* Post Format */
		add_theme_support( 'post-formats', array(
			'image',
			'video',
			'gallery',
			'quote',
			'link'
		) );

		/* Them title-tag */
		add_theme_support( 'title-tag' );

		/* Them custom background */
		$default_background = array(
			'default-color' => '#e8e8e8'
		);
		add_theme_support( 'custom-background', $default_background );

		/* Them menu */
		register_nav_menu( 'navbar-nav', __('navbar-nav', 'phongdat') );

		/* Tao sidebar */
		$sidebar = array(
			'name' => __('Main Sidebar', 'phongdat'),
			'id' => 'main-sidebar',
			'description' => __('Default sidebar'),
			'class' => 'main-sidebar',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		);
		register_sidebar( $sidebar );

	}
	add_action( 'init', 'phongdat_theme_setup' );
}
// Ham hien thi site-title, site-des
if(!function_exists('phongdat_header')) {
	function phongdat_header(){ ?>
		<div id="site-name" class="col-sm-6 col-md-4">	
			<?php
				if(is_home() || is_front_page()) {
					printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
							get_bloginfo('url'),
							get_bloginfo('description'),
							get_bloginfo('sitename')
						);
				} else {
					printf('<p><a href="%1$s" title="%2$s">%3$s</a></p>',
							get_bloginfo('url'),
							get_bloginfo('description'),
							get_bloginfo('sitename')
						);
				}
			?>
		  </div>
		  <div id="logo" class="col-sm-6 col-md-8"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/1234.png" /></a></div>
		  
		 
		  
		  <?php 


	}
}

// Ham cat' ngan title

function the_titlesmall($before = '', $after = '', $echo = true, $length = false) { $title = get_the_title();

	if ( $length && is_numeric($length) ) {
		$title = substr( $title, 0, $length );
	}

	if ( strlen($title)> 0 ) {
		$title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
		if ( $echo )
			echo $title;
		else
			return $title;
	}
}


// Ham hien thi tieu de post=entry_title
if(!function_exists('phongdat_entry_title') ){
	function phongdat_entry_title(){
		if(is_single()) : ?>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_titlesmall('', '', true, '14') ?></a></h1>
		<?php else : ?>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_titlesmall('', '', true, '14') ?></a></h2>
		<?php endif;
	} 
}




// Ham hien thi thumbnail
if(!function_exists('phongdat_thumbnail') ){
	function phongdat_thumbnail($size){
		if(!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')) : ?>
		<figure class="img-thumbnail"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail($size); ?></a></figure> <?php
		endif;

	}
}

// ham cat ngan noi dung

function the_contentsmall($before = '', $after = '', $echo = true, $length = false) { $title = get_the_content();

	if ( $length && is_numeric($length) ) {
		$title = substr( $title, 0, $length );
	}

	if ( strlen($title)> 0 ) {
		$title = apply_filters('the_contentsmall', $before . $title . $after, $before, $after);
		if ( $echo )
			echo $title;
		else
			return $title;
	}
}

// Ham hien thi noi dung va phan trang don gian trong single
if ( !function_exists('phongdat_entry_content') ) {
	function phongdat_entry_content() {
		if( !is_single() && !is_page() ) {
			the_excerpt();
		} else {
			the_content();

			/* Phan trang trong single */
			$link_pages = array(
				'before' => __('<p>Page: ', 'phongdat'),
				'after' => '</p>',
				'nextpagelink' => __('Next Page', 'phongdat'),
				'previouspagelink' => __('Previous Page', 'phongdat')
			);
			wp_link_pages( $link_pages );
		}
	}
}
// ham hien thi readmore
if(!function_exists('phongdat_readmore')){
function phongdat_readmore() {
	return '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">'.__('...[Read More]', 'phongdat').'</a>';
}
}
add_filter('excerpt_more', 'phongdat_readmore');


// ham filter hook coppy right
function phongdat_copyright(){
	echo'thiet ke web by phongdat';
}
add_filter('phongdat_copyright', 'phongdat_copyright');

/* 
if(!function_exists('phongdat_entry_content') ){
	function phongdat_entry_content(){
		if(!is_single() && !is_page()) :
			the_excerpt();
		else :
			the_content();
		// phan trang cho single
		$link_pages = array(
			'before' => __('<p>:Page ', 'phongdat'),
			'after' => '</p>',
			'nextpagelink' => __('Next Page', 'phongdat'),
			'previouspagelink'=>__('Previous Page', 'phongdat')
			);


		wp_link_pages($link_pages);
		endif;

	}
}
*/

// Ham hien thi ReadMore
/*
if(!function_exists('phongdat_readmore')){
	function phongdat_readmore(){
		return '<a class="read-more" href="'. get_permalink(get_the_ID()) .'">'.__('...[READMORE]', 'phongdat').'</a>';
	}
}
add_filter('excerpt_more', 'phongdat_readmore');
*/

// ham hien thi menu
if(!function_exists('phongdat_menu')){
	function phongdat_menu(){ ?>
		<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Danh Muc</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="http://localhost:8888/phongdat/category/hang-hoa/">Tài Nguyên</a></li>
                <li><a href="#contact">Liên Hệ </a></li>
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dịch Vụ <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Seo Hosting</a></li>
                    <li><a href="#">Seo Google Adword</a></li>
                    <li><a href="#">Seo Thủ Công</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Tao WebSite</li>
                    <li><a href="#">Wordpress</a></li>
                    <li><a href="#">JoomLa</a></li>
                  </ul>
                </li>
                <li><input label="tim kiem" type="text" class="form-control" id="exampleInputName2" value="Seach" /></li>
              </ul>
            </div>
          </div>
      
    
        </nav>

      </div>
    </div>


	<?php }
}

//hoc action hook
function phongdat_action_hook(){
	echo 'Viet Nam';
}
add_action('before_content', 'phongdat_action_hook');

//Insert jQuery from Google Libraries
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

//Insert FlexSlider 2 plugin
function flexslider2() {
        wp_enqueue_script( 'flexslider', get_stylesheet_directory_uri() . '/flexslider/jquery.flexslider-min.js', array('jquery') );
        wp_enqueue_script( 'flexslider-option', get_stylesheet_directory_uri() . '/flexslider/flexslider-option.js', array('jquery') );
        wp_enqueue_style( 'flexslider-css', get_stylesheet_directory_uri() . '/flexslider/flexslider.css');
}
add_action( 'wp_enqueue_scripts', 'flexslider2' );




// nhung file style.css vao theme
function phongdat_style() {
	wp_register_style( 'main-style', get_template_directory_uri() . "/style.css", 'all' );
	wp_enqueue_style('main-style');
	wp_register_style( 'reset-style', get_template_directory_uri() . "/reset.css", 'all' );
	wp_enqueue_style('reset-style');
	// nhung boostrap
	wp_register_style( 'bootstrapmin-style', get_template_directory_uri() . "/css/bootstrap.min.css", 'all' );
	wp_enqueue_style('bootstrapmin-style');

	wp_register_style( 'bootstraptheme-style', get_template_directory_uri() . "/css/bootstrap-theme.min.css", 'all' );
	wp_enqueue_style('bootstraptheme-style');


}
add_action('wp_enqueue_scripts', 'phongdat_style');

