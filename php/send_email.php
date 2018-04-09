<?php
if(!isset($_POST['submit'])){
	$email_to 	   = "bboydark24@hotmail.com";
	$email_subject = "Webit.space email received";
	$first_name    = $_POST['first_name'];
	$email_from    = $_POST['email'];
	$content       = $_POST['content'];

	$email_message  = "First Name: ".$first_name."\n";
	$email_message .= "Email: ".$email_from."\n";
	$email_message .= "Content: ".$content."\n";
		
	$headers = "From: <".$first_name. "> <".$email_from.">";
	mail($email_to, $email_subject, $email_message, $headers);
}
?>