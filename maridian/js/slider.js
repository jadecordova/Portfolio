$(document).ready(function() 
{
	$('#main-image').slideme
	(
		{
			arrows: false,
			autoslide: true,
			loop: true,
			interval: 5000,
			speed: 1000,
			autoslideHoverStop : false,
			transition: "fade",
			resizable: 
			{
				width: 1600,
				height: 570
			}
		}
	);
//	$('#main-image').slideme('play');
})