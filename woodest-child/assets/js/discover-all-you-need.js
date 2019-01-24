 jQuery(function ($) {

    var headerHeight = 60;
    var $topHeader = $('.top-header');
    var $breadcrumb = $('.breadcrumb');
    var $html = $('html, body');
    var mobileDetect = new MobileDetect(window.navigator.userAgent);

    function scrollToScreen(screen_no) {
        if ($('#navi').hasClass('is-scrolling')) {
            return;
        }
        var $screen = $('#screen-' + screen_no);
        var offset_top = 60;
        var currIndex = $('#navi').find('.active').index();
        if (mobileDetect.mobile()) {
            offset_top = 110;
            if(currIndex==0){
                offset_top=210;
            }
            if(currIndex==0 && screen_no==3){
                offset_top=200;
            }
        } else {
            if (currIndex == 0) {
                offset_top = offset_top + 45;
            } else {
                offset_top = offset_top + 45;
            }

        }
        var scrollTop = $screen.offset().top - offset_top;
        if (screen_no == '0') scrollTop = 0;

        $('#navi').addClass('is-scrolling');

        $html.animate({
            scrollTop: scrollTop
        }, 1000, 'easeInOutQuart', function () {
            $('#navi').removeClass('is-scrolling');
        });
    }

    function doAnimations(elems, callback) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elems.each(function () {
            var $this = $(this),
                animationType = $this.data('animation');
            var isCounter = $this.hasClass('ani-counter');
            if (isCounter) {
                var $value = $this.find('.value .number');
                var value = parseInt($value.text() || 0);
                $value.text(0);
                setThermometer(value);
                setTimeout(function () {
                    $value.countTo({
                        from: 0,
                        to: value,
                        speed: 1000,
                        refreshInterval: 10,
                        onComplete: function (value) {}
                    });
                }, 600);
            }
            $this.addClass(animationType).one(animationEnd, function () {
                $this.removeClass(animationType);
                if (typeof callback == 'function') {
                    callback();
                }
            });
        });
    }

    function setThermometer(val) {
        var value = parseInt(val || 0);
        var $thermometer = $('.thermometer-value-2');
        var _height = 100 - (value * 0.8695) - 30.4325;
        $thermometer.css('height', _height + '%');
    }

    var discoverAYN = {
        init: function () {
            var thisObj = this;
            $('.screen-list .screen').addClass('visible');
            $(window).on('beforeunload', function () {
                $(window).scrollTop(0);
            });

            thisObj.setHeight();
            $(window).on('load orientationchange resize', function () {
                thisObj.setHeight();
            });
            var scrollspy_offset = headerHeight;
            if ($topHeader.is(':visible')) {
                scrollspy_offset = scrollspy_offset + $topHeader.height();
            }
            $('body').scrollspy({
                target: '#navi',
                offset: scrollspy_offset + 60
            });

            var isOpeningByClick = false;
            var time_seg = null;
            var SegLoaded = [];

            $("#navi").on("activate.bs.scrollspy", function (event) {

            });
            var $ribbon = $('#ribbon'),
                $dots_front = $('#dots_front'),
                $dots_back = $('#dots_back');

            $(document).on('click', '#navi .nav li a,.screen-next a.next-link', function (event) {
                var href = $.attr(this, 'href');
                var prev_screen_no = 1;
                if ($('#navi .navi-screen-5.active').length) {
                    prev_screen_no = $('.navi-screen-5.active a').attr('href').replace('#screen-', '');
                }
                var $screen = $(href);
                var screen_no = href.replace('#screen-', '');
                if ($screen.length) {
                    event.preventDefault();
                    scrollToScreen(screen_no);

                    var easing = "easeOutQuint";
                    var bgEase = easing;
                    if (screen_no == 7 || screen_no == 0) bgEase = 'easeOutBack';
                    var value = (parseInt(prev_screen_no) - parseInt(screen_no)) * 2000,
                        time = 3500;
                    $ribbon.stop().animate({ 'backgroundPosition': 'center +=' + Math.round(value / 2) + 'px' }, time + 100, easing);
                    $dots_front.stop().animate({ 'backgroundPosition': '+=150 +=' + Math.round(value / 4) + 'px' }, time + 1200, bgEase);
                    $dots_back.stop().animate({ 'backgroundPosition': '-=150 +=' + Math.round(value / 6) + 'px' }, time + 2000, bgEase);
                    $screen.addClass('ishidden');
                    if (screen_no == 6) {
                        $screen.find('.circle').addClass('vOut');
                    }

                    setTimeout(function () {
                        if (screen_no == 6) {
                            $screen.find('.circle').removeClass('vOut');
                        }
                        doAnimations($screen.find("[data-animation ^= 'animated']:visible"));
                    }, 1000);
                    $screen.removeClass('ishidden').addClass('visible');
                }
            });

            $('.carousel').carousel({
                interval: false,
                wrap: false,
                pause: null
            });
            $('.carousel').find('.carousel-controls .left').hide();
            $('.carousel').on('slide.bs.carousel', function (e) {
                var $target = $(e.relatedTarget);
                var $animatingElems = $target.find("[data-animation ^= 'animated']");
                doAnimations($animatingElems);
            });
            $('.carousel').on('slid.bs.carousel', function (e) {
                var $target = $(e.relatedTarget);
                var $closest = $target.closest('.carousel');
                var $btn_prev = $closest.find('.carousel-controls .left');
                var $btn_next = $closest.find('.carousel-controls .right');

                var isFirst = $target.is(':first-child');
                var isLast = $target.is(':last-child');
                $btn_prev.show();
                $btn_next.show();
                if (isFirst) {
                    $btn_prev.hide();
                } else if (isLast) {
                    $btn_next.hide();
                }
            });
            $(".carousel").swiperight(function () {
                $(this).carousel('prev');
            });
            $(".carousel").swipeleft(function () {
                $(this).carousel('next');
            });
            $(document).on('click', '.carousel-control,.carousel-indicators li', function () {
                var $carousel = $(this).closest('.carousel');
                var slideTo = $(this).data('slide-to');
                $carousel.carousel(slideTo);
            });

            this.screen0();
            this.screen1();
            this.screen2.init();
            this.screen4();
        },
        setHeight: function () {
            $('.screen').removeClass('ishidden');
        },
        screen0: function () {
            setTimeout(function () {
                doAnimations($('#screen-0').find("[data-animation ^= 'animated']"));
            }, 100);

        },
        screen1: function () {
            var $screen1Carousel = $('#screen-1 .carousel');
            $screen1Carousel.find('.carousel-indicators');
        },
        screen2: {
            carousel: '#screen-2',
            formatNumber: function (nStr) {
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + '.' + '$2');
                }
                return x1 + x2;
            },
            animate: function (index) {
                var thisObj = discoverAYN.screen2;
                var $counter = $(thisObj.carousel).find('.item').eq(index).find('.counter');
                var value = $counter.text();
                value = value.replace('.', '');
                $counter.countTo({
                    from: 0,
                    to: value,
                    speed: 1000,
                    refreshInterval: 10,
                    formatter: function (value, options) {
                        return thisObj.formatNumber(value);
                    },
                    onComplete: function (value) {
                        //console.log('onComplete', value);
                    }
                });
            },
            init: function () {
                var thisObj = discoverAYN.screen2;
                var $carousel2 = $('#screen-2 .carousel-slick');
                $carousel2.slick({
                    dots: true,
                    infinite: false,
                    speed: 1000,
                    slidesToShow: 1,
                    centerMode: true,
                    variableWidth: false,
                    prevArrow: $('#screen-2 .carousel-controls .left'),
                    nextArrow: $('#screen-2 .carousel-controls .right'),
                });

                $carousel2.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                    var direction = 'next';
                    if (currentSlide > nextSlide) direction = 'prev';
                    console.log('direction:', direction);
                    if (direction == 'next') {
                        $carousel2.find('.item:eq(' + currentSlide + ')').addClass('slick-prev');
                        $carousel2.find('.item:eq(' + currentSlide + ')').removeClass('slick-next');

                        $carousel2.find('.item:eq(' + (nextSlide + 1) + ')').addClass('slick-next');
                        $carousel2.find('.item:eq(' + (nextSlide + 1) + ')').removeClass('slick-prev');

                        $carousel2.find('.item:eq(' + nextSlide + ')').removeClass('slick-next slick-prev');
                    } else {
                        $carousel2.find('.item:eq(' + currentSlide + ')').addClass('slick-next');
                        $carousel2.find('.item:eq(' + currentSlide + ')').removeClass('slick-prev');

                        $carousel2.find('.item:eq(' + (nextSlide - 1) + ')').addClass('slick-prev');
                        $carousel2.find('.item:eq(' + (nextSlide - 1) + ')').removeClass('slick-next');

                        $carousel2.find('.item:eq(' + nextSlide + ')').removeClass('slick-next slick-prev');
                    }
                });
                $carousel2.on('afterChange', function (event, slick, currentSlide) {
                    thisObj.animate(currentSlide);
                    $carousel2.find('.item:lt(' + currentSlide + ')').addClass('slick-prev');
                    $carousel2.find('.item:gt(' + currentSlide + ')').addClass('slick-next');
                    // $('#screen-2 .carousel-controls .carousel-control').show();
                    // if (currentSlide == 0)
                    //     $('#screen-2 .carousel-controls .left').hide();
                    // else if (currentSlide == $carousel2.find('.slick-track .slick-slide').length - 1)
                    //     $('#screen-2 .carousel-controls .right').hide();
                });
            }
        },
        screen4: function () {}
    };
    discoverAYN.init();
 });

