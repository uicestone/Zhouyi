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
			<?php for($year = date('Y'); $year >= '2004'; $year --){ ?>
			<?php if(in_array($year, array('2007', '2012')) && strpos($_SERVER['REQUEST_URI'], '/personal-works/') !== false) continue; ?>
			<li<?php if(intval($_GET['tag']) === $year){ ?> class="on"<?php } ?>>
				<a href="?tag=<?=$year?>"><?=$year?></a>
			</li>
			<?php } ?>
			<li<?php if($_GET['tag'] === 'before'){ ?> class="on"<?php } ?>>
				<a href="?tag=before">Before</a>
			</li>
		</ul>
	</div>
</div>
