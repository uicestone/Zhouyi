(function($){
$(function(){
	$('.hoverable')
		.mouseenter(function(){
			$(this).find('.cover').delay(500).fadeIn(300);
		})
		.mouseleave(function(){
			$(this).find('.cover').clearQueue().fadeOut(300);
		});
	
	$('.media-print>.main>ul>li img')
		.mouseenter(function(){
			$(this).animate({opacity:1}, 300);
		})
		.mouseleave(function(){
			$(this).animate({opacity:0.5}, 300);
		});
		
	$('.intro-language-switcher>:button').on('click', function(){
		
		var targetLang = $(this).attr('target-lang');
		
		$('.intro[lang!="' + targetLang + '"], .links[lang!="' + targetLang + '"]').fadeOut(300, function(){
			$('.intro[lang="' + targetLang + '"], .links[lang="' + targetLang + '"]').fadeIn(300);
		});
		
		$('.' + targetLang).addClass('active').siblings(':button').removeClass('active');
		
	});
	
	$('.slider').responsiveSlides({
		auto: true,
		nav: true,
		pause: true,
		pauseControls: true,
		prevText: '&nbsp;',
		nextText: '&nbsp;'
	});
	
	$('.video-thumbnail').append('<div class="play-icon"></div>');
	
});
})(jQuery);
