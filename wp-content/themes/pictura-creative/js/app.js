(function($) {
$(document).ready(function(){
	//**** ANIMATE ON SCROLL***/
	AOS.init({
	 duration: 1200,
			delay: 5
	});
	
	 
	$(window).scrollTop()>=1?$("body").addClass("has-scrolled"):$("body").removeClass("has-scrolled");
	
	/** STICKY MENU CLASS **/
	$(window).scroll(function(){
		//console.log($(this).scrollTop());
			$(this).scrollTop()>=1?$("body").addClass("has-scrolled"):$("body").removeClass("has-scrolled")
	});
	
   /*** ACCORDIAN ***/
		$('.toggle').click(function(e) {			
			e.preventDefault();
			var $this = $(this);
			
			if ($this.next().hasClass('show')) {
				$this.next().removeClass('show');
				$this.removeClass('showPanel');
				$this.next().slideUp(350);
			} else {
				$this.parent().parent().find('li .inner').removeClass('show');
				$this.parent().parent().find('.toggle').removeClass('showPanel');
				$this.parent().parent().find('li .inner').slideUp(350);
				$this.toggleClass("showPanel");
				$this.next().toggleClass('show');
				$this.next().slideToggle(350);
			}
		});

	  $('#menu-main-menu a').click(function (e) {
    e.preventDefault(); // alert($(this).attr("href"))
    // var target = this.hash,

    var target = $($(this).attr("href"));
    $('html, body').stop().animate({
      'scrollTop': target.offset().top - 90
    }, 1000, 'linear', function () {});
  });
	
	/*** HERO SLIDER **/
		jQuery('.herofix').flexslider({
		animation: "fade",
		controlNav: false,
			customDirectionNav: $(".nav-carousel a"),

		});	  
	
	/*** TESTIMONIAL SLIDER **/
		jQuery('.testimonialSlider').flexslider({
		animation: "slide",
		controlNav: false,
			customDirectionNav: $(".nav-carousel2 a"),
		});	   
	
	/*** CLIENTLOGO SLIDER **/
		

		
	/**** SCROLL BOTTOM FROM HERO ***/
	$('a[href="#content"]').on('click', function(e) {	scrollDown();		});
	
	$('.downArrow').on('click',function(e){ scrollDown(); });
		function scrollDown()
		{
			$('html, body').animate({
			scrollTop: $("#content").offset().top
			}, 2000);
				return false;
			e.preventDefault();
		}
	
	//Open Search //	
	jQuery('.searchMenu a').on('click', function(event) {		
		jQuery(".searchBar").addClass("open");
		event.preventDefault();
		 });
	
	jQuery('.closeSearch').on('click', function(event) {		
		jQuery(".searchBar").removeClass("open");
		event.preventDefault();
		 });
	
	//ENQUIRY MODAL
		var fadespeed = 'slow';
			jQuery('.enquiry_btn, a[href="#openPopup"]').on('click', function(event) {

				event.preventDefault();
				jQuery('.enquiry-modal').css('top', '0');
				jQuery('html').css('overflow', 'hidden');
				jQuery('body').addClass('enquiry-open');
			});
	jQuery('.modal-close').on('click', function () {
		jQuery('.enquiry-modal').css('top', '-100%');
		jQuery('html').css('overflow', 'visible');
		jQuery('body').removeClass('enquiry-open');
	});
	jQuery(document).on('keydown', function (e) {
		if (e.keyCode === 27) {
			jQuery(".enquiry-modal").css('top', '-100%');
			jQuery('body').removeClass('enquiry-open');
			jQuery('html').css('overflow', 'visible');
		}
	});
	//** INPUT FOCUS CHANGE LABEL
	$('input').focus(function () {
		$(this).parents('.form-row').addClass('focused');
	});
	$('textarea').focus(function () {
		$(this).parents('.form-row').addClass('focused');
	});
	//MENU MODAL
		
			jQuery('.burger').on('click', function(event) {
				event.preventDefault();
				//jQuery('.menu-wrap').fadeIn('fast');
				jQuery('html').css('overflow','hidden');
				jQuery('body').addClass('fullMenu-open');
				jQuery('.menu-bg').removeClass('hide');
				
			});
			jQuery('.modal-close').on('click', function() {
				//jQuery('.menu-wrap').fadeOut(fadespeed);
				jQuery('html').css('overflow','visible');
				jQuery('body').removeClass('fullMenu-open');
				jQuery('.menu-bg').addClass('hide');
			});
			jQuery(document).on('keydown', function(e) {
				if (e.keyCode === 27) {
					//jQuery('.menu-wrap').fadeOut(fadespeed);
				jQuery('html').css('overflow','visible');
				jQuery('body').removeClass('fullMenu-open');
				jQuery('.menu-bg').addClass('hide');
				}
	        });

			/****** ADD TAGET BLANK FOR EXTERNAL LINK***/
			//$("a[target!='_blank'][href$='.pdf']").attr("target", "_blank");


			$('a').each(function () {

				if (this.href.indexOf(location.hostname) == -1) {
					$(this).attr({
						//target: "_blank",
					});
				}
			});

	$('a[href*="tel"]').each(function() {
		$(this).attr({
			//target: "_self",
		});
	});
	$('a[href*="mailto"]').each(function() {
		$(this).attr({
			//target: "_self",
		});
	});

			/**** SCROLL TOP FROM FOOTER ***/


			$(".goTop").click(function (event) {
				event.preventDefault();
				$("html, body").animate({
					scrollTop: 0
				}, 1000);
			});

			$(window).scroll(function () {
				if ($(this).scrollTop() > 20) {
					$('.goTop').fadeIn();
				} else {
					$('.goTop').fadeOut();
				}
			});
	
	/*	

	$.fn.visible = function(partial) {
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
	var win = $(window);

	var allMods = $(".animate:not([animate-sequence])");
	var animateSequences = $(".animate[animate-sequence]");


	allMods.each(function(i) {
		var li = $(this);
		if (li.visible(true)) {
			li.addClass('visible-animation');
		}
	});

  
  	var animateDelay = 0;
  	animateSequences.each(function(index){
  		if ($(this).visible(true)) {
  			setTimeout(function(){ $(animateSequences[index]).addClass('visible-animation') }, animateDelay);
  			animateDelay += 100;
  		}
  	});
	
	win.scroll(function(event) {

	var scroll = win.scrollTop();
	
	  allMods.each(function(i) {
	    var li = $(this);
	    if (li.visible(true)) {

			setTimeout(function() {
	      li.addClass('visible-animation');
			
	    }, 100); // delay 200 ms
			}
	  });
	  
	  	var animateDelay = 0;
	  	animateSequences.each(function(index){
	  		if ($(this).visible(true)) {
	  			setTimeout(function(){ $(animateSequences[index]).addClass('visible-animation') }, animateDelay);
	  			animateDelay += 100;
	  		}
	  	});
	  
	});*/
	
}); 
	
})(jQuery); 