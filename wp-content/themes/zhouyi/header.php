<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>周依</title>
		<link rel="shortcut icon" href="<?=site_url()?>/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?=site_url()?>/favicon.ico" type="image/x-icon">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="header">
			<ul class="nav">
				<li class="logo">
					<a href="<?=site_url()?>" style="-webkit-transform:scale(1);"><img src="<?= get_template_directory_uri() ?>/images/logo.png" style="width:110px;"></a>
				</li>
				<li<?php if($_SERVER['REQUEST_URI'] === '/'){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>/">
						Biography
						<br />
						<span class="chinese">简介</span>
					</a>
				</li>
				<li<?php if(strpos($_SERVER['REQUEST_URI'], '/artworks/') !== false){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>/artworks/">
						Artworks
						<br />
						<span class="chinese">作品</span>
					</a>
				</li>
				<li<?php if(strpos($_SERVER['REQUEST_URI'], '/media/') !== false){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>/media/">
						Press Clipping
						<br />
						<span class="chinese">媒体报道</span>
					</a>
				</li>
				<li<?php if(strpos($_SERVER['REQUEST_URI'], '/artists/') !== false){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>/category/artists/">
						Artist
						<br />
						Clothing & Jewely Lines
						<br />
						<span class="chinese">艺术家
						<br />
						服饰&珠宝系列</span>
					</a>
				</li>
				<li<?php if(strpos($_SERVER['REQUEST_URI'], '/special/') !== false){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>/category/special">
						Special Projects<br />
						<span class="chinese">特殊项目</span>
					</a>
				</li>
				<li<?php if(strpos($_SERVER['REQUEST_URI'], '/crossover/') !== false){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>/category/crossover">
						Crossover with Brands
						<br />
						<span class="chinese">品牌跨界合作</span>
					</a>
				</li>
				<li<?php if(strpos($_SERVER['REQUEST_URI'], '/contact/') !== false){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>/contact/">
						Contact
						<br />
						<span class="chinese">联系</span>
					</a>
				</li>
				<li class="logo">
					<img src="<?= get_template_directory_uri() ?>/images/logo4.png" >
				</li>
			</ul>

		</div>
