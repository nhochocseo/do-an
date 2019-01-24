jQuery(function ($) {
	var $window = $(window),
		$html = $('html, body'),
		winWidth = $window.width(),
		winHeight = $window.height(),
		userAgent = window.navigator.userAgent.toLowerCase(),
		appVer = window.navigator.appVersion.toLowerCase(),
		$SceneArea = $('.pkg-SceneArea'),
		$topHeader = $('.top-header'),
		$navbarWrap = $('#my-nav-header .navbar'),
		$breadcrumbWrap = $('.breadcrumb'),
		headerHeight = $navbarWrap.height(),
		$sceneChanger = $('#Indicator'),
		contentPos = [],
		contentId = [],
		putElm = '',
		boxOffset = 56,
		MINHEIGHT = 768,
		fadeoutTiming = 0;
	var mobileDetect = new MobileDetect(window.navigator.userAgent);


	$(window).on('beforeunload', function () {
		$(window).scrollTop(0);
	});
	//Window Setting
	$window.on('load orientationchange resize', function () {
		winWidth = $window.width(),
			winHeight = $window.height();
	});

	$SceneArea.each(function (i) {
		var id = $(this).attr('id');
		if (id == 'Scene01') {
			putElm += '<li class="active">' + '<a href="#header" class="js-pkg-SmoothScroller">' + (i + 1) + '</a></li>';
		} else {
			putElm += '<li>' + '<a href="#' + id + '" class="js-pkg-SmoothScroller">' + (i + 1) + '</a></li>';
		}
	});

	$sceneChanger.css({
		'margin-top': '-' + (contentId.length * 20) / 2 + 'px'
			//,'height': (contentId.length * 20) + 'px'
	}).html(putElm);

	//Layout Control
	// $('.pkg-ContentsBox--BgBlack, .pkg-ContentsBox-2, .pkg-ContentsBox--Ending').each(function () {
	// 	var boxHeight = $(this).height() + boxOffset;
	// 	$(this).css({
	// 		'margin-top': '-' + (boxHeight / 2) + 'px'
	// 	});
	// });

	var scrollspy_offset = headerHeight;
	if ($topHeader.is(':visible')) {
		scrollspy_offset = scrollspy_offset + $topHeader.height();
	}

	$('body').scrollspy({
		target: '#nav-bar-indicator',
		offset: scrollspy_offset + 100
	});

	$(window).on('scroll', function () {
		var $last = $('#nav-bar-indicator').find('li:last');
		var win_scrollTop = $window.scrollTop() + headerHeight;
		var fadeoutTiming = $('#ContentsWrap').height() - $(window).height() / 2;
		if ($last.hasClass('active')) {}
		if (fadeoutTiming <= win_scrollTop) {
			$sceneChanger.fadeOut();
		} else {
			$sceneChanger.fadeIn();
		}
	});

	$(document).on('click', 'a.js-pkg-SmoothScroller', function (event) {
		var href = $.attr(this, 'href');
		if ($('#Indicator').hasClass('is-scrolling')) {
			return;
		}
		if ($(href).length) {
			event.preventDefault();
			var offset_top = 105;

			var currIndex=$('#Indicator').find('.active').index();
			$('#Indicator').removeClass('is-scrolling');
			/*
			if (mobileDetect.mobile()) {
				offset_top=60;
			} else {
				if(currIndex==0){
				}
				else if (!$('.navbar').hasClass('scroll')) {
					offset_top = offset_top + $topHeader.height();
				}
			}
			*/
			$html.animate({
				scrollTop: $(href).offset().top - offset_top
			}, 1200, 'easeInOutQuart', function () {
				$('#Indicator').removeClass('is-scrolling');
			});
		}
	});

	function readmoreInit($selector, opt) {
		var md = new MobileDetect(window.navigator.userAgent);
		if (md.mobile()) {
			if (typeof $selector == 'string') $selector = $($selector);
			$selector.readmore('destroy');
			$selector.readmore({
				speed: 300,
				collapsedHeight: opt.height,
				//moreLink: '<div class="readmore-js-link readmore"><a href="javascript:void(0)"><span>Read More</span><span class="icon-read icon-read-more"></span></a></div>',
				//lessLink: '<div class="readmore-js-link readless"><a href="javascript:void(0)"><span>Hide</span><span class="icon-read icon-read-less"></span></a></div>',
				beforeToggle: function (trigger, element, expanded) {

				},
				afterToggle: function (trigger, element, expanded) {

				}
			});
		}
	}
});

