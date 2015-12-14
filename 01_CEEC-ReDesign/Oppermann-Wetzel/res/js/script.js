$(document).ready(function() {
	$('.btn-erweitert').click(function() {
		$('.erweitert-group').slideDown();
	});


	$('img[data-trigger="openModal"]').click(function () {

		// split the src string
		var pathfragments = $(this).attr("src").split("/"); 
		
		// get the last url fragment to rewrite new resource to big image
		var bigImgSource = "res/img/big/"+ pathfragments[pathfragments.length-1];

		// alter modal-image source
		$('.modal-image').attr("src", bigImgSource);
	});

	$(".multiple-items").slick({
	  dots: true,
	  speed: 500,
	  cssEase: 'ease',
	});


	// index page 
	$('.last-entries article').height($('.last-entries article').width());

  $('.last-entries article').hover(function() {
    $(this).children().fadeOut();
  }, function() {
    $(this).children().fadeIn();
  });

  $('.last-entries article').click(function() {
  	var random = Math.floor((Math.random() * 3) + 1);
    var id = $(this).attr('data-id');
    location.href='detail'+random+'.html?id='+id;
  });
});