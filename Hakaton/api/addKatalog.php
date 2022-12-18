<?php
		$title = $_POST['title_katalog'];
		$img_katalog = addslashes(file_get_contents($_FILES['img_katalog']['tmp_name']));
		$file_katalog = addslashes(file_get_contents($_FILES['file_katalog']['tmp_name']));

		$mysql = new mysqli("localhost", "u1877279_pro100", "pensULwCG8175TEU", "u1877279_pro100.website");
		$r="SELECT `id` FROM `users` WHERE `email`='".$_COOKIE['email']."'";
		$result=$mysql->query($r);
		$id=$result->fetch_assoc();

		$mysql->query("INSERT INTO `katalogs` (`title_katalog`, `img`, `file`) VALUES ('$title', '".$img_katalog."', '".$file_katalog."')");

		$mysql->close();
		Header('Location:../admin.php');
?>