function show_arrow_things()
	{
		$(function(){
			$("#1").stop().slideToggle();
		})
	}

$(function(){
	$('.panel_button').on('click', function(){
		$('.active').removeClass('active');
		$(this).addClass('active');
		$('.active2').removeClass('active2');
		var panelToShow  = $(this).attr('id')
		$('#'+panelToShow+'_panel').addClass('active2');
	});
});