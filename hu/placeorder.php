<?php
include 'config.php';
$pdo = pdo_connect_mysql();
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) { //megnézi fut e már session
    session_start(); // ha nem, indít egy sessiont
}
if (!isset($_SESSION['authenticate'])) {
    echo "Az oldal elérése nem engedélyezett";
    header('Location: index.php');
} else {
    //echo "A checkout.php oldalról jöttél!";
    $_SESSION['authenticate'] = null;
    include 'topnav.php';
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        echo "<div class='container-fluid'>
    <div class='col-12'>
        <div class='my-5'>
            <div class='h1 text-black d-flex justify-content-center'>A rendelésed leadtad</div><br>
            <div class='h2 text-black-50 d-flex justify-content-center'>Köszönjük, hogy tőlünk rendeltél, a rendelésed további részleteit email-ben küldjük!</div>
        </div>
    </div>
</div>
</div>";
    } else {
        echo "<div class='container-fluid'>
    <div class='col-12'>
        <div class='my-5'>
            <div class='h1 text-black d-flex justify-content-center'>A rendelésed leadtad, $login</div><br>
            <div class='h2 text-black-50 d-flex justify-content-center'>Köszönjük, hogy tőlünk rendeltél, a rendelésed további részleteit email-ben küldjük!</div>
        </div>
    </div>
</div>
</div>";
    }
    include 'footer.php';
}
