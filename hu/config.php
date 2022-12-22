<?php
// Adatbázis bejelentkezési adatok
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'main');

// Csatlakozás MySQL-re
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Csatlakozás ellenőrzése
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
