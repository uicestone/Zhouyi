<?php get_header(); ?>
<div class="content personal-work">
	<?php get_sidebar('artworks'); ?>
	<div class="main">
		<ul>
			<?php while(have_posts()): the_post();?>
			<li class="hoverable">
				<a href="<?php $children = get_children(get_the_ID()); echo wp_get_attachment_url(array_shift($children)->ID); ?>" target="_blank">
					<?php the_post_thumbnail('video-thumbnail'); ?>
					<div class="cover">
						<?php the_content(); ?>
					</div>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
