
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
		if ($(window).scrollTop() > 300) {
			$(".navbar-brand img").css("opacity", "1");
		}else{
			$(".navbar-brand img").css("opacity", "0");
		}
	});


	// AOS.init();

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

	// var vid = document.getElementById("video_bg");
	// vid.autoplay = true;
	// vid.load();

});
 $( window ).on( "load", function() {
        setTimeout(function(){
        	$("#loading").fadeOut("slow");
        }, 1000);
    });