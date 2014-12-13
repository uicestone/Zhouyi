<div class="sub-nav">
	<div class="logo">
		<img src="<?=get_template_directory_uri()?>/images/logo2.png" >
		<br />
		ShangHai Pyramis Point Ltd
	</div>
	<div class="verticle-center">
		<ul class="nav">
			<li<?php if(strpos($_SERVER['REQUEST_URI'], '/print-press/') !== false){ ?> class="on"<?php } ?>>
				<a href="<?=site_url()?>/category/print-press/">
					Print Press
					<br />
					平面媒体
				</a>
			</li>
			<li<?php if(strpos($_SERVER['REQUEST_URI'], '/online-media/') !== false){ ?> class="on"<?php } ?>>
				<a href="<?=site_url()?>/category/online-media/">
					Online Press
					<br />
					网络媒体
				</a>
			</li>

		</ul>
		<ul class="nav">
			<?php
			$category_name = $category_name ? $category_name : get_the_category()[0]->slug;
			for($year = date('Y'); $year >= '2010'; $year --){
			?>
			<li<?php if(intval($_GET['tag']) === $year){ ?> class="on"<?php } ?>>
				<a href="<?=site_url()?>/category/<?=$category_name?>/?tag=<?=$year?>"><?=$year?></a>
			</li>
			<?php } ?>
			<li<?php if($_GET['tag'] === 'before'){ ?> class="on"<?php } ?>>
				<a href="<?=site_url()?>/category/<?=$category_name?>/?tag=before">Earlier</a>
			</li>
		</ul>
	</div>
</div>