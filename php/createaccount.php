<?php
$servername = "localhost";
$username = "administrator";
$password = "";
$dbname = "homehandshake";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query For Active Listing
$stm = $conn->prepare(" ");

// Execute Query
$stm->execute();

// Assign Result
$result = $stm->get_result();

?>