<?php 

	if(isset($_POST['submitted']) {
		echo($name);
		echo($message);
		echo($email);
	}


		$name = $_POST['sender'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$formcontent="From: $name \n Message: $message";
		$mij = "info@yourboss.nl";
		$subject = $_POST['subject'];;
		$mailheader = "From: $email \r\n";

		//mail($mij, $subject, $formcontent, $mailheader) or die("Error!");//

echo "ahthank you!";

?>