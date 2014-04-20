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
		
		$('.intro[lang!="' + targetLang + '"]').fadeOut(300, function(){
			
			$('.intro[lang="' + targetLang + '"]').fadeIn(300);
		});
		
	});
});
})(jQuery);
