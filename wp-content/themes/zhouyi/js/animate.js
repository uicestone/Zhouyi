jQuery(function(){
	jQuery('.hoverable')
		.mouseenter(function(){
			jQuery(this).find('.cover').delay(500).fadeIn(300);
		})
		.mouseleave(function(){
			jQuery(this).find('.cover').clearQueue().fadeOut(300);
		});
})