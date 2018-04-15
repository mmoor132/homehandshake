<?php
$servername = "localhost";
$username = "administrator";
$password = "";
$dbname = "homehandshake";

session_start();

$listingid = $_SESSION["listingid"];

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
$complex = $_POST["complex"];
$availability = $_POST["availability"];
$expiration = $_POST["expiration"]; 
$bio = $_POST["bio"];

// Update Query For Listing
$stm = "UPDATE listings SET title = '$listtitle', address = '$address', city = '$city', state = '$state', zip = '$zip', housingstyle = '$housingstyle', complex = '$complex' , description = '$bio', roommates = '$numofpeople', price = '$rent', availability = '$availability', startdate = '$sdate', enddate = 'edate', expiration = '$expiration' WHERE listingid = '$listingid'";

// Check for Success
if ($conn->query($stm) === TRUE) {
    echo "New listing record updated successfully";
} else {
    echo "Error: " . $stm . "<br>" . $conn->error;
}

echo "<br>";

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

// Update Query For Amenities
$st = "UPDATE amenities SET furnished = '$furnished', gym = '$gym', laundry = '$laundry', pets = '$pets', cooling = '$cooling', parking = '$parking', pool = '$pool', garage = '$garage', propertymanagement = '$propertymanagement', hottub = '$hottub', privatebathroom = '$privatebathroom'  WHERE listingid = '$listingid'";

// Check for Success
if ($conn->query($st) === TRUE) {
    echo "New amenities record updated successfully";
  } else {
    echo "Error: " . $st . "<br>" . $conn->error;
}

echo "<br>";

// Picture 1 Check
if(basename($_FILES["fileToUpload"]["name"]) != NULL){
  // File Upload 1
  $target_dir = "img/";
  $target_file1 = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
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
  if (file_exists($target_file1)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 900000000) {
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
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file1)) {
          //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }

  // Update Picture 1
  $path = "img\\\\"; 
  $target_file1 = $path . basename($_FILES["fileToUpload"] ["name"]);

  // Update Query For Amenities
  $s = $conn->prepare("UPDATE picture SET pic1 = '$target_file1' WHERE listingid = '$listingid'");

  // Execute Query
  $s->execute();
}

// Picture 2 Check
if(basename($_FILES["fileToUpload2"]["name"]) != NULL){
  // File Upload 2
  $target_dir = "img/";
  $target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
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
  if (file_exists($target_file2)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload2"]["size"] > 900000000) {
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
      if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
          //echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }

  // Update Picture 2
  $path = "img\\\\";
  $target_file2 = $path . basename($_FILES["fileToUpload2"]["name"]);

  // Update Query For Amenities
  $s = $conn->prepare("UPDATE picture SET pic2 = '$target_file2'WHERE listingid = '$listingid'");

  // Execute Query
  $s->execute();
}

// Picture 3 Check
if(basename($_FILES["fileToUpload3"]["name"]) != NULL){
  // File Upload 3
  $target_dir = "img/";
  $target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
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
  if (file_exists($target_file3)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload3"]["size"] > 900000000) {
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
      if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
          //echo "The file ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }

  // Update Picture 3
  $path = "img\\\\";
  $target_file3 = $path . basename($_FILES["fileToUpload3"]["name"]);

  // Update Query For Amenities
  $s = $conn->prepare("UPDATE picture SET pic3 = '$target_file3' WHERE listingid = '$listingid'");

  // Execute Query
  $s->execute();
}

// Picture 4 Check
if(basename($_FILES["fileToUpload4"]["name"]) != NULL){
  // File Upload 4
  $target_dir = "img/";
  $target_file4 = $target_dir . basename($_FILES["fileToUpload4"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
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
  if (file_exists($target_file4)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload4"]["size"] > 900000000) {
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
      if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file4)) {
        //  echo "The file ". basename( $_FILES["fileToUpload4"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }

  // Update Picture 4
  $path = "img\\\\";
  $target_file4 = $path . basename($_FILES["fileToUpload4"]["name"]);

  // Update Query For Amenities
  $s = $conn->prepare("UPDATE picture SET pic4 = '$target_file4' WHERE listingid = '$listingid'");

  // Execute Query
  $s->execute();

}

// Picture 5 Check
if(basename($_FILES["fileToUpload5"]["name"])!= NULL){
  // File Upload 5
  $target_dir = "img/";
  $target_file5 = $target_dir . basename($_FILES["fileToUpload5"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file5,PATHINFO_EXTENSION));
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
  if (file_exists($target_file5)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload5"]["size"] > 900000000) {
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
      if (move_uploaded_file($_FILES["fileToUpload5"]["tmp_name"], $target_file5)) {
          //echo "The file ". basename( $_FILES["fileToUpload5"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }

  // Update Picture 5
  $path = "img\\\\";
  $target_file5 = $path . basename($_FILES["fileToUpload5"]["name"]);

  // Update Query For Amenities
  $s = $conn->prepare("UPDATE picture SET pic5 = '$target_file5' WHERE listingid = '$listingid'");

  // Execute Query
  $s->execute();
}

/* Update Query For Amenities
$s = $conn->prepare("UPDATE picture SET pic1 = '$target_file1', pic2 = '$target_file2', pic3 = '$target_file3', pic4 = '$target_file4', pic5 = '$target_file5' WHERE listingid = '$listingid'");

// Execute Query
$s->execute();*/

//Close connection
$conn->close();

//Return to Account
header("location: myaccount.php");

?>