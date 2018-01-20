<?php
require_once 'C:/Users/deletable/vendor/autoload.php';
require_once 'C:/Users/deletable/vendor/swiftmailer/swiftmailer/lib/swift_required.php';
session_start();
if($_SESSION['isset']==false)
{
	$message = "you are not loged in!";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header("location:index.html");
}
	$smtp = $_POST['smtp'];
	$myusername = $_POST['myusername'];
	$mypassword = $_POST['mypassword'];
	echo $_POST['ssl'];
	try{
	if(($_POST['ssl']==1)){
	$transport = (new Swift_SmtpTransport($smtp, 465, 'ssl'))
	->setUsername("$myusername")
	->setPassword("$mypassword")
	;
	}
	else {
		$transport = (new Swift_SmtpTransport($smtp,  25))
		->setUsername("$myusername")
		->setPassword("$mypassword")
		;
	}
	}
	catch()
	{
	}
	// Create the Mailer using your created Transport
	$mailer = new Swift_Mailer($transport);
	// Create a message
	$message = (new Swift_Message('proba'))
	->setFrom(['probaprogramming@gmail.com' => 'Proba Proba'])
	->setTo(['probaprogramming@gmail.com', 'probaprogramming@gmail.com' => 'A name'])
	->setBody('Proba')
	;
	// Send the message
	$numSent = $mailer->send($message);
?>