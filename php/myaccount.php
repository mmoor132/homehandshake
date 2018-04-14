<?php 
  // Start Session
  session_start();

  // Call Variables from Session
  $user = $_SESSION["user"];
  $password = $_SESSION["password"];
  $listingid = $_SESSION["listingid"];
  $lsprice = $_SESSION["price"];
  $lsaddress = $_SESSION["address"];
  $lscity = $_SESSION["city"];
  $lszip = $_SESSION["zip"];
  $picture = $_SESSION["pic1"];
  $phone = $_SESSION["phone"];
  $email = $_SESSION["email"];
  $userid = $_SESSION["userid"];
?>

<!Doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap 3-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--END Bootstrap 3-->
    <link href="css\handshake2.css" type="text/css" rel="stylesheet" />
  </head>

  <style>
    .box {
    display: flex;
    text-align: center;
    }
    .one {
      flex: 1 0 0;
    }
    .two {
      flex: 1 1 0;
    }
    .three {
      flex: 1 1 0;
    }
    .wrap    { 
      flex-wrap: wrap;
    }
   body {
      margin: 0;
      font-family: Arial;
    }

    .top-container {

      background-color: #f1f1f1;
      padding: 30px;
      text-align: center;
    }

    .content {

      padding: 16px; 

    }

    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1;
    }

    .sticky + .content {

      padding-top: 100px;

    }

    .container {
        position: relative;
        text-align: center;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
  </style>
     
  <body>
    <!--Jumbotron code-->
      <div>
        <img src="img/KSU Fountain.jpg" alt = "Header Image" style="width: 100%; height: 60%;">
      </div>
    <!--END Jumbotron code-->

    <!--Navbar code-->
      <div class="header" id="myHeader">
        <nav class="navbar navbar-inverse" style="background-color:#002664">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
            </div>
            <center>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class=""><a href="homepage.php" style="color: white">Home</a></li>
                <li><a href="browselisting.php" style="color: white">Browse Listings</a></li>
                <li class="active"><a href='myaccount.php' style='color: white'>My Account</a></li>";
              </ul>
            </div>
            </center>
          </div>
        </nav>
      </div>
    <!--END Navbar code-->

    <br>

    <!--Profile Div-->

      <!--Welcome Header-->
        <div>
          <h1><span>Welcome: </span> <?php echo "$user" ?></h1>
        </div>
      <!--Welcome Header-->

      <br>

      <center>
      <!--Row 1-->
        <h3>My Active Listings</h3>
        <div class="container-fluid" style="background-color: grey; border-style: solid; margin: 1px;">
          <div class="row" style="margin: 1px;">
            <div class="col-md-4" style="background-color: white;border-style: solid;border-color: gray; padding: 0; max-width: 50%">
              <img src="<?php echo $picture ?>" style="max-width: 100% ">
            </div>

            <div class="col-md-4" style="background-color: white;border-style: solid;border-color: gray">
              <div class="row">
                <div class="col-md-6" style="text-align: left;">
                  <span>Location:</span>
                </div>
                <div class="col-md-6" style="text-align: left;">
                  <span><?php echo "$lsaddress, $lscity, $lszip" ?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" style="text-align: left;">
                   <span>Price:</span>
                </div>
                <div class="col-md-6" style="text-align: left;">
                  <span><?php echo "$ $lsprice per month" ?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" style="text-align: left;">
                  <span>Holder:</span>
                </div>
                <div class="col-md-6" style="text-align: left;">
                  <span><?php echo "$password" ?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" style="text-align: left;">
                  <span>Holder:</span>
                </div>
                <div class="col-md-6" style="text-align: left;">
                  <span><?php echo "$password" ?></span>
                </div>
              </div>
            </div>

            <div class="col-md-4" style="background-color: white;border-style: solid;border-color: gray">
              <center>
                <form method="post" action="viewlisting.php">
                  <input type="hidden" name="listingid" value="<?php echo "$listingid"; ?>">
                  <button style="margin: 2px; width: 50%" type="submit" name="submit" value="Submit">View Listing</button>
                </form>
                <form method="post" action="updatelist.php">
                  <input type="hidden" name="listingid" value="<?php echo "$listingid"; ?>">
                  <button style="margin: 2px; width: 50%" type="submit" name="submit" value="Submit">Edit Listing</button>
                </form>
                <form method="post" action="deletelist.php">
                  <input type="hidden" name="listingid" value="<?php echo "$listingid"; ?>">
                  <button style="margin: 2px; width: 50%" type="submit" name="submit" value="Submit">Delete Listing</button>
                </form>
              </center>
            </div>
          </div>
          <br>
        </div>
      <!--END Row 1-->

      <br>

      <!--Row 2-->
        <h3>My Favorites</h3>
        <div class="box" style="background-color: grey; border-style: solid; margin: 2px;">         
        
          <div class="row">
            <div class="col-md-12" style="">
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

                $stm = $conn->prepare("
                  SELECT picture.pic1, listings.listingid, listings.title, listings.address, listings.city, listings.state, listings.zip, listings.price, listings.squarefoot, listings.roommates 
                  FROM picture 
                  INNER JOIN listings 
                    ON listings.listingid = picture.listingid 
                  INNER JOIN favorites 
                    ON favorites.listingid = listings.listingid 
                  WHERE favorites.userid = '$userid'");

                // Execute Query
                $stm->execute();

                // Assign Result
                $result = $stm->get_result();

                while($row = $result->fetch_assoc())
                    {
              ?>

              <div class="box" id="hideRow" style="margin: 1px;">
                <div class="col-md-4 one" style="background-color: white;border-style: solid;border-color: gray; max-width: 100%; padding: 0">
                  <img src = "<?php echo $row["pic1"] ?>" style="width: 100%">
                </div>

                <div class=" col-md-4 two" style="background-color: white;border-style: solid;border-color: gray;">
                  <div class="row">
                    <div class="col-md-6" style="text-align: left;">
                       <span>Price:</span>
                    </div>
                    <div class="col-md-6" style="text-align: left;">
                      <span>$<?php echo $row["price"] ?> Per Month</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6" style="text-align: left;">
                      <span>Availablity:</span>
                    </div>
                    <div class="col-md-6" style="text-align: left;">
                      <span><?php //echo $row["address"], $row["state"], $row["zip"] ?></span>
                      <span>Test Holder</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6" style="text-align: left;">
                      <span>Square Feet: </span>
                    </div>
                    <div class="col-md-6" style="text-align: left;">
                      <span><?php echo $row["squarefoot"] ?></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6" style="text-align: left;">
                      <span>Roommates: </span>
                    </div>
                    <div class="col-md-6" style="text-align: left;">
                      <span><?php echo $row["roommates"] ?></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6" style="text-align: left;">
                      <span>Complex: </span>
                    </div>
                    <div class="col-md-6" style="text-align: left;">
                      <span>Test Complex</span>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 three" style="background-color: white;border-style: solid;border-color: gray;">
                  <div class="row">
                    <div class="" >
                      <form method="post" action="viewlisting.php">
                        <input type="hidden" name="listingid" value = "<?php echo $row['listingid']; ?>" >
                        <input type="hidden" name="userid" value = "<?php echo $userid ?>" >
                        <button class="button" style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, -50%);" type="submit" name="submit" value="Submit">View Favorite</button>
                      </form>
                      <form method="post" action="deletefav.php">
                        <input type="hidden" name="listingid" value = "<?php echo $row['listingid']; ?>" >
                        <input type="hidden" name="userid" value = "<?php echo $userid ?>" >
                        <button class="button" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" type="submit" name="submit" value="Submit">Remove Favorite</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <?php
                }
              ?>
              
            </div>    
            <br>
          </div>
        </div>
      <!--END Row 2-->

      <!--ROW 3-->
        <h3>Account Details</h3>
        <div class="container-fluid" style="background-color: grey; border-style: solid; margin: 2px;">
          <div class="row" style="margin: 1px;">
            <div class="col-md-8" style="background-color: white;border-style: solid;border-color: gray">
              <div class="row">
                <div class="col-md-6">
                  <div class="col-25">
                   <label for="">Your Username:</label>
                  </div>
                  <div class="col-75">
                    <span><?php echo "$user" ?></span>
                  </div>
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h5 style="font-weight: bold;">Preferred Method of Contact</h5>
                    <div class="">
                      <label>Phone: </label><span> <?php echo "$phone" ?></span>
                    </div>
                    <div class="">
                      <label>E-Mail: </label><span> <?php echo "$email" ?></span>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-4" style="background-color: white;border-style: solid;border-color: gray">
              <center>
              <form  method="post" action="updateaccount.php">
                <input type="hidden" name="userid" value="<?php echo $row['username'] ?>">
                <button style="margin: 2px; width: 50%" type="submit" name="submit" value="Submit">Update Account</button>
              </form>
              <form  method="post" action="deleteaccount.php">
                <input type="hidden" name="userid" value="<?php echo $userid ?>">
                <input type="hidden" name="listingid" value="<?php echo "$listingid"; ?>">
                <button style="margin: 2px; width: 50%" type="submit" name="submit" value="Submit">Delete Account</button>
              </form>
              </center>
            </div>
          </div>
          <br>
        </div>
      <!--END Row 3-->
      </center>

      <br>

      <!--Row 4-->
        <div class="row">
          <div class="col-md-6">
            <center>
            <a href = "createlistings.php"><button style="margin: 2px"><span style="color: black">Create Listing</span></button></a>
          </center>
          </div>  
          <div class="col-md-6">
            <center>
            <a href = "logout.php"><button style="margin: 2px"><span style="color: black">Sign Out</span></button></a>
          </center>
          </div>
        </div>
      <!--END Row 4-->

      <br>
    <!--END Profile Div-->

      <br>

    <!--Footer-->
      <footer style="background-color:#002664;">

      <center>

        <!--Links-->
          <div class="container">
            <div class="row"><br>
              <div class="col-md-4">
                <a href="homepage.php" style="color: white"> Home </a>
              </div>
              <div class="col-md-4">
                <a href="browselisting.php" style="color: white"> Browse Listings </a>
              </div>
             <div class="col-md-4">
                <?php
                    if(isset($_SESSION["userid"])){
                      echo "<a href='myaccount.php' style='color: white'>My Account</a>";
                    } else {
                      echo "<a href='loginpage.html' style='color: white'><span class='glyphicon glyphicon-log-in'></span> Login </a>";
                    }
                ?> 
              </div>
            </div>
          </div>
        <!--End Links-->

      </center>
        <br>

        <!--Copyright-->
          <div>
            <center>
              <span style="color: white;">2018 © Copyright Team 3 Solutions. All rights reserved.</span>
            </center>
          <div>
        <!--End of Copyright-->

        <br>

      </footer>
    <!--END Footer-->

    <!-- Start Sticky Navbar script -->

      <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
      </script>

    <!-- End Sticky Navbar script -->
  </body>
</html>