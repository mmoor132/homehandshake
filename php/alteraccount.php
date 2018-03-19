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

// Assign Passwords
$pass = $_POST["pass"];
$cpass = $_POST["cpass"];

// Check Passwords
if ($pass == $cpass) {

	// Assinging Variables
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$username = $_POST["uname"];
	$gender = $_POST["gender"];
	$permaddress = $_POST["address"]; 
	$state = $_POST["state"];
	$city = $_POST["city"];
	$zip = $_POST["zip"];
	$phonenum = $_POST["telnum"]; 
	$email = $_POST["email"];
	$age = $_POST["age"];
	$bio = $_POST["bio"];

	// Query For Active Listing
	$stm = $conn->prepare("UPDATE users SET postsPerPage = $postsPerPage,  WHERE id = '1'");

	// Execute Query
	$stm->execute();

	// Check for Success
	if ($conn->query($stm) === TRUE) {
	    echo "New record updated successfully";
	} else {
	    echo "Error: " . $stm . "<br>" . $conn->error;
	}
}

?>