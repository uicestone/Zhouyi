<?php get_header(); ?>
<div class="content exhibition-projects">
	<?php get_sidebar('artworks'); ?>
	<div class="main">
		<ul>
			<?php while(have_posts()): the_post();?>
			<?php $is_banner = $wp_query->current_post > 0 && $wp_query->current_post % 3 === 0; ?>
			<li<?php if($is_banner){ ?> class="banner"<?php } ?>>
				<a href="<?=wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()))?>"><?php the_post_thumbnail($is_banner ? 'banner' : 'one-third-layout'); ?></a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
