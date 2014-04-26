<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>周依</title>
		<link rel="shortcut icon" href="<?=site_url()?>/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?=site_url()?>/favicon.ico" type="image/x-icon">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="header">
			<ul class="nav">
				<li class="logo">
					<img src="<?= get_template_directory_uri() ?>/images/logo1.gif" >
					<a href="/">Yi Zhou Studio</a>
				</li>
				<li<?php if($_SERVER['REQUEST_URI'] === '/'){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>">
						Biography
						<br />
						简介
					</a>
				</li>
				<li<?php if(strpos($_SERVER['REQUEST_URI'], '/artworks/') !== false){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>/artworks/">
						Artworks
						<br />
						作品
					</a>
				</li>
				<li class="logo"><img src="<?= get_template_directory_uri() ?>/images/logo2.gif" >
					<p>ShangHai Pyramis Point Ltd</p>
				</li>
				<li<?php if(strpos($_SERVER['REQUEST_URI'], '/media/') !== false){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>/media/">
						Media
						<br />
						媒体
					</a>
				</li>
				<li class="logo">
					<img src="<?= get_template_directory_uri() ?>/images/logo3.gif" >
					<p>Moon Prism<br />Digital Entertainment Arts Ltd</p>
				</li>
				<li<?php if(strpos($_SERVER['REQUEST_URI'], '/artists/') !== false){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>/category/artists/">
						Artist Line
						<br />
						艺术家系列
					</a>
				</li>
				<li<?php if(strpos($_SERVER['REQUEST_URI'], '/special/') !== false){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>/category/special">
						Special Projects<br />
						/<br />
						Crossover projects <br />
						with<br />
						brand<br />
						特殊项目
					</a>
				</li>
				<li<?php if(strpos($_SERVER['REQUEST_URI'], '/contact/') !== false){ ?> class="on"<?php } ?>>
					<a href="<?= site_url() ?>/contact/">
						Contact
						<br />
						联系
					</a>
				</li>
				<li class="logo">
					<img src="<?= get_template_directory_uri() ?>/images/logo4.gif" >
				</li>
			</ul>

		</div>
