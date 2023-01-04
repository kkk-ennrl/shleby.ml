<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shleby. | KKKCam</title>
	<link rel="stylesheet" type="text/css" href="../styles/news.css">

	<meta name="title" content="Shleby. | KKKCam">
	<meta property="og:title" content="Shleby. | KKKCam">
	<meta property="twitter:title" content="Shleby. | KKKCam">

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

				$db = json_decode(file_get_contents("../menu.json"), true);

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


<?php

		$news = json_decode(file_get_contents("content.json"), true);


 ?>

	<div class="content">
		
		<div class="title"><?php echo $news["title"] ?></div>

		<div class="author-and-date"><?php echo $news["author"]?></div>

		<div class="news-message"><?php echo $news["message"] ?><br><br><br><a href="../" style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 500;">На главную<img src="../img/icon-right.png" width="14"></a></div>

	</div>

</body>
</html>