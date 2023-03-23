<?php
include 'config.php';

//adatok manuális feltöltése az adatbázisba
//először megadjuk, hogy melyik helyekre töltünk fel, aztán megadjuk az adatokat(values) 
$sql = "INSERT INTO users(email, password) 
VALUES('dasda@gmail.com', 'asdasd')";

if ($link->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
