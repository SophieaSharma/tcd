
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
<div class="container-fluid">
    <div class="row border-bottom text-center justify-content-evenly">
        <div class="col-lg-8 pt-4 pb-3">
            <h5 class="fs-3">INCOME AND SALES PORTAL</h5>
        </div>
    </div>
</div>
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
                        <a class="nav-link" href="production.php">Production</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " aria-current="page" href="sales.php">Sales</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="reports.php">Reports</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item mx-2">
                            <a class="nav-link " aria-current="page" href="myAccount.php">My Account</a>
                        </li>
                    </ul>
                </form>
            </div>
            <a href="signup_loginPage.php" class="btn btn-primary fs-5 px-3"> Log Out</a>
        </div>
    </nav>
    <!--nav-->
    <!--sales-->
    <div class="row  my-5 mx-3 justify-content-evenly">

        <div class="col-lg-8 text-center pt-3 bg-light  border border-secondary border-top-0 border-bottom-0">
            <h3 class="display-6 fs-5 text-uppercase">Entries</h3>
        </div>
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
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
            </div>
        </div>
        <!--Accordion-->
    </div>
    <!--sales-->
</div>
<!--footer-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 fixed-bottom p-3 text-center bg-light">
            TCD Cake and Bake Copyright
        </div>
    </div>
</div>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
