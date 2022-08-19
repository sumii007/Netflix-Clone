<?php
ob_start(); // Turns  on output buffering
session_start();

date_default_timezone_set("Asia/Kolkata");

try {
    $connection = new PDO("mysql:dbname=netflix;host=localhost", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e) {
    exit("Connection Failed: " . $e->getMessage());
}
?> 