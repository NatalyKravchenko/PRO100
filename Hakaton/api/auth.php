<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	$mysql = new mysqli("localhost", "u1877279_pro100", "pensULwCG8175TEU", "u1877279_pro100.website");
	$ff="SELECT * FROM `users` WHERE `email`='".$login."' AND `pass`='".$password."'";
	$usersSearch = $mysql->query($ff);
	$result = $usersSearch->fetch_assoc();

	if (count($result) == 0) {
		echo  "Таких нет!";
		exit();
	}

	if ($result['email'] == 'maks@gmail.com') {
		Header("Location: ../admin.php");
	}
	else
	{
		Header("Location: ../index-2.php");
	}
	$f = $result['surName'];
	$n = $result['name'];
	setcookie('id', $result['id'], time() + 3600, "/");
    setcookie('FIO', "<h3 class='FIO'>$f $n<hr></h3>", time() + 3600, "/");	
	$mysql->close();
	
?>