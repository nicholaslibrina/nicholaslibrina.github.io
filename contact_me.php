<?php
	
$email_address = $_POST['email'];
$message = $_POST['message'];

echo $name;
echo $email_address;
echo $message;
$to = 'nikolibrina@gmail.com'; //Just write your email
$email_subject = "Contact form submitted by:  $email_address";
$email_body = "You have received a new message. \n".
			  "Here are the details: \n\n Name: $name \n\n".
		      "Email: $email_address \n\n Message: \n $message";
$headers="From:<$email_address>\n";
$headers.="Content-Type:text/html; charset=UTF-8";
if($email_address != "") {
	mail($to,$email_subject,$email_body,$headers);
	return true;
}

?>