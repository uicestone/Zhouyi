<?php get_header(); ?>
<div class="content special">
	<?php get_sidebar('special'); ?>
	<div class="main">
		<ul>
			<?php while(have_posts()): the_post(); ?>
			<li class="hoverable">
				<?php $has_content = get_the_content() !== '' ?>
				<a href="<?=$has_content ? get_the_permalink(get_the_ID()) : wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()))?>" class="fancybox<?php if($has_content){ ?> video-thumbnail<?php } ?>">
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
