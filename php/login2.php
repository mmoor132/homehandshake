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
$stmt = $conn->prepare("SELECT userid, phone, email FROM users WHERE username = '$username' AND password = '$password'");

// Execute Query
$stmt->execute();

// Assign Result
$result = $stmt->get_result();

// Cylce through resut and assignning Value
while ($row = $result->fetch_assoc()){

	$_SESSION["userid"] = $row["userid"];
	$_SESSION['phone'] = $row["phone"];
	$_SESSION['email'] = $row["email"];
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

// Cylce through resut and assignning Values for listing
while ($row = $result->fetch_assoc()){
  	
	$_SESSION['listingid'] = $row["listingid"];
	$_SESSION['price'] = $row["price"];
	$_SESSION['address'] = $row["address"];
	$_SESSION['city'] = $row["city"];
	$_SESSION['zip'] = $row["zip"];

}

// Query For Active Listing
$st = $conn->prepare("
SELECT pic1
FROM picture
INNER JOIN listings
	ON listings.listingid=picture.listingid
INNER JOIN users
	ON listings.listingid=users.userid
WHERE users.userid= '$userid'");


// Execute Query
$st->execute();

// Assign Result
$result = $st->get_result();

// Cylce through resut and assignning Values for picture
while ($row = $result->fetch_assoc()){
  	
	$_SESSION['pic1'] = $row["pic1"];

}

// Close
$conn->close();

header("location: myaccount.php");

?>

