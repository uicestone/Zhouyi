<?php get_header(); ?>
<div class="content personal-work">
	<?php get_sidebar('artworks'); ?>
	<div class="main">
		<ul>
			<?php while(have_posts()): the_post();?>
			<li class="hoverable">
				<a href="<?php the_permalink(); ?>" target="_blank" class="fancybox">
					<?php the_post_thumbnail('video-thumbnail'); ?>
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
