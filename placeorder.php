<?php
include 'config.php';
$pdo = pdo_connect_mysql();
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) { //megnézi fut e már session
    session_start(); // ha nem, indít egy sessiont
}
if (!isset($_SESSION['authenticate'])) {
    echo "You are not allowed to access this page";
    header('Location: index.php');
} else {
    //echo "You came from checkout.php!";
    $_SESSION['authenticate'] = null;
    include 'topnav.php';
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        echo
        "<div class='container-fluid'>
        <div class='col-12'>
            <div class='my-5'>
                <div class='h1 text-black d-flex justify-content-center'>Your Order Has Been Placed</div><br>
                <div class='h2 text-black-50 d-flex justify-content-center'>Thank you for ordering from us, we'll contact you by email with your order details!</div>
            </div>
        </div>
    </div>
    </div>";
    } else {
        echo
        "<div class='container-fluid'>
        <div class='col-12'>
            <div class='my-5'>
                <div class='h1 text-black d-flex justify-content-center'>Your Order Has Been Placed, $login</div><br>
                <div class='h2 text-black-50 d-flex justify-content-center'>Thank you for ordering from us, we'll contact you by email with your order details!</div>
            </div>
        </div>
    </div>
    </div>";
    }
    include 'footer.php';
}
