<?php
if(isset($_POST['submitSales'])){
    $dateSales=$_POST['dateSales'];
    $titleSales=$_POST['titleSales'];
    $type_of_cakeSales=$_POST['type_of_cake'];
    $flavourSales=$_POST['flavourSales'];
    $imageSales=$_POST['imageSales'];
    $priceSales=$_POST['priceSales'];
    $amountSales=$_POST['amountSales'];
    $amount_leftSales=$_POST['amount_leftSales'];
    $descriptionSales=$_POST['descriptionSales'];
    //connection
    GLOBAL $connection;
    require_once "db_connection.php";

    //query
        $query = "INSERT INTO sales
            VALUES('$dateSales','$titleSales','$type_of_cakeSales','$flavourSales',
                   '$imageSales','$priceSales','$amountSales','$amount_leftSales','$descriptionSales')";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("query,not connected " . mysqli_error($connection));
        }

       header('Location: reports.php');
}