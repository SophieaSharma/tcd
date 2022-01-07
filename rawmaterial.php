<?php
require_once "errors.php";
require_once "SQL_queries/rawmaterial_query.php";
$today=date('Y-m-d');
GLOBAL $connection;
GLOBAL $today;
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
require_once "header.php";
?>
<!--heading-->

<!--main content-->
<div class="container-fluid p-0">
    <!--nav-->
    <?php require_once "navbarFunctions/navbar_rawmaterial.php";?>
    <!--nav-->

    <!--raw material-->
    <div class="row mx-3 justify-content-evenly">

        <!--heading-->
        <h1 class="my-3" style="text-align: center; text-transform: uppercase; font-family: 'Abyssinica SIL'; font-size: 25px;">
            raw material
        </h1>
        <!--heading-->

        <!--detailed heading-->
        <div class="col-lg-8 mb-1 py-2 px-0 text-secondary fs-5">
            <p>Entries for Specific Date</p>
        </div>
        <!--detailed heading-->

        <!--date-->
        <div class="col-lg-8 border border-secondary bg-light mb-5 py-2">
            <form action="rawmaterialEntries.php">
                <div class="mb-3">
                    <label for="date" class="form-label text-secondary fs-5">Date</label>
                    <input type="date" name="rawmaterialEntriesDate" class="form-control" id="date" required>
                </div>
                <div class="mb-3">
                    <input type="submit" name="rawmaterialEntriesSubmit" class="form-control btn btn-primary" value="Submit">
                </div>
            </form>
        </div>

        <!--date-->

        <!--detailed heading-->
        <div class="col-lg-8 mb-1 py-2 px-0 text-secondary fs-5">
            <p>Today's Entries</p>
        </div>
        <!--detailed heading-->


        <div class="col-lg-8 border border-secondary mb-5 py-2">
            <ul class="nav nav-tabs my-3">
                <li class="nav-item">
                    <button class="nav-link active" aria-current="page">RAW MATERIAL</button>
                </li>
            </ul>
            <form action="rawmaterial.php" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                        <label for="amount" class="form-label m-0 p-1">Items</label>
                        <select class="form-select" aria-label="Default select example" name="select_items" required>
                            <option selected>Select Items</option>
                            <option value="Sugar">Sugar</option>
                            <option value="Flour">Flour</option>
                            <option value="butter">butter</option>
                            <option value="Baking_Soda">Baking Soda</option>
                            <option value="Other">Other</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="amount" class="form-label m-0 p-1">Amount (Kg)</label>
                            <input type="number" class="form-control" id="amount" name="select_amount" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="price_per_kg" class="form-label m-0 p-1">Price/Kg</label>
                            <input type="number" class="form-control" id="price_per_kg" name="select_price_per_kg" required>
                        </div>
                    </div>

                </div>

                    <div class="mb-3">
                        <input name="add_values" type="submit" class="form-control btn btn-primary" value="Add Values">
                    </div>







            </form>
        </div>
        <div class="col-lg-8 border border-secondary mb-5 py-2">
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
                    GLOBAL $connection;
                    $query="SELECT * FROM rawmaterial where date = '$today'";
                    $result=mysqli_query($connection,$query);

                    while($row=mysqli_fetch_assoc($result)){
                        $i=1;
                    $id=$row['id'];
                    $items=$row['items'];
                    $amount=$row['amount'];
                    $price_per_kg=$row['price_per_kg'];
                    $totalPrice=$row['totalPrice'];

                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $items; ?></td>
                        <td><?php echo $amount; ?></td>
                        <td><?php echo $price_per_kg; ?></td>
                        <td><?php echo $totalPrice; ?></td>
                    </tr>
                    </tbody>

                    <?php
                    $i++;

                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!--raw material-->

</div>
<!--main content-->

<!--footer-->
<?php require_once "footer.php"?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
