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

$listingnum = $_POST["listingid"];

$_SESSION["listingnum"] = $listingnum;

$stmt = $conn->prepare("SELECT listings.title, listings.price, listings.address, listings.city, listings.zip, listings.housingstyle, listings.roommates, listings.numofroom, listings.startdate, listings.enddate, listings.description, listings.availability, listings.complex, picture.pic1, picture.pic2, picture.pic3, picture.pic4, picture.pic5
	FROM listings
	INNER JOIN picture ON listings.listingid = picture.listingid
	WHERE listings.listingid = '$listingnum'");

// Execute Query
$stmt->execute();

// Assign Result
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()){
  	
	$_SESSION['title'] = $row["title"];
	$_SESSION['price'] = $row["price"];
	$_SESSION['address'] = $row["address"];
	$_SESSION['city'] = $row["city"];
	$_SESSION['zip'] = $row["zip"];
	$_SESSION['housingstyle'] = $row["housingstyle"];
	$_SESSION['roommates'] = $row["roommates"];
	$_SESSION['numofroom'] = $row["numofroom"];
	$_SESSION['startdate'] = $row["startdate"];
	$_SESSION['enddate'] = $row["enddate"];
	$_SESSION['description'] = $row["description"];
    $_SESSION['complex'] = $row["complex"];
    $_SESSION['availability'] = $row["availability"];
	$_SESSION['pic1'] = $row["pic1"];
	$_SESSION['pic2'] = $row["pic2"];
	$_SESSION['pic3'] = $row["pic3"];
	$_SESSION['pic4'] = $row["pic4"];
	$_SESSION['pic5'] = $row["pic5"];

}

 $stm = $conn->prepare("SELECT furnished, gym, laundry, pets, cooling, parking, pool,
      garage, propertymanagement, hottub, privatebathroom FROM amenities WHERE listingid = '$listingnum'");

  // Execute Query
  $stm->execute();

  // Assign Result
  $result = $stm->get_result();

  while ($row = $result->fetch_assoc()){
    $_SESSION['furnished'] = $row["furnished"];
	$_SESSION['gym'] = $row["gym"];
	$_SESSION['laundry'] = $row["laundry"];
	$_SESSION['pets'] = $row["pets"];
	$_SESSION['cooling'] = $row["cooling"];
	$_SESSION['parking'] = $row["parking"];
	$_SESSION['pool'] = $row["pool"];
	$_SESSION['garage'] = $row["garage"];
	$_SESSION['propertymanagement'] = $row["propertymanagement"];
	$_SESSION['hottub'] = $row["hottub"];
	$_SESSION['privatebathroom'] = $row["privatebathroom"];

  }

  $st = $conn->prepare("SELECT users.fname, users.lname, users.phone, users.email FROM users INNER JOIN listings ON listings.userid = users.userid WHERE listings.userid = '$listingnum'");

  // Execute Query
  $st->execute();

  // Assign Result
  $result = $st->get_result();

  while ($row = $result->fetch_assoc()){
  	$_SESSION['fname'] = $row["fname"] ;
  	$_SESSION['lname'] = $row["lname"] ;
  	$_SESSION['phone'] = $row["phone"] ;
  	$_SESSION['email'] = $row["email"] ;

  }

  header("location: listprofile.php");
  

?>