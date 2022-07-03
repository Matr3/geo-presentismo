<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "c2300479_gpsbd";
$dbPassword = "Rolling2020";
$dbName     = "c2300479_gpsbd";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>