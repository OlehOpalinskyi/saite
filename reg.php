<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='style.css'>
<title>Реєстрація</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/header.js"></script>
<script src="js/login.js"></script>
</head>
<body>
<? require_once "blocs/header.php";?>
<!--<script src="js/validate_form.js"></script>-->
<div id="body">
<div id="content1">
	<table border = '0' cellpadding = "2" cellspacing = "5">
	<form method = "post" action = "adduser.php" onSubmit = "return validate(this)">
	<tr><td>Ім'я</td><td><input type = "text" name="forename" maxlength = "32" class="input" required/></td></td></tr>
	<tr><td>Фамілія</td><td><input type = "text" name = "surname" maxlength = "32" class="input" required/></td></td></tr>
	<tr><td>Ім'я Користувача</td><td><input type = "text" name = "username" maxlength = "32" class="input" required/></td><td id="error" class="error"></td></tr>
	<tr><td>Пароль</td><td><input type = "password" name = "password" maxlength = "12" class="input" required/><td id="er1" class="error"></td></tr>
	<tr><td>Вік</td><td><input type = "text" name = "age" maxlength = "3" class="input" required/></td><td id="er2" class="error"></td></tr>
	<tr><td>Електронний аррес</td><td><input type = "text" name = "email" maxlength = "32" class="input" required/><td id="er3" class="error"></td></tr>
	<tr><td colspan = "2" id="butReg"><span><input type = "submit" value = "Зареєструватися" name="submit" class="button"/></span></td></tr>
	</form>
	</table>
</div>
</div>
</body>
</html>
