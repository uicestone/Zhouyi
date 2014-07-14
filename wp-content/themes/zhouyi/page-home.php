<?php
$intro_en = array_pop(get_posts(array('name'=>'intro-en')));
$intro_cn = array_pop(get_posts(array('name'=>'intro-cn')));
get_header();
?>
<div class="content home">
	<div class="cover" style="background-image: url('<?=wp_get_attachment_url(get_post_thumbnail_id($intro_en->ID))?>')"></div>
	<div class="right">
		<div class="intro-language-switcher">
			<button type="button" class="zh-cn" target-lang="zh-cn"></button>
			<button type="button" class="en active" target-lang="en"></button>
		</div>
		<div class="intro" lang="en">
			<?=wpautop($intro_en->post_content)?>
		</div>
		<div class="intro" lang="zh-cn" style="display: none;">
			<?=wpautop($intro_cn->post_content)?>
		</div>
		<!--intro end-->
		<div class="links">
			<div class="left">
				<p>
					Agent:
					<a href="http://www.nextmodels.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/www.nextmodels.com.png" alt=""></a>
					<a href="http://www.creativeexchangeagency.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/www.creativeexchangeagency.com.png" alt=""></a>
					<a href="http://www.lagente.in" target="_blank"><img src="<?=get_template_directory_uri()?>/images/www.lagente.in.png" alt=""></a>
					<a href="http://www.finchandpartners.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/www.finchandpartners.com.png" alt=""></a>
					<a href="" target="_blank"><img src="<?=get_template_directory_uri()?>/images/EMG-logo.png" alt=""></a>
				</p>
			</div>
			<div class="right">
				<p>Yi Zhou is art director for<a href="http://www.tudou.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/tudou.png" alt=""></a></p>
				<p>Art fashion advisor member for<a href="http://www.sina.com.cn" target="_blank"><img src="<?=get_template_directory_uri()?>/images/logo_n_2.jpg" alt=""></a></p>
				<p>Tencent Beauty & Fashion ambassador :<a href="http://www.qq.com" target="_blank"><img src="<?=get_template_directory_uri()?>/images/logo_n_3.jpg" alt=""></a></p>
			</div>
		</div>
		<div class="intro" lang="en">
			<h2>GALLERY REPRESENTATION</h2>
			<p>Galleries</p>
			<p>Pearl lam galleries</p>
			<p>Hanart‍</p>
		</div>
		<div class="intro" lang="en">
			<h2>YI ZHOU VENICE BIENNALE EXHIBITION INTRODUCTION TEXT</h2>
			<p>Achille Bonito Oliva
			<p>“Art is a hope for happiness,” said Baudelaire. The total art of Yi Zhou is the demonstration of the Chinese artist’s desire to represent the depth and the surface of things, the appearances of the world and the deep pulsations that pass through the human mind. Her work is the fruit of a multimedia language that combines cinema, digital animation, photography, sculpture, painting, drawing and contemporary music. In this way, even through video, the work becomes the ability to represent time in space, to capture the fleeting moments of life in a fragmentary vision that succeeds in capturing the present without forgetting the past, in a dialogue between different cultures, between East and West.  A sophisticated and surprising literary memory enables Yi Zhou to create references to the “Divine Comedy” by Dante Alighieri, to the “Decameron” by Boccaccio, to the story of Nastagio degli Onesti, and even to recover the comedy of Gogol’s “The Nose”. These references are successfully absorbed by a visual language that grasps the idea of the plot (completely western) interwoven with a flowing concept of circular time (completely oriental). The four films that Yi Zhou presents in Venice document the precocious maturity of a cosmopolitan artist who has explored many cultural and poetic genres that are quite far from one another, such as that of Nam June Paik and Andy Warhol, American cinema and the French Nouvelle Vague, Italian design and Asiatic statue production. These interweaving capacities demonstrate the eroticism of a work that finds the confirmation of an idea of total art in the synthesis of languages. Which means the representation of a value that is very suited to our time, namely the coexistence of differences.		</div>
			
			<p>Chang Tsong-zung
			<p>The Age of Yi
			<p>Yi Zhou embraces the full range of visual and audio experiences available to new media art, she takes on new scientific products, and weaves unabashedly into her work celebrity glamour and cinematic spectacle. We are reminded by Yi that our age is equidistant between Homeric epic and mass media Hollywood, and that we are equally at home with karaoke sentimentality and state-sponsored terror. With the modern alchemy of media technology, the artist can touch any familiar objects with magic, and any present moment can be a moment of adventure. 
			<p>Yi's fantasies are gilded by a lunar aura, they recede into a mythical distance that constantly wakes up to the fragility of the physical body. She is fascinated by epic tales, to which she responds and imagines as bodily transformation (of heart, ear, head and inner organs). Immersing into herself as the source of adventure, she cracks the present moment to open up an abyss of mythic time. Adolescent innocence and vain glory, cosmic dream and virtual reality, heroic epoch and soap sentiment, Yi has created fresh scope for imagination by bringing all of these on stage.‍		
		</div>
		<div class="intro" lang="zh-cn">
			<h2>周依威尼斯双年展简介</h2>
			<h3>Achille Bonito Oliva</h3>
			<p>波德莱尔说“艺术是对快乐的一种憧憬”。周依的艺术展示了中国艺术家对表达事物表面和内在、这世界呈现出来的样子以及穿流过人类脑海之深层脉动之渴求。她的作品是多媒体语言的结晶，结合了电影、动画、摄影、雕塑、绘画以及现代音乐。因此，作品能够以影像的形式将“时间”的概念在空间中表现出来，以把握现在又不忘过去的片段视野，以不同文化的东西方语言，来抓住人生飞逝而去的一个个瞬间。拥有惊人深厚文学底蕴的周依，从许多文学艺术作品获得创作灵感：但丁的《神曲》，薄伽丘的《十日谈》，还有《实人纳斯塔基奥的故事》，甚至还包括果戈里的《鼻子》。周依以完全西方的思维掌握文献中的所有情节，而又交织着她东方的思维中时间循环轮回的概念，最终用视觉艺术语言把文学艺术成功地吸收到最终的影像作品中。
			<p>周依在威尼斯展示的四部影片证明了一位不断探索各种差异甚远的文化和诗性的国际化艺术家的成熟和别具慧眼，譬如韩国艺术大师白南准&美国艺术家安迪•沃霍尔，美国电影&法国新浪潮电影，意大利设计&亚洲雕像制作。这种将各元素交织融合于作品的能力证实了可将多语言环境之元素综合于一个艺术整体的可能性，这表明其价值体现十分适用于当下时代，即差异并存的时代。
			
			<h3>张颂仁</h3>
			<?=wpautop('“依时代”
			周依拥有丰富的视觉及音效经验可用于新媒体艺术的创作中，她采用高新科技产品将先进技术大胆地融入其作品中去。周依使我们意识到我们当下的时代是离荷马史诗和大众媒体好莱坞间拥有同等距离的，就如同我们在家感伤地唱K以及武装镇压时期。以媒体技术的魔力，艺术家可以触及任何自己熟知的事物，且所呈现的任何瞬间都可以是奇妙无比的。
			周依的想像力有如镶镀了一层月之光环般，这些幻想隐匿于一个神化之距离中却又时常从脆弱的人类躯体里苏醒。她着迷于史诗故事，她认为是身体转换(心脏、耳朵、脑袋&内在器官)。作为奇遇之始，她沉浸于自身中去，冲破当下时刻并打开无限的虚幻世界。少年时期的天真与虚荣，远大梦想与虚拟现实，英雄主义与肥皂情绪，周依将这些展现予我们，开拓出新的想像视界。')?>
		</div>
		<div class="intro" lang="zh-cn">
			<h2>展览列表</h2>
			<h3>部分群展</h3>
			<?=wpautop('2010 上海双年展，上海美术馆，中国上海
				 第13届OPEN，国际雕塑与装置展，意大利威尼斯
				 潮流2010影像展, 美国圣达菲
				 乔尼费里奇: 欢迎来到22世纪，Testori基金会，意大利米兰
				 中国当代艺术群展，对比窗艺廊，中国上海
			2009 Vraoum! 漫画和当代艺术展, 红屋，法国巴黎
				 大世界，中国近期艺术，芝加哥文化中心，美国芝加哥
			2008 第三届广州三年展, 广州博物馆，中国广州
				 探索当代边界，意大利 文堤米利亚
			2007 巴黎国际当代艺术博览会，Jérôme de Noirmont 画廊，法国巴黎
				 典型，大皇宫，法国巴黎
				 奇妙的现实主义，Not画廊，意大利那不勒斯
				 早安巴比伦，玛蕊乐画廊，中国北京
			2006 海，白色空间，荷兰阿姆斯特丹
				 后迁，意大利都灵
				 凯布朗利博物馆，法国巴黎
			2005 中国当代艺术双年展，法国蒙批利埃
				 城市的未来，法国南希
				 Sonar电子音乐节，西班牙巴塞罗那
			2004 上海生机， 上海当代艺术馆，广东当代艺术馆，中国
				 《世代影像》摄影展，法国巴黎
			2003 永远爱我和永远别爱，与东京“疯马”合作，法国巴黎
				 一个图符的40个角度，Spazio Consolo，意大利米兰，
				 Hermitage，俄罗斯，斯莫斯科
				 “超凡”，巴黎国际当代艺术博览会，Jerome de Noirmont画廊，法国巴黎
				 中国制造，Daniel和Florence Guerlain当代艺术基金，法国
				 地拉那双联展 ，阿尔巴尼亚地拉那
				 DVD介绍，索尼梦工厂，法国巴黎
				 关于爱，卢森堡赌场－当代艺术论坛，卢森堡
			2002 第一视觉，Passage du Retz，法国巴黎
				 另一个世界，国家艺术与历史博物馆，卢森堡
				 惠特尼双年展
				 这不是电影，Fresnoy工作室，法国里尔

			<h3>个展</h3>
			2010 耳桥与伟大，对比窗艺廊，中国上海
				 我是你的幻象，20 Hoxton Square Project，英国伦敦
				 霸权还是生存，对比窗特别空间，中国上海
			2009 周依：艺术亚洲／跨越展厅, 巴塞尔迈阿密艺术博览会，美国，巴塞尔艺术博览会，瑞士
				 耳桥，本色美术馆，中国苏州
			2008 天堂, 入选圣得西电影节竞赛环节，在布鲁克林音乐学院放映，美国纽约
				 我心坦然，Ooi Botos画廊, 中国香港
				 倾听，土地，心灵，在Majestic Crest放映，美国洛杉矶
				 倾听，土地，心灵，Jérôme de Noirmont 画廊，法国巴黎
				 1280座塔，巴黎凡尔登广场，法国巴黎
			2007 天神下凡，在64届威尼斯国际电影节放映, 意大利威尼斯
				 Il passato è remoto anzi sarà sempre presente， a sculpture，v ideo， ring，
				 Nicola Ricci画廊，意大利彼得拉桑塔
			2006 神曲三章：“地狱，炼狱，天堂”， 韦奇奥宫, 意大利佛罗伦萨
			2005 梦境，Jérôme de Noirmont 画廊，法国巴黎
			2004 Mountaintank 行为艺术表演，Deitch Projects，美国纽约
			2002 “Y_游戏”N oirmont Prospect, 法国巴黎‍')?>
		</div>
		<div class="intro" lang="en">
			<h3>SELECTED GROUP EXHIBITIONS</h3>
			<?=wpautop('2010 Shanghai Biennale, Shanghai Art Museum, Shanghai, China
				OPEN 13, International Exhibition of Sculptures and Installations, Venice Lido,
				San Servolo Island, Italy
				Currents 2010, El Museo Cultural’s warehouse space, Santa Fe, USA
				Giorni Felici: Welcome to the 22nd Century, Fondazione Testori, Milan, Italy
				Chinese Contemporary Art, Contrasts Gallery, Shanghai, China
			2009 Vraoum! Trésors de la bande dessinée et art contemporain, Maison Rouge, Paris, France
				The Big World: Recent Art from China, Chicago Cultural Center, USA
			2008 Guangzhou Triennial, Guangdong Museum, China
				Reperti Contemporanei Confini. Ventimiglia, Italy
			2007 FIAC 2007, Jérôme de Noirmont Gallery, Paris, France
				Archetype, Grand Palais, Paris, France
				Verismo Magico, Not Gallery, Naples, Italy
				Good Morning Babilonia, Primo Marella Gallery, Beijing, China
			2006 The Sea, White Space, Amsterdam, Netherlands
				Quarter Relocated, Turin, Italy
				Musée du Quai Branly, Paris, France
			2005 Chinese Contemporary Art Biennial, Montpellier, France
				The Future of Cities, Nancy, France
				Festival Sonar, Barcelona, Spain
			2004 Fraicheur de Vivre, Shanghai, Canton Museum of Contemporary Art, China
				Video Generation, Maison Européenne de la Photographie, Paris, France
			2003 Love Me Forever And Never in collaboration with the Crazy Horse,
				Palais du Tokyo, Paris, France
				40 Views of an Icon by Comme des Garçons, Spazio Consolo, Milan,
				Italy and Hermitage, Moscow, Russia
				FIAC 2003: Fantasme Fantastique, Jérôme de Noirmont Gallery, Paris, France
				Made in China, Daniel & Florence Guerlain Foundation of Contemporary Art, France
				Biennale de Tirana 02, Tirana, Albania
				DVD by Numbers Presentation, Sony Dream World, Paris, France
				Something about Love, Casino Luxembourg – Contemporary Art Forum, Luxembourg
			2002 First View, Passage du Retz, Paris, France
				Alter Ego, National Museum of History and Art, Luxembourg
				Whitney Biennale online exhibition
				This Is Not Cinema, Fresnoy Studio, Lille, France‍

			<h3>SOLO EXHIBITIONS</h3>
			2010 The Ear Bridge and The Greatness, Contrasts Gallery, Shanghai, China
				 I Am Your Simulacrum, 20 Hoxton Square Projects, London, UK
				 Hegemony or Survival, Contrasts Gallery special screening space, Shanghai, China
			2009 Yi Zhou booth by Art Asia/Scope Pavilion at Art Basel Miami Beach, USA and Art Basel,
				 Switzerland
				 Around the Earbridge, True Colour Museum, Suzhou, China
			2008 Paradise selected by Sundance Institute,
				screening at Brooklyn Academy of Music, New York, USA
				My Heart Laid Bare, Ooi Botos Gallery, Hong Kong
				Hear, Earth, Heart, Music by AIR, Screening at the Majestic Crest, Los Angeles, USA
				Hear, Earth, Heart, Jérôme de Noirmont Gallery, Paris, France
				1280 Towers, Place Vendôme, Paris, France
			2007 Avatars screening at 64th Venice International Film Festival, Italy
				Il passato è remoto anzi sarà sempre presente, a sculpture, video, ring,
				Galleria Nicola Ricci, Pietrasanta, Italy
			2006 Three Cantos: Prefiguration: Inferno, Purgatorio, Paradiso, Palazzo Vecchio, Florence, Italy
			2005 Dreamscape, Jérôme de Noirmont Gallery, Paris, France
			2004 Mountaintank Performance, Deitch Projects, New York, USA
			2002 Y_Game, Noirmont Prospect, Paris, France')?>‍
		</div>
		<div class="intro" lang="en">
			<h2>GALLERY REPRESENTATION</h2>
			<p>Galleries</p>
			<p>Pearl lam galleries</p>
			<p>Hanart‍</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>