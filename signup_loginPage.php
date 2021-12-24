<?php
require_once "errors.php";
require_once "SQL_queries/signup_query.php";
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
    <title>ePortal</title>
</head>
<body>
<!--header-->
<?php require_once"header.php"; ?>
<!--header-->

<!--main section-->
<div class="container my-3">
            <div class="row mt-3">
                <div class="col"></div>
                <div class="col-md-6 border border-light">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " data-bs-toggle="tab" href="#signup">Signup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#login">Login</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="signup" class="container tab-pane fade"><br>
                            <form action="signup_loginPage.php" method="post">
                                <div class="mb-3">
                                    <label for="Name" class="form-label">Name</label>
                                    <input name="nameSignup" type="text" class="form-control" id="Name" placeholder="Name" required>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioBox" id="admin" required>
                                    <label class="form-check-label" for="admin">
                                        Admin
                                    </label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="radio" name="radioBox" id="user" required>
                                    <label class="form-check-label" for="user">
                                        User
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input name="emailSignup" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email Address" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input name="passwordSignup" type="Password" class="form-control" id="password" placeholder="********" required>
                                </div>
                                <div class="my-4">
                                    <input name="submitSignup" type="submit" class="form-control btn btn-primary" value="Submit">
                                </div>
                            </form>
                       </div>
                        <div id="login" class="container tab-pane active"><br>
                            <form action="rawmaterial.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email Id" required>
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
<!--main section-->

<!--footer-->
<?php require_once "footer.php"?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>