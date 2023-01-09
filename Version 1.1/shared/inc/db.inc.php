<?php

$dbname = "myPCP";
$user = "root";
$password = "root";
$dbhost = "CHBSLJME05TST";
// $dbhost = "127.0.0.1";

try {
  $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ));
}
catch(PDOException $e) {
  die("Connection to database failed");
}

?>