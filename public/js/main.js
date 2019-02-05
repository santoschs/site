$(function(){
	$("#show_menu_button").on("click", function(){
		$("#navbar.show_navbar").addClass('show');
		$("#navbar.show_navbar").removeClass('no-show');
		$("#show_menu_button").fadeOut('slow');
	});

	$("#close_menu").on("click", function(){
		$("#navbar.show_navbar").removeClass('show');
		$("#navbar.show_navbar").addClass('no-show');
		$("#show_menu_button").fadeIn();
	});
	function rodar(){
		var altura = $(window).scrollTop();
		var elements = $("div.losangle");
		$.each( elements, function(){
			var t = $(this).css('top');
			$(this).css({
				'transform':'rotate(45deg) translateX(-'+(altura/20)+'px) translateY(-'+(altura/20)+'px)'
			});
		});
		$("div.losangle").mouseover( function(){
			console.log("on");
			var elements = $("div.losangle");
			$.each( elements, function(){
				var t = $(this).css('top');
				$(this).css({
					'transform':'rotate(45deg) translateX(-'+(altura/20)+'px)'
				});
			});
		});

		
		var p_footer = $("footer").offset().top;
		var p_pagina = $(window).scrollTop();

		if (p_pagina >= p_footer) {
			$("nav").css('filter', 'contrast(10%) brightness(100)');
		}else{
			$("nav").css('filter', 'none');
		}	
	}
	$(window).scroll(function() {
		// rodar();
		if ($(window).scrollTop() > 300) {
			$(".navbar-brand img").css("opacity", "1");
		}else{
			$(".navbar-brand img").css("opacity", "0");
		}
	});


	AOS.init();

	$('div.parallax').each(function(){
		var $obj = $(this);
		var $image = $(this).children("img");
		var $src = $image.attr("src");

		$image.css("display", "none");
		console.log($src);
		$(this).css("background-image", "url("+$src+")");

		$(window).scroll(function() {
			var yPos = -$(window).scrollTop(); 
			var bgpos = '50% '+ yPos/10 + 'px';
			$obj.css('background-position', bgpos );
		}); 
	});
	
	$('.parallax-bg').each(function(){
		var $obj = $(this);
		$(window).scroll(function() {
			var yPos = -$(window).scrollTop(); 
			var bgpos = '50% '+ yPos/10 + 'px';
			$obj.css('background-position', bgpos );
		}); 
	});

	$('a[href*="#"]')
	.not('[href="#"]')
	.not('[href="#0"]')
	.click(function(event) {
		if (
			location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
			&& 
			location.hostname == this.hostname
			) {
			var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		if (target.length) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000, function() {
			});
		}
	}
});
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
			console.log("olha ai");
			$(".picture").css({
				"position":"absolute",
				"top": "2945px",
			});
			$(".menu_sobre").css({
				"position": "absolute",
				"top": (2945 + $(".picture").height()) +"px",
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
			$(".logo_black").hide();
			$(".logo_white").show();
		}else{
			$("#text_about").removeClass("blackout");
			$(".menu_sobre").removeClass("blackout");
			$(".divisor").removeClass("blackout");
		}
	});
});