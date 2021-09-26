<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Restaurant Website</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="images/logo.png" class="img-fluid" alt="Restaurant Logo">
                </div>
                <div class="col-8">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">Foods</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Header Ends -->

    <!-- Search box -->

    <section class="food-search text-center">
        <div class="container">

            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>

    <!-- Search box Ends -->

    <!-- Explore Foods -->
    <section>
        <h2 class="text-center">Explore Foods</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="images/burger.jpg" alt="">
                </div>
                <div class="col">
                    <img src="images/pizza.jpg" alt="">
                </div>
                <div class="col">
                    <img src="images/momo.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Explore Foods Ends -->

    <!-- Food Menu -->
    <div class="row">
        <div class="col">
            Column
        </div>
        <div class="col">
            Column
        </div>
        <div class="col">
            Column
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>