<?php
require_once "errors.php";
require_once "SQL_queries/sales_query.php";
$today=date('Y-m-d');
GLOBAL $connection;
GLOBAL $today,$totalPriceSales;
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
<?php require_once "headerTCD.php"; ?>
<!--heading-->

<div class="container-fluid p-0">
    <!--nav-->
    <?php require_once "navbarFunctions/navbar_sales.php";?>
    <!--nav-->

    <!--sales-->
    <div class="row mx-3 justify-content-evenly">

        <!-- heading sales-->
        <a href="sales.php" style="text-decoration: none; color:#131313">
            <h1 class="my-3" style="text-align: center; text-transform: uppercase; font-family: 'Abyssinica SIL'; font-size: 25px;">
                sales
            </h1>
        </a>
        <!-- heading sales-->


        <!--form-->
        <div class="col-lg-8 mb-5 border border-secondary bg-light ">
            <ul class="nav nav-tabs my-3">
                <li class="nav-item">
                    <button class="nav-link active" aria-current="page">SALES</button>
                </li>
            </ul>
            <form action="sales.php" method="post">

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input name="titleSales" type="text" class="form-control" id="title" placeholder="Title" required>
                </div>

                <div class="mb-3">
                    <label for="typeofcake" class="form-label">Type of Cake</label>
                    <div class="form-check">
                        <input name="type_of_cake" value="Shop Cake" class="form-check-input" type="radio" id="typeofcake" required>
                        <label class="form-check-label mt-1" for="typeofcake" >
                            Shop Cake
                        </label>
                        <br>
                        <input name="type_of_cake" value="Customer Cake" class="form-check-input" type="radio" id="typeofcake" required>
                        <label class="form-check-label mt-1" for="typeofcake">
                            Customer Order Cake
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="flavour" class="form-label">Flavour</label>
                    <div class="form-check">

                        <input class="form-check-input " type="checkbox" value="Pineapple" id="pineapple" name="flavourSales[]">
                        <label class="form-check-label my-1" for="pineapple">
                            Pineapple
                        </label>
                        <br>

                        <input class="form-check-input" type="checkbox" value="Chocolate" id="chocolate" name="flavourSales[]">
                        <label class="form-check-label my-1" for="chocolate">
                            Chocolate
                        </label> <br>

                        <input class="form-check-input" type="checkbox" value="Redvelvet" id="redvelvet" name="flavourSales[]">
                        <label class="form-check-label my-1" for="redvelvet">
                            Red Velvet
                        </label> <br>

                        <input class="form-check-input" type="checkbox" value="Butterscotch" id="butterscotch" name="flavourSales[]">
                        <label class="form-check-label my-1" for="butterscotch">
                            Butterscotch
                        </label> <br>

                        <input class="form-check-input" type="checkbox" value="Blueberry" id="blueberry" name="flavourSales[]">
                        <label class="form-check-label my-1" for="blueberry">
                            Blueberry
                        </label> <br>

                        <input class="form-check-input" type="checkbox" value="Other" id="other" name="flavourSales[]">
                        <label class="form-check-label my-1" for="other">
                            Other
                        </label> <br>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <div class="input-group mb-3">
                        <input name="imageSales" type="file" class="form-control" id="file">
                        <label class="input-group-text" for="file">Upload</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input name="priceSales" type="number" class="form-control" id="price" placeholder="Price of the cake" min="0" max="10000" required>
                </div>

                <div class="mb-3">
                    <label for="amount_by_customer" class="form-label">Amount Paid </label>
                    <input name="amountSales" type="number"  class="form-control" id="amount_by_customer" placeholder="Amount Paid by Customer" required>
                </div>

                <!--<div class="mb-3">
                    <label for="left" class="form-label">Amount Left</label>
                    <input name="amount_leftSales" type="number" class="form-control" id="left" placeholder="Amount Left by Customer" required>
                </div>-->

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="descriptionSales" class="form-control" id="description" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <input name="submitSales" type="submit" class="form-control btn btn-primary" value="Submit">
                </div>
            </form>

        </div>
        <!--form-->


    </div>
    <!--sales-->
</div>

<!--footer-->
<?php require_once "footerTCD.php" ?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
