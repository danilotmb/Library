<?php
$servername = "mysql.next-data.net"; 
$dbname = "www_wpschool_it";
$username = "www_13237";
$password = "uBaKfYFM";

// Creare connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllare la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
} 

?>
