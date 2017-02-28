<?php
require_once "connect_db.php";
$e_login = fix_string($_POST['e_login']);
		$e_password = fix_string($_POST['e_password']);
		//$e_password = md5($e_password);
		$query = mysqli_query($db,"SELECT * FROM users WHERE username = '$e_login'");
		$user_data = mysqli_fetch_array($query);
		if($user_data['password'] === $e_password)
		{
			session_start();
			$_SESSION['name'] = $e_login;
			setcookie('login', $user_data['username'], time() +3600);
			$login = $_COOKIE['login'];
		}
		else 
			 die("wrong password or login");
		 echo '<script>function onIndex(){
			location = "index.php";
		}
		setTimeout("onIndex()", 0);
		</script>';
		
		function fix_string($string){
		if(get_magic_quotes_gpc()) $string = stripslashes($string);
		return htmlentities($string);
	}
?>