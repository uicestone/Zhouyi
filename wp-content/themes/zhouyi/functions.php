<?php
/**
 * 注册两个导航菜单位
 * 可以在后台添加菜单置入
 * 可以在主题中使用wp_nav_menu(array('menu'=>'primary/foot'))来载入
register_nav_menu('primary', '主导航');
 */

//add_theme_support( 'post-thumbnails' );

/**
 * 添加一些缩略图标准
 */
add_image_size( 'video-thumbnail', 600, 327, true );

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
	wp_enqueue_script('jquery');
	wp_enqueue_script('mediaelement');
	
	wp_register_style('style', get_template_directory_uri().'/style.css');
	wp_enqueue_style('style');
	wp_enqueue_style('mediaelement');
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
