<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='style.css'>
<title>�������</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/header.js"></script>
</head>
<body>
<?php require_once "blocs/header.php";?>
<div id="reg">
	<?php
		if (!isset($_COOKIE['login']))
			echo '<div id="reg1" class="boxShadow"><form action="enter.php" method="post">
	<label><p>����: <input type="text" name="e_login" class="input" placeholder="login" required /></p></label>
	<label><p>������: <input type="password" name="e_password" class="input" placeholder="password" required /></p></label>
	<div id="r_button"><p><span><input class="button" type="submit" value="�����" name="enter" /></span>
	<span><a href="reg.php" class="button">���������</a></span></p></div>
	</form>
	</div>';
	else {
		$login = $_COOKIE['login'];
		echo "<div class='boxShadow'><p align = 'center'>������� ������� �� ����: $login </p><br>
		<form action='exit.php' method='post'>
		<p align='center'><input type='submit' value='logout' class='button' name='logout' /></p></form></div>";
		/*echo '<form action="index.php" method="post">
		<input type="submit" value="logout" class="input" name="logout" /> </form>';*/
	}
	
	?>
	
	<div id="menu" class="boxShadow"><p><h3>�������</h3></p>
	<a href="blog.php" ><p class="button">����</p></a>
	<a href="blog.php" ><p class="button">�������</p></a>
	<a href="blog.php" ><p class="button">�����</p></a>
	<a href="blog.php" ><p class="button">��������</p></a>
	<a href="blog.php" ><p class="button">�����</p></a></div>
</div>
</div>

<div id="content">
<h3><p>���������� ����� ����������</p></h3>
<video width="450" height="308" class="video" controls>
  <source src="movie/movie.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<p>��������� ������� ��� ����� �� ���� � ���� ������ ������� ��������� (Background). �������� � �� �� ����� ������� ���� ��� ��������� ��� ������� ����.</p>
<p class="pic"><a href=""><img src="images/pic2.gif" alt=""></a></p>
<p>��� ������ ���� www.backgroundlabs.com. ���������� �� � Backgrounds and Photoshop Patterns. ��� ���� ������ ����������� ����.</p>
<p class="pic"><a href=""><img src="images/pic3.png" alt=""></a></p>
<p>�� ���� ��������� �� ���������� �����. ����� �������� ��� ��� ����� ������ �� ��������� ����.</p>
<p class="pic"><a href=""><img src="images/pic4.png" alt=""></a></p>
<p>��������� ���� web-backgrounds.net. ���������� � Web Backgrounds. � ����� �����, �� �� ���� ��� �����. ��� �� ����������� ����� �� ����-���� ������������.</p>
</div>
<div>
</div>
<div id="footer"><p>�� ����� ������� &copy; <?php echo date('Y')?></p></div>
</body>
</html>
