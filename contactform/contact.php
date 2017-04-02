<!DOCTYPE html>
<html lang="en">

	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>  Contact Request Confirmation</title>
		<meta name="author" content="DSA79">
		<meta name="norobots" content="noindex,nofollow">
		<meta name="keywords" content="">
		<meta name="description" content="">		
		   
		<!-- Libs CSS -->
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		
		<!-- Google Fonts -->	
		<link href='http://fonts.googleapis.com/css?family=Lato:400,900italic,900,700italic,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
		
		<!-- Favicons -->	
		<link rel="shortcut icon" href="img/favicon.ico">

		   
	</head>

	<body>
	
		<div id="contentForm">

			<?php
			
			if(isset($_POST['email'])) {
				 
					 
				// EDIT THE 2 LINES BELOW AS REQUIRED
				 
				$email_to = "ryota.sakurai@hotmail.com";
				$email_subject = "Contact Request -  Website";
				 
				   
				$first_name = $_POST['first_name']; // required 
				$email_from = $_POST['email']; // required
				$subject = $_POST['subject']; // required
				$comments = $_POST['message']; // required
				 
				$email_message = "Form details below.\n\n";
				 
					
				function clean_string($string) {
					$bad = array("content-type","bcc:","to:","cc:","href");
					return str_replace($bad,"",$string);
				}
				 
				 
				$email_message .= "Name: ".clean_string($first_name)."\n";
				$email_message .= "Email Address: ".clean_string($email_from)."\n";
				$email_message .= "Website Contact Request "."\n";
				$email_message .= "subject: ".clean_string($subject)."\n";
				$email_message .= "Message: ".clean_string($comments)."\n";
				 
					 
				// create email headers
				 
				$headers = 'From: '.$email_from."\r\n".
				 
				'Reply-To: '.$email_from."\r\n" .
				 
				'X-Mailer: PHP/' . phpversion();
				 
				@mail($email_to, $email_subject, $email_message, $headers); 
				 
				?>
				 
				<!-- Message sent! (change the text below as you wish)-->
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<div id="form_response" style="text-align:center;">
								<img style="text-align:center;" src="img/mail_sent.png" alt="image" />
								<h1>Congratulations !</h1>
								<p>Thank you <b><?=$first_name;?></b>, we've just received your contact request and will come back to you in short terms.</p>
								</p>


								
								<a class="btn btn-primary btn-lg" href="/">Go back to the website</a>
							</div>
						</div>	
					</div>					
				</div>
				 <!--End Message Sent-->

				<?php
				 
				}

				?>

		</div>
		

		
		

			
	</body>

</html>
