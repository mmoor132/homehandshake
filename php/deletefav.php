<?php
$servername = "localhost";
$username = "administrator";
$password = "";
$dbname = "homehandshake";

// Gets Value from Browse Listing
$listingid = $_POST["listingid"];
$userid = $_POST["userid"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete the listings record
$sql = "DELETE FROM favorites WHERE listingid = '$listingid' AND userid = '$userid'";

if ($conn->query($sql) === TRUE) {
    echo "favorites Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

echo "<script>
		alert('Your favorite has been removed.');
		window.location.href='http://127.0.0.1/php/myaccount.php';
	  </script>";

?>