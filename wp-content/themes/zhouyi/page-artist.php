<?php get_header(); ?>
<div class="content artist">
	<?php get_sidebar('artist'); ?>
	<div class="main">
		<ul>
			<li>
				
			</li>
			<li class="hoverable">
				<a>
					<img src="<?= get_template_directory_uri() ?>/images/artist_img2.jpg">
				</a>
				<a href="<?= site_url() ?>/artist-detail/" class="cover" >
					<p>
						Iceberg X YiZhou
						<br>1st collection ‘ Break the ice’</p>
					<p>
						Iceberg X YiZhou
						<br>破冰系列</p>
				</a>
			</li>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
