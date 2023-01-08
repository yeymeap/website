<?php
// Session indítása
session_start();

// Session változók visszaállítása
$_SESSION = array();

// Session megsemmisítése
session_destroy();

// Átirányítás a bejelentkezési oldalra
header("location: sign-in.php");
exit;
