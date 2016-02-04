<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['address']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['persona'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$email_subject = 'New message from your website';
$option = $_POST['persona'];
$phone = $_POST['phone'];
$company = $_POST['address'];
// Create the email and send the message
$to = 'abhishekbhandari616@gmail.com, info@greeniphi.com';
$email_body = "You have received a new message from your website contact form.\n\nHere are the details:\n\nName: $name\n\nEmail: $email_address\n\nCompany: $company\n\nPhone: $phone\n\nWhat best describe you ?: $option";
$headers = "From: contact@greeniphi.com\n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
echo "SENDING";

return true;			
?>
