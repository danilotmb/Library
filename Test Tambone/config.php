<?php
$servername = "mysql.next-data.net" ;
$dbname = "www_wpschool_it";
$username = "www_13237";
$password = "uBaKfYFM";
$url_estensione = ".php";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}