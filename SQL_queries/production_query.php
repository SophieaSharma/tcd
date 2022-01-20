<?php
GLOBAL $fileName;
if(isset($_POST['submitProduction'])){
    $dateProduction=date('Y-m-d');
    $titleProduction=$_POST['titleProduction'];
    $type_of_cakeProduction=$_POST['type_of_cake'];
    $itemProduction=$_POST['itemProduction'];
    $flavourProduction=$_POST['flavourProduction'];
    $descriptionProduction=$_POST['descriptionProduction'];

    //connection
    GLOBAL $connection;
    require_once "db_connection.php";

    $item_values="";
    $flavours_value="";
    foreach($itemProduction as $item){
        $item_values.= ($item . " ");
    }
    foreach ($flavourProduction as $flavour) {
        $flavours_value.= ($flavour." ");
    }
    if(!empty(($_FILES["file"]["name"]))){
        require_once "insertImages.php";
    }

    //query
    $query="INSERT INTO production(date,title,image,type_of_cake,items,flavours,description)
            VALUES('$dateProduction','$titleProduction','$fileName','$type_of_cakeProduction','$item_values','$flavours_value','$descriptionProduction')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("not queried " .mysqli_error($connection));
    }
    ?>
    <script>
        window.location.href="./production.php";
    </script>
<?php
}
?>