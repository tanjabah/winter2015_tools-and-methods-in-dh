jQuery(document).ready(function($) {
	
	$('#dropdown-toggle').on('click', function() {
		$('#dropdown').slideToggle('slow');
	});
	
	$('#book_pages').on('click', function() {
		$('.slider').hide();
		$('#slider-book_pages').show();
		$('#slider-book_pages').carousel();
		$('#slider-book_pages').carousel('pause');
	});
	
	$('#book_front').on('click', function() {
		$('.slider').hide();
		$('#slider-book_front').show();
		$('#slider-book_front').carousel();
		$('#slider-book_front').carousel('pause');
	});
	
	$('#book_addenda').on('click', function() {
		$('.slider').hide();
		$('#slider-book_addenda').show();
		$('#slider-book_addenda').carousel();
		$('#slider-book_addenda').carousel('pause');
	});
	
	
	
});