$(document).ready(function() 
{
	var tab = $('#steps > a'),
	tabContent = $('.tab-content'),
	tabParent = $('#forms');

	if(tab.length)
	{
		tab.off('click').on('click', function()
		{
			var ele = $(this),
			currContent = $('#'+ele.attr('rel'));
			
			if(show(ele.attr('rel')))
			{
				if(!ele.hasClass('open'))
				{
					tabParent.stop(true, true).animate(
					{
						height:'0px'
					},function() 
					{
			tab.removeClass('mainsteps');
			ele.addClass('mainsteps');
						tabContent.removeClass('open');
						currContent.addClass('open');
						tab.removeClass('open');
						ele.addClass('open');
						tabParent.stop(true, true).animate(
						{
							height:currContent.height()+'px'
						}); 
					});
				}  
			}
			$('html, body').animate({ scrollTop: 0 });
		});
		$('#steps > a:eq(0)').click();
	}

});