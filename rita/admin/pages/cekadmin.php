<?php
session_start();
if (!isset($_SESSION['ini_admin']) || !$_SESSION['ini_admin']) {
	header("Location: /purivet/login.php");
}
?>