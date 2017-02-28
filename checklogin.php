<?php
	require_once "connect_db.php";
	$query = mysqli_query($db,"SELECT * FROM users");
	$data = mysqli_fetch_array($query);
	do {
		$login[] = $data['username'];
	}
	while ($data = mysqli_fetch_array($query));
	$n = count($login);
	$log = $_POST['checklogin'];
	
		for ($i=0; $i<$n; $i++) {
			if ($log == $login[$i]) {
				echo "Такий логін уже існує";
				break;
			}
		}
	
?>