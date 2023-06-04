<?php
session_start();
// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "innocanto";

$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
