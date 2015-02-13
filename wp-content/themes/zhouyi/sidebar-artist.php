<div class="sub-nav">
	<ul class="nav logo">
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/artists/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/artists/">
				Artist
				<br />
				Clothing & Jewely Lines
				<br />
				<span class="chinese">艺术家
				<br />
				服饰&珠宝系列</span>
			</a>
		</li>
	</ul>
	<ul class="artist-list">
		<li data-artist="each-x-other">
			<a href="<?=site_url()?>/category/artists/#each-x-other"><img src="<?= get_template_directory_uri() ?>/images/artist_each-x-other.png"></a>
		</li>
		<li data-artist="gripoix">
			<a href="<?=site_url()?>/category/artists/#gripoix"><img src="<?= get_template_directory_uri() ?>/images/artist_gripoix.png"></a>
		</li>
		<li data-artist="iceberg">
			<a href="<?=site_url()?>/category/artists/#iceberg"><img src="<?= get_template_directory_uri() ?>/images/artist_iceberg.png"></a>
		</li>
		<li data-artist="yoox">
			<a href="<?=site_url()?>/category/artists/#yoox"><img src="<?= get_template_directory_uri() ?>/images/yoox.png"></a>
		</li>
	</ul>
</div>