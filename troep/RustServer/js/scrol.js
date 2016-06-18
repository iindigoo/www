$(function() {
	$('a[href="#serverinfo"]').click(function(e) {
		e.preventDefault();
		var targetOffset = $('a[name="serverinfo"]').offset().top;
		$('body').animate(
			{scrollTop: targetOffset},
			500
		);
	});
});
$(function() {
	$('a[href="#donation"]').click(function(e) {
		e.preventDefault();
		var targetOffset = $('a[name="donation"]').offset().top;
		$('body').animate(
			{scrollTop: targetOffset},
			500
		);
	});
});
$(function() {
	$('a[href="#vote"]').click(function(e) {
		e.preventDefault();
		var targetOffset = $('a[name="vote"]').offset().top;
		$('body').animate(
			{scrollTop: targetOffset},
			500
		);
	});
});
