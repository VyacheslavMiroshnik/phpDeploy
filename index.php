<?php
	declare(strict_types=1);
	session_start();
	include_once './vendor/autoload.php';
if (empty($_SESSION['user'])){
	$user=false;
} else {
	$user = true;
}
	include_once './form.html';

