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
		<a href="<?=site_url()?>/home/"><img src="<?=get_stylesheet_directory_uri()?>/images/logo_white.png" /></a>
		<?php wp_footer(); ?>
	</body>
</html>