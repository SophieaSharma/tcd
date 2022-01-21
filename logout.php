<?php session_start(); ?>
<?php
require_once "SQL_queries/db_connection.php";

$_SESSION['id']=NULL;
$_SESSION['category']=NULL;
$_SESSION['email']=NULL;

$_SESSION=[];
session_unset();
session_destroy();
header("location:login.php");
?>