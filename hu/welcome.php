<?php
error_reporting(0);
session_start(); // session indítása

// megnézi, hogy a felhasználó már be e jelentkezett, ha nem, átirányítja a bejelentkezési oldalra
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: sign-in.php");
    exit;
} else {
    echo "<script language='javascript'>
    setTimeout(function() {
        window.history.go(-2);
    }, 2000);</script>";
}
?>

<?php include 'topnav.php' ?>
<div class="container-fluid">
    <div class="col-12">
        <p class="h2 my-5 text-center">Üdv. <b><?php echo htmlspecialchars($_SESSION["email"]);  ?></b>. Sikeres bejelentkezés! Átirányítás pár másodperc múlva.</p>
    </div>
    <div class="d-flex justify-content-center">
        <a class="mb-5 me-3 btn btn-black text-decoration-none" href="index.php">Kattints ide ha semmi nem történik</a>
        <a class="mb-5 mx-3 btn btn-danger text-decoration-none" href="logout.php">Kijelentkezés</a>
    </div>
</div>
<?php include 'footer.php' ?>