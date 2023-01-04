<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shleby.</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">

	<meta name="title" content="Shleby.">
	<meta property="og:title" content="Shleby.">
	<meta property="twitter:title" content="Shleby.">

	<meta name="description" content="Основной сайт Shleby.ml | inst: kkk_ennrl">
	<meta property="og:description" content="Основной сайт Shleby.ml | inst: kkk_ennrl">
	<meta property="twitter:description" content="Основной сайт Shleby.ml | inst: kkk_ennrl">

	<meta property="og:url" content="https://shleby.ml">
	<meta property="twitter:url" content="https://shleby.ml">
	
	<meta property="twitter:card" content="summary_large_image">
	<meta property="og:type" content="website">

</head>
<body>

	<div class="nav">
		
		<div class="logo">Shleby<span style="color: rgb(255, 59, 48);">.</span></div>

		<div class="author">
			
			<div class="image"></div>

			<div class="name">Nikita Ennrl</div>

			<div class="description">Автор</div>

		</div>

		<div class="menu">

			<?php 

				$db = json_decode(file_get_contents("menu.json"), true);

				for ($i=0; $i < count($db); $i++) { 
				
					echo '<div onclick="document.location.href = \' ' . $db[$i]["url"] .' \'" class="item';
					if ($_SERVER["REQUEST_URI"] == $db[$i]["url"]) {
						echo ' selected';
					}
					echo '">';

					echo '<div class="icon" style="background: url(/img/' . $db[$i]["icon"] . ') no-repeat; background-size: ' . $db[$i]["size"] . '; background-position: center center;"></div>';

					echo '<div class="name">' . $db[$i]["name"] . "</div>";

					echo "</div>";

				}

			?>

		</div>

	</div>


	<div class="content">
		
		<div class="global" onclick="document.location.href = '/kkkcam'">
			
			<div class="front" style="

			background: url(img/global-01-01-23-front.png) no-repeat;
			position: absolute;
			top: 0px;
			left:0px;
			bottom: 0px;
			right: 0px;
			background-size: 100%;


			"></div>

			<div class="camera_animation" style="

			position: absolute;
			width: 26vw;
			height: 26vw;
			right: 2vw;
			border: 2px solid white;
			top: calc((40vw / 4 * 3) / 2 - 13vw)

			"></div>

			<div class="title">KKKCam - Камера видеонаблюдения на микроконтроллере esp32-s</div>

		</div>

		<div class="news">
			
			<div class="title">Новости</div>

			<?php

				$db = file_get_contents("./news.json");

				$db = json_decode($db, true);

				for ($i=0; $i < count($db["all_news"]); $i++) { 
					
					echo '<div class="item" onclick="document.location.href = \'/record/?id=' . $db["all_news"][$i] .'\'">';

					echo '<div class="author">' . $db[$db["all_news"][$i]]["author"] . '</div>';

					echo '<div class="name">' . $db[$db["all_news"][$i]]["title"] . '</div>';

					echo '<div class="date">' . $db[$db["all_news"][$i]]["date"] . '</div>';

					echo '<div class="click">Читать <img src="img/icon-right.png" width="14"></div>';

					echo '</div>';

				}

			 ?>


		</div>

		<div class="notify">
			
			<div class="title">Привет!</div>

			<div class="message">Крч, такова ситуация, но сайт еще не доработан, но не беспокойся скоро все будет ок) <br> Ну и скажем так, некоторые кнопки не работают, а про мобильную поддержку можно пока забыть...<br><br>За то какой дизайн, просто сказка)</div>

		</div>

	</div>

</body>
</html>