<?php get_header(); ?>
<div class="content exhibition-projects">
	<?php get_sidebar('artworks'); ?>
	<div class="main">
		<ul>
			<li>
				<a href=""><img src="<?= get_template_directory_uri() ?>/images/exhibition_img1.jpg"></a>

			</li>
			<li>
				<a href=""><img src="<?= get_template_directory_uri() ?>/images/exhibition_img2.jpg"></a>

			</li>
			<li>
				<a href=""><img src="<?= get_template_directory_uri() ?>/images/exhibition_img3.jpg"></a>

			</li>
			<li class="banner">
				<a href=""><img src="<?= get_template_directory_uri() ?>/images/exhibition_img4.jpg"></a>
			</li>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
