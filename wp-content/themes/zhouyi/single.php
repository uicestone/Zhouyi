<?php
if($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'){
	the_post(); the_content();
}
else{
	if(strpos(get_the_category()[0]->slug, 'print-press') !== false){
		$current_category_name = 'media';
	}
	elseif(strpos(get_the_category()[0]->slug, 'artist') !== false){
		$current_category_name = 'artist';
	}
	elseif(strpos(get_the_category()[0]->slug, 'crossover') !== false){
		$current_category_name = 'crossover';
	}
	get_header();
?>

<div class="content <?=get_the_category()[0]->slug?>">
	<?php get_sidebar($current_category_name); ?>
	<div class="main">
		<?php the_post(); the_content(); ?>
	</div>
</div>
<?php if($current_category_name === 'artist'){ ?>
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