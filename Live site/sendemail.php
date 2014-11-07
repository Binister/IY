<?php

/* --------------------------------------------------------------------------
 * Prodigystudio  : Maleo - Sendmail 
 *  
 * file           : sendmail.php
 * Desc           : Maleo Framework - Sendmail
 * Version        : 1.0
 * Date           : 07/12/2014
 * Author         : Prodigystudio - team
 * Author URI     : http://prodigystudio.net
 * Email          : Hello@prodigystudio.net
 *
 * Prodigy Studio. Copyright 2014. All Rights Reserved.
 * -------------------------------------------------------------------------- */

/************************
* Variables you can change
*************************/

$mailto   = "noreply@prodigystudio.net"; // Enter your mail addres here. 
$name     = ucwords($_POST['name']); 
$subject  = $_POST['subject']; // Enter the subject here.
$email    = $_POST['email'];
$message  = $_POST['message'];

	if(strlen($_POST['name']) < 1 ){
		echo  'email_error';
	}
	
  else if(strlen($email) < 1 ) {
		echo 'email_error';
	}

  else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", $email)) {
    echo 'email_error';
  }

	else if(strlen($message) < 1 ){
		echo 'email_error';

  } else {

	// NOW SEND THE ENQUIRY

	$email_message="\n\n" .
		"Name : " .
		ucwords($name) .
		"\n" .
		"Email : " .
		$email .
		"\n\n" .
		"Message : " .
		"\n" .
		$message .
		"\n" .
		"\n\n" ;

		$email_message = trim(stripslashes($email_message));
		mail($mailto, $subject, $email_message, "From: \"$vname\" <".$email.">\nReply-To: \"".ucwords($name)."\" <".$email.">\nX-Mailer: PHP/" . phpversion() );

}
?>