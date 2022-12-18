<?php
	$surName = $_POST['surName'];
	$name = $_POST['name'];
	$othName = $_POST['othName'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$otdel = $_POST['otdel'];
	$date = $_POST['date'];

	$mysql = new mysqli("localhost", "u1877279_pro100", "pensULwCG8175TEU", "u1877279_pro100.website");
	$usersSearch = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
	$result = $usersSearch->fetch_assoc();
	
	if (!empty($result)) {
		echo "Такой пользователь уже зарегистрирован!";
		exit();
	}

	$mysql->query("INSERT INTO `users` (`surName`, `name`, `othName`, `email`, `pass`, `otdel`, `dataR`) VALUES('$surName', '$name', '$othName', '$email', '$password', '$otdel', '$date')");

	$mysql->close();
	Header("Location:../sotr.php");
?>