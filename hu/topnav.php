<?php
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) { //megnézi fut e már session
    session_start(); // ha nem, indít egy sessiont
}

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) { // megnézi, hogy a felhasználó már be e jelentkezett, ha nem, átirányítja a bejelentkezési oldalra
    $href1 = 'sign-in.php';                                         // változók megnevezése, különböző kimenetelekkel
    $href2 = 'sign-up.php';
    $login = 'Bejeletkezés';
    $register = 'Regisztráció';
} else {
    $href1 = '#';
    $href2 = 'logout.php';
    $login = htmlspecialchars($_SESSION["email"]);
    $register = 'Kijelentkezés';
}
?>

<!DOCTYPE html>
<html lang="en-SK">

<head>
    <meta charset="utf-8">
    <title>GitárShop - Online Gitárbolt</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="HangszerShop" name="keywords">
    <meta content="Online Gitárbolt" name="description">

    <!-- //Külsőleg használt könyvtárak -->

    <!-- CSS beállítások -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web betűtípusok -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome - ikonok -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

    <!-- Animáció könyvtárak -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- JavaScript könyvtárak -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/nyelvvaltoen.js"></script>
    <!-- Külsőleg használt könyvtárak\\ -->
</head>

<body>
    <!-- Fejléc kezdet -->
    <div class="container-fluid">
        <div class="row bg-light py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block"></div>
            <div class="col-lg-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <div class="dropdown-center mx-1">
                        <button type="button" class="btn btn-sm btn-black dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Saját Fiók</button>
                        <ul class="dropdown-menu dropdown-menu-end min-width-account">
                            <li><a class="dropdown-item text-decoration-none" href="<?php echo $href1; ?>"><?php echo $login; ?></a></li>
                            <li><a class="dropdown-item text-decoration-none" href="<?php echo $href2; ?>"><?php echo $register; ?></a></li>
                        </ul>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-transparent" onclick="nyelvvaltas()"><img src="../img/eng.png"></button>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ms-2 text-decoration-none">
                        <i class="fas fa-shopping-cart text-black"></i>
                        <span class="badge text-black border border-black rounded-circle"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="index.php" title="Back to main page" class="text-decoration-none">
                    <span class="h1 text-uppercase text-white bg-black px-2">gitár shop</span>
                </a>
            </div>
            <div class="col-lg-8 col-6 text-end">
                <p class="m-0 text-dark">Ügyfélszolgálat</p>
                <h5 class="m-0 tadaer">+421 949 131 222</h5>
            </div>
        </div>
    </div>
    <!-- Fejléc vége -->


    <!-- Navbar kezdet -->
    <div class="container-fluid bg-black mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-black navbar-dark py-3 py-lg-0 px-0">
                    <a href="index.php" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-white bg-black px-2">Gitár Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav me-4 py-0">
                            <a href="guitars.php" class="nav-item nav-link text-decoration-none">Gitárok</a>
                            <a href="bass.php" class="nav-item nav-link text-decoration-none">Basszusgitárok</a>
                            <a href="amplifiers.php" class="nav-item nav-link text-decoration-none">Erősítők</a>
                            <a href="misc.php" class="nav-item nav-link text-decoration-none">Kiegészítők</a>
                        </div>
                        <div class="navbar-nav py-0">
                            <a href="guides.php" class="nav-item nav-link text-decoration-none">Útmutató kezdőknek</a>
                            <a href="contact.php" class="nav-item nav-link text-decoration-none">Kapcsolatfelvétel</a>
                        </div>
                        <div class="navbar-nav ms-auto py-0 d-none d-lg-block">
                            <a href="cart-en.php" class="btn px-0 ms-3 text-decoration-none">
                                <i class="fas fa-shopping-cart text-white"></i>
                                <span class="badge text-light border border-white rounded-circle"></span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar vége -->