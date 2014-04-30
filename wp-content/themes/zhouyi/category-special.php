<?php get_header(); ?>
<div class="content special">
	<?php get_sidebar('special'); ?>
	<div class="main">
		<ul>
			<?php while(have_posts()): the_post(); ?>
			<li class="hoverable">
				<a href="<?php the_permalink(); ?>" class="fancybox">
					<?php the_post_thumbnail('one-second-layout'); ?>
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
