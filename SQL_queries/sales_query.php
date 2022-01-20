<?php
GLOBAL  $fileName;
if(isset($_POST['submitSales'])){
    //connection
    GLOBAL $connection;
    require_once "db_connection.php";

    $dateSales=date('Y-m-d');
    $titleSales=$_POST['titleSales'];
    $type_of_cakeSales=$_POST['type_of_cake'];
    $flavourSales=$_POST['flavourSales'];
    $priceSales=$_POST['priceSales'];
    $amountSales=$_POST['amountSales'];
    $amount_leftSales=($priceSales-$amountSales);
    $descriptionSales=$_POST['descriptionSales'];
    $values="";

    //query
    foreach ($flavourSales as $i) {
        $values.= ($i." ");
    }

    if(!empty(($_FILES["file"]["name"]))){
        require_once "insert.php";
    }

            $query ="INSERT INTO sales(date,title,type_of_cake,flavour,image,price,amount_paid,amount_left,description)
                     VALUES('$dateSales','$titleSales','$type_of_cakeSales','$values',
                     '$fileName','$priceSales','$amountSales','$amount_leftSales','$descriptionSales')";


            $result = mysqli_query($connection, $query);
            if (!$result) {
                die("query,not connected " . mysqli_error($connection));
            }


?>
    <script>
    window.location.href="./sales.php";
    </script>
<?php
}
?>