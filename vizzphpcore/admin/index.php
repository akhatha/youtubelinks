<?php
session_start();
if($_SESSION['username'])
{
	header('location:category.php');
}
else
{
	header('location:login.php');
}
?>