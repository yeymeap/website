<?php
session_start(); // Session indítás
// Megnézi, hogy a felhasználó már be e jelentkezett, ha igen, átirányítja az üdvözlő oldalra
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit; //megszakítja a scriptet
}
// Config fájl
require_once "config.php";

// Érték nélküli változók létrehozása 
$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err = "";

// Adatfeldolgozás 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Jelszó kritériumok ellenőrzése
    if (empty(trim($_POST["password"]))) {
        $password_err = "Kérlek írj be egy jelszót.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Jelszónak legalább 6 karaktert kell tartalmaznia.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Jelszómegerősítés ellenőrzése
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Kérlek erősítsd meg a jelszót.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Jelszavak nem egyeznek.";
        }
    }

    // Email ellenőrzése
    if (empty(trim($_POST["email"]))) {
        $email_err = "Kérlek írj be egy emailt.";
    } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = 'Kérlek írj be egy valós emailt.';
    } else {
        // Adatbázisból kiválasztás
        $sql = "SELECT id FROM users WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Változók ideiglenes mentése statementbe
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Változó beállítása
            $param_email = trim($_POST["email"]);

            // Megpróbálja lefuttatni
            if (mysqli_stmt_execute($stmt)) {
                // Eredmény tárolása 
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "This email is already taken.";
                } else {
                    $email = trim($_POST["email"]);
                }
            } else {
                echo "Hoppá! Valami félresikerült. Kérlek próbáld újra később.";
            }

            // Statement zárása
            mysqli_stmt_close($stmt);
        }
    }

    // Bemeneti hibák ellenőrzése
    if (empty($password_err) && empty($confirm_password_err) && empty($email_err)) {

        // Adatbázisba beszúrás
        $sql = "INSERT INTO users (email, password) VALUES (?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Változók ideiglenes mentése statementbe
            mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);

            // Változók beállítása
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Jelszó hashelése

            // Megpróbálja lefuttatni
            if (mysqli_stmt_execute($stmt)) {
                // Ha sikeres, átirányit a bejelentkezési oldalra
                header("location: sign-in.php");
            } else {
                //Egyéb esetben, általános hibaüzenet
                echo "Hoppá! Valami félresikerült. Kérlek próbáld újra később.";
            }

            // Statement zárása
            mysqli_stmt_close($stmt);
        }
    }

    // Csatlakozás zárása
    mysqli_close($link);
}
?>

<?php include 'topnav.php'; ?>

<!-- Breadcrumb kezdete -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-white mb-30">
                <a class="breadcrumb-item text-dark" href="index.php">Főoldal</a>
                <span class="breadcrumb-item active">Regisztráció</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb vége -->

<!-- Regisztráció kezdete -->
<div class="container">
    <div class="col-12 text-center">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <div class="col-12 d-flex justify-content-center">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group mb-2 col-auto">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                    <span class="invalid-feedback"><?php echo $email_err; ?></span>
                </div>
                <div class="form-group mb-2 col-auto">
                    <label>Jelszó</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group mb-2 col-auto">
                    <label>Jelszó megerősítése</label>
                    <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                    <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group mb-2 col-auto">
                    <input type="submit" class="btn btn-black" value="Register">
                    <input type="reset" class="btn btn-white ms-2" value="Reset">
                </div>
                <p>Van már fiókod?<a class="btn btn-black ms-2 text-decoration-none" href="sign-in.php">Jelentkezz be itt</a></p>
            </form>
        </div>
    </div>
</div>
<!-- Regisztráció vége -->

<?php include 'footer.php'; ?>