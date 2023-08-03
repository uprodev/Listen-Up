<?php 

// show_admin_bar( false );

add_action('wp_enqueue_scripts', 'load_style_script');
function load_style_script(){
	wp_enqueue_style('my-style', get_template_directory_uri() . '/css/style.min.css', array(), time());
	wp_enqueue_style('my-style-main', get_template_directory_uri() . '/style.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('my-app', get_template_directory_uri() . '/js/app.min.js', array(), false, true);
	wp_enqueue_script('my-add', get_template_directory_uri() . '/js/add.js', array(), false, true);
}


add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header' => 'Header menu',
		'footer-1' => 'Footer menu-1',
		'footer-2' => 'Footer menu-2',
		'footer-3' => 'Footer menu-3',
	) );
});


add_theme_support( 'title-tag' );
add_theme_support('html5');
add_theme_support( 'post-thumbnails' ); 


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Main settings',
		'menu_title'	=> 'Theme options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


add_filter('wpcf7_autop_or_not', '__return_false');


function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyDiyT05YehIdz2LrV-QOeRa5M18WfKtlnY');
}
add_action('acf/init', 'my_acf_init');


add_filter('tiny_mce_before_init', 'override_mce_options');
function override_mce_options($initArray) {
	$opts = '*[*]';
	$initArray['valid_elements'] = $opts;
	$initArray['extended_valid_elements'] = $opts;
	return $initArray;
}


remove_filter('the_excerpt', 'wpautop');


function add_class_content ($string, $p_class = '', $h_class = '') {

	if (str_contains($string, '<p') && $p_class) {
		$from[] = "<p";
		$to[] = '<p class="'. $p_class . '"';
	}
	if (str_contains($string, '<h') && $h_class) {
		foreach (range(1,6) as $i) {
			$from[] = "<h$i";
			$to[] = '<h'. $i .' class="'. $h_class . '"';
		}
	}

	return str_replace ($from , $to   ,$string );

}


add_filter('bcn_breadcrumb_title', 'my_breadcrumb_title_swapper', 3, 10);
function my_breadcrumb_title_swapper($title, $type, $id)
{
    if(in_array('home', $type))
    {
        $title = __('Home', 'ListenUp');
    }
    return $title;
}


function getYoutubeIdFromUrl($url) {
    $parts = parse_url($url);
    if(isset($parts['query'])){
        parse_str($parts['query'], $qs);
        if(isset($qs['v'])){
            return $qs['v'];
        }else if(isset($qs['vi'])){
            return $qs['vi'];
        }
    }
    if(isset($parts['path'])){
        $path = explode('/', trim($parts['path'], '/'));
        return $path[count($path)-1];
    }
    return false;
}


add_post_type_support('page', 'excerpt');


include 'inc/gutenberg.php';