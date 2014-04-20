<?php get_header(); ?>
<div class="content <?=get_the_category()[0]->slug?>">
	<?php get_sidebar(strpos(get_the_category()[0]->slug, 'print-press') !== false ? 'media' : 'artist'); ?>
	<div class="main">
		<?php the_post(); the_content(); ?>
	</div>
</div>
<?php get_footer(); ?>
