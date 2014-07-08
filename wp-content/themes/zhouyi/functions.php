<?php

/**
 * 注册两个导航菜单位
 * 可以在后台添加菜单置入
 * 可以在主题中使用wp_nav_menu(array('menu'=>'primary/foot'))来载入
 */
register_nav_menu('artworks', '作品');
register_nav_menu('media', '媒体');

add_theme_support( 'post-thumbnails' );

/**
 * 添加一些缩略图标准
 */
add_image_size( 'video-thumbnail', 600, 327, true );
add_image_size( 'banner', 1423, 0 );
add_image_size( 'one-second-layout', 690, 518, true );
add_image_size( 'one-third-layout', 455, 643, true );
add_image_size( 'one-fourth-layout', 256, 362, true );
add_image_size( 'large-thumbnail', 600, 600, true );

/**
 * 自动的页面标题和favicon注入
add_action('wp_head', function(){
	echo '<title>'.(is_home()?'':wp_title('',false).' - ').get_bloginfo('name').'</title>';
	echo '<link rel="shortcut icon" href="'.get_stylesheet_directory_uri().'/images/favicon.ico" />';
});
 */

/**
 * 样式和脚本的声明及其依赖
 * 通过wp_header()来载入
 */
add_action( 'wp_enqueue_scripts', function(){
	wp_register_script('animate', get_template_directory_uri().'/js/animate.js', array('jquery'));
	wp_register_script('responsiveslides', get_template_directory_uri().'/js/responsiveslides.min.js', array('jquery'));
	
	wp_register_style('style', get_template_directory_uri().'/style.css', array(), '2014-07');
	wp_register_style('windows', get_template_directory_uri().'/css/windows.css', array('style'));
	wp_register_style('responsiveslides', get_template_directory_uri().'/css/responsiveslides.css');
	
	wp_enqueue_style('style');
	wp_enqueue_style('responsiveslides');
	wp_enqueue_style('mediaelement');
	
	if(strpos($_SERVER['HTTP_USER_AGENT'], 'Windows') !== false){
		wp_enqueue_style('windows');
	}
	
});

add_action('wp_footer', function(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('mediaelement');
	wp_enqueue_script('responsiveslides');
	wp_enqueue_script('animate');
});

/**
 * 为当前活动的菜单项加上active类
add_filter( 'nav_menu_css_class', function($classes = array(), $menu_item = false){
    if(in_array('current-menu-item', $menu_item->classes) || in_array('current-post-ancestor', $menu_item->classes)){
        $classes[] = 'active';
    }
    return $classes;
}, 10, 2 );
 */

/**
 * 分页
function paginator() {
	global $wp_query;

	$paginator .= paginate_links(array(
			'base' => str_replace( 99999, '%#%', esc_url( get_pagenum_link( 99999 ) ) ),
			'format'=>'/%n%/page/%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'type' => 'list'
	));
	
	$paginator = str_replace('page-numbers', 'pagination', $paginator);

	return $paginator;
}
 */
?>
