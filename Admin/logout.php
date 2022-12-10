<?php 
session_start();
if (isset($_SESSION['student'])) {
	unset($_SESSION['student']);
	header("Location: login.php");
}else if(isset($_SESSION['teacher'])){
	unset($_SESSION['teacher']);
	header("Location: login.php");
}else if(isset($_SESSION['admin'])){
	unset($_SESSION['admin']);
	header("Location: login.php");
}
 ?>