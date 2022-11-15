
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="users";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";





// ----- ez nem kell--------

// sql to create table
/*$sql = "CREATE TABLE adatok(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
felhasznalonev VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
jelszo VARCHAR(30) NOT NULL,
orszag VARCHAR(30)
)";*/

/*if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}*/
/*
mysqli_close($conn);*/

?> 
