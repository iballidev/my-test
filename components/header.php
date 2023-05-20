<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAC | Home</title>
    <!-- Font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS @5.2.3 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../assets/stylesheets/bootstrap-5.2.3/bootstrap.min.css">
    <!-- Animate.CSS 4.1.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- OwlCarousel 2.3.4 -->
    <link rel="stylesheet" href="../assets/lib/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/lib/owlcarousel/css/owl.theme.default.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/stylesheets/main.css">
</head>

<body>
    <!-- HEADER -->
    <div class="top-bar fs-50 base-text-color-100 bg-secondary-500 py-3">
        <div class="container d-flex flex-wrap justify-content-between">
            <div class="d-flex flex-wrap">
                <span class="me-5">9, Tinubu Street, off Coker road, illupeju Lagos.</span>
                <!-- <span class="mx-3"></span> -->
                <span>clientservices@hacmedical.org</span>
            </div>
            <span><a href="../views/auth.html" class="base-text-color-100 text-decoration-none">login</a> | <a href="../views/signup.html" class="base-text-color-100 text-decoration-none">Sign Up</a></span>
        </div>
    </div>
    <header class="toolbar sticky-top">
        <nav class="navbar bg-white navbar-expand-lg py-0">
            <!-- <div class="container py-1 py-xl-3"> -->
            <div class="container">
                <a href="./" class="navbar-brand">
                    <img src="../assets/images/brand-logo.svg" alt="Mainland Clinics" class="img-fluid">
                </a>
                <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i data-feather="menu"></i>
                    <i data-feather="x"></i>
                </button>
                <nav class="collapse navbar-collapse" id="navbarColor02">
                    <ul role="list" class="navbar-nav ms-auto" aria-label="primary">
                        <li class="nav-item">
                            <a class="nav-link active" href="../views/about-us.php">About us
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown" id="myDropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item py-2 text-center" href="../views/clinical-services.php">Clinical Services</a>
                                <a class="dropdown-item py-2 text-center" href="../views/fitness-wellness-test.php">Fitness/Wellness Test</a>
                                <a class="dropdown-item py-2 text-center" href="../views/telemedicine.php">Telemedicine</a>
                                <a class="dropdown-item py-2 text-center" href="../views/pre-employment-test.php">Pre-employment Test</a>
                                <a class="dropdown-item py-2 text-center" href="../views/food-handlers-test.php">Food Handlers Test</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/contact-us.php">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                    </ul>
                </nav>
                <div class="d-xl-flex d-none align-items-center">
                    <button class="button cta">Book an appointment</button>
                    <span class="spacer"></span>
                    <a href="#" class="shopping-cart-wrap">
                        <img src="../assets/images/icons/shopping-cart.svg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </nav>
    </header>


    <!-- MAIN -->
    <main>