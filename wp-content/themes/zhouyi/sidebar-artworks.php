<div class="sub-nav">
	<ul class="nav logo">
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/artworks/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/artworks/">
				Art Works
				<br />
				<span class="chinese">作品</span>
			</a>
		</li>
	</ul>
	<ul class="nav">
		<li<?php if($category_name === 'videos-animation'){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/artworks/videos-animation/">
				Videos & Animation & Mixed Media
				<br />
				<span class="chinese">视频-动画-多媒体装置</span>
			</a>
		</li>
		<li<?php if($category_name === 'posters'){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/artworks/posters/">
				Posters
				<br />
				<span class="chinese">海报</span>
			</a>
		</li>
		<li<?php if($category_name === 'drawing'){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/artworks/drawing/">
				Drawing & Painting
				<br />
				<span class="chinese">绘画</span>
			</a>
		</li>
		<li<?php if($category_name === 'sculpture'){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/artworks/sculpture/">
				Sculpture
				<br />
				<span class="chinese">雕塑</span>
			</a>
		</li>
		<li<?php if($category_name === 'exhibition-projects'){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/artworks/exhibition-projects/">
				Exhibition Installation
				<br />
				<span class="chinese">展览</span>
			</a>
		</li>
	</ul>
</div>
