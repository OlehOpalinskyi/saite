<?php 
	require_once "connect_db.php";
	if(isset($_POST['submit'])){
	if(isset($_POST['forename']))
		$forename = fix_string($_POST['forename']);
	if(isset($_POST['surname']))
		$surname = fix_string($_POST['surname']);
	if(isset($_POST['username']))
		$username = fix_string($_POST['username']);
	if(isset($_POST['password']))
		$password = fix_string($_POST['password']);
	if(isset($_POST['age']))
		$age = fix_string($_POST['age']);
	if(isset($_POST['email']))
		$email = fix_string($_POST['email']);
	//$password = md5($password);
		$query = mysqli_query($db,"INSERT INTO users (name,secondname,username,password,age,email) 
		VALUES ('$forename','$surname','$username','$password','$age','$email')") or die(mysql_error());
		echo '<script>
		alert("Registration was sacsessfull");
		function onIndex(){
			location = "index.php";
		}
		setTimeout("onIndex()", 1000);
		</script>';
}
function fix_string($string){
		if(get_magic_quotes_gpc()) $string = stripslashes($string);
		return htmlentities($string);
	}
?>