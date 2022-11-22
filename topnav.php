<?php
session_start();
// Check if the user is logged in, if not
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    $href1 = 'sign-in-en.php';
    $href2 = 'sign-up-en.php';
    $login = 'Login';
    $register = 'Register';
} else {
    $href1 = '#';
    $href2 = 'logout.php';
    $login = htmlspecialchars($_SESSION["email"]);
    $register = 'Log out';
}
?>
<!DOCTYPE html>
<html lang="en-SK">

<head>
    <meta charset="utf-8">
    <title>GitárShop - Online Guitar Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="HangszerShop" name="keywords">
    <meta content="Online Guitar Store" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-light py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block"></div>
            <div class="col-lg-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <div class="dropdown-center mx-1">
                        <button type="button" class="btn btn-sm btn-black dropdown-toggle" data-toggle="dropdown" aria-expanded="false">My Account</button>
                        <ul class="dropdown-menu dropdown-menu-end min-width-account">
                            <li><a class="dropdown-item text-decoration-none" href="<?php echo $href1; ?>"><?php echo $login; ?></a></li>
                            <li><a class="dropdown-item text-decoration-none" href="<?php echo $href2; ?>"><?php echo $register; ?></a></li>
                        </ul>
                    </div>
                    <div class="dropdown-center mx-1">
                        <button type="button" class="btn btn-sm btn-black dropdown-toggle" data-toggle="dropdown" aria-expanded="false">English</button>
                        <ul class="dropdown-menu dropdown-menu-end min-width-lang">
                            <li><a class="dropdown-item text-decoration-none" href="#">EN</a></li>
                            <li><a class="dropdown-item text-decoration-none" href="#">HU</a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ms-2 text-decoration-none">
                        <i class="fas fa-shopping-cart text-black"></i>
                        <span class="badge text-black border border-black rounded-circle">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="index-en.php" title="Back to main page" class="text-decoration-none">
                    <span class="h1 text-uppercase text-white bg-black px-2">gitár shop</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-start">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <a href="#" title="Search" class="text-decoration-none">
                                <span class="input-group-text bg-transparent text-black pt-3">
                                    <i class="fa fa-search mb-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-end">
                <p class="m-0 text-dark">Customer Service</p>
                <h5 class="m-0 tadaer">+421 949 131 222</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-black mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-black navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-white bg-black px-2">Gitár Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav me-4 py-0">
                            <a href="guitars-en.html" class="nav-item nav-link text-decoration-none">Shop Guitars</a>
                            <a href="bass-en.html" class="nav-item nav-link text-decoration-none">Shop Bass Guitars</a>
                            <a href="amplifiers-en.html" class="nav-item nav-link text-decoration-none">Shop Amplifiers</a>
                            <a href="misc-en.html" class="nav-item nav-link text-decoration-none">Shop Misc</a>
                        </div>
                        <div class="navbar-nav py-0">
                            <a href="guides-en.php" class="nav-item nav-link text-decoration-none">Beginner's Guides</a>
                            <a href="contact-en.php" class="nav-item nav-link text-decoration-none">Contact</a>
                        </div>
                        <div class="navbar-nav ms-auto py-0 d-none d-lg-block">
                            <a href="cart-en.php" class="btn px-0 ms-3 text-decoration-none">
                                <i class="fas fa-shopping-cart text-white"></i>
                                <span class="badge text-light border border-white rounded-circle">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->