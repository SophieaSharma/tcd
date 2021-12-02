<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="homepage_2.css" type="text/css">
    <title>ePortal</title>
</head>
<body>
<!--header-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center py-4 bg-light h1">
            TCD CAKE AND BAKE
        </div>
    </div>
</div>
<!--header-->
<!--main section-->
        <div class="container my-3">
            <div class="row mt-3">
                <div class="col"></div>
                <div class="col-md-6 border border-light">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home">Signup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu1">Login</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="Name" placeholder="Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="Password" class="form-control" id="password" placeholder="********" required>
                                </div>
                                <div class="my-4">
                                    <input type="submit" class="form-control btn btn-primary" value="Submit">
                                </div>

                            </form>
                        </div>
                        <div id="menu1" class="container tab-pane fade"><br>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="Password" class="form-control" id="password" placeholder="********" required>
                                </div>
                                <div class="my-4">
                                    <input type="submit" class="form-control btn btn-primary" value="Submit">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <!-- <div class="col-md-8 py-2">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/cake1.jpeg" class="d-block w-100 cake-img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/cake2.jpeg" class="d-block w-100 cake-img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/cake3.jpg" class="d-block w-100 cake-img" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-4 py-2">-->
        <!--<iframe src="login_signupPage.php" class="iframe-cls border"></iframe>-->

<!--main section-->

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