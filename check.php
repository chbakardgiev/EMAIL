<?php
$db = new PDO('mysql:host=localhost;dbname=phpEmail;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$myusername = filter_input(INPUT_POST,'myusername'); 
$mypassword = filter_input(INPUT_POST,'mypassword');
echo $mypassword;
$stmt = $db->prepare('SELECT password FROM members where username=:myusername');
$stmt->bindValue(':myusername', $myusername, PDO::PARAM_STR);
$stmt->execute();
session_start();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	if(password_verify($mypassword,$row['password'])){
		$_SESSION['isset']=true;
		header("location:main.php");
	}
	else {
		$_SESSION['isset']=false;
		$message = "wrong password or username!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		break;
	}
}