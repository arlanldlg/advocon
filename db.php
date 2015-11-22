<?php
error_reporting(0);
$host = "localhost";
$user = "root";
$passw = "";
$database = "advocon";

$conn = new mysqli($host, $user, $passw, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>