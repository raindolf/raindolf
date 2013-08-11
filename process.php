<?php 
$toemail = 'iraindolf@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
if(mail($toemail, 'Subject', $message, 'From: ' . $email)) {
	echo 'Your email was sent successfully.';
	echo '<a href="http://raindolf.com/"> Click here to go back to my website </a>'; 
} else {
	echo 'There was a problem sending your email.';
	
}
?>