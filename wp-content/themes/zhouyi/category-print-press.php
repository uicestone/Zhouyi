<?php get_header(); ?>
<div class="content media-print">
	<?php get_sidebar('media'); ?>
	<div class="main">
		<ul>
			<?php while(have_posts()): the_post(); ?>
			<li>
				<a href="<?=wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()))?>"><?php the_post_thumbnail('one-fourth-layout'); ?></a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>

<?php get_footer(); ?>
