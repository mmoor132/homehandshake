<?php
$servername = "localhost";
$username = "administrator";
$password = "";
$dbname = "homehandshake";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Gets Value from Browse Listing
$listingnum = $_POST["listingid"];

// Insert Query for Favorites
$stmt = $conn->prepare("ALTER TABLE users ADD favorite int WITH $listingid ");

// Execute Query
$stmt->execute();


?>