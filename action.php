<?php
include 'config.php';

//adatok manuális feltöltése az adatbázisba
//először megadjuk, hogy melyik helyekre töltünk fel, aztán megadjuk az adatokat(values) 
$sql= "INSERT INTO userdata(id,username,password,email) 
VALUES(NULL,'Bence','asd','bence3728@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>