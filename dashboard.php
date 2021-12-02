
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="signup_loginPage.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <title>ePortal</title>
</head>
<body>
<!--header-->
<!--<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center py-4 bg-light h1">
            TCD CAKE AND BAKE
        </div>
    </div>
</div>-->
<!--header-->
<!--main section-->
<div class="container-fluid">
    <!--heading-->
    <div class="row border-bottom">
        <div class="col-3 text-center pt-4 pb-3 border-end">
            <!--<h1 >TCD</h1>-->
        </div>
        <div class="col-9 text-center pt-4 pb-3">
          <h5 class="fs-3">INCOME AND SALES PORTAL</h5>
        </div>
    </div>
    <!--heading-->
    <!--raw material-->
    <div class="row ">
        <div class="col-12 border border-light ">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <button class="nav-link active" aria-current="page">Raw Material</button>
                </li>
            </ul>
            <table class="table table-border">
                <tr>
                    <th>name</th>
                    <th>class</th>
                    <th>rno.</th>
                    <th>number</th>
                </tr>
            </table>
        </div>
    </div>
    <!--raw material-->
    <!--sales-->
    <div class="row bg-light my-5 mx-3 justify-content-evenly">
        <!--form-->
        <div class="col-lg-8 border border-light m">
            <ul class="nav nav-tabs my-3">
                <li class="nav-item">
                    <button class="nav-link active" aria-current="page">SALES</button>
                   <!-- <a class="nav-link active" aria-current="page" href="#">sales</a>-->
                </li>
            </ul>
            <form action="" method="post">

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" required>
                </div>

                <div class="mb-3">
                    <label for="typeofcake" class="form-label">Type of Cake</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="typeofcake" required>
                        <label class="form-check-label" for="typeofcake">
                            Shop Cake
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="typeofcake" required>
                        <label class="form-check-label" for="typeofcake">
                            Customer Order Cake
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="flavour" class="form-label">Flavour</label>
                    <select class="form-select" multiple aria-label="multiple select example" id="flavour">
                        <option value="1">Pineapple</option>
                        <option value="2">Chocolate</option>
                        <option value="3">Butterscotch</option>
                        <option value="4">Redvelvet</option>
                        <option value="5">Blueberry</option>
                        <option value="6">Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="file">
                        <label class="input-group-text" for="file">Upload</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" id="price" placeholder="Price of the cake" min="0" max="10000" required>
                </div>

                <div class="mb-3">
                    <label for="amountbycustomer" class="form-label">Amount Paid </label>
                    <input type="number" name="amount" class="form-control" id="amountbycustomer" placeholder="Amount Paid by Customer" required>
                </div>

                <div class="mb-3">
                    <label for="left" class="form-label">Amount Left</label>
                    <input type="email" class="form-control" id="left" placeholder="Amount Left by Customer">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary" value="Submit">
                </div>

            </form>
        </div>
        <!--form-->
      <div class="col-lg-8 text-center mt-3">
          <h3 class="display-6 fs-5 text-uppercase">Entries</h3>
      </div>
        <!--Accordion it will keep increasing with every form entry-->
        <div class="col-lg-8 border border-light mb-3">
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
        <div class="col-lg-8 display-6 fs-6 my-2 px-3 text-uppercase">
            Total Entries =
        </div>
      </div>

    <!--sales-->
</div>
<!--main section-->
<!--footer-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 bottom p-3 text-center bg-light">
            TCD Cake and Bake Copyright
        </div>
    </div>
</div>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
