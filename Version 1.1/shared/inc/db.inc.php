<?php

$dbname = "myPCP";
$user = "root";
$password = "root";
$dbhost = "10.66.13.71";

try {
  $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ));
}
catch(PDOException $e) {
  die("Connection to database failed");
}

?>