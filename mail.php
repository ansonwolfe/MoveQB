<?php
// Check for empty fields
if(empty($_GET['name'])  		||
   empty($_GET['email']) 		||
   empty($_GET['address']) 		||
   empty($_GET['phone']) 		||
   empty($_GET['persona'])	||
   !filter_var($_GET['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_GET['name'];
$email_address = $_GET['email'];
$email_subject = 'New message from your website';
$option = $_GET['persona'];
$phone = $_GET['phone'];
$company = $_GET['address'];
// Create the email and send the message
$to = 'abhishekbhandari616@gmail.com, info@greeniphi.com';
$email_body = "You have received a new message from your website contact form.\n\nHere are the details:\n\nName: $name\n\nEmail: $email_address\n\nCompany: $company\n\nPhone: $phone\n\nWhat best describe you ?: $option";
$headers = "From: contact@greeniphi.com\n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
echo "SENDING";

return true;			
?>
