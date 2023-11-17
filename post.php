<?php
	declare(strict_types=1);
	session_start();
	if (empty($_POST['userName'])){
		print_r( $_POST);
	} else {
		$_SESSION['user'] = $_POST['userName'];

	}
		header('Location:./index.php');

