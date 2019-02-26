$(window).on('scroll', function(){
	if ($(this).scrollTop() > $('#projeto_white').offset().top && $(this).scrollTop() < $('footer').offset().top - 20) {
		$(".logo_white").hide();
		$(".logo_black").show();
	}else{
		$(".logo_black").hide();
		$(".logo_white").show();
	}
});