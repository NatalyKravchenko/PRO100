
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Профиль</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="icon" href="images/logo.png">
</head>
<body>
	
	<header>
		<div class="block_head">
			<a class="logo" href="index-2.php">
				<img src="images/logo.png">
				<h1>Маркетинг<span>PRO</span></h1>
			</a>
			<?= $_COOKIE['FIO'] ?>
		</div>
	</header>

	<div class="content">
		<div class="contain">
			<div class="block_add">
				<?php
					$mysql = new mysqli("localhost", "u1877279_pro100", "pensULwCG8175TEU", "u1877279_pro100.website");
					$select = $mysql->query("SELECT * FROM `users` WHERE `id` =".$_COOKIE['id']);
					while($row = mysqli_fetch_assoc($select)){
						echo 
						"<form action='api/newPassword.php' method='POST' class='block_content_item'>
							<h3>Фамилия</h3>
							<p>".$row['surName']."</p>
							<h3>Имя</h3>
							<p>".$row['name']."</p>
							<h3>Отчество</h3>
							<p>".$row['othName']."</p>
							<h3>Почта</h3>
							<p>".$row['email']."</p>
							<h3>Отдел</h3>
							<p>".$row['otdel']."</p>
							<h3>Дата рождения</h3>
							<p>".$row['dataR']."</p>
							<h3>Пароль</h3>
							<p>".$row['pass']."</p>
							<input type='password' name='newPass'><br>
							<input type='hidden' name='id' value=".$row['id'].">
							<button class='link'>Изменить пароль</button>
						</form>";
					}
				?> 
			</div>
		</div>
	</div>

	<script href="./js/app.js"></script>
</body>
<footer>
	<div>
		<h2>О нас</h2>
		<p>В нашей компании обучилось боллее 30 000 человек.
			Наши преимущества:
			1. Удобный график обучения
			2. Постоянные скидки и бонусы
			3. Профессиональные преодователи
			2022г. Лучшая интернет-школа. Все права защещины. Обучение по всей России.
		</p>
	</div>
	<div>
		<h2>Контакты</h2>
		<p>Тел: +7(988) 996 51-36<br>
			Тел: +7(988) 534 09-12<br>
			Ростовская обл, г.Пролектарск, ул.Колотушкина.
		</p>
	</div>
	<div>
		<h2>Конфиденциальность</h2>
		<a href="conf.html">http://conf-market_PRO100.ru</a>
	</div>
</footer>
</html>