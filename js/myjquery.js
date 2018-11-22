$(document).ready(function(){
	$('#sl').hide();
	$('#btn_st').hide();
	$('#sl').fadeIn(1000);
	$('#btn_st').fadeIn(2000);
	$('#slc').popover("hide"); 

	$('#btn_st').click(function(event){
		if( $('#slc').val() == "xxx" ) $('#slc').popover("show");
	});

//ohter pages
	$('#tableAgenda').hide();
	$('#tableAgenda').fadeIn(2000);
	$('#apply').hide();
	$('#apply').fadeIn(2000);
	$('#notify').hide();
	$('#notify').fadeIn(2000);
	$('.abc').hide();
	$('.abc').fadeIn(2000);
//
	$('#p1').hide();$('#p2').hide();$('#p3').hide();
	$('#l1').click(function(event){
		$('#p1').show(); $('#p2').hide(); $('#p3').hide();
		event.preventDefault();
		var targetOffset = $('#p1').offset().top;
		$('html,body').animate({scrollTop: targetOffset}, 1000);
	});
	$('#l2').click(function(event){
		$('#p2').show(); $('#p1').hide();$('#p3').hide();
		event.preventDefault();
		var targetOffset = $('#p2').offset().top;
		$('html,body').animate({scrollTop: targetOffset}, 1000);
	});
	$('#l3').click(function(event){
		$('#p3').show(); $('#p1').hide();$('#p2').hide();
		event.preventDefault();
		var targetOffset = $('#p3').offset().top;
		$('html,body').animate({scrollTop: targetOffset}, 1000);
	});

	// $('#aboutme').popover("show");
	$('#aboutme1').hide();
	$('#aboutme2').hide();
	$('#aboutme1').fadeIn(1000);
	$('#aboutme2').fadeIn(2000);

	$('#aboutme').popover("show");
});
