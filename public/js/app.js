jQuery(function($){

	$('#menu').click(function(event){
		event.preventDefault();
		$('.home').toggleClass('hasMenu');
	})

});