<?php get_header(); ?>
<div class="content category-cover artworks">
	<ul class="nav">
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/videos-animation/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/videos-animation/">
				Videos & Animation
				<br />
				<span class="chinese">视频和动画</span>
			</a>
		</li>
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/posters/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/posters/">
				Posters
				<br />
				<span class="chinese">海报</span>
			</a>
		</li>
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/drawing/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/drawing/">
				Drawing
				<br />
				<span class="chinese">绘画</span>
			</a>
		</li>
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/sculpture/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/sculpture/">
				Sculpture
				<br />
				<span class="chinese">雕塑</span>
			</a>
		</li>
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/exhibition-projects/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/exhibition-projects/">
				Exhibition Installation
				<br />
				<span class="chinese">展览</span>
			</a>
		</li>
	</ul>
</div>
<?php get_footer(); ?>
