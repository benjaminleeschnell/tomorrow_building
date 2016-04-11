<?php	
	if(empty($_POST['input_2630']))
	{
		return false;
	}
	
	$input_2630 = $_POST['input_2630'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from TB.";
	$email_body = "You have received a new message. \n\n".
				  "Input_2630: $input_2630 \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_2630";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>