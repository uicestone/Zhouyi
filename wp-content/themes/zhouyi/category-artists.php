<?php get_header(); ?>
<div class="content artist">
	<?php get_sidebar('artist'); ?>
	<div class="main"><?php the_post(); echo $post->post_content; ?></div>
</div>
<?php get_footer(); ?>
