
$(window).scroll(function(){

	var wScroll = $(this).scrollTop();

	var docHeight = $(document).height();

	$('.header-text').css({
		'transform' : 'translate(0px, '+ wScroll/4 +'%)'
	});

	if(wScroll > docHeight/2){
		$('.contact-button-left').css({
			'top': '0px'
		});
	}
	if(wScroll < docHeight/2){
		$('.contact-button-left').css({
			'top': '100vh'
		});
	}

	if(wScroll < 300){
		$('.contact-button-top').css({
			'opacity': '.7',
			'position': 'fixed'

		})
	}
	if(wScroll > 300){
		$('.contact-button-top').css({
			'opacity' : '0'
		})
	}

});