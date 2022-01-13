<?php
GLOBAL $db_email,$db_password;
if(isset($_POST['submitLogin'])){
    $emailLogin=$_POST['emailLogin'];
    $passwordLogin=$_POST['passwordLogin'];

    require_once "SQL_queries/db_connection.php";
    GLOBAL $connection;
    $emailLogin=mysqli_real_escape_string($connection,$emailLogin);
    $passwordLogin=mysqli_real_escape_string($connection,$passwordLogin);

    $query_login="SELECT * FROM user_details WHERE email_id= '$emailLogin'";
    $result_login=mysqli_query($connection,$query_login);
    while($row = mysqli_fetch_assoc($result_login)){
        $db_email=$row['email_id'];
        $db_password=$row['password'];
    }
    echo $db_email;

    header("Location:rawmaterial.php");

}

