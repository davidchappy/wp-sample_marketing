jQuery(document).ready(function ( $ ) {
  $(document).on('click', '#down-arrow', function(event) {
  	var navHeight = $('.navbar-inverse');
  	$('html, body').animate({ 
	    scrollTop: $('#main-content').offset().top - $('.jumbotron').offset().top
  	}, 1000);
  });
});