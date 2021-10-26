$(document).ready(function() {
	$("#contactus").validate({
		submitHandler: function() {
			//submit the form
			$.post("comment.php", //post
				$("#contactus").serialize(), 
				function(data){
					//if message is sent
					if (data == 'Sent') {
					$("#feedback").fadeIn(); //show confirmation message
					$("#contactus")[0].reset(); //reset fields
				}
				//
			});
			return false; //don't let the page refresh on submit.
		}
	}); //validate the form
	
	var deck = new $.scrolldeck({
		buttons: '.myButton',
		easing: 'easeInOutExpo',
		offset: -150
	});
	
	// add other animations using the scrolldeck.controller (see Scrollorama plugin)
	//console.log(deck.controller);
	//deck.controller.animate('#instructions',{ duration: 100, property:'opacity', end: 0 });
		
});
