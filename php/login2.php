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

// Assigns Sessions values back to local variables
$username = $_SESSION["username"];
$password = $_SESSION["password"];

// Perpare connection
$stmt = $conn->prepare("SELECT userid FROM users WHERE username = '$username' AND password = '$password'");

// Execute Query
$stmt->execute();

// Assign Result
$result = $stmt->get_result();

// Cylce through resut and assignning Value
while ($row = $result->fetch_assoc()){

	echo $row["userid"];
	$_SESSION["userid"] = $row["userid"];
}

// Assigns Sessions values back to local variables
$userid = $_SESSION["userid"];

// Query For Active Listing
$stm = $conn->prepare("
	SELECT listings.listingid, listings.price, listings.address, listings.city, listings.zip
	FROM listings
	INNER JOIN users 
	ON listings.userid = users.userid
	WHERE listings.userid = '$userid'");

// Execute Query
$stm->execute();

// Assign Result
$result = $stm->get_result();

// Cylce through resut and assignning Value
while ($row = $result->fetch_assoc()){
	echo "<br>";
  	echo $row["listingid"];
	echo "<br>";
	echo $row["price"];
	echo "<br>";
	echo $row["address"];
	echo "<br>";
	echo $row["city"];
	echo "<br>";
	echo $row["zip"];
	echo "<br>";
}

// Close connection
$conn->close();

?>

