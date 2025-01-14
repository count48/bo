<?PHP
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$subject = $_POST['subject'];
	$mobile = $_POST['mobile'];
	$city = $_POST['city'];
	$message = $_POST['message'];
	
	$email_from = "info@blackorange.biz";
	
	$email_body = "Name: $name.\n".
					"Email: $visitor_email.\n".
					"Mobile number: $mobile.\n".
					"City: $city.\n".
					 "Message: $message. \n";
	
	$to = "info@blackorange.biz";
	
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($to, $subject, $email_body, $headers);
	
	header("Location: ././contact-us.html");
					
?>