<?php
	$id = $_POST['id_katal'];

	$mysql = new mysqli("localhost", "u1877279_pro100", "pensULwCG8175TEU", "u1877279_pro100.website");

	$mysql->query("DELETE FROM `katalogs` WHERE `id` = ".$id);

	$mysql->close();
	Header("Location:../admin.php");
?>