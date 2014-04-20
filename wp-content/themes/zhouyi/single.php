<?php get_header(); ?>
<div class="content">
	<?php get_sidebar('media'); ?>
	<div class="main">
		<?php the_post(); the_content(); ?>
	</div>
</div>
<?php get_footer(); ?>
