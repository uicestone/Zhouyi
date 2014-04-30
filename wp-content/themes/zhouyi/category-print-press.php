<?php get_header(); ?>
<div class="content media-print">
	<?php get_sidebar('media'); ?>
	<div class="main">
		<ul>
			<?php while(have_posts()): the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('one-fourth-layout'); ?></a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>

<?php get_footer(); ?>
