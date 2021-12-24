<?php
if(isset($_POST['submitSignup'])){
    $nameSignup=$_POST['nameSignup'];
    $emailSignup=$_POST['emailSignup'];
    $passwordSignup=$_POST['passwordSignup'];

    //connection
    GLOBAL $connection;
    require_once "db_connection.php";

    //query
    $query="INSERT INTO signup(name,email_id,password) 
                VALUES('$nameSignup','$emailSignup','$passwordSignup')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("off ".mysqli_error($connection));
    }
    header('location: rawmaterial.php');
}