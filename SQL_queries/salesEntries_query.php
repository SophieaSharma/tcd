<?php
GLOBAL $connection;
require_once "db_connection.php";
$query="SELECT * FROM sales";
$result=mysqli_query($connection,$query);