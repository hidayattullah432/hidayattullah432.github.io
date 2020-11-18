$('.menu').on('click', function(e){


	// herf ny
	var as = $(this).attr('href')
	// tangkap id
	var elemenAs = $(as);

	// pindah
	$('html , body').animate({

		scrollTop: elemenAs.offset().top -80

	}, 1000, 'swing');


	e.preventDefault();

});