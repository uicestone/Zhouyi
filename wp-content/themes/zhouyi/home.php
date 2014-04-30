<?php
$intro_en = array_pop(get_posts(array('name'=>'intro-en')));
$intro_cn = array_pop(get_posts(array('name'=>'intro-cn')));
get_header();
?>
<div class="content">
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
		<!--intro end-->
		<div class="links">
			<div class="left">
				<p>
					Agent:
					<a href="" title=""><img src="<?=get_template_directory_uri()?>/images/logo_n.jpg" alt=""></a>
					<a href="" title=""><img src="<?=get_template_directory_uri()?>/images/logo_p.jpg" alt=""></a>
					<a href="" title=""><img src="<?=get_template_directory_uri()?>/images/logo_q.jpg" alt=""></a>
				</p>
			</div>
			<div class="right">
				<p>Yi Zhou is art director for :<a href=""><img src="<?=get_template_directory_uri()?>/images/logo_n_2.jpg" alt=""></a></p>
				<p>Art fashion advisor member for :<a href=""><img src="<?=get_template_directory_uri()?>/images/logo_n_2.jpg" alt=""></a></p>
				<p>Tencent Beauty & Fashion ambassador :<a href=""><img src="<?=get_template_directory_uri()?>/images/logo_n_3.jpg" alt=""></a></p>
			</div>
		</div>

	</div>
</div>

<?php get_footer(); ?>