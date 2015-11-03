<?php
$intro_en = array_pop(get_posts(array('name'=>'intro-en')));
$intro_cn = array_pop(get_posts(array('name'=>'intro-cn')));
get_header();
?>
<div class="content home">
	<div class="cover" style="background-image: url('<?=wp_get_attachment_url(get_post_thumbnail_id($intro_en->ID))?>')"></div>
	<div class="right">
		<div class="intro-language-switcher">
			<button type="button" class="zh-cn" target-lang="zh-cn"></button>
			<button type="button" class="en active" target-lang="en"></button>
		</div>
		<div class="intro" lang="en">
			<?=wpautop($intro_en->post_content)?>
		</div>
		<div class="intro" lang="zh-cn" style="display: none;">
			<?=wpautop($intro_cn->post_content)?>
		</div>
		<!-- /*<div class="links" lang="en">
			<div class="left">
				<p>
					Agent:
					<a href="http://www.nextmodels.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/www.nextmodels.com.png" alt=""></a>
					<a href="http://www.creativeexchangeagency.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/www.creativeexchangeagency.com.png" alt=""></a>
					<a href="http://www.lagente.in" target="_blank"><img src="<?=get_template_directory_uri()?>/images/www.lagente.in.png" alt=""></a>
					<a href="http://www.finchandpartners.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/www.finchandpartners.com.png?v=2" alt=""></a>
					<a href="" target="_blank"><img src="<?=get_template_directory_uri()?>/images/EMG-logo.png" alt=""></a>
				</p>
			</div>
			<div class="right">
				<p>Yi Zhou is art director for<a href="http://www.tudou.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/tudou.png" alt=""></a></p>
				<p>Art fashion advisor member for<a href="http://www.sina.com.cn" target="_blank"><img src="<?=get_template_directory_uri()?>/images/logo_n_2.jpg" alt=""></a></p>
				<p>Tencent Beauty & Fashion ambassador :<a href="http://www.qq.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/logo_n_3.jpg" alt=""></a></p>
			</div>
		</div>*/ -->
		<!-- <div class="links" lang="zh-cn" style="display: none;">
			<div class="left">
				<p>
					代理公司:
					<a href="http://www.nextmodels.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/www.nextmodels.com.png" alt=""></a>
					<a href="http://www.creativeexchangeagency.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/www.creativeexchangeagency.com.png" alt=""></a>
					<a href="http://www.lagente.in" target="_blank"><img src="<?=get_template_directory_uri()?>/images/www.lagente.in.png" alt=""></a>
					<a href="http://www.finchandpartners.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/www.finchandpartners.com.png" alt=""></a>
					<a href="" target="_blank"><img src="<?=get_template_directory_uri()?>/images/EMG-logo.png" alt=""></a>
				</p>
			</div>
			<div class="right">
				<p>土豆艺术总监<a href="http://www.tudou.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/tudou.png" alt=""></a></p>
				<p>新浪时尚艺术顾问<a href="http://www.sina.com.cn" target="_blank"><img src="<?=get_template_directory_uri()?>/images/logo_n_2.jpg" alt=""></a></p>
				<p>腾讯美容大使<a href="http://www.qq.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/logo_n_3.jpg" alt=""></a></p>
			</div>
		</div> -->
		<?php foreach(array('en', 'zh-cn') as $lang){ ?>
		<?php	$posts = get_posts(array('tag'=>$lang, 'category_name'=>'intro')); ?>
		<?php	foreach($posts as $post){ ?>
		<div class="intro" lang="<?=$lang?>"<?php if($lang !== 'en'){ ?> style="display: none;"<?php } ?>>
			<h2><?=get_the_title($post->ID)?></h2>
			<?=wpautop($post->post_content)?>
		</div>
		<?php	 } ?>
		<?php } ?>
	</div>
</div>

<?php get_footer(); ?>