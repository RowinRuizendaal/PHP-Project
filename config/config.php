<?php

session_start();

/* Database verbinden */

$db_host = '';
$db_user = '';
$db_pass = '';
$db_dbnm = '';


try {
    $conn = new PDO("mysql:host=$db_host; dbname=$db_dbnm", $db_user, $db_pass);
    // Set PDO error mode to exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: ". $e -> getMessage();
}

?>