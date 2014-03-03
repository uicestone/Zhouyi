<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>周依</title>
		<link href="style.css" media="screen" rel="stylesheet">
	</head>

	<body>
		<div class="wrap">
			<div class="header">
				<ul class="nav">
					<li class="logo">
						<img src="images/logo1.gif" >
						<br />
						Yi Zhou Studio
					</li>
					<li >
						<a href="index.html">
							Biography
							<br />
							简介
						</a>
					</li>
					<li>
						<a href="#">
							Artworks
							<br />
							作品
						</a>
					</li>
					<li class="logo">
						<img src="images/logo2.gif" >
						<br />
						ShangHai Pyramis Point Ltd
					</li>
					<li>
						<a href="#">
							Media
							<br />
							媒体
						</a>
					</li>
					<li class="logo">
						<img src="images/logo3.gif" >
						<br />
						Moon Prism 
						Digital Entertainment Arts Ltd
					</li>
					<li class="on">
						<a href="#">
							Artist Line
							<br />
							艺术家系列
						</a>
					</li>
					<li>
						<a href="#">
							Special Projects
							/
							Crossover projects 
							with 
							brand
							<br />
							特殊项目
						</a>
					</li>
					<li>
						<a href="#">
							Contact
							<br />
							联系
						</a>
					</li>
					<li class="logo">
						<img src="images/logo4.gif" >
					</li>
				</ul>

			</div>
			<!--header end-->

			<div class="content">
				<div class="sub_trees">
					<img src="images/artist_tree.jpg"></div>
				<!--sub_trees end-->
				<div class="main_sub">
					<div class="main_right artist_detail">
						<div class="slide" id="img-play" >
							<ul class="ul-img" >
								<li >
									<a>
										<img src="images/artist_img2_1.jpg" ></a>
								</li><li >
									<a>
										<img src="images/artist_img2_1.jpg" ></a>
								</li>

							</ul>

							<a class="skip prev" title="上一张">上一张</a>
							<a class="skip next" title="下一张">下一张</a>
						</div>
					</div>
				</div>
				<!--main end-->

			</div>

		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/slide.js"></script>
		<script type="text/javascript">
			$(function() {

				$('#img-play').maiPlayer({speedSwitch: 5000, playerWidth: 790, autoPlay: false});

			})
		</script>
	</body>
</html>