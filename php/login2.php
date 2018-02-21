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

$username = $_SESSION["username"];
$password = $_SESSION["password"];

$stmt = $conn->prepare("SELECT userid FROM users WHERE username = '$username' AND password = '$password'");

$stmt->execute();

$result = $stmt->get_result();

while ($row = $result->fetch_assoc()){

	echo $row["userid"];
	$_SESSION["userid"] = $row["userid"];
}

$userid = $_SESSION["userid"];

$stm = $conn->prepare("
	SELECT listings.listingid, listings.price, listings.address, listings.city, listings.zip
	FROM listings
	INNER JOIN users 
	ON listings.userid = users.userid
	WHERE listings.userid = '$userid'");

$stm->execute();

$result = $stm->get_result();

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






?>

