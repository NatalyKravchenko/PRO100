<?php
	$title = $_POST['newTitle_katalog'];
	$id_katal = $_POST['id_katal'];

	$mysql = new mysqli("localhost", "u1877279_pro100", "pensULwCG8175TEU", "u1877279_pro100.website");

	$mysql->query("UPDATE `katalogs` SET `title_katalog` = '$title' WHERE `id` = ".$id_katal);

	$mysql->close();
	Header("Location:../admin.php");
?>