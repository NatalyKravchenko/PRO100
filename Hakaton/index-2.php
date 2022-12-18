<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MarketinPro PRO100.website</title>
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
			<a class="link" href="profile.php">Профиль</a>
			<?= $_COOKIE['FIO'] ?>
		</div>
	</header>

	<div class="content">
		<div class="contain">
			<div class="block_content">
				<?php
					$mysql = new mysqli("localhost", "u1877279_pro100", "pensULwCG8175TEU", "u1877279_pro100.website");
					$select = $mysql->query("SELECT * FROM `katalogs` ");
					while($row = mysqli_fetch_assoc($select)){
						echo 
						"<div class='block_content_item'>
							<img class='img_mat md:w-[20rem] w-[10rem] float-left ' src='data:image/png;base64,".base64_encode($row['file'])."'>
							<h2>".$row['title_katalog']."</h2>
							<a href='archivs/file.zip'>
								<button  class='link'>Скачать</button>
							</a>
						</div>";
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