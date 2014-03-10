<?php get_header(); ?>
<div class="content">
	<?php get_sidebar('media'); ?>
	<div class="main_sub">
		<ul class="main_right media_online">
			<li>
				<div class="tmple">
					<a href="<?=site_url()?>/media-print-detail/">
						<img src="<?=get_template_directory_uri()?>/images/online_img1.jpg"></a>

				</div>
			</li>

			<!--loop end-->
			<li>
				<div class="tmple">
					<a href="<?=site_url()?>/media-print-detail/">
						<img src="<?=get_template_directory_uri()?>/images/online_img2.jpg"></a>

				</div>
			</li>

			<!--loop end-->
			<li>
				<div class="tmple">
					<a href="<?=site_url()?>/media-print-detail/">
						<img src="<?=get_template_directory_uri()?>/images/online_img3.jpg"></a>

				</div>
			</li>

			<!--loop end-->
			<li>
				<div class="tmple">
					<a href="<?=site_url()?>/media-print-detail/">
						<img src="<?=get_template_directory_uri()?>/images/online_img4.jpg"></a>

				</div>
			</li>

			<!--loop end-->
		</ul>
	</div>
	<!--main end-->

</div>

<?php get_footer(); ?>
