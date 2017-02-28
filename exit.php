<?
unset($_SESSION['name']);
		setcookie('login', '', time() -25900);
		echo '<script>function onIndex(){
			location = "index.php";
		}
		setTimeout("onIndex()", 0);
		</script>';
?>