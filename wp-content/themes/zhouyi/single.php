<?php

$category_slugs = array();

foreach(get_the_category() as $category){
	$category_slugs[] = $category->slug;
	if(!$category->parent){
		$root_category_slug = $category->slug;
	}
}

if($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'){
	the_post(); the_content();
}
else{
	get_header();
?>

<div class="content <?=$root_category_slug?>">
	<?php get_sidebar($root_category_slug); ?>
	<div class="main">
		<?php the_post(); the_content(); ?>
	</div>
</div>
<?php if($root_category_slug === 'artists'){ ?>
<script>
jQuery(function($){
	$('.main>div:first').fadeIn(500);
	$('.artist-list li img')
		.on('mouseenter', function(){
			$(this).animate({opacity: 1}, 500);
		})
		.on('mouseleave', function(){
			$(this).animate({opacity: 0.4}, 500);
		})
		.on('click', function(){
			$(this).closest('li').addClass('active').siblings('li').removeClass('active');
			var artist = $(this).closest('li').data('artist');
			$('.main div').fadeOut(100);
			$('.main #' + artist).fadeIn(400);
		});
});
</script>
<?php } ?>
<?php 
	get_footer();
}
?>