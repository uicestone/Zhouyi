<?php get_header(); ?>

<div class="content">
	<?php get_sidebar('artworks'); ?>
	<div class="main_sub">
		<ul class="main_right">
			<li>
				<div class="tmple">
					<a href="">
						<img src="<?=get_template_directory_uri()?>/images/exhibition_img1.jpg"></a>

				</div>
			</li>
			<!--loop end-->
			<li>
				<div class="tmple">
					<a href="">
						<img src="<?=get_template_directory_uri()?>/images/exhibition_img2.jpg"></a>

				</div>
			</li>
			<!--loop end-->
			<li>
				<div class="tmple">
					<a href="">
						<img src="<?=get_template_directory_uri()?>/images/exhibition_img3.jpg"></a>

				</div>
			</li>
			<!--loop end-->

			<li>
				<!--横向图片-->
				<div class="tmple2">
					<a href="">
						<img src="<?=get_template_directory_uri()?>/images/exhibition_img4.jpg"></a>

				</div>
			</li>
			<!--loop end-->
		</ul>
	</div>
	<!--main end-->
</div>

<?php get_footer(); ?>
