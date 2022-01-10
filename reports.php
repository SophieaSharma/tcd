<?php
#rawmaterial variable
GLOBAL $total_price_of_all_items;
#sales variable
GLOBAL $totalPriceSales;
require_once "shortcuts/reportQueryFromRawmaterial.php";
require_once "shortcuts/reportQueryFromSales.php";

$a = $totalPriceSales - $total_price_of_all_items;
$b = $totalPriceSales + $total_price_of_all_items;
$c = ($a / $b) * 100;

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

<!--reports-->
<div class="container-fluid p-0">
    <!--nav-->
    <?php require_once "navbarFunctions/navbar_reports.php";?>
    <!--nav-->

    <!--form-->
    <div class="row mx-3 justify-content-evenly">
        <h1 class="my-3" style="text-align: center; text-transform: uppercase; font-family: 'Abyssinica SIL'; font-size: 25px;">
            reports
        </h1>
        <!--date-->
        <div class="col-lg-8 border border-secondary bg-light mb-5 py-2">
            <form action="reportsEntries.php">
                <div class="mb-3">
                    <label for="date" class="form-label text-secondary fs-5">Date</label>
                    <input type="date" class="form-control datepicker" id="date" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
        <!--date-->
        <!--form-->
        <div class="col-lg-8  border border-secondary bg-light">
                <ul class="nav nav-tabs my-3">
                    <li class="nav-item">
                        <button class="nav-link active" aria-current="page">REPORTS</button>
                        <!-- <a class="nav-link active" aria-current="page" href="#">sales</a>-->
                    </li>
                </ul>
            <div class="progress my-3">
                <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo $c ; ?>%; " aria-valuenow="<?php echo $c ; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $c."%"; ?></div>
            </div>
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-primary" value="Evaluate">
                    </div>

                </form>
            </div>
        <!--form-->
    </div>
    <!--form-->

</div>
<!--reports-->


<!--footer-->
<?php require_once "footer.php"?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
