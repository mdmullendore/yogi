$( document ).ready(function() {

	var toggle = $('[data-toggle="nav"]');

	toggle.on('click', function(){
		$('#primary-menu').toggle();
	});

	$(window).on('resize', function(){
		if($(window).width() > 768 && $('#primary-menu').css({'display':'none'}) ){
			$('#primary-menu').css({'display':'block'});
		}
		else if($(window).width() < 768 && $('#primary-menu').css({'display':'block'}) ){
			$('#primary-menu').css({'display':'none'});
		}
	});
});