<?php get_header(); ?>
<div class="content artist">
	<?php get_sidebar('artist'); ?>
	<div class="main">
		<?php while (have_posts()): the_post(); ?>
		<div id="<?=$post->post_name?>" style="display:none">
		<?=$post->post_content?>
		</div>
		<?php endwhile; ?>
	</div>
</div>
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
	
	var hash = window.location.hash.substr(1);
	
	$('.main #' + hash).show();
	
});
</script>
<?php get_footer(); ?>
