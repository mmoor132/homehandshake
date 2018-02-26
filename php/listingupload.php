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

// Collect values from a form
if (isset($_POST['numofpeople'])) 
{ 
// Instructions if $_POST['value'] exist 
	$numofpeople = $_POST["numofpeople"];
	echo "$numofpeople";
} 

$listtitle = $_POST["listtitle"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$description = $_POST["bio"];
$price = $_POST["rent"];
$sdate = $_POST["sdate"];
$edate = $_POST["edate"];
$expiration = $_POST["expiration"];
$housingstyle = $_POST["housingstyle"];
$numofroom = $_POST["numofroom"];

if(!empty($_POST['check_list'])){

	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['check_list'] as $selected){

	echo $selected."</br>";

	}  
}

//Checks
echo "$listtitle";
echo "<br>";
echo "$city";
echo "<br>";
echo "$state";
echo "<br>";
echo "$zip";
echo "<br>";
echo "$description";
echo "<br>";
echo "$price";
echo "<br>";
echo "$sdate";
echo "<br>";
echo "$edate";
echo "<br>";
echo "$housingstyle";
echo "<br>";
echo "$expiration";
echo "<br>";
echo "$numofroom";

/* START File Upload Code
$sql = "INSERT INTO listings (title, address, city, state, zip, housingstyle, roommates, numofroom, price, startdate, enddate)
VALUES ($listtitle, )";


	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
END File Upload Code*/

?>