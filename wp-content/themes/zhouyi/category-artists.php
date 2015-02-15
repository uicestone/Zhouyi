<?php get_header(); ?>
<div class="content artist">
	<?php get_sidebar('artist'); ?>
	<style>
		.artist-table {
			position: absolute;
			left: 216px;
			right: 0;
			bottom: 0;
			top: 0;
			text-align: center;
		}
		
		.artist-table li {
			display: inline-block;
			line-height: 286px;
			width: 47%;
			margin:1% 0.8%;
			border: #555 solid 1px;
		}
		
		.artist-table li img {
			vertical-align: middle;
			width:150px;
		}
	</style>
	<ul class="artist-table">
		<li data-artist="each-x-other">
			<a href="<?=site_url()?>/category/artists/#each-x-other"><img src="<?= get_template_directory_uri() ?>/images/artist_each-x-other.png"></a>
		</li>
		<li data-artist="gripoix">
			<a href="<?=site_url()?>/category/artists/#gripoix"><img src="<?= get_template_directory_uri() ?>/images/artist_gripoix.png"></a>
		</li>
		<li data-artist="iceberg">
			<a href="<?=site_url()?>/category/artists/#iceberg"><img src="<?= get_template_directory_uri() ?>/images/artist_iceberg.png"></a>
		</li>
		<li data-artist="yoox">
			<a href="<?=site_url()?>/category/artists/#yoox"><img src="<?= get_template_directory_uri() ?>/images/yoox.png"></a>
		</li>
	</ul>
	<div class="main" style="display:none">
		<?php while (have_posts()): the_post(); ?>
		<div id="<?=$post->post_name?>" style="display:none">
		<?=$post->post_content?>
		</div>
		<?php endwhile; ?>
	</div>
</div>
<script>
jQuery(function($){
	
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
	
	$('.artist-table li img')
		.on('click', function(){
			$('.artist-table').fadeOut(400);
			$('.main').fadeIn(400);
			$('.artist-list').fadeIn(400);
			var artist = $(this).closest('li').data('artist');
			$('.main #' + artist).fadeIn(400);
		});
	
	var hash = window.location.hash.substr(1);
	
	if(hash){
		$('.main #' + hash).show();
	}
	
});
</script>
<?php get_footer(); ?>
