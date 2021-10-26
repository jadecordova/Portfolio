function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

function validate()
{
	var fname=$("#fname").val();
	var lname=$("#lname").val();
	var phone=$("#phone").val();
	var email=$("#email").val();
	var cname=$("#cname").val();
	var address=$("#address").val();
	var city=$("#city").val();
	var state=$("#state").val();
	var zip=$("#zip").val();

	if(fname=='')
	{
		$("#error_div3").show("slow").html("Please, enter your first name.");
		$("#fname").focus();
		$('html, body').animate({ scrollTop: 0 });
		return false;
	}

	if(lname=='')
	{
		$("#error_div3").show("slow").html("Please, enter your last name.");
		$("#lname").focus();
		$('html, body').animate({ scrollTop: 0 });
		return false;
	}

	if(phone=='')
	{
		$("#error_div3").show("slow").html("Please, enter your phone number.");
		$("#phone").focus();
		$('html, body').animate({ scrollTop: 0 });
		return false;
	}

	if(email=='')
	{
		$("#error_div3").show("slow").html("Please, enter your email.");
		$("#email").focus();
		$('html, body').animate({ scrollTop: 0 });
		return false;
	}

	if(!validateEmail(email))
	{
		$("#error_div3").show("slow").html("Please, enter a correct email address.");
		$("#email").focus();
		$('html, body').animate({ scrollTop: 0 });
		return false;
	}

	if(cname=='')
	{
		$("#error_div3").show("slow").html("Please, enter your company name.");
		$("#cname").focus();
		$('html, body').animate({ scrollTop: 0 });
		return false;
	}

	if(address=='')
	{
		$("#error_div3").show("slow").html("Please, enter your address.");
		$("#address").focus();
		$('html, body').animate({ scrollTop: 0 });
		return false;
	}

	if(city=='')
	{
		$("#error_div3").show("slow").html("Please, enter your city.");
		$("#city").focus();
		$('html, body').animate({ scrollTop: 0 });
		return false;
	}
	
	if(state=='0')
	{
		$("#error_div3").show("slow").html("Please, select your state.");
		$("#state").focus();
		$('html, body').animate({ scrollTop: 0 });
		return false;
	}

	if(zip=='')
	{
		$("#error_div3").show("slow").html("Please, enter your ZIP code.");
		$("#zip").focus();
		$('html, body').animate({ scrollTop: 0 });
		return false;
	}

	return true;

}

function show(str)
{
	$("#error_div").html("");
	if(str=='form2')
	{
		var loan_alternative=$("#loan_alternative").val();
		var access_to=$("#access_to").val();
		var allchecked=0;
		if($("input:radio[name='business_for']").is(":checked")){
			allchecked=1;
		}
		if(loan_alternative=='0')
		{
			$("#error_div").show("slow").html("Please, tell us why you need a loan.");
			$("#loan_alternative").focus();
			return false;
		}

		if(access_to=='0')
		{
			$("#error_div").show("slow").html("Please, tell us the amount you would like to receive.");
			$("#access_to").focus();
			return false;
		}

		if(allchecked==0 )
		{
			$("#error_div").show("slow").html("How long have you been in business for?");
			$("#business_for1").focus();
			return false;
		}
	}

	//for 2nd page

	if(str=='form3')
	{
		var total_sales=$("#total_sales").val();
		var hear_about_us=$("#hear_about_us").val();

		if(total_sales=='0')
		{
			$("#error_div2").show("slow").html("Tell us your total sales over the last 12 months.");
			$("#total_sales").focus();
			return false;
		}

		if(hear_about_us=='0')
		{
			$("#error_div2").show("slow").html("Please, tell us how did you hear about us.");
			$("#hear_about_us").focus();
			return false;
		}
	}

	$("#error_div").hide();
	$("#error_div2").hide();
	$("#error_div3").hide();
	
	return true;

}


