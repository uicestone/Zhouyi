<?php get_header(); ?>
<div class="content exhibition-projects">
	<?php get_sidebar('artworks'); ?>
	<div class="main">
		<ul>
			<?php while(have_posts()): the_post(); ?>
			<li>
				<a href="<?=wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()))?>"><?php the_post_thumbnail('one-third-layout'); ?></a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>

<?php get_footer(); ?>
