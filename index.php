<?php
	declare(strict_types=1);
	session_start();
if (empty($_SESSION['user'])){
	$user=false;
} else {
	$user = true;
}
	include './form.html';

