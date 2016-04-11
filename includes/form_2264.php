<?php	
	if(empty($_POST['input_1886']))
	{
		return false;
	}
	
	$input_1886 = $_POST['input_1886'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from TB.";
	$email_body = "You have received a new message. \n\n".
				  "Input_1886: $input_1886 \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>