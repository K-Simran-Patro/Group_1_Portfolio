<?php
$servername = "localhost";
$username = "root";
$password = ""; // Add your MySQL root password here
$dbname = "portfolio_db";

// Create a database connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($con->connect_error) {
    die("Connection to database failed: " . $con->connect_error);
}
?>
