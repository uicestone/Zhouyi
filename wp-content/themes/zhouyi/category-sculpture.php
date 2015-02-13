<?php get_header(); ?>
<div class="content exhibition-projects">
	<?php get_sidebar('artworks'); ?>
	<div class="main">
		<ul>
			<?php while(have_posts()): the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('one-third-layout'); ?></a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>

<?php get_footer(); ?>
