<?php
require_once "../errors.php";
require_once "db_connection.php";
GLOBAL $connection;

$query="INSERT INTO tble(name) VALUE('riya')";
$queryUpdate="UPDATE tble
SET name='vishu'
WHERE id=1;";
$result =mysqli_query($connection,$queryUpdate);
if(!$result){
    die("not connected". mysqli_error($connection));
}