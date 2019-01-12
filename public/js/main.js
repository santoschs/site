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

	$(window).scroll(function() {
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
	});
});