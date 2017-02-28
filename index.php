<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='style.css'>
<title>Головна</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/header.js"></script>
</head>
<body>
<?php require_once "blocs/header.php";?>
<div id="reg">
	<?php
		if (!isset($_COOKIE['login']))
			echo '<div id="reg1" class="boxShadow"><form action="enter.php" method="post">
	<label><p>Логін: <input type="text" name="e_login" class="input" placeholder="login" required /></p></label>
	<label><p>Пароль: <input type="password" name="e_password" class="input" placeholder="password" required /></p></label>
	<div id="r_button"><p><span><input class="button" type="submit" value="Увійти" name="enter" /></span>
	<span><a href="reg.php" class="button">Реєстрація</a></span></p></div>
	</form>
	</div>';
	else {
		$login = $_COOKIE['login'];
		echo "<div class='boxShadow'><p align = 'center'>Ласкаво просимо на сайт: $login </p><br>
		<form action='exit.php' method='post'>
		<p align='center'><input type='submit' value='logout' class='button' name='logout' /></p></form></div>";
		/*echo '<form action="index.php" method="post">
		<input type="submit" value="logout" class="input" name="logout" /> </form>';*/
	}
	
	?>
	
	<div id="menu" class="boxShadow"><p><h3>Категорії</h3></p>
	<a href="blog.php" ><p class="button">Блог</p></a>
	<a href="blog.php" ><p class="button">Графіка</p></a>
	<a href="blog.php" ><p class="button">Життя</p></a>
	<a href="blog.php" ><p class="button">Заробіток</p></a>
	<a href="blog.php" ><p class="button">Освіта</p></a></div>
</div>
</div>

<div id="content">
<h3><p>Безкоштовні фонові зображення</p></h3>
<video width="450" height="308" class="video" controls>
  <source src="movie/movie.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<p>Нещодавно знайшов два сайти на яких є дуже багато фонових зображень (Background). Потрапив я на ці сайти шукаючи фони для зображень щоб зробити відео.</p>
<p class="pic"><a href=""><img src="images/pic2.gif" alt=""></a></p>
<p>Ось перший сайт www.backgroundlabs.com. Називається він – Backgrounds and Photoshop Patterns. Тут дуже багато різноманітних фонів.</p>
<p class="pic"><a href=""><img src="images/pic3.png" alt=""></a></p>
<p>Всі вони розподілені по кольорових гамах. Також потрібний вам фон можна знайти за допомогою тегів.</p>
<p class="pic"><a href=""><img src="images/pic4.png" alt=""></a></p>
<p>Наступний сайт web-backgrounds.net. Називається – Web Backgrounds. З назви видно, що це фони для сайтів. Але їх використати можна за будь-яким призначенням.</p>
</div>
<div>
</div>
<div id="footer"><p>Всі права захищені &copy; <?php echo date('Y')?></p></div>
</body>
</html>
