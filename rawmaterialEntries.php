<?php
require_once "errors.php";
require_once "SQL_queries/db_connection.php";
require_once "shortcuts/rawmaterialEntriesDateShortcut.php";
GLOBAL $connection;
GLOBAL $raw_materialEntriesDate;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <title>ePortal</title>
</head>
<body>

<!--heading-->
<?php
require_once "headerTCD.php";
?>
<!--heading-->

<div class="container-fluid p-0">
    <!--nav-->
    <?php require_once "navbarFunctions/navbar_rawmaterialEntries.php"?>
    <!--nav-->

    <!--heading-->
    <a href="rawmaterial.php" style="text-decoration: none; color: #131313;">
        <h1 class="my-3" style="text-align: center; text-transform: uppercase; font-family: 'Abyssinica SIL'; font-size: 25px;">
            raw material
        </h1>
    </a>
    <!--heading-->

    <!--raw material-->
    <div class="row  my-5 mx-3 justify-content-evenly">

        <div class="col-lg-8 text-center py-3 bg-light  border border-secondary ">
            <h3 class="display-6 fs-5 text-uppercase">Entries</h3>
        </div>

        <div class="col-lg-8 border border-secondary  my-4 p-0">
            <div class="col-12 table-responsive">
                <table class="table table-striped table-bordered table-hover">

                    <thead>
                    <tr>
                        <th scope="col">S.NO.</th>
                        <th scope="col">ITEMS</th>
                        <th scope="col">AMOUNT</th>
                        <th scope="col">PRICE/KG</th>
                        <th scope="col">TOTAL PRICE</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    require_once "SQL_queries/db_connection.php";
                   $query="SELECT * FROM rawmaterial WHERE date ='$raw_materialEntriesDate';";
                   $result=mysqli_query($connection,$query);
                   $i=1;
                   while ($row = mysqli_fetch_assoc($result)){
                       $items=$row['items'];
                       $amount=$row['amount'];
                       $price_per_kg=$row['price_per_kg'];
                       $totalPrice=$row['totalPrice'];


                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $items; ?></td>
                        <td><?php echo $amount; ?></td>
                        <td><?php echo $price_per_kg; ?></td>
                        <td><?php echo $totalPrice; ?></td>
                    </tr>
                       <?php
                        }
                       ?>
                    </tbody>


                </table>
            </div>
        </div>

    </div>
    <!--raw material-->
</div>
<!--footer-->
<?php require_once "footerTCD.php" ?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
