<?php get_header(); ?>
<div class="content">
	<?php get_sidebar('artist-detail'); ?>
		<div class="main">
		<div class="main_right artist_detail">
			<div class="slide" id="img-play" >
				<ul class="ul-img" >
					<li >
						<a>
							<img src="<?=get_template_directory_uri()?>/images/artist_img2_1.jpg" ></a>
					</li>
					<li >
						<a>
							<img src="<?=get_template_directory_uri()?>/images/artist_img2_1.jpg" ></a>
					</li>

				</ul>

				<a class="skip prev" title="上一张">上一张</a>
				<a class="skip next" title="下一张">下一张</a>
			</div>
		</div>
	</div>
	<!--main end-->

</div>

<script type="text/javascript" src="<?=get_template_directory_uri()?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=get_template_directory_uri()?>/js/slide.js"></script>
<script type="text/javascript">
			$(function() {

				$('#img-play').maiPlayer({speedSwitch: 5000, playerWidth: 790, autoPlay: false});

			})
		</script>
<?php get_footer(); ?>
