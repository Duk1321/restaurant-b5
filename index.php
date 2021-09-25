<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wowFood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Start Header -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo-size" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="food.php">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Start Search -->
    <div class="search-food text-center">
        <div class="container">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search for food..."
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="button button-primary" type="button" id="button-addon2">Button</button>
            </div>
        </div>
    </div>
    <!-- End Search -->

    <!-- Start Explore -->
    <div class="explore-food">
        <h2 class="text-center fw-bold">Explore Foods</h2>
        <div class="container">
            <div class="box position-relative float-start ms-0 ps-2 pt-5">
                <a href="#"><img src="images/pizza.jpg" alt="Pizza" class="img-fluid img-curve"></a>

                <h3 class="position-absolute white-text float-text fw-bold">Pizza</h3>
            </div>

            <div class="box position-relative float-start ms-0 ps-2 ms-lg-4 pt-5">
                <a href="#"><img src="images/burger.jpg" alt="Burger" class="img-fluid img-curve"></a>

                <h3 class="position-absolute white-text float-text fw-bold">Burger</h3>
            </div>

            <div class="box position-relative float-start ms-0 ps-2 ms-lg-4 pt-5">
                <a href="#"><img src="images/momo.jpg" alt="Momo" class="img-fluid img-curve"></a>

                <h3 class="position-absolute white-text float-text fw-bold">Momo</h3>
            </div>

            <div class="clear-fix"></div>
        </div>
    </div>
    <!-- End Explore -->

    <!-- Start Food Menu -->
    <div class="food-menu ">
        <h2 class="text-center pt-5 fw-bold ">Food Menu</h2>

        <div class="container pt-5">
            <div class="row g-2 justify-content-evenly">
                <div class="col-md-5 bg-light img-curve ">
                    <div class="container">
                        <div class="row g-2">
                            <div class="col-3">
                                <div class="p-3"><img src="images/menu-pizza.jpg" class="img-fluid img-curve" alt="">
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="p-3">
                                    <h5 class="fw-bold">Dumplings Specials</h5>
                                    <p class="fs-5 fw-bold">$5.00</p>
                                    <p class="desc-color fs-6">Chicken Dumpling with herbs from Mountain.</p>
                                    <a href="#" class="button button-primary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 bg-light img-curve">
                    <div class="container">
                        <div class="row g-2">
                            <div class="col-3">
                                <div class="p-3"><img src="images/menu-burger.jpg" class="img-fluid img-curve" alt="">
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="p-3 ">
                                    <h5 class="fw-bold">Best Burger</h5>
                                    <p class="fs-5 fw-bold">$4.00</p>
                                    <p class="desc-color fs-6">Burger with Ham, Pineapple and lots of Cheese.</p>
                                    <a href="#" class="button button-primary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-lg-5 pt-sm-2 pb-5">
            <div class="row g-2 justify-content-evenly">
                <div class="col-md-5 bg-light img-curve">
                    <div class="container">
                        <div class="row g-2">
                            <div class="col-3">
                                <div class="p-3"><img src="images/menu-momo.jpg" class="img-fluid img-curve" alt="">
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="p-3 ">
                                    <h5 class="fw-bold">Sadeko Momo</h5>
                                    <p class="fs-5 fw-bold">$6.00</p>
                                    <p class="desc-color fs-6">Best Spicy Momo for Winter.</p>
                                    <a href="#" class="button button-primary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 bg-light img-curve">
                    <div class="container">
                        <div class="row g-2">
                            <div class="col-3">
                                <div class="p-3"><img src="images/menu-pizza.jpg" class="img-fluid img-curve" alt="">
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="p-3 ">
                                    <h5 class="fw-bold">Mixed Pizza</h5>
                                    <p class="fs-5 fw-bold">$10.00</p>
                                    <p class="desc-color fs-6">Pizza with chicken, Ham, Buff, Mushroom and Vegetables.
                                    </p>
                                    <a href="#" class="button button-primary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-center pb-5 fw-bold"><a href="#">See All Foods</a></p>

    </div>
    <!-- End Food Menu -->

    <!-- Start Social Media -->
    <div class="social-media">
        <div class="container text-center pt-3">
            <ul>
                <li>
                    <a href="#"><img src="images/facebook_icon.png" alt="#"></a>
                </li>
                <li>
                    <a href="#"><img src="images/insta_icon.png" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="images/twitter_icon.png" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Social Media -->

    <!-- Start footer -->
    <div class="footer pt-2">
        <div class="container">
            <p class="text-center">All rights reserved. Designed By <a href="#">CSE.TLU</a></p>
        </div>
    </div>
    <!-- End footer -->
</body>

</html>