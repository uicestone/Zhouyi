<?php get_header(); ?>
<div class="content">
	<?php get_sidebar('artist'); ?>
	<div class="main_sub">
		<ul class="main_right artist">
			<li>
				<div class="tmple">

					<div id="player48">
						<embed type="application/x-shockwave-flash" src="http://www.yi-yo.net/player.swf" width="600" height="450" style="undefined" id="mpl" name="mpl" quality="high" allowscriptaccess="always" allowfullscreen="true" flashvars="&amp;author=Yi Zhou&amp;file= http://www.yi-yo.net/videos/Eachxother_makingof.flv&amp;image=http://www.yi-yo.net/img/VIDEO/eachxother.jpg&amp;title=UN_Rio&amp;frontcolor=000000&amp;lightcolor=FFFFFF&amp;controlbar=over"></div>
					<script type="text/javascript">
var so = new SWFObject('http://www.yi-yo.net/player.swf','mpl','600','450','9');
so.addParam('allowscriptaccess','always');
so.addParam('allowfullscreen','true');
so.addParam('flashvars','&author=Yi Zhou&file= http://www.yi-yo.net/videos/Eachxother_makingof.flv&image=http://www.yi-yo.net/img/VIDEO/eachxother.jpg&title=UN_Rio&frontcolor=000000&lightcolor=FFFFFF&controlbar=over');
so.write('player48');
   </script>
				</div>
			</li>
			<li>
				<div class="tmple">
					<a>
						<img src="<?=get_template_directory_uri()?>/images/artist_img2.jpg"></a>
					<div class="cover" >
						<p>
							Iceberg X YiZhou
							<br>1st collection ‘ Break the ice’</p>
						<p>
							Iceberg X YiZhou
							<br>破冰系列</p>
					</div>
				</div>
			</li>

		</ul>
	</div>
	<!--main end-->

</div>
<?php get_footer(); ?>
