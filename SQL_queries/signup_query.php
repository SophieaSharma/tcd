<?php
if(isset($_POST['submitSignup'])){
    $nameSignup=$_POST['nameSignup'];
    $dateSignup=date('Y-m-d');
    $user_or_admin=$_POST['radioBox'];
    $emailSignup=$_POST['emailSignup'];
    $passwordSignup=$_POST['passwordSignup'];

    //connection
    GLOBAL $connection;
    require_once "db_connection.php";

    //query
    $query="INSERT INTO user_details(name,date,user_or_admin,email_id,password) 
                VALUES('$nameSignup','$dateSignup','$user_or_admin','$emailSignup','$passwordSignup')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("off ".mysqli_error($connection));
    }
    header('location: rawmaterial.php');
}