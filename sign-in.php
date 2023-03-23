<?php
session_start();
// Megnézi, hogy a felhasználó már be e jelentkezett, ha igen, átirányítja az üdvözlő oldalra
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit; //megszakítja a scriptet
}

// Config fájl
require_once "config.php";

// Érték nélküli változók létrehozása 
$email = $password = "";
$email_err = $password_err = $login_err = "";

// Adatfeldolgozás
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    !filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL);
    // Megnezézi, hogy üres helyes e az email formátum
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Megnezézi, hogy üres e a jelszó sor
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Adatatok ellenőrzése
    if (empty($email_err) && empty($password_err)) {
        // Adatbázisból kiválasztás
        $sql = "SELECT id, email, password, isadmin FROM users WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Változók ideiglenes mentése statementbe
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Változó beállítása
            $param_email = $email;

            // Megpróbálja lefuttatni
            if (mysqli_stmt_execute($stmt)) {
                // Az eredmény tárolása
                mysqli_stmt_store_result($stmt);

                // Megnézi, hogy létezik e az email az adatbázisban, ha igen, ellenőrzi, hogy helyes e a hozzátartozó jelszó
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Változók tárolása
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password, $isadmin);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Helyes jelszó esetén új session létrehozása
                            session_start();

                            // Változók tárolása session változóként
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["isadmin"] = $isadmin;

                            // Átirányítás üdvözlőlapra
                            header("location: welcome.php");
                        } else {
                            // Helytelen jelszó
                            $login_err = "Invalid email or password.";
                        }
                    }
                } else {
                    // Helytelen email
                    $login_err = "Invalid email or password.";
                }
            } else {
                //Egyéb esetben, általános hibaüzenet
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Statement bezárása
            mysqli_stmt_close($stmt);
        }
    }

    // Csatlakozás zárása
    mysqli_close($link);
}
?>

<?php include 'topnav.php'; ?>

<!-- Breadrumb kezdete -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-white mb-30">
                <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                <span class="breadcrumb-item active">Login</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb vége -->

<!-- Bejelentkezés kezdete -->
<div class="container-fluid">
    <div class="col-12 text-center">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php
        if (!empty($login_err)) {
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>
        <div class="col-12 d-flex justify-content-center">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group mb-2 col-auto">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                    <span class="invalid-feedback"><?php echo $email_err; ?></span>
                </div>
                <div class="form-group mb-2 col-auto">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group mb-2 col-auto">
                    <input type="submit" class="btn btn-black" value="Login">
                </div>
                <p>Don't have an account? <a href="sign-up.php" class="btn btn-black ms-2 text-decoration-none">Sign up now</a></p>
            </form>
        </div>
    </div>
</div>
<!-- Bejelentkezés vége -->

<?php include 'footer.php'; ?>