jQuery(function(){
	jQuery('.hoverable')
		.mouseenter(function(){
			jQuery(this).find('.cover').delay(500).fadeIn(300);
		})
		.mouseleave(function(){
			jQuery(this).find('.cover').clearQueue().fadeOut(300);
		});
	
	jQuery('.media-print>.main>ul>li img')
		.mouseenter(function(){
			jQuery(this).animate({opacity:1}, 300);
		})
		.mouseleave(function(){
			jQuery(this).animate({opacity:0.5}, 300);
		});
		
	jQuery('.intro-language-switcher>:button').on('click', function(){
		
		var targetLang = jQuery(this).attr('target-lang');
		
		jQuery('.intro[lang!="' + targetLang + '"]').fadeOut(300, function(){
			
			jQuery('.intro[lang="' + targetLang + '"]').fadeIn(300);
		});
		
	});
});
