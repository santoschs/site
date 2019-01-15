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


	$(window).load = function(){
		$(".btn").css({transform: "translate(0,0) rotateX(0deg) rotateY(0deg) translateZ(0)"});
	}
	$(".btn").on("mousemove",function(e){
		x = e.pageX, y = e.pageY;
		limite = 0.3;

		// var ww = $(this).innerWidth || $(this).documentElement.clientWidth || $(this).body.clientWidth;
		// var wh = $(this).innerHeight || $(this).documentElement.clientHeight || $(this).body.clientHeight;

		var ww = $(this).width();
		var wh = $(this).height();

		var pos_button = $(this).offset();
		
		var centroX = ($(this).offset().left + (ww/2));
		var centroY = ($(this).offset().top + (ww * 2));

		console.log();
		console.log('mouse' + x/100);
		// ww = 352;
		// wh = 78;
		// console.log(wh);
		rotx = y*100/wh;
		rotx = 180*rotx/100;
		rotx = rotx-90;
		
		if (x/100 < (centroY/2)/100) {
			rotx *= -1;	
		}else{
			rotx *= 1;	
		}

		roty = x*100/ww;
		roty = 180*roty/100;
		roty = roty-90;
		if (y/3 < centroX) {
			roty *= - 1;
		}else{
			roty *= 1;
		}

		$(".btn").css({
			transform: "translate(0,0) rotateX("+(roty*limite/20)+"deg) rotateY("+(rotx*limite/200)+"deg) translateZ(0)"
			// transform: "translate(0,0) rotateX("+(roty*limite/20)+"deg) rotateY("+(rotx*limite/100)+"deg) translateZ(0)"
		});

	}).on("mouseleave", function(){
		$(".btn").css({transform: "translate(0,0) rotateX(0deg) rotateY(0deg) translateZ(0)"});	
	});

});