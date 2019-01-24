jQuery(function ($) {
	var curentModalIndex = 1;
	var maxModalIndex = $('#discover-around-world-popup .modal-content').length;
	var minModalIndex = 1;

	$.fn.extend({
		animateCss: function (animationName, callback) {
			var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			this.addClass('animated ' + animationName).one(animationEnd, function () {
				$(this).removeClass('animated ' + animationName);
				if (typeof callback == 'function') {
					callback();
				}
			});
		}
	});

	$('.discover-around-world .read-more-link,.discover-around-world .figure a').on('click', function () {
		var $innder= $(this).closest('.inner');
		curentModalIndex = parseInt($innder.data('popup'));
		showPopup(curentModalIndex);
	});

	$('#discover-around-world-popup .button-control').on('click', function () {
		var $this = $(this);
		var $current = $("#modal-"+curentModalIndex);

		if ($this.hasClass('btn-prev')) {
            curentModalIndex--;
            $current.removeClass('active');
            $("#modal-"+curentModalIndex).addClass('active');
			setControls(curentModalIndex);

		} else if ($this.hasClass('btn-next')) {
            curentModalIndex++;
            $current.removeClass('active');
            $("#modal-"+curentModalIndex).addClass('active');
			setControls(curentModalIndex);
		}  else if ($this.hasClass('btn-close')) {
			closePopup();
		}
	});

	function showPopup(index) {
        setControls(index);
        $('#discover-around-world-popup .modal-content').removeClass('active');
        $("#modal-"+curentModalIndex).addClass('active');
		$('#discover-around-world-popup').modal('show');
		$('#discover-around-world-popup .modal-container').animateCss('zoomIn', function () {});
	}

	function closePopup() {
		$('#discover-around-world-popup .modal-container').animateCss('zoomOut', function () {
			$('#discover-around-world-popup').modal('hide');
		});
	}

	function setControls(index) {
		//reset button
		if (index == maxModalIndex) {
			$('#discover-around-world-popup .button-control.btn-next').hide();
		} else {
			$('#discover-around-world-popup .button-control.btn-next').show();
		}

		if (index == minModalIndex) {
			$('#discover-around-world-popup .button-control.btn-prev').hide();
		} else {
			$('#discover-around-world-popup .button-control.btn-prev').show();
		}
		$('.box-num').find('.num-min').text(index);
	}

	function init() {
		$('#discover-around-world-popup .button-control.btn-prev').hide();
		$('.box-num').find('.num-max').text(maxModalIndex);
	}

	init();
});

