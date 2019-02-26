console.log('huvausbas');
$(window).on('scroll', function(){
	console.log("kvaksvlaksdmvvlkasmv");
	if ($(this).scrollTop() > $('#projetos_all').offset().top && $(this).scrollTop() < $('footer').offset().top - 20) {

		$(".logo_white").hide();
		$(".logo_black").show();
	}else{
		$(".logo_black").hide();
		$(".logo_white").show();
	}
});