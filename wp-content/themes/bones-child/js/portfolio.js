jQuery(function($){

});

jQuery(document).ready(function($){

	$(".fasttyping-screen").click(function(){
		var screen = $(this).attr("screen");
		var search = $(this).prop("src");
		var title = $(this).prop("title");

		$("#fasttyping-modal").modal();

		$(".fasttyping-modal-title").text(title);
		$(".fasttyping-modal-img").prop('src',search);
		$(".fasttyping-modal-img").attr('screen',screen);

		if (screen == 1){
			$(".fasttyping-modal-arrow-left").removeClass('arrow-enabled');
			$(".fasttyping-modal-arrow-left").addClass('arrow-disabled');
		} else if (screen == 5){
			$(".fasttyping-modal-arrow-right").removeClass('arrow-enabled');
			$(".fasttyping-modal-arrow-right").addClass('arrow-disabled');
		} else{
			$(".fasttyping-modal-arrow").each(function(){
				$(".fasttyping-modal-arrow").removeClass('arrow-disabled');
				$(".fasttyping-modal-arrow").addClass('arrow-enabled');
			});
		}

	});

	$(".fasttyping-modal-arrow-left").click(function(){
		if ($(this).hasClass('arrow-enabled')){
			var current = $(".fasttyping-modal-img").attr('screen');
			current = current - 1;
			$(".fasttyping-modal-img").prop('src',directory_uri.stylesheet_directory_uri+"/portfolio/images/Fasttyping-"+current+".png");
			$(".fasttyping-modal-img").attr('screen',current);
			var new_title = $(".fasttyping-screen[screen="+current+"]").prop('title');
			$(".fasttyping-modal-title").text(new_title);
			var screen = $(".fasttyping-modal-img").attr('screen');
			if (screen == 1){
				$(".fasttyping-modal-arrow-left").removeClass('arrow-enabled');
				$(".fasttyping-modal-arrow-left").addClass('arrow-disabled');
			}else{
				$(".fasttyping-modal-arrow").each(function(){
					$(".fasttyping-modal-arrow").removeClass('arrow-disabled');
					$(".fasttyping-modal-arrow").addClass('arrow-enabled');
				});
			}
		}
	});

	$(".fasttyping-modal-arrow-right").click(function(){
		if ($(this).hasClass('arrow-enabled')){
			var current = $(".fasttyping-modal-img").attr('screen');
			current = Number(current) + 1;
			console.log(current);
			$(".fasttyping-modal-img").prop('src',directory_uri.stylesheet_directory_uri+"/portfolio/images/Fasttyping-"+current+".png");
			$(".fasttyping-modal-img").attr('screen',current);
			var new_title = $(".fasttyping-screen[screen="+current+"]").prop('title');
			$(".fasttyping-modal-title").text(new_title);
			var screen = $(".fasttyping-modal-img").attr('screen');
			if (screen == 5){
				$(".fasttyping-modal-arrow-right").removeClass('arrow-enabled');
				$(".fasttyping-modal-arrow-right").addClass('arrow-disabled');
			} else{
				$(".fasttyping-modal-arrow").each(function(){
					$(".fasttyping-modal-arrow").removeClass('arrow-disabled');
					$(".fasttyping-modal-arrow").addClass('arrow-enabled');
				});
			}
		}
	});

	$("#fasttyping-btn-1").click(function(){
		$("#frontend-text").hide();
		$("#frontend-text").css("opacity","0");
		$("#backend-text").show();
		setTimeout(function(){ 
			$("#backend-text").animate({opacity: '1'});
		},500);
	});

	$("#fasttyping-btn-2").click(function(){
		$("#backend-text").hide();
		$("#backend-text").css("opacity","0");
		$("#frontend-text").show();
		setTimeout(function(){ 
			$("#frontend-text").animate({opacity: '1'});
		},500);
	});

	var designparent = $('#gallery-2').find('.gallery-icon');
		webparent = $('#gallery-1').find('.gallery-icon');

	triggerweb = $(webparent).find('a');
	triggerdesign = $(designparent).find('a');

	triggerweb.click(function(event){
		event.preventDefault();

		var image = this.children[0].src;
			modalimage = $('#web-es-modal').find('img');
			modaltitle = $('#web-es-modal').find('.modal-title');
			modaldesc = $('#web-es-modal').find('.modal-desc');
			title = $(this).parent().siblings('.gallery-caption').find('h4.caption-h4').html();
			description = $(this).parent().siblings('.gallery-caption').find('p.caption-p').html();

		search = modalimage[0];		
		$(search).prop('src', image);
		$(modaltitle[0]).html(title);
		$(modaldesc[0]).html(description);
		$('#web-es-modal').modal();
	});

	triggerdesign.click(function(event){
		event.preventDefault();

		var image = this.children[0].src;
			modalimage = $('#web-es-modal').find('img');
			modaltitle = $('#web-es-modal').find('.modal-title');
			modaldesc = $('#web-es-modal').find('.modal-desc');
			title = $(this).parent().siblings('.gallery-caption').find('h4.caption-h4').html();
			description = $(this).parent().siblings('.gallery-caption').find('p.caption-p').html();

		search = modalimage[0];		
		$(search).prop('src', image);
		$(modaltitle[0]).html(title);
		$(modaldesc[0]).html(description);
		$('#web-es-modal').modal();
	});

	$('body').scrollspy({ target: '#myNavbar', offset: 101 });

// Events on modal hide and show

	$('.vid-modal-template-container').on('hidden.bs.modal', function () {
		var src = $(this).find('iframe').attr('src');
	    $(this).find('iframe').attr('src', '');
	    $(this).find('iframe').attr('src', src);
	});

	$('.vid-modal-template-container').on('hidden.bs.modal', function () {
		$(".navbar").fadeIn();
	});

	$('.vid-modal-template-container').on('show.bs.modal', function () {
		$(".navbar").fadeOut();
	});

	$('.photo-modal-template-container').on('hidden.bs.modal', function () {
		$(".navbar").fadeIn();
	});

	$('.photo-modal-template-container').on('show.bs.modal', function () {
		$(".navbar").fadeOut();
	});

	$('.foto-modal-template-container').on('hidden.bs.modal', function () {
		$(".navbar").fadeIn();
	});

	$('.foto-modal-template-container').on('show.bs.modal', function () {
		$(".navbar").fadeOut();
	});

	$('.web-modal-template-container').on('hidden.bs.modal', function () {
		$(".navbar").fadeIn();
	});

	$('.web-modal-template-container').on('show.bs.modal', function () {
		$(".navbar").fadeOut();
	});

	$('.web-es-modal-template-container').on('hidden.bs.modal', function () {
		$(".navbar").fadeIn();
	});

	$('.web-es-modal-template-container').on('show.bs.modal', function () {
		$(".navbar").fadeOut();
	});

	$('#fasttyping-modal').on('hidden.bs.modal', function () {
		$(".navbar").fadeIn();
	});

	$('#fasttyping-modal').on('show.bs.modal', function () {
		$(".navbar").fadeOut();
	});


// Gentle automatic scrolling used in conjunction with bootstrap scrollspy

	$(".bar-tabs a, [href='#myPage']").on('click', function(event) {

		if (this.hash !== "") {

			event.preventDefault();

			var hash = this.hash;
			var offset = $(hash).offset().top;

			$('body,html').animate({

			scrollTop: (offset-97.5)
			}, 1500, "swing", function(){

				window.location.hash = hash-99;
				if (history.pushState) {
				    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + "";
				    window.history.pushState({path:newurl},'',newurl);
				}
				$(".bar-tabs").each(function(){
					var child = $(this).children();
					if (child["0"].hash == hash){
						$(this).addClass("active");
					}
				});
			});

		} // End if
	});

	$(".back-to-top-portafolio").click(function(event) {
		$("html, body").animate({ scrollTop: 0 }, "slow");
	  	return false;
	});

// Navbar transition events

	$(window).on("scroll touchmove", function () {
    	$('#portfolio-navbar').toggleClass('turn-blue', $(document).scrollTop() > 120);
    	$('#nav-img').toggleClass('enter', $(document).scrollTop() > 120);
    });

    $('.nav-tab').click(function(event){
	    $(".navbar-collapse").collapse('hide');
	});


// Bar animations tying in CSS on scroll events


	$(window).scroll(function() {
		
	    var HTMLEstopPos = $("#HTML-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (HTMLEstopPos <= winBottom) {
		    $("#HTML-Es").removeClass("out-view");
		    $("#HTML-Bar-Es").find("span").removeClass("out-view");
		    $("#HTML-Bar-Es").addClass('animate-80');
		    $("#HTML-Bar-Es").find("span").addClass("animate-percent");
	    }
	});

	$(window).scroll(function() {
		
	    var CSSEstopPos = $("#CSS-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (CSSEstopPos <= winBottom) {
	    	$("#CSS-Es").removeClass("out-view");
		    $("#CSS-Bar-Es").find("span").removeClass("out-view");
		    $("#CSS-Bar-Es").addClass('animate-80');
		    $("#CSS-Bar-Es").find("span").addClass("animate-percent");
	    }
	});

	$(window).scroll(function() {
		
	    var JscriptEstopPos = $("#Jscript-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (JscriptEstopPos <= winBottom) {
	    	$("#Jscript-Es").removeClass("out-view");
		    $("#Jscript-Bar-Es").find("span").removeClass("out-view");
		    $("#Jscript-Bar-Es").addClass('animate-80');
		    $("#Jscript-Bar-Es").find("span").addClass("animate-percent");
	    }
	});

	$(window).scroll(function() {
		
	    var MeteorEstopPos = $("#Meteor-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (MeteorEstopPos <= winBottom) {
	    	$("#Meteor-Es").removeClass("out-view");
		    $("#Meteor-Bar-Es").find("span").removeClass("out-view");
		    $("#Meteor-Bar-Es").addClass('animate-80');
		    $("#Meteor-Bar-Es").find("span").addClass("animate-percent");
	    }
	});

	$(window).scroll(function() {
		
	    var MongoEstopPos = $("#Mongo-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (MongoEstopPos <= winBottom) {
	      	$("#Mongo-Es").removeClass("out-view");
		    $("#Mongo-Bar-Es").find("span").removeClass("out-view");
		    $("#Mongo-Bar-Es").addClass('animate-60');
		    $("#Mongo-Bar-Es").find("span").addClass("animate-percent");
	    }
	});

	$(window).scroll(function() {
		
	    var PHPEstopPos = $("#PHP-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (PHPEstopPos <= winBottom) {
	      	$("#PHP-Es").removeClass("out-view");
		    $("#PHP-Bar-Es").find("span").removeClass("out-view");
		    $("#PHP-Bar-Es").addClass('animate-80');
		    $("#PHP-Bar-Es").find("span").addClass("animate-percent");
	    }
	});

	$(window).scroll(function() {
		
	    var PhotoEstopPos = $("#Photo-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (PhotoEstopPos <= winBottom) {
	    	$("#Photo-Es").removeClass("out-view");
		    $("#Photo-Bar-Es").find("span").removeClass("out-view");
		    $("#Photo-Bar-Es").addClass('animate-80');
		    $("#Photo-Bar-Es").find("span").addClass("animate-percent");
	    }
	});

	$(window).scroll(function() {
		
	    var IllusEstopPos = $("#Illus-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (IllusEstopPos <= winBottom) {
	    	$("#Illus-Es").removeClass("out-view");
		    $("#Illus-Bar-Es").find("span").removeClass("out-view");
		    $("#Illus-Bar-Es").addClass('animate-80');
		    $("#Illus-Bar-Es").find("span").addClass("animate-percent");
	    }
	});

	$(window).scroll(function() {
		
	    var EffectsEstopPos = $("#Effects-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (EffectsEstopPos <= winBottom) {
	    	$("#Effects-Es").removeClass("out-view");
		    $("#Effects-Bar-Es").find("span").removeClass("out-view");
		    $("#Effects-Bar-Es").addClass('animate-70');
		    $("#Effects-Bar-Es").find("span").addClass("animate-percent");
	    }
	});

	$(window).scroll(function() {
		
	    var VegasEstopPos = $("#Vegas-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (VegasEstopPos <= winBottom) {
	    	$("#Vegas-Es").removeClass("out-view");
		    $("#Vegas-Bar-Es").find("span").removeClass("out-view");
		    $("#Vegas-Bar-Es").addClass('animate-80');
		    $("#Vegas-Bar-Es").find("span").addClass("animate-percent");
	    }
	});

	$(window).scroll(function() {

	    var OtherEstopPos = $("#other-skills-row-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (OtherEstopPos <= winBottom) {
	    	setTimeout(function(){ 
				$("#other-skills-teach-Es").removeClass("out-view");
				$("#other-skills-teach-Es").addClass('animate-other');
				$("#other-skills-lang-Es").removeClass("out-view");
				$("#other-skills-lang-Es").addClass('animate-other');
				$("#other-skills-inno-Es").removeClass("out-view");
				$("#other-skills-inno-Es").addClass('animate-other');
				$("#other-skills-media-Es").removeClass("out-view");
				$("#other-skills-media-Es").addClass('animate-other');
			},500);
	    }
	});

	$(window).scroll(function() {

	    var EmployEstopPos = $("#employ-row-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (EmployEstopPos <= winBottom) {
	    	setTimeout(function(){
				$("#nivaria-Es").removeClass("out-view");
				$("#nivaria-Es").addClass('animate-other');
				$("#mayco-Es").removeClass("out-view");
				$("#mayco-Es").addClass('animate-other');
				$("#tre-Es").removeClass("out-view");
				$("#tre-Es").addClass('animate-other');
				$("#mai-Es").removeClass("out-view");
				$("#mai-Es").addClass('animate-other');
			},500);
	    }
	});

	$(window).scroll(function() {

	    var StudyEstopPos = $("#study-row-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (StudyEstopPos <= winBottom) {
	    	setTimeout(function(){
				$("#plym-Es").removeClass("out-view");
				$("#plym-Es").addClass('animate-other');
				$("#esic-Es").removeClass("out-view");
				$("#esic-Es").addClass('animate-other');
				$("#laguna-Es").removeClass("out-view");
				$("#laguna-Es").addClass('animate-other');
				$("#london-Es").removeClass("out-view");
				$("#london-Es").addClass('animate-other');
			},500);
	    }
	});

	$(window).scroll(function() {

	    var StudyEstopPos = $("#current-row").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (StudyEstopPos <= winBottom) {
	    	setTimeout(function(){
				$("#current-content").removeClass("out-view");
				$("#current-content").addClass('animate-other');
				$("#fasttyping-screens-row").removeClass("out-view");
				$("#fasttyping-screens-row").addClass('animate-other');
			},500);
	    }
	});

	$(window).scroll(function() {

	    var ExamplesEstopPos = $("#examples-row-Es").offset().top;

	    var winHeight = $(window).height();
	    var winTop = $(window).scrollTop();
	    var winBottom = (winTop + winHeight);

	    if (ExamplesEstopPos <= winBottom) {
			setTimeout(function(){
				$("#examples-row-Es").removeClass("out-view");
				$("#examples-row-Es").addClass('animate-other');
			},500);
	    }
	});

// Popover events

	$('.es-employment').popover({
		animation: true,
		trigger: 'hover click focus',
    	placement: 'top',
    	title: "&zwnj;",
    	html: true,
    	content: function(event) {
    	return $('.es-professional-content').html();},
		template:'<div hidden class="employment-popover popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
	});

	$('.es-personal').popover({
		animation: true,
		trigger: 'hover click focus',
    	placement: 'top',
    	title: "&zwnj;",
    	html: true,
    	content: function(event) {
    	return $('.es-personal-content').html();},
		template:'<div hidden class="personal-popover popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
	});

	$('.es-home').popover({
		animation: true,
		trigger: 'hover click focus',
    	placement: 'top',
    	title: "&zwnj;",
    	html: true,
    	content: function(event) {
    	return $('.es-home-content').html();},
		template:'<div hidden class="home-popover popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
	});

// Improved popover functionality for mobile devices

	$('body').on('touchstart', function (event) {
	    $('[data-toggle="popover"],[data-original-title]').each(function (e) {
	        //the 'is' for buttons that trigger popups
	        //the 'has' for icons within a button that triggers a popup
	        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {                
	            (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false;  // fix for BS 3.3.6
	        }

	    });
	});

// Function used to defer image loading until the page is fully loaded

   function init() {
	var imgDefer = document.getElementsByTagName('img');
	for (var i=0; i<imgDefer.length; i++) {
	if(imgDefer[i].getAttribute('datasrc')) {
	imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('datasrc'));
	} } }
	window.onload = init;



  	var parallax = document.querySelectorAll(".parallax"),
      	speed = 0.5;
      	ismobile = /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)

      	if (!ismobile){

			window.onscroll = function(){
				[].slice.call(parallax).forEach(function(el,i){

					var windowYOffset = window.pageYOffset,
					elBackgrounPos = "50% " + (windowYOffset * speed) + "px";

					el.style.backgroundPosition = elBackgrounPos;

				});
			};
		}


// Parallax disable for mobile devices

	var ismobile = /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
		if (ismobile){
			$(".parallax-fixed").removeClass();
			$(".parallax-replacement-bg").removeClass("hidden");
	}
});