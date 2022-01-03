<?php
require_once "errors.php";
GLOBAL $connection;
require_once "SQL_queries/production_query.php";
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

<!--production-->
<div class="container-fluid p-0">
    <!--nav-->
    <?php  require_once "navbarFunctions/navbar_production.php"; ?>
    <!--nav-->

    <!--form-->
    <div class="row mx-3 justify-content-evenly">
        <h1 class="my-3" style="text-align: center; text-transform: uppercase; font-family: 'Abyssinica SIL'; font-size: 25px;">
            production
        </h1>
        <!--date-->
        <div class="col-lg-8 border border-secondary bg-light mb-5 py-2">
            <form action="productionEntries.php">
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
        <div class="col-lg-8 mb-5 border border-secondary bg-light ">
            <ul class="nav nav-tabs my-3">
                <li class="nav-item">
                    <button class="nav-link active" aria-current="page">PRODUCTION</button>
                </li>
            </ul>
            <form action="production.php" method="post">

                <!--<div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input name="dateProduction" type="date" class="form-control" id="date" required>
                </div>-->

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input name="titleProduction" type="text" class="form-control" id="title" placeholder="Title" required>
                </div>

                <div class="mb-3">
                    <label for="typeofcake" class="form-label">Type of Cake</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type_of_cake" value="shop_cake" id="typeofcake" required>
                        <label class="form-check-label mt-1" for="typeofcake">
                            Shop Cake
                        </label> <br>
                        <input class="form-check-input" type="radio" name="type_of_cake" value="customer_cake" id="typeofcake" required>
                        <label class="form-check-label mt-1" for="typeofcake">
                            Customer Order Cake
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="items" class="form-label">Items</label>
                    <select name="item" class="form-select" multiple aria-label="multiple select example" id="items">
                        <option value="1">Flour</option>
                        <option value="2">Sugar</option>
                        <option value="3">Butter(fat)</option>
                        <option value="4">Salt</option>
                        <option value="5">Milk</option>
                        <option value="6">Baking Soda</option>
                        <option value="7">Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="flavour" class="form-label">Flavour</label>
                    <select name="flavour" class="form-select" multiple aria-label="multiple select example" id="flavour">
                        <option value="1">Pineapple</option>
                        <option value="2">Chocolate</option>
                        <option value="3">Butterscotch</option>
                        <option value="4">Redvelvet</option>
                        <option value="5">Blueberry</option>
                        <option value="6">Other</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="descriptionProduction" class="form-control" id="description" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <input name="submitProduction" type="submit" class="form-control btn btn-primary" value="Submit">
                </div>
            </form>
            <?php
            require_once "SQL_queries/db_connection.php";
            $query="SELECT * FROM production";
            $result=mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($result)){
                $date=$row['date'];
                $date=strtotime($date);
                $date=date('d-M-Y',$date);
                $title=$row['title'];
                $type_of_cake=$row['type_of_cake'];
                $items=$row['items'];
                $flavours=$row['flavours'];
                $description=$row['description'];
                if(empty($description)){
                    $description="-";
                }
            ?>
            <!--Accordion it will keep increasing with every form entry-->
                <div class="accordion my-2 accordion-flush border border-secondary" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <?php echo $title;?>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-6">
                                        <ul>
                                            <li class="fs-6 my-2 ">DATE</li>
                                            <li class="fs-6 my-2 ">TYPE OF CAKE</li>
                                            <li class="fs-6 my-2 ">ITEMS</li>
                                            <li class="fs-6 my-2 ">FLAVOURS</li>
                                            <li class="fs-6 my-2 ">DESCRIPTION</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul>
                                            <?php  echo "<li class='fs-6 my-2'>{$date}</li>" ?>
                                            <?php  echo "<li class='fs-6 my-2'>{$type_of_cake}</li>" ?>
                                            <?php  echo "<li class='fs-6 my-2'>{$items}</li>" ?>
                                            <?php  echo "<li class='fs-6 my-2'>{$flavours}</li>" ?>
                                            <?php  echo "<li class='fs-6 my-2'>{$description}</li>" ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--Accordion-->
            <?php } ?>
            <!--to count the total num of entries-->
            <?php
            $count=mysqli_num_rows($result);
            ?>
            <!--to count the total num of entries-->

            <!--total sales-->
            <div class="col-lg-8 py-3 display-6 fs-6 px-1 text-uppercase bg-light ">
                Total Production = <?php echo $count; ?>
            </div>
            <!--total sales-->
        </div>
        </div>
    <!--form-->
</div>
<!--production-->

<!--footer-->
<?php require_once "footer.php"?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
