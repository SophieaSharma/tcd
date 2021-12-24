<?php
require_once "errors.php";
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
    <link rel="stylesheet" href="style.css" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <title>ePortal</title>
</head>
<body>

<!--heading-->
<?php
require_once "header.php";
?>
<!--heading-->

<div class="container-fluid p-0">
    <!--nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fs-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="rawmaterial.php">Raw Material</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="#">Production</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " aria-current="page" href="sales.php">Sales</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="reports.php">Reports</a>
                    </li>
                </ul>

            </div>
            <a href="signup_loginPage.php" class="btn btn-primary fs-5 px-3 mx-1"> Log Out</a>
        </div>
    </nav>
    <!--nav-->
    <!--production-->
    <div class="row mx-3 justify-content-evenly">
        <h1 class="my-3" style="text-align: center; text-transform: uppercase; font-family: cursive; font-size: 25px;">
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
        <div class="col-lg-8  border border-secondary bg-light border-bottom-0">
            <ul class="nav nav-tabs my-3">
                <li class="nav-item">
                    <button class="nav-link active" aria-current="page">PRODUCTION</button>
                </li>
            </ul>
            <form action="production.php" method="post">

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input name="dateProduction" type="date" class="form-control" id="date" required>
                </div>

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
        </div>
        <!--form-->
        <!--Accordion it will keep increasing with every form entry-->
        <div class="col-lg-8 py-3 bg-light  border border-secondary border-top-0 border-bottom-0">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Title in the form
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consequatur dolore iste magni nulla quas quasi quidem, sit voluptatem! Blanditiis culpa explicabo facere fuga nihil odit placeat, vel vitae!</div>
                    </div>
                </div>
            </div>
        </div>
        <!--Accordion-->
        <div class="col-lg-8 display-6 fs-6 p-3 text-uppercase bg-light  border border-secondary border-top-0 ">
            Total Production =
        </div>
    </div>
    <!--sales-->
</div>
<!--footer-->
<?php require_once "footer.php"?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
