jQuery(document).ready(function ( $ ) {
  $(document).on('click', '#down-arrow', function(event) {
  	var navHeight = $('.navbar-inverse');
  	$('html, body').animate({ 
	    scrollTop: $('#main-content').offset().top - $('.jumbotron').offset().top
  	}, 1000);
  });
  $(function() {
		$('.my-tooltip').hide();
		$('.turn-on-tooltips').hide();
	});
  $(window).ready(function($) {

		$(function() {
			$('.my-tooltip').fadeIn(1000);
		});
	  $(document).on('click', '.close-my-tooltip', function(event) {
			$(this).parent().hide();
			$('.turn-on-tooltips').show();
	  });
	  $(document).on('click', '.turn-off-tooltips', function(event) {
			$('.my-tooltip').hide();
			$('.turn-off-tooltips').hide();
			$('.turn-on-tooltips').show();
	  });
	  $(document).on('click', '.turn-on-tooltips', function(event) {
			$('.my-tooltip').show();
			$('.turn-off-tooltips').show();
			$('.turn-on-tooltips').hide();
	  });
  });
});