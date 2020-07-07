<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
fdsfdsfdsfsdfdsfdsfdsfdsfds
</body>
</html>

<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['mail'];
	$subject = "Portfolio";
	$message = $_POST['msg'];
	$number = $_POST['number'];

	$mailTo = "saintenzo08@gmail.com";
	$headers = "From: ".$email;
	$txt = "You have received an e-mail from ".$name.".\n\n ".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: b4.php?mailsent");

}
?>
