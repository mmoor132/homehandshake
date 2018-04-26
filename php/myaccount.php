<?php 
  // Start Session
  session_start();

  $userid = $_SESSION["userid"];
  $phone = $_SESSION["phone"];
  $email = $_SESSION["email"];
  $user = $_SESSION["user"];
  $uaddress = $_SESSION["uaddress"];
  $ucity = $_SESSION["ucity"];
  $ustate = $_SESSION["ustate"];
  $uzip = $_SESSION['uzip'];
  $gender = $_SESSION["gender"];
  $age = $_SESSION["age"];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $bio = $_SESSION['bio'];

  if (isset($_SESSION["listingid"])){
    
    // Call Variables from Session
    $password = $_SESSION["password"];
    $listingid = $_SESSION["listingid"];
    $lsprice = $_SESSION["price"];
    $lsaddress = $_SESSION["address"];
    $lscity = $_SESSION["city"];
    $lszip = $_SESSION["zip"];
    $lscomplex = $_SESSION["complex"] ;
    $lssquarefoot = $_SESSION["squarefoot"] ;
    $lsavailibility = $_SESSION["availability"] ;
    $lsroommates = $_SESSION["roommates"] ;
    $picture = $_SESSION["pic1"];
      
  }

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
      .button {
      padding: 10px 15px;
      font-size: 20px;
      text-align: center;
      cursor: pointer;
      outline: none;
      color: #fff;
      background-color:  #404040;
      border: none;
      border-radius: 15px;
      box-shadow: 0 9px #999;
    }

    .button:hover {background-color: black}

    .button:active {
      background-color: black;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }
      hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 5px solid black;
        margin: 1em 0;
        padding: 0; 
      }   
    @media only screen and (max-width: 991px){
        .alignment{
            text-align: center;
        }
        .button {
          padding: 10px 15px;
          font-size: 20px;
          text-align: center;
          cursor: pointer;
          outline: none;
          color: #fff;
          background-color:  #404040;
          border: none;
          border-radius: 15px;
          box-shadow: 0 9px #999;
          margin:auto;
        }

        .button:hover {background-color: black}

        .button:active {
          background-color: black;
          box-shadow: 0 5px #666;
          transform: translateY(4px);
        }
        .btalign{
            margin:15px;
        }
        .images{
            width: 50%;
        }
    } 
  </style>
     
  <body>
    <!--Jumbotron code-->
      <div>
        <img src="img/KSU Fountain.jpg" alt = "Header Image" style="width: 100%; height: 250px;">
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

    <!--Div for Overflow-->
        <div style="width: 100%; height: 100%; margin: 0px; padding: 0px; overflow-x: hidden;">

          <br>

          <!--Row 2: Profile-->
            <div class="row alignment">
                <div class="col-md-2">
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-md-8 img-rounded" style="background-color: #002664; color: white">
                    <div class="col-md-4" style="">
                      <div class="card" align="center">
                        <img class="images" src="img/img_avatar.png" alt="Avatar" style="width:75%;height:50%">
                        <div class="">
                          <h4 style="font-size: 20px"><b><?php echo "$fname"; echo " "; echo "$lname";?></b></h4>
                        
                          <p style="font-size: 20px"><?php echo "$bio";?></p> 
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                        <h1 class="alignment" align="left" style="font-size: 50px">Your Account Info</h1>
                        <div class="row">
                            <div class="col-md-6">  
                                <span style="font-size: 20px">Permanent Address: </span><span style="font-size: 18px"><?php echo "$uaddress" ?></span>
                                <br>
                                <span style="font-size: 20px">City: </span><span style="font-size: 18px"><?php echo "$ucity" ?></span>
                                <br>
                                <span style="font-size: 20px">State: </span><span style="font-size: 18px"><?php echo "$ustate" ?></span>
                                <br>
                                <span style="font-size: 20px">Zip: </span><span style="font-size: 18px"><?php echo "$uzip" ?></span>
                            </div>
                            <div class="col-md-6">
                                <span style="font-size: 20px">Listed Contact Methods: </span>
                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-11">
                                        <span style="font-size: 18px">Phone: </span><span style="font-size: 18px"><?php echo "$phone" ?></span>
                                        <br>
                                        <span style="font-size: 18px">E-mail: </span><span style="font-size: 18px"><?php echo "$email" ?></span>
                                    </div>
                                </div>
                                <span style="font-size: 20px">Gender: </span><span style="font-size: 18px"><?php echo "$gender" ?></span>
                                <br>
                                <span style="font-size: 20px">Age: </span><span style="font-size: 18px"><?php echo "$age" ?></span>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4 btalign" style="m">
                                <form  method="post" action="updateaccount.php">
                                    <input type="hidden" name="userid" value="<?php echo $userid ?>">
                                    <button class="button" style="width: 100%; height:50%;" type="submit" name="submit" value="Submit">Update Account</button>
                                </form>
                            </div>
                            <div class="col-md-4 btalign" style="">
                                <form  method="post" action="deleteaccount.php">
                                    <input type="hidden" name="userid" value="<?php echo $userid ?>">
                                    <input type="hidden" name="listingid" value="<?php echo "$listingid"; ?>">
                                    <button class="button" style="width: 100%" type="submit" name="submit" value="Submit">Delete Account</button>
                                </form>
                            </div>
                            <div class="col-md-4 btalign" style="">
                                <a href = "logout.php"><button class="button" style="width: 100%"><span style="color: white">Sign Out</span></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <br>
                    <br>
                    <br>
                </div>
            </div>
          <!--END Row 2: Profile-->

          <br>

          <!-- Row 3: Listings-->
            <div class="row alignment" >
                  <div class="col-md-6">
                    <h1 align="center"><span>Manage Your Listing</h1>
                    <hr>
                     <?php
                          if (!isset($listingid)) {
                            echo "<br>";
                            echo "<h4>Start By Creating Your Listing!!</h4>";
                            echo "<br>";
                          }
                          else{
                      ?>
                    <div class="row">
                        <div class="col-md-6">
                            <img class="images" src="<?php echo $picture ?>" style="max-width: 100%;">
                        </div>
                        <div class="col-md-6 alignment" align="left">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <span style="font-size: 20px; font-weight:bold">Complex: </span><span style="font-size: 18px;"><?php echo "$lscomplex" ?></span>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <span style="font-size: 20px; font-weight:bold">Price: </span><span style="font-size: 18px;"><?php echo "$ $lsprice per month" ?></span>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <span style="font-size: 20px; font-weight:bold">Square Feet: </span><span style="font-size: 18px;"><?php echo "$lssquarefoot" ?> sqft.</span>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <span style="font-size: 20px; font-weight:bold">Availbility: </span><span style="font-size: 18px;"><?php echo "$lsavailibility" ?></span>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <span style="font-size: 20px; font-weight:bold">Roommates: </span><span style="font-size: 18px;"><?php echo "$lsroommates" ?></span>
                                    </div>
                                </div>
                            </div>              
                            <br>
                            <div class="row">
                                <div class="col-md-4 btalign" align="left">
                                    <form method="post" action="updatelist.php">
                                        <input type="hidden" name="listingid" value="<?php echo "$listingid"; ?>">
                                        <button class="button " style="width: 100%;" type="submit" name="submit" value="Submit">Update Listing</button>
                                    </form>
                                </div>
                                <div class="col-md-4 btalign">
                                    <form method="post" action="deletelist.php">
                                        <input type="hidden" name="listingid" value="<?php echo "$listingid"; ?>">
                                        <button class="button" style="width: 100%" type="submit" name="submit" value="Submit" >Delete Listing</button>
                                    </form>
                                </div>
                                <div class="col-md-4 btalign">
                                    <form method="post" action="viewlisting.php">
                                        <input type="hidden" name="listingid" value="<?php echo "$listingid"; ?>">
                                        <button class="button" style="width: 100%" type="submit" name="submit" value="Submit">View Listing</button>
                                    </form>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <?php
                      }
                    ?>
                  </div>
                  <div class="col-md-6">
                    <h1 align="center"><span>Favorited Listings</h1>
                    <hr>
                    <?php
                      if (!isset($listingid)) {
                        echo "<br>";
                        echo "<h4>Start Adding Your Favorites!!</h4>";
                        echo "<br>";
                      }
                      else{
                    ?>
                    <div class="row">
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
                              SELECT picture.pic1, listings.listingid, listings.title, listings.address, listings.city, listings.state, listings.zip, listings.price, listings.squarefoot, listings.roommates, listings.complex, listings.availability 
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
                        <div class="col-md-6">
                            <div class="card" align="center">
                                <img src = "<?php echo $row["pic1"] ?>" style="width: 100%">
                            </div>
                        </div>
                        <div class="col-md-6" align="left">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <span style="font-size: 20px; font-weight:bold">Complex: </span><span style="font-size: 18px;"><?php echo $row["complex"] ?></span>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <span style="font-size: 20px; font-weight:bold">Price: </span><span style="font-size: 20px;" >$<?php echo $row["price"] ?> per month</span>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <span style="font-size: 20px; font-weight:bold">Square Feet: </span><span style="font-size: 18px;"><?php echo $row["squarefoot"] ?> sqft.</span>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <span style="font-size: 20px; font-weight:bold">Availbility: </span><span style="font-size: 18px;"><?php echo $row["availability"] ?> sqft.</span>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <span style="font-size: 20px; font-weight:bold">Roommates: </span><span style="font-size: 18px;"><?php echo $row["roommates"] ?></span>
                                    </div>
                                </div>
                            </div>              
                            <br>
                            <div class="row">
                                <div class="col-md-6" align="left">
                                    <form method="post" action="viewlisting.php">
                                        <input type="hidden" name="listingid" value = "<?php echo $row['listingid']; ?>" >
                                        <input type="hidden" name="userid" value = "<?php echo $userid; ?>" >
                                        <button class="button" style="width: 100%; height:50%;" type="submit" name="submit" value="Submit" >View Listing</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <form method="post" action="deletefav.php">
                                        <input type="hidden" name="listingid" value = "<?php echo $row['listingid']; ?>" >
                                        <input type="hidden" name="userid" value = "<?php echo $userid; ?>" >
                                        <button class="button" style="width: 100%" type="submit" name="submit" value="Submit" >Remove Listing</button>
                                    </form>
                                </div>
                            </div>
                            <br>
                        </div>
                     <hr>
                    </div>
                    <?php
                        }
                     }
                    ?>
                  </div>
            </div>
          <!--END Row 3:Listings-->
        </div>  
    <!--END Div for Overflow-->
      
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