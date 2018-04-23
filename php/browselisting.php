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

  // Query For Active Listing
  $stm = $conn->prepare("
    SELECT picture.pic1, picture.pic2, picture.pic3, listings.listingid, listings.title, listings.address, listings.city, 
      listings.state, listings.zip, listings.price, listings.squarefoot, listings.roommates, amenities.furnished, amenities.gym, amenities.laundry,
      amenities.pets, amenities.cooling, amenities.parking, amenities.pool, amenities.garage,
      amenities.propertymanagement, amenities.hottub, amenities.privatebathroom
    FROM picture 
    INNER JOIN listings 
      ON listings.listingid = picture.listingid
    INNER JOIN amenities 
      ON amenities.listingid = picture.listingid
  ");


  // Execute Query
  $stm->execute();

  // Assign Result
  $result = $stm->get_result();
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
    <link href="css\sidenav.css" rel="stylesheet" />
    <link href="css\sidebar.css" rel="stylesheet" />
  </head>

  <style >
    .box {
    display: flex;
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

    /*- FILTER OPTIONS -*/
    ul#filterOptions li a {
      height: 50px;
      padding: 0 20px;
      border: 1px solid #999;
      background: #cfcfcf;
      color: #fff;
      font-weight: bold;
      line-height: 50px;
      text-decoration: none;
      display: block;
    }
    ul#filterOptions li a:hover { background: #c9c9c9; }
    ul#filterOptions li.active a { background: #999; }
    /*- -*/

  </style>


  <body>

    <!--Jumbotron code-->
      <div>
        <img src="img/KSU Fountain.jpg" alt = "Header Image" style="width: 100%; height: 300px;">
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
                <li><a href="homepage.php" style="color: white">Home</a></li>
                <li class="active"><a href="browselisting.php" style="color: white">Browse Listings</a></li>
                <?php
                  if(isset($_SESSION["userid"])){
                    echo "<li><a href='myaccount.php' style='color: white'>My Account</a></li>";
                  } else {
                    echo "<li><a href='loginpage.html' style='color: white'>Login</a></li>";
                  }
                ?> 
              </ul>
            </div>
            </center>
          </div>
        </nav>
      </div>
    <!--END Navbar code-->

    <br>

    <!--Row 1 START-->
      <div class="row">

        <!--SIDEBAR START-->
          <center>
          <div class="col-md-2" style="border-style: none; ">
            <div>
              <center><h5 style="padding-left: 5px; font-weight: bold;">Listing Filters</h5></center>
            </div>
            <ul id="filterOptions" style="list-style-type: none;">
              <li class="active"><a href="#" class="all" style="color: black">All</a></li>
              <li><a href="#" class="Furnished" style="color: black">Furnished</a></li>
              <li><a href="#" class="Laundry" style="color: black">Laundry</a></li>
              <li><a href="#" class="Pets" style="color: black">Pets</a></li>
              <li><a href="#" class="Cooling" style="color: black">Cooling</a></li>
              <li><a href="#" class="Parking" style="color: black">Parking</a></li>
              <li><a href="#" class="Pool" style="color: black">Pool</a></li>
              <li><a href="#" class="Garage" style="color: black">Garage</a></li>
              <li><a href="#" class="Property Management" style="color: black">Management</a></li>
              <li><a href="#" class="Hot Tub" style="color: black">Hot Tub</a></li>
              <li><a href="#" class="Private Bathroom" style="color: black">Private Bathroom</a></li>
              <li><a href="#" class="Heating" style="color: black">Heating</a></li>
            </ul>
            <br>
            <div>
              <ul>
                <center><h5 style="padding-left: 5px; font-weight: bold;">Rent Price</h5></center>
                <div class="slidecontainer">
                  <input type="range" min="0" max="1000" value="1000" class="slider" id="myRange" style="margin-left: 5px">
                  <p>Max Cost: <span id="demo"></span></p>
                </div>
              <ul>
            </div>
            <br>
            <div>
              <ul>
                <center><h5 style="padding-left: 5px; font-weight: bold;">Square Feet</h5></center>
                <div class="slidecontainer">
                  <input type="range" min="0" max="1000" value="1000" class="slider" id="myRange2" style="margin-left: 5px">
                  <p>Max Size: <span id="demo2"></span></p>
                </div>
              <ul>
            </div>
            <br>
            <div>
              <ul id="filterOptions" style="list-style-type: none;">
                <center><h5 style="padding-left: 5px; font-weight: bold;">Availablility</h5></center>
                <li><a href="#" class="Summer Only" style="color: black">Summer Only</a></li>
                <li><a href="#" class="Fall Semester" style="color: black">Fall Semester</a></li>
                <li><a href="#" class="Spring Semester" style="color: black">Spring Semester</a></li>
              <ul>
            </div>
            <br>
            <div>
              <ul id="filterOptions" style="list-style-type: none;">
                <center><h5 style="padding-left: 5px; font-weight: bold;">Locations</h5></center>
                <li><a href="#" class="Unversity TownHomes" style="color: black">TownHomes</a></li>
                <li><a href="#" class="Campus Pointe" style="color: black">Campus Pointe</a></li>
                <li><a href="#" class="Unversity Edge" style="color: black">Unversity Edge</a></li>
                <li><a href="#" class="College Towers" style="color: black">College Towers</a></li>
                <li><a href="#" class="Eagles Landing" style="color: black">Eagles Landing</a></li>
                <li><a href="#" class="Province" style="color: black">Province</a></li>
              </ul>
            </div>
          </div>
          </center>
        <!--SIDEBAR END-->

        <!--LISTINGS START-->
          <div id="ourHolder" class="all col-md-8">

            <!--Start PHP Call for Listing-->
              <?php
              while($row = $result->fetch_assoc())
              {
                
              ?>
            <!--Start PHP Call for Listing-->
          
            <!--Row For Listings-->
              <div class="box <?php echo $row['furnished']; echo " "; echo $row["gym"]; echo " "; echo $row["laundry"]; echo " "; echo $row["pets"]; echo " "; echo $row["cooling"]; echo " ";  echo $row["parking"]; echo " "; echo $row["pool"]; echo " "; echo $row["garage"]; echo " ";  echo $row["propertymanagement"]; echo " ";  echo $row["hottub"]; echo " "; echo $row["privatebathroom"]; echo " ";  echo $row["heating"];?>" style="margin: 1px;">

                <!--Left Box-->
                  <div class="col-md-4 one" style="background-color: white;border-style: none;border-color: gray; max-width: 100%; padding: 0">
                    <img src = "<?php echo $row["pic1"] ?>" style="width: 100%">
                  </div>
                <!--END Left Box-->

                <!--Middle Box-->
                  <div class=" col-md-4 two" style="background-color: white;border-style: none;border-color: gray;">    
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
					<div class="row">
                      <div class="col-md-6" style="text-align: left;">
                        <br><form  method="post" action="viewlisting.php">
							<input type="hidden" name="listingid" value = "<?php echo $row['listingid']; ?>" >
							<button class="button" type="submit" name="submit" value="Submit">View Listing</button>
						</form>
                      </div>
                      <div class="col-md-6" style="text-align: left;">
                        <br><form method="post" action="addfav.php">
							<input type="hidden" name="listingid" value = "<?php echo $row['listingid']; ?>" >
							<input type="hidden" name="userid" value = "<?php echo $_SESSION["userid"] ?>" >
							<button class="button" type="submit" name="submit" value="Submit">Add to Favorites</button>
                      </form>
                      </div>
                    </div>   
					<div class="row">
                      <div class="col-md-6" style="text-align: left;">
                    <br><img src = "<?php echo $row["pic2"] ?>" style="width: 100%">
                      </div>
                      <div class="col-md-6" style="text-align: left;">
                    <br><img src = "<?php echo $row["pic3"] ?>" style="width: 100%">
                      </div>
                    </div>					
                    <center>
                      <div class="row">
                        <div class="" style="text-align: left;">
                          <!--Blank-->
                        </div>
                      </div>
                    </center>
                  </div>
                <!--END Middle Box-->
              </div>
            <!--END Row for Listing-->

            <!--END PHP Call for Listing-->
              <?php
                }
              ?>
            <!--END PHP Call for Listing-->

          </div>
        <!--LISTINGS END-->

        <!--GOOGLE ADS START-->
          <div class="col-md-2" style="border-style: none;">
            <br>
              <div style="border: none; background-color: white">
                <center><img src="img/ad1.jpg" style="width: 100%; height: 100%;"/></center>
                <br>
                <br>
                <br>
                <br>
              </div>
            <br>
            <div style="border: none; background-color: white">
			  <center><img src="img/ad2.jpg" style="width: 100%; height: 100%;"/></center>
			  <br>
              <br>
              <br>
              <br>
            </div>
            <br>
            <div style="border: none; background-color: white">
              <center><img src="img/ad3.jpg" style="width: 100%; height: 100%;"/></center>
              <br>
              <br>
              <br>
              <br>
            </div>
            <br>
            <div style="border: none; background-color: white">
              <center><img src="img/ad4.jpg" style="width: 100%; height: 100%;"/></center>
              <br>
              <br>
              <br>
              <br>
            </div>
            <br>
            <div style="border: none; background-color: white">
              <center><img src="img/ad5.jpg" style="width: 100%; height: 100%;"/></center>
              <br>
              <br>
              <br>
              <br>
            </div>
            <br>
          </div>
        <!--GOOGLE ADS END-->

      </div>
    <!--END ROW-->

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

    <!--Filter Script-->
      <script>
      $(document).ready(function() {
        $('#filterOptions li a').click(function() {
          // fetch the class of the clicked item
          var ourClass = $(this).attr('class');
          // reset the active class on all the buttons
          $('#filterOptions li').removeClass('active');
          // update the active state on our clicked button
          $(this).parent().addClass('active');
          if(ourClass == 'all') {
            // show all our items
            $('#ourHolder').children('div.item').show();
          }
          else {
            // hide all elements that don't share ourClass
            $('#ourHolder').children('div:not(.' + ourClass + ')').hide();
            // show all elements that do share ourClass
            $('#ourHolder').children('div.' + ourClass).show();
          }
          return false;
        });
      });
      </script>
    <!--END Filter Script-->

    <!--Filter Slider Script-->
      <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value; // Display the default slider value
        // Update the current slider value (each time you drag the slider handle)
        slider.oninput = function() {
            output.innerHTML = this.value;
        }
        var slider2 = document.getElementById("myRange2");
        var output2 = document.getElementById("demo2");
        output2.innerHTML = slider2.value; // Display the default slider value
        // Update the current slider value (each time you drag the slider handle)
        slider2.oninput = function() {
            output2.innerHTML = this.value;
        }
      </script>
    <!--END Filter Slider Script-->

  </body>
</html>