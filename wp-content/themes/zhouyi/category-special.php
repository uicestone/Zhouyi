<?php get_header(); ?>
<div class="content special">
	<?php get_sidebar('special'); ?>
	<div class="main">
		<ul>
			<?php while(have_posts()): the_post(); ?>
			<li class="hoverable">
				<a href="#">
					<?php the_post_thumbnail('one-second-layout'); ?>
				</a>
				<div class="cover">
					<?php the_content(); ?>
				</div>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
