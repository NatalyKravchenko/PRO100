<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Добавление каталога</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="icon" href="images/logo.png">
</head>
<body>

	<form action="api/addSotr.php" method="POST" class="block_add">
		<a class="logo" href="admin.php">
			<img src="images/logo.png">
			<h1>Маркетинг<span>PRO</span></h1>
		</a>
		<h3>Фамилия</h3>
		<input type="text" name="surName">
		<h3>Имя</h3>
		<input type="text" name="name">
		<h3>Отчество</h3>
		<input type="text" name="othName">
		<h3>Почта</h3>
		<input type="email" name="email">
		<h3>Пароль</h3>
		<input type="password" name="pass">
		<h3>Отдел</h3>
		<select name="otdel"><?php 
			$mysql = new mysqli("localhost", "u1877279_pro100", "pensULwCG8175TEU", "u1877279_pro100.website");
			$select = $mysql->query("SELECT * FROM `otdels`");
			while($row = mysqli_fetch_assoc($select)){
				echo "<option value='".$row['id']."'>".$row['title']."</option>";
			}
		?>
		</select>
		<h3>Дата рождения</h3>
		<input type="date" name="date">
		<h3>Разрешить доступ к материалам</h3>
		<input type="checkbox" name="level">
		<button class="link">Добавить сотрудника</button>
	</form>

</body>
</html>