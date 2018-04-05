<?php
$servername = "localhost";
$username = "administrator";
$password = "";
$dbname = "homehandshake";

$listingid = $_POST["listingid"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete the listings record
$sql = "DELETE FROM listings WHERE listingid = '$listingid' ";

if ($conn->query($sql) === TRUE) {
    echo "Listings Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

// sql to delete the amenities record
$sq = "DELETE FROM amenities WHERE listingid = '$listingid' ";

if ($conn->query($sq) === TRUE) {
    echo "Amenities Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

// sql to delete the pictures record
$s = "DELETE FROM picture WHERE listingid = '$listingid' ";

if ($conn->query($s) === TRUE) {
    echo "pictures Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

header("location: myaccount.php");
?>