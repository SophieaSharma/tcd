<?php
require_once "errors.php";
require_once "shortcuts/reportsEntriesDateShortcut.php";
require_once "shortcuts/reportQueryFromSales.php";
#rawmaterial variable
GLOBAL $total_price_of_all_items;
#sales variable
GLOBAL $totalPriceSales;
GLOBAL $today,$dateReportEntry,$connection;
$today=date('Y-m-d');
$a = $totalPriceSales - $total_price_of_all_items;
$b = $totalPriceSales + $total_price_of_all_items;
$c = ($a / $b) * 100;
$c= intval($c);

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
<?php require_once "header.php"; ?>
<!--heading-->

<!--reports-->
<div class="container-fluid p-0">
    <!--nav-->
    <?php require_once "navbarFunctions/navbar_reportsEntries.php";?>
    <!--nav-->

    <!--reports-->
    <div class="row mx-3 justify-content-evenly">

        <!--heading-->
        <h1 class="my-3" style="text-align: center; text-transform: uppercase; font-family: 'Abyssinica SIL'; font-size: 25px;">
            <a href="reports.php" style="text-decoration: none; color: black;">reports</a>
        </h1>
        <!--heading-->

        <!--data-->
        <div class="col-lg-8  border border-secondary bg-light">
            <ul class="nav nav-tabs my-3">
                <li class="nav-item">
                    <button class="nav-link active" aria-current="page">REPORTS</button>
                </li>
            </ul>

            <?php
            require_once "SQL_queries/db_connection.php";
            $query="SELECT * FROM report WHERE date='$dateReportEntry'";
            $result=mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($result)){
            $date=$row['date'];
            $date=strtotime($date);
            $date=date('d-M-Y',$date);
            $value=$row['value'];
            ?>
            <div class="fs-5">
                Date : <?php echo $date; ?>
            </div>

                <div class="progress my-3" style="height: 22px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $value; ?>%;" aria-valuenow="<?php echo $value; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $value ."%"; ?></div>
                </div>


         <?php } ?>
        </div>
        <!--data-->

    </div>
    <!--reports-->

</div>
<!--reports-->


<!--footer-->
<?php require_once "footer.php"?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
