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

	// Gets Value from Browse Listing
	$listingid = $_POST["listingid"];
	$userid = $_POST["userid"];

	if(isset($userid) && $userid != 0){

		// Insert Query for Favorites
		$sql = "INSERT INTO favorites(userid, listingid) VALUES('$userid', '$listingid')";

		// Check for Success
			if ($conn->query($sql) === TRUE) {
			   echo "<script>
						alert('Your favorite has been added.');
						window.location.href='http://127.0.0.1/php/browselisting.php';
						</script>";
			} else {
			    echo "Error: " . $sql  . "<br>" . $conn->error;
			}
	}

	else{
	echo "<script>
			alert('Please login to add a favorite.');
			window.location.href='http://127.0.0.1/php/browselisting.php';
			</script>";
	}
?>