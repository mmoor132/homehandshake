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

// Assinging Variables
$listtitle = $_POST["listtitle"] ;
$housingstyle = $_POST["housingstyle"];
$city = $_POST["city"];
$state = $_POST["state"];
$address = $_POST["address"];
$zip = $_POST["zip"];
$rent = $_POST["rent"]; 
$numofpeople = $_POST["numofpeople"];
$sdate = $_POST["sdate"];
$edate = $_POST["edate"];
$expiration = $_POST["expiration"]; 
$bio = $_POST["bio"];

// Query For Active Listing
$stm = $conn->prepare("UPDATE listings SET postsPerPage = $postsPerPage,  WHERE id = '1'");
// Execute Query
$stm->execute();

// Check for Success
if ($conn->query($stm) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $stm . "<br>" . $conn->error;
}

echo "<br>";

$furnished = NULL;
$gym = NULL;
$laundry = NULL;
$pets = NULL;
$cooling = NULL;
$parking = NULL;
$swimming = NULL;
$garage = NULL;
$propertymanagement = NULL;
$hottub = NULL;
$privatebathroom = NULL;

// Assigning Ammenities Variables
if(!empty($_POST['check_list'])) {
  foreach($_POST['check_list'] as $check) {
    switch ($check) {
      case "Furnished":
        $furnished = $check;
        break;

      case "Gym":
        $gym = $check;
        break;

      case "Laundry":
       $laundry = $check;
        break;

      case "Pets":
        $pets = $check;
        break;

      case "Cooling":
        $cooling = $check;
        break;

      case "Parking":
        $parking = $check;
        break;

      case "Swimming":
        $swimming = $check;
        break;

      case "Garage":
        $garage = $check;
        break;

      case "Property Management":
        $propertymanagement = $check;
        break;

      case "Hot Tub":
        $hottub = $check;
        break;

      case "Private Bathroom":
        $privatebathroom = $check;
        break;

      default: 
        break;     
    }
  }
}

// Query For Active Listing
$st = $conn->prepare("UPDATE amenities SET postsPerPage = $postsPerPage,  WHERE id = '1'");
// Execute Query
$st->execute();

// Check for Success
if ($conn->query($st) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $st . "<br>" . $conn->error;
}

echo "<br>";

// Query For Active Listing
$sql = $conn->prepare("UPDATE pictures SET postsPerPage = $postsPerPage,  WHERE id = '1'");
// Execute Query
$sql->execute();

// Check for Success
if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<br>";

?>