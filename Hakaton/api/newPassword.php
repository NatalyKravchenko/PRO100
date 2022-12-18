<?php
	$newPass = $_POST['newPass'];
	$id = $_POST['id'];

	$mysql = new mysqli("localhost", "u1877279_pro100", "pensULwCG8175TEU", "u1877279_pro100.website");

	$mysql->query("UPDATE `users` SET `pass` = '$newPass' WHERE `id` = ".$id);

	$mysql->close();
	Header("Location:../profile.php");
?>