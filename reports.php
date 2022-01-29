<?php
require_once "errors.php";
require_once "shortcuts/reportQueryFromRawmaterial.php";
require_once "shortcuts/reportQueryFromSales.php";
#rawmaterial variable
GLOBAL $total_price_of_all_items;
#sales variable
GLOBAL $totalPriceSales;
GLOBAL $today,$connection,$profit,$loss,$f_result,$ans;
$today=date('Y-m-d');

//calculations
$report = $totalPriceSales - $total_price_of_all_items;
if($totalPriceSales==0){
    $totalPriceSales=1;
}
if($total_price_of_all_items==0){
    $total_price_of_all_items=1;
}
if($report>0){
    $profit=($report/$totalPriceSales)*100;
    $profit=intval($profit);
    $f_result=$profit;
    $ans="Profit";
}elseif($report<0){
    $loss=($report/$total_price_of_all_items)*100;
    $loss=intval(abs($loss));
    $f_result=$loss;
    $ans="Loss";
}
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

<!--reports-->
<div class="container-fluid p-0">
    <!--nav-->
    <?php require_once "navbarFunctions/navbar_reports.php";?>
    <!--nav-->

    <!--data-->
    <div class="row mx-3 justify-content-evenly">

        <!--heading-->
        <h1 class="my-3" style="text-align: center; text-transform: uppercase; font-family: 'Abyssinica SIL'; font-size: 25px;">
            reports
        </h1>
        <!--heading-->

        <!--detailed heading-->
        <div class="col-lg-8 mb-1 py-2 px-0 text-secondary fs-5">
            <p>Entries for Specific Date</p>
        </div>
        <!--detailed heading-->

        <!--date-->
        <div class="col-lg-8 border border-secondary bg-light mb-3 py-2">
            <form action="reportsEntries.php" method="post">
                <div class="mb-3">
                    <label for="date" class="form-label text-secondary fs-5">Date</label>
                    <input type="date" name="dateReportEntry" class="form-control datepicker" id="date" required>
                </div>
                <div class="mb-3">
                    <input name="submitReportEntry" type="submit" class="form-control btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
        <!--date-->

        <!--detailed heading-->
        <div class="col-lg-8 mb-1 py-2 px-0 text-secondary fs-5">
            <p>Today's Date</p>
        </div>
        <!--detailed heading-->

      <!--  --><?php
/*        require_once "SQL_queries/db_connection.php";
        $query="SELECT id FROM report ";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("no".mysqli_error($connection));
        }
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];

        }
        */?>
        <?php
        if (isset($_POST['submitReport'])){
            GLOBAL $connection;
            require_once "SQL_queries/db_connection.php";


            $query="INSERT INTO report(date,value,profit_or_loss)
                                VALUES('$today','$f_result','$ans')";


            $result = mysqli_query($connection, $query);
            if (!$result) {
                die("query,not connected " . mysqli_error($connection));
            }
            ?>
            <script>
                window.location.href="./reports.php";
            </script>
            <?php
        }
        ?>
        <!--form-->
        <div class="col-lg-8  border border-secondary bg-light mb-5">
                <ul class="nav nav-tabs my-3">
                    <li class="nav-item">
                        <button class="nav-link active" aria-current="page">REPORTS</button>
                    </li>
                </ul>
            <div class="fs-5">
                Date : <?php $today=strtotime($today);
                echo date('d-M-Y',$today); ?> <br>
                <?php
                if($profit){
                    echo  "<p class='text-uppercase my-3 text-success'>Profit : {$f_result}%</p>";
                }elseif ($loss){
                    echo  "<p class='text-uppercase my-3 text-danger'>Loss : {$f_result}%</p>";
                }
                ?>


            </div>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="mb-5">
                    <div class="progress my-3 " style="height: 22px;">
                        <?php
                        if($profit){
                           echo  "<div class='progress-bar bg-success fs-5 ' role='progressbar' style='width: {$profit}%;' aria-valuenow='{$profit}' aria-valuemin='0' aria-valuemax='100'>{$profit}% Profit</div>";
                        }elseif ($loss){
                            echo  "<div class='progress-bar bg-danger fs-5' role='progressbar' style='width: {$loss}%;' aria-valuenow='{$loss}' aria-valuemin='0' aria-valuemax='100'>{$loss}% Loss</div>";
                        }
                        ?>

                    </div>
                    <div class="mb-5">
                        <input name="submitReport" type="submit" class="form-control btn btn-primary" value="Save">
                    </div>

                </form>

            </div>
        <!--form-->
    </div>
    <!--data-->

</div>
<!--reports-->


<!--footer-->
<?php require_once "footerTCD.php" ?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
