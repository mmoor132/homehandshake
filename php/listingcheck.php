<?php
    
    // Connect to database
    $servername = "localhost";
    $username = "administrator";
    $password = "";
    $dbname = "homehandshake";

    // Session Start
    session_start();

    // Call of userid
    $userid = $_SESSION["userid"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query For Active Listing
    $stm = $conn->prepare("
        SELECT listingid
        FROM listings
        WHERE listings.userid = '$userid'");

    // Execute Query
    $stm->execute();

    // Assign Result
    $result = $stm->get_result();

    // Cylce through resut and assignning Values for listing
    while ($row = $result->fetch_assoc()){

    $_SESSION['listingid'] = $row["listingid"];

    }

    if(isset($_SESSION["listingid"])){

        // Clost DB Connection
        $conn->close();

        //Return to Account
        echo "<script>
            alert('You already have active listing. Please delete your current active listing and then create a new listing.');
            window.location.href='http://127.0.0.1/php/myaccount.php';
          </script>";

    } else{
        header('Location: createlistings.php');
    }
?>