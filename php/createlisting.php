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

// SQL Insert for Listings Table
$sql = "INSERT INTO listings (userid, title, address, city, state, zip, housingstyle, description, roomates, numofroom, price, latitude, longitude, squarefoot, startdate, enddate, expiration)
VALUES ('$useid','$listtitle', '$address', '$city', '$state', '$zip', '$housingstyle', '$bio','$numofpeople', '$rooms', '$rent', '$latitude', '$longitude', '$squarefoot','$sdate', '$edate', '$expiration')";


// Check for Success
if ($conn->query($sql) === TRUE) {
    echo "New Listings record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


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

// Insert for Ammenities
$sq = "INSERT INTO amenities (furnished, gym, laundry, pets, cooling, parking, pool, garage, propertymanagement, hottub, privatebathroom)
VALUES ('$furnished', '$gym','$laundry', '$pets', '$cooling', '$parking',  '$swimming', '$garage', '$propertymanagement', '$hottub', '$privatebathroom')";

// Check for Success
if ($conn->query($sq) === TRUE) {
    echo "New Ammenities record created successfully";
} else {
    echo "Error: " . $sq . "<br>" . $conn->error;
}

echo "<br>";

// File Upload 1
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
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
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

echo "<br>";

// File Upload 2
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
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
if ($_FILES["fileToUpload2"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

echo "<br>";

// File Upload 3
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
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
if ($_FILES["fileToUpload3"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

echo "<br>";

// File Upload 4
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload4"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload4"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
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
if ($_FILES["fileToUpload4"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file)) {
      //  echo "The file ". basename( $_FILES["fileToUpload4"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

echo "<br>";

// File Upload 5
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload5"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload5"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
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
if ($_FILES["fileToUpload5"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload5"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload5"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Clost DB Connection
$conn->close();

?>
