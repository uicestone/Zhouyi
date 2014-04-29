<?php get_header(); ?>
<div class="content special">
	<?php get_sidebar('special'); ?>
	<div class="main">
		<ul>
			<?php while(have_posts()): the_post(); ?>
			<li class="hoverable<?php if($wp_query->current_post % 2 === 1){?> odd<?php } ?>">
				<a href="<?php the_permalink(); ?>" class="fancybox">
					<?php the_post_thumbnail($wp_query->current_post % 2 === 1 ? 'one-second-layout': 'one-second-layout-narrow'); ?>
					<div class="cover">
						<?php the_excerpt(); ?>
					</div>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
