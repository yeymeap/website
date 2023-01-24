<?php
error_reporting(0);
session_start(); // session indítása

// megnézi, hogy a felhasználó már be e jelentkezett, ha nem, átirányítja a bejelentkezési oldalra
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: sign-in.php");
    exit;
}
?>

<?php include 'topnav.php' ?>
<div class="container-fluid">
    <div class="col-12">
        <p class="h2 my-5 text-center">Üdv. a profilodon <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>!</p>
    </div>
    <div class="d-flex justify-content-center">
        <a class="mb-5 mx-3 btn btn-danger text-decoration-none" href="logout.php">Kijelentkezés</a>
        <a class="mb-5 ms-3 btn btn-warning text-decoration-none" href="reset-password.php">Jelszó megváltoztatása</a>
    </div>
</div>
<?php include 'footer.php' ?>