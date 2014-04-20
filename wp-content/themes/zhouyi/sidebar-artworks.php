<div class="sub-nav">
	<div class="logo"></div>
	<ul class="nav">
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/personal-work/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/personal-work/">
				Personal Work
				<br />
				个人作品
			</a>
		</li>
		<li<?php if(strpos($_SERVER['REQUEST_URI'], '/exhibition-projects/') !== false){ ?> class="on"<?php } ?>>
			<a href="<?=site_url()?>/exhibition-projects/">
				Exhibition Projects
				<br />
				展览作品
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
