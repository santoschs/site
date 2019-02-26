
$(window).scroll(function(){
	$.each($(".experience_item"), function(){
		if ($(window).scrollTop() >= $(this).offset().top - 300) {
			$(this).addClass("on");
		}else{
			$(this).removeClass("on");
		}
	});
	$.each($(".menu_sobre a"), function(){
		var ref =  $($(this).attr('href') + '');
		if ($(window).scrollTop() >= ref.offset().top) {
			$(".menu_sobre a").removeClass('active');
			$(this).addClass('active');
		}
	});
	if ($(this).scrollTop() > $('#first').offset().top) {
		if (($(window).width()) < 992) {
			return false;
		}
		$(".picture").css({
			"position":"fixed",
			"top": "0",
			"left": "auto"
		});
		$(".menu_sobre").css({
			"position": "fixed",
			"left": "auto",
			"top": "0",
			"margin-top": "23rem"
		});
	}else{
		$(".picture").css({
			"position":"inherit",
			"top": "auto"
		});
		$(".menu_sobre").css({
			"position": "inherit",
			"left": "auto",
			"top": "auto",
			"margin-top": "auto"
		});
	}

	if ($('#text_about').offset().top + $('#text_about').height() - 58 <= $(".picture").offset().top + $(".picture").height() + $(".menu_sobre").height()) {
		$(".picture").css({
			"position":"absolute",
			"top": ($('footer').offset().top) - ($(".picture").height() + $(".menu_sobre").height()) - ($("footer").height()),
		});
		$(".menu_sobre").css({
			"position": "absolute",
			"top": ($('footer').offset().top) - ($(".menu_sobre").height()) - ($("footer").height()),
			"margin-top": "4rem"
		});
	}
	if ($(this).scrollTop() > $('#first').offset().top && $(this).scrollTop() < $('#second').offset().top) {
		$(".logo_white").hide();
		$(".logo_black").show();
	}else{
		$(".logo_black").hide();
		$(".logo_white").show();
	}
	if ($(this).scrollTop() > $('#second').offset().top) {
		$("#text_about").addClass("blackout");
		$(".menu_sobre").addClass("blackout");
		$(".divisor").addClass("blackout");
		$("h2").css({
			"color":"white"
		});
		$("h1").css({
			"color":"white"
		});
		$(".logo_black").hide();
		$(".logo_white").show();
	}else{
		$("h2").css({
			"color":"inherit"
		});
		$("h1").css({
			"color":"inherit"
		});
		$("#text_about").removeClass("blackout");
		$(".menu_sobre").removeClass("blackout");
		$(".divisor").removeClass("blackout");
	}


});
$(function() {
	muda();
});