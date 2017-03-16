$(document).ready(function(){
	$('.form-btn').click(function(){
		$('.contact-form').css({
			'margin-left' : '0px'
		})
	});
	$('.exit').click(function(){
		$('.contact-form').css({
			'margin-left' : '-100vw'
		})
	})
});


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

	if(wScroll < 600){
		$('.contact-button-top').css({
			'top' : '0px'
		})
	}
	if(wScroll > 600){
		$('.contact-button-top').css({
			'top' : '-70px'
		})
	}

});