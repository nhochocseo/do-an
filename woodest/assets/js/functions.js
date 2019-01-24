jQuery(document).ready(function($){
	"use strict";
	
	$(window).on('load',function () {
        if($('.pealoader_area').length){
			$('.pealoader_area').fadeOut(1000);
		}	
    });
	
	$('.scrollup-default').on('click', function () {
		$("html, body").animate({
			scrollTop: 0
		}, 1000);
		return false;
	});

	/* -- Expand Panel */
	$("#slideit").on ("click", function() {
		$("#slidepanel").slideDown(1000);
		$("html").animate({ scrollTop: 0 }, 1000);
	});

	/* Collapse Panel */
	$("#closeit").on ("click", function() {
		$("#slidepanel").slideUp("slow");	
		$("html").animate({ scrollTop: 0 }, 1000);
	});
	/* Switch buttons from "Log In | Register" to "Close Panel" on click */
	$("#toggle a").on("click", function () {
		$("#toggle a").toggle();
	});
	
	$( "#filters a" ).on( "click", function(event) {
		event.preventDefault();	
	});
	
	/* -- Services Section */
	if( $(".services-section").length ) {					
		$(".services-section").each(function () {
			var $this = $(this);
			var myVal = $(this).data("value");
			$this.appear(function() {
				$(".services-section .col-md-4").addClass( "animated bounceIn");
			});
		});
	}
	
	/* -- Services Section */
	if( $(".services-section2").length ) {					
		$(".services-section2").each(function () {
			var $this = $(this);
			var myVal = $(this).data("value");
			$this.appear(function() {
				$(".services-section2").addClass( "animated rubberBand");
			});
		});
	}
	
	if($('.portfolio-box').length){	
		$('.portfolio-box').magnificPopup({
			delegate: 'a.zoom',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',				
			}
		});
	}	
	
	// ------- Filter Gallery Start ------- //
    if ($('.portfolio-section').length) {
        if ($('.portfolio-section .isotope').length) {
            var $container = $('.portfolio-section .isotope');
            $container.isotope({
                itemSelector: '.element-item',
                transitionDuration: '0.6s',
                masonry: {
                    columnWidth: $container.width() / 12
                },
                layoutMode: 'masonry'
            });
            $(window).on("resize", function() {
                $container.isotope({
                    masonry: {
                        columnWidth: $container.width() / 12
                    }
                });
            });
        }
        if ($('.portfolio-section .portfolio-categories').length) {
            $('.portfolio-section .portfolio-categories').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $container.isotope({
                    filter: filterValue
                });
            });
            // change is-checked class on buttons
            $('.portfolio-section .button-group').each(function(i, buttonGroup) {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', 'button', function() {
                    $buttonGroup.find('.is-checked').removeClass('is-checked');
                    $(this).addClass('is-checked');
                });
            });

        }
    }
   var show = $('li.categories-item').first().attr('data-showsp');
    // alert(show);
    $(show).css({"display":"inline-block"});
	$('li.categories-item').click(function() {
   		// alert($(this).attr('data-showsp'));
   		var data = $(this).attr('data-showsp');
   		$('.sanpham .portfolio-item').removeAttr("style");
   		$('.sanpham '+data).css({"display":"inline-block"});
   		$('.portfolio-categories li').removeClass("active");
   		$(this).addClass('active');
	});
	/*
	  ==============================================================
		   Services Detail Flex Slider Script Start
	  ============================================================== */
	  // The slider being synced must be initialized first
	  
		if($('.service_thumb_slide').length){
			$('.service_thumb_slide').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				itemWidth: 210,
				itemMargin: 5,
				asNavFor: '.service_detail_slider'
			});
		}
		if($('.service_detail_slider').length){
			$('.service_detail_slider').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				sync: ".service_thumb_slide"
			});
		}
	
	/* ==================================================================
			Animation Script
	  	=================================================================	*/
	    if($('WOW').length){
			new WOW().init();
		}
	
	if( $(".testimonial-section").length ) {
		$(".testimonial-carousel").owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			margin: 30,
			smartSpeed: 200,				
			autoplay: true,
			responsive:{
				0:{
					items: 1
				},
				640:{
					items: 2
				}
			}
		})
	}
	
	if( $(".testimonial-section2").length ) {
		$(".testimonial-carousel2").owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			margin: 30,
			smartSpeed: 200,				
			autoplay: false,
			responsive:{
				0:{
					items: 1
				},
				767:{
					items: 2
				}
			}
		})
	}
	
	/* ==================================================================
							Time Counter Script
	  	=================================================================	*/
	if($('.skillbar1').length){
		jQuery('.skillbar1').each(function(){
			jQuery(this).find('.skillbar1-bar').animate({
				width:jQuery(this).attr('data-percent')
			},2000);
		});
	}
	
	/* -- Client Section */
	if( $(".client-section").length ) {
		$(".client-carousel").owlCarousel({
			loop: true,
			nav: true,
			dots: false,
			margin: 0,
			smartSpeed: 200,				
			autoplay: true,
			responsive:{
				0:{
					items: 2
				},
				480:{
					items: 3
				},
				640:{
					items: 3
				},
				992:{
					items: 6
				}
			}
		})
	}
	
	
	$.fn.awardthemes_brand_slider = function(){
		if(typeof($.fn.slick) == 'function'){
			$(this).each(function(){
				var slick_attr = {
					dots: false,
					autoplay: true,
					slidesToShow:8,
					autoplaySpeed: 2000,
					slidesToScroll: 1,
					responsive: [
						{
						  breakpoint: 1024,
						  settings: {
							slidesToShow: 5,
							slidesToScroll: 1,
							infinite: true,
							dots: false
						  }
						},
						{
						  breakpoint: 600,
						  settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						  }
						},
						{
						  breakpoint: 480,
						  settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						  }
						}
						// You can unslick at a given breakpoint now by adding:
						// settings: "unslick"
						// instead of a settings object
					]
				};
				
				// slide duration
				if( $(this).attr('data-slide') ){
					slick_attr.slidesToShow = parseInt($(this).attr('data-slide'));
				}
				if( $(this).attr('data-slidespeed') ){
					slick_attr.autoplaySpeed = parseInt($(this).attr('data-slidespeed'));
				}
				$(this).slick(slick_attr);
			});	
		}
	}

	
	/*
	==============================================================
	   Progress Bar Script Start
	============================================================== */  
	if($('.progressbar').length){
		$('.progressbar').each(function(){
			var t = $(this),
				dataperc = t.attr('data-perc'),
				barperc = Math.round(dataperc*5.56);
			t.find('.bar').animate({width:barperc}, dataperc*25);
			t.find('.label').append('<div class="perc"></div>');
			
			function perc() {
				var length = t.find('.bar').css('width'),
					perc = Math.round(parseInt(length)/5.56),
					labelpos = (parseInt(length)-2);
				t.find('.perc').text(perc+'%');
			}
			perc();
			setInterval(perc, 0); 
		});
	}	
	
	/* ---------------------------------------------------------------------- */
	/*	Carousel
	/* ---------------------------------------------------------------------- */
	
	$.fn.awardthemes_owl_carousel_services = function(){
		if(typeof($.fn.owlCarousel) == 'function'){
			$(this).each(function(){
				var option;
				var data_small;
				var data_margin
				if($(this).attr('data-slide')){
					option = $(this).attr('data-slide');
				}
				if($(this).attr('data-small-slide')){
					data_small = $(this).attr('data-small-slide');
				}
				if($(this).attr('data-margin')){
					data_margin = $(this).attr('data-margin');
				}
				var owl_attr = {
					loop:true,
					autoplay:true,
					margin:0,
					responsive:{
						0:{
							items:1
						},
						450:{
							items:1
						},
						600:{
							items:1
						},
						1000:{
							items:2
						},
						1600:{
							items:4
						}
					}
				};
				
				$(this).owlCarousel(owl_attr);	
			});	
		}
	}
	
	/*
	==============================================================
	   Accordion Script Start
	============================================================== */  
	if($('.for-accodien').length){
		//custom animation for open/close
		$.fn.slideFadeToggle = function(speed, easing, callback) {
		  return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
		};

		$('.for-accodien').accordion({
		  defaultOpen: 'accodien-one',
		  cookieName: 'nav',
		  speed: 'slow',
		  animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
			elem.next().stop(true, true).slideFadeToggle(opts.speed);
		  },
		  animateClose: function (elem, opts) { //replace the standard slideDown with custom function
			elem.next().stop(true, true).slideFadeToggle(opts.speed);
		  }
		});
	} 
	
	// runs countdown function
	$.fn.awardthemes_countdown = function(){
		if(typeof($.fn.countdown) == 'function'){
			$(this).each(function(){
				var austDay = new Date();
				var data_year;
				var data_month;
				var data_day;
				var data_time;
				var current_day;
				
				// data-year duration
				if( $(this).attr('data-year') ){
					data_year = parseInt($(this).attr('data-year'));
				}
				//Month
				if( $(this).attr('data-month') ){
					data_month = parseInt($(this).attr('data-month'));
				}
				//day
				if( $(this).attr('data-day') ){
					data_day = parseInt($(this).attr('data-day'));
				}
				//time
				if( $(this).attr('data-time') ){
					data_time = parseInt($(this).attr('data-time'));
				}
						
				var current_day = new Date(data_year, data_month-1, data_day,data_time);
				$(this).downCount({ date: current_day, offset: +1 });	
				//jQuery('#year').text(current_day.getFullYear());
			});	
		}
	}
	
	
	// runs countdown function
	$.fn.awardthemes_countdown_timmer = function(){
		if(typeof($.fn.downCount) == 'function'){
			$(this).each(function(){
				var austDay = new Date();
				var data_year;
				var data_month;
				var data_day;
				var data_time;
				var current_day;
				
				// data-year duration
				if( $(this).attr('data-year') ){
					data_year = parseInt($(this).attr('data-year'));
				}
				//Month
				if( $(this).attr('data-month') ){
					data_month = parseInt($(this).attr('data-month'));
				}
				//day
				if( $(this).attr('data-day') ){
					data_day = parseInt($(this).attr('data-day'));
				}
				//time
				if( $(this).attr('data-time') ){
					data_time = parseInt($(this).attr('data-time'));
				}
				
				var current_day = new Date(data_year, data_month-1, data_day,data_time);
				$(this).downCount({ date: current_day, offset: +1 });
				
				
			});	
		}
	}
		// responsive menu
		if(typeof($.fn.dlmenu) == 'function'){
			$('#awardthemes-responsive-navigation').each(function(){
				$(this).find('.dl-submenu').each(function(){
					if( $(this).siblings('a').attr('href') && $(this).siblings('a').attr('href') != '#' ){
						var parent_nav = $('<li class="menu-item awardthemes-parent-menu"></li>');
						parent_nav.append($(this).siblings('a').clone());
						
						$(this).prepend(parent_nav);
					}
				});
				$(this).dlmenu({
					animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
				});
			});
		}		
		
		/*  Carousel */
		$('.goodsilder2-section').awardthemes_owl_carousel_services();

		// runs CountDown when available
		$('.countdown').awardthemes_countdown();
		$('.downcount').awardthemes_countdown_timmer();

});