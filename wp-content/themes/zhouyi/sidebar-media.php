<div class="sub-nav">
	<div class="logo">
		<img src="<?=get_template_directory_uri()?>
		/images/logo2.gif" >
		<br />
		ShangHai Pyramis Point Ltd
	</div>
	<ul class="nav">
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/media-print/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/media-print/">
				Print Press
				<br />
				平面媒体
			</a>
		</li>
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/media-online/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/media-online/">
				Online Press
				<br />
				网络媒体
			</a>
		</li>

	</ul>
	<ul class="nav">
		<li class="on">
			<a href="#">2013</a>
		</li>
		<li>
			<a href="#">2012</a>
		</li>
	</ul>
</div>