<?php
require_once "errors.php";
require_once "SQL_queries/db_connection.php";
GLOBAL $connection;
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
    <?php require_once "navbarFunctions/navbar_myAccount.php";?>
    <!--nav-->

    <!--data-->
    <div class="row mx-3 justify-content-evenly">

        <!--heading-->
        <h1 class="my-3" style="text-align: center; text-transform: uppercase; font-family: 'Abyssinica SIL'; font-size: 25px;">
            My Accounts
        </h1>
        <!--heading-->


        <!--Profile-->
        <div class="col-lg-8 border border-secondary bg-light mb-3 py-2">
            <img src="img/cake1.jpeg" alt="" class="mx-auto d-block my-3 img-thumbnail rounded-circle" >
            <p class=" text-left fs-4 my-2" style="text-transform: capitalize;">NAME - <?php echo $_SESSION['name']; ?></p>
            <p class=" text-left fs-4 my-2" >EMAIL - <?php echo $_SESSION['email']; ?></p>
            <p class=" text-left fs-4 my-2" style="text-transform: capitalize;">CATEGORY - <?php echo $_SESSION['category']; ?></p>

        </div>
        <!--Profile-->


        <!--form-->
        <div class="col-lg-8  border border-secondary bg-light py-2">
            <?php
            #to input the already selected values in the form
            $getId=$_SESSION['id'];

            $queryGet="SELECT * FROM user_details WHERE id='$getId';";
            $resultGet=mysqli_query($connection,$queryGet);
            $row=mysqli_fetch_assoc($resultGet);
            $alreadyName=$row['name'];
            $alreadyEmail=$row['email_id'];
            $alreadyPassword=$row['password'];
            ?>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Update Name
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">NAME</label>
                                        <input name="name" type="text" class="form-control text-secondary" id="title"  value="<?php echo $alreadyName ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <input name="updateName" type="submit" class="form-control btn btn-primary" value="Update">
                                    </div>
                                </form>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                           Update Email
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="title" class="form-label">EMAIL</label>
                                    <input name="email" type="email" class="form-control text-secondary" value="<?php echo $alreadyEmail; ?>" required>
                                </div>

                                <div class="mb-3">
                                    <input name="updateEmail" type="submit" class="form-control btn btn-primary" value="Update">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Update Password
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <form action="" method="post" >
                                <div class="mb-3">
                                    <label for="title" class="form-label">OLD PASSWORD</label>
                                    <input name="oldPassword" type="password" class="form-control text-secondary"  required>
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">NEW PASSWORD</label>
                                    <input name="newPassword" type="password" class="form-control text-secondary"   required>
                                </div>

                                <div class="mb-3">
                                    <input name="updatePassword" type="submit" class="form-control btn btn-primary" value="Update">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

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
