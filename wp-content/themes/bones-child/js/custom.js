

jQuery(function($){

});

		

jQuery(document).ready(function($){

	function createCookie(name,value) {
	    document.cookie = name + "=" + value + "; path=/";
	}

	function readCookie(name) {
	    var nameEQ = name + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0;i < ca.length;i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1,c.length);
	        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	    }
	    return null;
	}

	function eraseCookie(name) {
	    document.cookie = name + "=" + "; expires=" + "Thu, 18 Dec 2013 12:00:00 UTC" + "; path=/";
	}

	var location = self.location.href;
		en = "http:/localhost/BmeansB/en/";
		es = "http:/localhost/BmeansB";

	if ((location == en) || (location == es)){

		console.log(location);
		console.log("home");
		console.log(readCookie("scroll"));
		
		var cookie = readCookie("scroll");
		if (cookie == null){
			console.log("no cookie");
		}

		if ( cookie != null) {
			console.log(self.location.href);
			console.log(readCookie("scroll"));
			console.log("home and cookie");

			var cook = readCookie("scroll");

		    $('html, body').animate({
		        scrollTop: $(cook).offset().top
		      }, 1500);


		    eraseCookie("scroll");
		}
	}

	else if ((location !== en) && (location !== es)){
		console.log(location);
		console.log(es);
		console.log("not home");
	}

	

	$(".readmorebtn").click(function(event) {
		var permalink = $(this).data("permalink");
		window.location.href = permalink;
		createCookie("scroll","#blog");

	});


	$("#servicio-link, .servicio-nav-link").click(function(event) {
		event.preventDefault(event);

		$('html, body').animate({
	        scrollTop: $("#service").offset().top
	      }, 800, "swing");

	});

	$("#ejemplos-link, .ejemplos-nav-link").click(function(event) {
		event.preventDefault(event);

		$('html, body').animate({
	        scrollTop: $("#ejemplos").offset().top
	      }, 800, "swing");

	});

	$("#blog-link, .blog-nav-link").click(function(event) {
		event.preventDefault(event);

		$('html, body').animate({
	        scrollTop: $("#blog").offset().top
	      }, 1000, "swing");

	});

	$(".inicio-nav-link").click(function(event) {
		event.preventDefault(event);

		$('html, body').animate({
	        scrollTop: 0
	      }, 1000, "swing");

	});

	$(".inicio-footer-link").click(function(event) {		
		event.preventDefault(event);

		eraseCookie("scroll");

		var permalink = $(this).attr("href");

		window.location.href = permalink;
	});

	$(".servicio-footer-link").click(function(event) {		
		event.preventDefault(event);

		eraseCookie("scroll");

		createCookie("scroll", "#service");

		var tag = readCookie("scroll");

		var permalink = $(this).attr("href");

		window.location.href = permalink+tag;
	});

	$(".ejemplos-footer-link").click(function(event) {		
		event.preventDefault(event);

		eraseCookie("scroll");

		createCookie("scroll", "#ejemplos");

		var tag = readCookie("scroll");

		var permalink = $(this).attr("href");

		window.location.href = permalink+tag;
	});

	$(".blog-footer-link").click(function(event) {		
		event.preventDefault(event);

		eraseCookie("scroll");

		createCookie("scroll", "#blog");

		var tag = readCookie("scroll");

		var permalink = $(this).attr("href");

		window.location.href = permalink+tag;
	});


	$(".pagination > a").on('click',function(event){
		event.preventDefault(event);
		var link = $(this).attr("href");
		window.location.href = link + "#blog";
	});

	$(".excerpt-read-more").before("</br>");
	$(".excerpt-read-more").wrap("<div class='read-more-btn'>");



	function createCookie(name,value) {
	    document.cookie = name + "=" + value + "; path=/";
	}

	function readCookie(name) {
	    var nameEQ = name + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0;i < ca.length;i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1,c.length);
	        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	    }
	    return null;
	}

	function eraseCookie(name) {
	    document.cookie = name + "=" + "; expires=" + "Thu, 18 Dec 2013 12:00:00 UTC" + "; path=/";
	}


	$(".option-portfolio").on({
	    mouseenter: function () {
	        var img = $(".portfolio-link");
			img.attr("src", img.attr("src").replace ('portfolio.png', 'portfolio-selected.png'));
	    },

	    mouseleave: function () {
	        var img = $(".portfolio-link");
			img.attr("src", img.attr("src").replace ('portfolio-selected.png', 'portfolio.png'));
	    }
	});

	$(".option-blog").on({
	    mouseenter: function () {
	        var img = $(".blog-link");
			img.attr("src", img.attr("src").replace ('pen.png', 'pen-selected.png'));
	    },

	    mouseleave: function () {
	        var img = $(".blog-link");
			img.attr("src", img.attr("src").replace ('pen-selected.png', 'pen.png'));
	    }
	});

	$(".option-service").on({
	    mouseenter: function () {
	        var glyph = $(".glyphicon-globe");
			glyph.css('color','#3b5d91');
	    },

	    mouseleave: function () {
	        var glyph = $(".glyphicon-globe");
			glyph.css('color','#333333');
	    }
	});



	$(window).scroll(function(){
	    var docViewTop = $(window).scrollTop();
	    var docViewBottom = docViewTop + $(window).height();

	    //for (i = 1	; i < 2; i++) {
	    	var elem = $("#diagrams-group-1");
	    	if (elem.length){
	    	var elemTop = $(elem).offset().top;
	    	var elemBottom = elemTop + $(elem).height();

	    if (elemTop <= (docViewBottom - 150)){
	    	$(elem).css({"-webkit-animation": "easy-in-opac 1.5s forwards", "-o-animation": "easy-in-opac 1.5s forwards", "-moz-animation": "easy-in-opac 1.5s forwards", "animation": "easy-in-opac 1.5s forwards"})
	    }
			}


		//for (i = 2	; i < 3; i++) {
	    	var elem = $("#diagrams-group-2");
	    	if (elem.length){
	    	var elemTop = $(elem).offset().top;
	    	var elemBottom = elemTop + $(elem).height();

	    if (elemTop <= (docViewBottom - 150)){
	    	$(elem).css({"-webkit-animation": "easy-in-opac 1.5s forwards", "-o-animation": "easy-in-opac 1.5s forwards", "-moz-animation": "easy-in-opac 1.5s forwards", "animation": "easy-in-opac 1.5s forwards"})
	    }
			}

		//for (i = 4	; i < 5; i++) {
	    //	var elem = $("#diagram-" + [i] + " .diagram");
	    //	if (elem.length){
	    //	var elemTop = $("#diagrams-group-2").offset().top;
	    //	var elemBottom = elemTop + $("#diagrams-group-2").height();

		//    if (elemTop <= (docViewBottom - 200)){
		//    	$(elem).css({"-webkit-animation": "easy-in-opac 1s forwards", "animation": "easy-in-opac 1s forwards"})
	    //	}
		//}
		//}

		//for (i = 3	; i < 4; i++) {
	    //	var elem = $("#diagram-" + [i] + " .diagram");
	    //	if (elem.length){
	    //	var elemTop = $("#diagrams-group-2").offset().top;
	    //	var elemBottom = elemTop + $("#diagrams-group-2").height();

		//    if (elemTop <= (docViewBottom - 200)){
		//    	$(elem).css({"-webkit-animation": "easy-in-opac 1s forwards", "animation": "easy-in-opac 1s forwards"})
	    //	}
		//}
		//}
	});
	


	$(window).on('wheel', function(e) {

		var offset = 220;
    	var duration = 500;

		var delta = e.originalEvent.deltaY;

		if (delta > 0){
			jQuery('.back-to-top').fadeIn(duration);
		}
		else{
			 jQuery('.back-to-top').fadeOut(duration);
		}
	});

	var ts;
	$(document).bind('touchstart', function(e) {
	    ts = e.originalEvent.touches[0].clientY;
	});

	var width = $( window ).width();

	if (width < 769){

		var offset = 220;
	    var duration = 500;

		//$(document).bind('touchmove', function(e) {
		//	console.log(width);

		//    var te = e.originalEvent.changedTouches[0].clientY;
		    
		//    if (ts > offset) {
		//        jQuery('.back-to-top').fadeIn(duration);
		//    } else {
		//        jQuery('.back-to-top').fadeOut(duration);
		//    }
		//});

	    jQuery(window).scroll(function() {
	        if (jQuery(this).scrollTop() > offset) {
	            jQuery('.back-to-top').fadeIn(duration);
	        } else {
	            jQuery('.back-to-top').fadeOut(duration);
	        }
	    });
	}
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault(event);
        jQuery('html, body').animate({scrollTop: 0}, 1000);
        return false;
    });

    jQuery('.carousel-img').click(function(e) {
    	var img = jQuery(this).attr('src');
        jQuery('#trabajos-modal').modal();
        jQuery('.trabajos-modal-img').attr('src', img);
    });

});