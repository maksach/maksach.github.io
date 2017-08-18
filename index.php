<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	$to = 'maksach@gmail.com';
	$subject = 'Comment from ' . $name;
	$text = $comment . "\n\n" . $email;
	$headers = 'From: ' . $email . "\r\n" . 
				'CC: maksach@gmail.com';
	// . = concatenation \n = new line filezilla: uploading to web hosting service
	 //UW student server = vergil
	mail($to, $subject, $text, $headers);

	header("Location: index.html");
	die();

?>