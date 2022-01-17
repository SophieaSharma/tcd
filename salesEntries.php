<?php
require_once "errors.php";
require_once "SQL_queries/db_connection.php";
require_once "shortcuts/salesEntriesDateShortcut.php";
GLOBAL $connection;
GLOBAL $salesEntriesDate,$totalPriceSales;
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

<!--salesEntries-->
<div class="container-fluid p-0">

    <!--nav-->
    <?php require_once "navbarFunctions/navbar_salesEntries.php"?>
    <!--nav-->

    <!-- heading sales-->
    <a href="sales.php" style="text-decoration: none; color:#131313">
    <h1 class="my-3" style="text-align: center; text-transform: uppercase; font-family: 'Abyssinica SIL'; font-size: 25px;">
        sales
    </h1>
    </a>
    <!-- heading sales-->

    <!--data-->
    <div class="row  my-3 mx-3 justify-content-evenly">

        <div class="col-lg-8 text-center pt-3 bg-light  border border-secondary border-bottom-0">
            <h3 class="display-6 fs-5 text-uppercase">Entries</h3>
        </div>
        <!--Accordion it will keep increasing with every form entry-->
        <div class="col-lg-8 py-3 bg-light  border border-secondary border-top-0 ">

                <!-- Accordion it will keep increasing with every form entry-->
                <div class="accordion accordion-flush " id="accordionFlushExample">
                    <?php
                    require_once "SQL_queries/db_connection.php";
                    $query="SELECT * FROM sales WHERE date='$salesEntriesDate'";
                    $result=mysqli_query($connection,$query);
                    if(!$result){
                        die("no".mysqli_error($connection));
                    }
                    while ($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $date=$row['date'];
                    $date=strtotime($date);
                    $date=date('d-M-Y');
                    $title=$row['title'];
                    $type_of_cake=$row['type_of_cake'];
                    $flavour=$row['flavour'];
                    $image=$row['image'];
                    $price=$row['price'];
                    $amount_paid=$row['amount_paid'];
                    $amount_left=$row['amount_left'];
                    $description=$row['description'];
                        $totalPriceSales+=$amount_paid;
                    if(empty($description)){
                        $description="-";
                    }
                    ?>

                    <div class="accordion-item  border border-secondary my-2">
                        <h2 class="accordion-header" id="flush-headingOne<?php echo $id; ?>">
                            <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $id; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                <?php echo $title; ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo $id ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne<?php echo $id; ?>" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-6">
                                        <ul>
                                            <li class="fs-6 my-2 ">DATE</li>
                                            <li class="fs-6 my-2 ">TYPE OF CAKE</li>
                                            <li class="fs-6 my-2 ">FLAVOUR</li>
                                            <li class="fs-6 my-2 ">TOTAL PRICE</li>
                                            <li class="fs-6 my-2 ">AMOUNT PAID</li>
                                            <li class="fs-6 my-2 ">AMOUNT LEFT</li>
                                            <li class="fs-6 my-2 ">DESCRIPTION</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul>
                                            <?php  echo "<li class='fs-6 my-2'>{$date}</li>" ?>
                                            <?php  echo "<li class='fs-6 my-2'>{$type_of_cake}</li>" ?>
                                            <?php  echo "<li class='fs-6 my-2'>{$flavour}</li>" ?>
                                            <?php  echo "<li class='fs-6 my-2'>{$price}</li>" ?>
                                            <?php  echo "<li class='fs-6 my-2'>{$amount_paid}</li>" ?>
                                            <?php  echo "<li class='fs-6 my-2'>{$amount_left}</li>" ?>
                                            <?php  echo "<li class='fs-6 my-2'>{$description}</li>" ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>
                </div>

            <!--for count the total entries-->
            <?php
            $count=mysqli_num_rows($result);
            ?>
            <!--for count the total entries-->

            <!--total sales-->
            <div class="col-lg-8 display-6 fs-6 p-3 text-uppercase bg-light ">
                Total Sale = <?php echo $count;?>
                <p>Total price = <?php echo $totalPriceSales;
                    if($totalPriceSales!=0){
                        echo "<span style='text-transform: none;'> Rs</span>";
                    }else{
                        echo 0;
                    }
                    ?>
                </p>
            </div>
            <!--total sales-->

        </div>
        <!--Accordion-->


    </div>
    <!--data-->

</div>
<!--salesEntries-->

<!--footer-->
<?php require_once "footerTCD.php" ?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
