<?php
	session_start();
	session_destroy();
	header('location: /ProjectLogin/login/login.php');
?>