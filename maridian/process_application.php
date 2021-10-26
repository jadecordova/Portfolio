<!doctype html>

<html>

<head>
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" >
	<link href='http://fonts.googleapis.com/css?family=Oswald|Pathway+Gothic+One|Patua+One|Slabo+27px|Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>

    <title>Welcome to Maridian Group</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">

	<script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/jquery.scrollTo-1.4.3.1.min.js"></script>
    <script src="js/jquery.scrollorama.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.scrolldeck.js"></script>
	<script src="js/validation/dist/jquery.validate.js"></script>
	
	<style>
		table{
			font-family: 'Oswald', sans-serif;
			font-family: 'Roboto Condensed', sans-serif;
			width:100%;
		}

		tr:nth-child(even){
			background: #eeeeee;	
		}

		td{
			border-style:solid;
			border-width:1px;
			border-color: rgb(200,200,200);
			padding: 10px;
		}

		#wrapper{
			margin-top:150px;
			position:relative;
		}

		#data{
			width:95%;
			max-width:700px;
			margin: 20px auto;	
		}

		.values{
			color:#888888;
			font-weight:bold;
		}

		.header{
			background:#77b55a;
			color:white;
		}

		.time{
			background:#444444;
			color:white;
			font-size:11px;
		}

		img{
			display:inline-block;
		}
</style>

</head>

<body>

<!--HEADER START-->
    
	<div id="start">
		<div id="home">
			<figure class="logo-left"><img src="images/logomaridian.png" alt="Maridian Group" /></figure>
			<div id="call" class="subtitles centered" style="color: #77b55a">Call Now! 800.699.0196</div>
				<nav>
					<a class="myButton2" href="index.html#start">Home</a>
					<a class="myButton2" id="funding" onclick="goto(1);">Business Funding</a>
					<a class="myButton2" id="merchant" onclick="goto(2);">Merchant Processing</a>
					<a class="myButton2" id="about" onclick="goto(3);">About Us</a>
					<a class="myButton" href="#contact">Contact Us</a>
				</nav>
		</div>
	</div>


	<div id="wrapper">
		<div id="data">
			<?php
			$table= "<center><table 
			style='
				border-collapse:collapse;
				width:100%;
				max-width:800px;
			'>";
			$tableH= "<tr><td colspan='2'><figure class='logo-left'><center><img src='http://www.maridiangroup.com/images/logomaridian.png' alt='Maridian Group' /></center></figure></td></tr>";
			$tableH.= "<tr><td class='header' colspan='2' style='text:center;font-weight:bold;' align='center'>New Application</td></tr>";

			if (isset($_POST["loan_alternative"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>I'm seeking a loan alternative because I need (to):</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[loan_alternative]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["business_for"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>I've been in business for: </td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[business_for]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["access_to"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>Ideally, I'd like access to:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[access_to]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["business_type"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>My business type is:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[business_type]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["anything_else"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>Anything else you'd like to share?:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[anything_else]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["total_sales"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>Our total sales over the last 12 month were:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[total_sales]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["visa_matercard_sales"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>My current monthly Visa Matercard sales are:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[visa_matercard_sales]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["hear_about_us"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>How did you hear about us?</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[hear_about_us]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["fname"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>First name:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[fname]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["lname"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>Last name:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[lname]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["phone"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>Phone:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[phone]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["email"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>Email:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[email]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["cname"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>Company name:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[cname]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["address"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>Address:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[address]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["city"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>City:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[city]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["state"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>State:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[state]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["zip"]))
			{
				$table.= "<tr>";
				$table.= "<td style='border:1px solid #888888;width:50%;'>Zip:</td>";
				$table.= "<td class='values' style='border:1px solid #888888;width:50%;'>$_POST[zip]</td>";
				$table.= "</tr>";
			}

			if (isset($_POST["news_update"]))
			{
				$table.= "<tr>";
				$table.= "<td colspan='2'>I would like to recevied news and updates.</td>";
				$table.= "</tr>";
			}

			$date = date('m/d/Y h:i:s a', time());
			$table.= "<tr><td class='time' colspan='2'>Application sent on: $date</td></tr>";

			$table.= "</table></center>";
			
			$to = "decordovaja@gmail.com";
			$subject = 'Application from Maridian website';
			$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$page="<html><head>";
			$page.="<style>
		table{
			font-family: 'Oswald', sans-serif;
			font-family: 'Roboto Condensed', sans-serif;
			width:80%;
			max-width:700px;
		}

		tr:nth-child(even){
			background: #eeeeee;	
		}

		td{
			border-style:solid;
			border-width:1px;
			border-color: rgb(200,200,200);
			padding: 10px;
		}

		#wrapper{
			margin-top:150px;
			position:relative;
		}

		#data{
			width:95%;
			max-width:700px;
			margin: 20px auto;	
		}

		.values{
			color:#888888;
			font-weight:bold;
		}

		.header{
			background:#77b55a;
			color:white;
		}

		.time{
			background:#444444;
			color:white;
			font-size:11px;
		}

		img{
			display:inline-block;
		}
</style>";
			$page.="</head><body>";
			$pageEnd="</body></html>";
			$message=$page.$tableH.$table.$pageEnd;
			
			if(@mail($to,$subject,$message,$headers))
			{
				echo '<div style="
					font-family: \'Oswald\', sans-serif;
					text-align: center;
					font-size:2em;"
					>Thank you.</div>';
				echo '<div style="
					font-family: \'Oswald\', sans-serif;
					text-align: center;
					font-size:1em;
					margin-bottom:20px;"
					>Your application has been sent.<br/>';
			}
			else
			{
				echo '<div style="
					font-family: \'Oswald\', sans-serif;
					text-align: center;
					font-size:2em;"
					>Sorry.</div>';
				echo '<div style="
					font-family: \'Oswald\', sans-serif;
					text-align: center;
					font-size:1em;
					margin-bottom:20px;"
					>There was a problem with the mail server.<br/>Please, try again later.<br/>';
			}
			echo "The information you entered was:</div>";
			echo $table;
			?>
		</div>
	</div>

	<div class="content" id="contact">
		<div class="contact-content c-align-right">
			<span class="t4">Contact Us 24/7</span><br /><span class="t4"><span class="green">800.699.0196</span></span>
			<address><p>220 71st Street #214 Miami Beach 33141</p></address>
		</div>
			<div class="contact-content c-align-left">
				<span class="t4">Want to get in touch with us?</span><br /><span class="t5">No problem, fill out the form below and we will get back to you. </span><br>
				<div class="formLayout">
					<form name="contactus"  id="contactus"  method="post" action="" enctype="multipart/form-data">
						<label>Name:*</label>
						<input type="text" id="name" name="name" required /><br />
						<label>Email:*</label>
						<input type="email" id="email" name="email" required /><br />
						<label>Subject:</label>
						<input type="text" id="subject" name="subject" /><br />
						<label>Your message:</label>
						<textarea rows="4" cols="31" id="$table" name="$table"></textarea><br />
						<label></label>
						<input type="submit" value="Submit" id="submit" name="Submit" class="submit_go" /><br />
					</form>
					<div id="feedback" class="centered">Your $table has been sent.</div> 
				</div>
			</div>
	</div>

	<div class="content" id="author">
		Designed and developed by: <a href="decordovaja@gmail.com">Jose De Cordova</a>
	</div>


	<script src="js/validate.js"></script> 
	<script src="js/navigation.js"></script> 
	<script src="js/contactandscroll.js"></script> 

	<script>
		function goto(where){
				var url = "index.html?s="+where;
				window.location.href = url;
		}
		
	</script>

</body>

</html>
	
