<?php get_header(); ?>
<div class="content category-cover artworks">
	<ul class="nav">
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/videos-animation/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/artworks/videos-animation/">
				Videos & Animation
				<br />
				<span class="chinese">视频和动画</span>
			</a>
		</li>
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/posters/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/artworks/posters/">
				Yizhou in Advertising Campaigns
				<br />
				<span class="chinese">周依作为品牌形象大使</span>
			</a>
		</li>
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/drawing/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/artworks/drawing/">
				Drawing
				<br />
				<span class="chinese">绘画</span>
			</a>
		</li>
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/sculpture/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/artworks/sculpture/">
				Sculpture
				<br />
				<span class="chinese">雕塑</span>
			</a>
		</li>
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/exhibition-projects/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/artworks/exhibition-projects/">
				Exhibition Installation
				<br />
				<span class="chinese">展览</span>
			</a>
		</li>
	</ul>
</div>
<?php get_footer(); ?>
