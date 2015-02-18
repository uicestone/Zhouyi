<?php get_header(); ?>
<div class="content special">
	<div class="main">
		<ul>
			<?php while(have_posts()): the_post(); ?>
			<li class="hoverable">
				<?php $has_content = get_the_content() !== '' ?>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('large-thumbnail'); ?>
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
