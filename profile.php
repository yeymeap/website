<?php
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
        <p class="h2 my-5 text-center">Welcome to your profile <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>!</p>
    </div>
    <div class="d-flex justify-content-center">
        <a class="mb-5 mx-3 btn btn-danger text-decoration-none" href="logout.php">Log Out</a>
        <a class="mb-5 ms-3 btn btn-warning text-decoration-none" href="reset-password.php">Change Your Password</a>
    </div>
</div>
<?php include 'footer.php' ?>