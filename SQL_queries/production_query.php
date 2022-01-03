<?php
if(isset($_POST['submitProduction'])){
    $dateProduction=date('y-m-d');
    $titleProduction=$_POST['titleProduction'];
    $type_of_cakeProduction=$_POST['type_of_cake'];
    $item=$_POST['item'];
    $flavour=$_POST['flavour'];
    $descriptionProduction=$_POST['descriptionProduction'];

    //connection
    GLOBAL $connection;
    require_once "db_connection.php";

    //query
    $query="INSERT INTO production
            VALUES('$dateProduction','$titleProduction','$type_of_cakeProduction','$item','$flavour','$descriptionProduction')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("not queried " .mysqli_error($connection));
    }
    header('location: sales.php');
  }