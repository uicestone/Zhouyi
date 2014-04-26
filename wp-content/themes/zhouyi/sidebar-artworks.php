<div class="sub-nav">
	<div class="verticle-center">
		<ul class="nav">
			<li<?php if(strpos($_SERVER['REQUEST_URI'], '/personal-works/') !== false){ ?> class="on"<?php } ?>>
				<a href="<?=site_url()?>/category/personal-works/">
					Personal Work
					<br />
					个人作品
				</a>
			</li>
			<li<?php if(strpos($_SERVER['REQUEST_URI'], '/exhibition-projects/') !== false){ ?> class="on"<?php } ?>>
				<a href="<?=site_url()?>/category/exhibition-projects/">
					Exhibition Projects
					<br />
					展览作品
				</a>
			</li>

		</ul>
		<ul class="nav">
			<li<?php if($_GET['tag'] === '2014'){ ?> class="on"<?php } ?>>
				<a href="?tag=2014">2014</a>
			</li>
			<li<?php if($_GET['tag'] === '2013'){ ?> class="on"<?php } ?>>
				<a href="?tag=2013">2013</a>
			</li>
			<li<?php if($_GET['tag'] === '2012'){ ?> class="on"<?php } ?>>
				<a href="?tag=2012">2012</a>
			</li>
		</ul>
	</div>
</div>
