<?php get_header(); ?>
<div class="content media-online">
	<?php get_sidebar('media'); ?>
	<div class="main">
		<ul class="">
			<li>
				<a href="<?= site_url() ?>/media-print-detail/"><img src="<?= get_template_directory_uri() ?>/images/online_img1.jpg"></a>
			</li>
			<li>
				<a href="<?= site_url() ?>/media-print-detail/"><img src="<?= get_template_directory_uri() ?>/images/online_img2.jpg"></a>
			</li>
			<li>
				<a href="<?= site_url() ?>/media-print-detail/"><img src="<?= get_template_directory_uri() ?>/images/online_img3.jpg"></a>
			</li>
			<li>
				<a href="<?= site_url() ?>/media-print-detail/"><img src="<?= get_template_directory_uri() ?>/images/online_img4.jpg"></a>
			</li>
		</ul>
	</div>
</div>

<?php get_footer(); ?>
