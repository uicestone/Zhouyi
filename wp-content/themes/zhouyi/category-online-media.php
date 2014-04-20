<?php get_header(); ?>
<div class="content media-online">
	<?php get_sidebar('media'); ?>
	<div class="main">
		<ul class="">
			<?php while(have_posts()): the_post(); ?>
			<li>
				<a href="<?=wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()))?>" target="_blank"><?php the_post_thumbnail('one-second-layout'); ?></a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>

<?php get_footer(); ?>
