<div class="sub-nav">
	<ul class="nav logo">
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/media/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/category/media/">
				Press
				<br />
				<span class="chinese">媒体</span>
			</a>
		</li>
	</ul>
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
</div>