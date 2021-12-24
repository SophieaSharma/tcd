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

<!--main content-->
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
                        <a class="nav-link active" href="#">Raw Material</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="production.php">Production</a>
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
    <!--sales-->
    <div class="row mx-3 justify-content-evenly">
        <h1 class="my-3" style="text-align: center; text-transform: uppercase; font-family: cursive; font-size: 25px;">
            raw material
        </h1>
        <!--date-->
        <div class="col-lg-8 border border-secondary bg-light mb-5 py-2">
            <form action="rawmaterialEntries.php">
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
        <div class="col-lg-8 border border-secondary mb-5 py-2">
            <ul class="nav nav-tabs my-3">
                <li class="nav-item">
                    <button class="nav-link active" aria-current="page">RAW MATERIAL</button>
                    <!-- <a class="nav-link active" aria-current="page" href="#">sales</a>-->
                </li>
            </ul>
            <form action=""method="post">
                <div class="mb-3">
                    <label for="items" class="form-label">ITEMS</label>
                    <select class="form-select" aria-label="Default select example" id="items" multiple>
                        <option value="1">Sugar</option>
                        <option value="2">Flour</option>
                        <option value="3">Butter</option>
                        <option value="4">Baking Soda</option>
                        <option value="5">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" class=" btn btn-primary form-control" value="Submit">
                </div>
            </form>
        </div>
        <div class="col-lg-8 border border-secondary mb-5 py-2">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">S.NO.</th>
                        <th scope="col">ITEMS</th>
                        <th scope="col">AMOUNT</th>
                        <th scope="col">PRICE/KG</th>
                        <th scope="col">PRICE</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--main content-->

</div>
<!--footer-->
<?php require_once "footer.php"?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
