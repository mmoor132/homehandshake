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
    SELECT picture.pic1, listings.listingid, listings.title, listings.address, listings.city, 
      listings.state, listings.zip, listings.price, listings.squarefoot, listings.roommates, amenities.furnished, amenities.gym, amenities.laundry,
      amenities.pets, amenities.cooling, amenities.parking, amenities.pool, amenities.garage,
      amenities.propertymanagement, amenities.hottub, amenities.privatebathroom, amenities.heating
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

  <style>
    .filterSection li {
        list-style: none;
        margin: 0px;
        padding: 5px;
        display: inline;
         
    }
    .filterSection {
        margin: 0px;
        padding: 0px;
        background-color: #EEEEEE;
    }
    #itemsToFilter li {
        list-style: none;
        background-position: 0 3px;
        background-repeat: no-repeat;
        margin: 15px;
        padding-left: 40px;
        font-size: 15pt;
        color: #666;
    }
    #itemsToFilter li[data-type=food] {
        background-image: url("//www.kirupa.com/mini_icons/entypo/small_leaf.png");
    }
      
    #itemsToFilter li[data-type=place] {
        background-image: url("//www.kirupa.com/mini_icons/entypo/small_plane.png");
    }
     
    #itemsToFilter li[data-type=musician] {
        background-image: url("//www.kirupa.com/mini_icons/entypo/small_megaphone.png");
    }
    .showItem {
    display: list-item;
    }
    .hideItem {
        display: none;
    }
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
          <div class="col-md-2" style="border-style: solid; ">
            <div>
              <center><h5 style="padding-left: 5px">Listing Filters</h5></center>
            </div>
            <div>
              <h5 style="padding-left: 5px">Amenities</h5>
          	  <ul class="filterSection" style="list-style-type: none;">
              <li><input type="checkbox" value="food">Furnished</li>
              <li><input type="checkbox" id="gymDB" value="Gym">Gym</li>
              <li><input type="checkbox" id="laundryDB" value="Laundry">Laundry</li>
              <li><input type="checkbox" id="petsDB" value="Pets">Pets</li>
              <li><input type="checkbox" id="coolDB" value="parking">Cooling</li>
              <li><input type="checkbox" id="parkingDB" value="Parking">Parking</li>
              <li><input type="checkbox" id="poolDB" value="Pool">Pool</li>
              <li><input type="checkbox" id="garageDB" value="Garage">Garage</li>
              <li><input type="checkbox" id="mgmtDB" value="Property Management">Property Management</li>
              <li><input type="checkbox" id="hottubDB" value="Hot Tub">Hot Tub</li>
              <li><input type="checkbox" id="pvtbroomDB" value="Private Bathroom">Private Bathroom</li>
              <li><input type="checkbox" id="heatDB" value=" Heating">Heating</li>
              </ul>
            </div>
            <div>
              <h5 style="padding-left: 5px">Rent Price</h5>
              <div class="slidecontainer">
                <input type="range" min="0" max="1000" value="1000" class="slider" id="myRange" style="margin-left: 5px">
                <p>Max Cost: <span id="demo"></span></p>
              </div>
            </div>
            <div>
              <h5 style="padding-left: 5px">Square Feet</h5>
              <div class="slidecontainer">
                <input type="range" min="0" max="1000" value="1000" class="slider" id="myRange2" style="margin-left: 5px">
                <p>Max Size: <span id="demo2"></span></p>
              </div>
            </div>
            <div>
              <h5 style="padding-left: 5px">Availablility</h5>
              <ul><input type="checkbox" id = "sumDB">Summer Only</ul>
              <ul><input type="checkbox" id = "fallDB">Fall Semester</ul>
              <ul><input type="checkbox" id = "spngDB">Spring Semester</ul>
            </div>
            <div>
              <h5 style="padding-left: 5px">Locations</h5>
              <ul><input type="checkbox" id = "twnhmDB">Unversity TownHomes</ul>
              <ul><input type="checkbox" id = "cpntDB">Campus Pointe</ul>
              <ul><input type="checkbox" id = "pvncDB">Province</ul>
              <ul><input type="checkbox" id = "uedgDB">Unversity Edge</ul>
              <ul><input type="checkbox" id = "ctowDB">College Towers</ul>
              <ul><input type="checkbox" id = "eaglndDB">Eagles Landing</ul>
            </div>
          </div>
        <!--SIDEBAR END-->

        <!--LISTINGS START-->
          <div class="col-md-8">

            <ul id="itemsToFilter">
              <!--Start PHP Call for Listing-->
                <?php
                while($row = $result->fetch_assoc())
                {
                  
                ?>
              <!--Start PHP Call for Listing-->
          	
              <!--Row For Listings-->
              <li data-type="place">
                <div class="box">

                  <!--Left Box-->
                    <div class="col-md-4 one" style="background-color: white;border-style: solid;border-color: gray; max-width: 100%; padding: 0">
                      <img src = "<?php echo $row["pic1"] ?>" style="width: 100%">
                    </div>
                  <!--END Left Box-->

                  <!--Middle Box-->
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
              		    <div class="row">
                        <div class="col-md-6" style="text-align: left;">
                          <span>
                      		  <input type="hidden" name = "furnished" value = "<?php echo $row["furnished"] ?>" >
                      		  <input type="hidden" name = "gym" value = "<?php echo $row["gym"] ?>" >
                      		  <input type="hidden" name = "laundry" value = "<?php echo $row["laundry"] ?>" >
                      		  <input type="hidden" name = "pets" value = "<?php echo $row["pets"] ?>" >
                      		  <input type="hidden" name = "cooling" value = "<?php echo $row["cooling"] ?>" >
                      		  <input type="hidden" name = "parking" value = "<?php echo $row["parking"] ?>" >
                      		  <input type="hidden" name = "pool" value = "<?php echo $row["pool"] ?>" >
                      		  <input type="hidden" name = "garage" value = "<?php echo $row["garage"] ?>" >
                      		  <input type="hidden" name = "propertymanagement" value = "<?php echo $row["propertymanagement"] ?>" >
                      		  <input type="hidden" name = "hottub" value = "<?php echo $row["hottub"] ?>" >
                      		  <input type="hidden" name = "privatebathroom" value = "<?php echo $row["privatebathroom"] ?>" >
                      		  <input type="hidden" name = "heating" value = "<?php echo $row["heating"] ?>" >
                      		  <input type="hidden" name = "price" value = "<?php echo $row["price"] ?>" >
                      		  <input type="hidden" name = "squarefoot" value = "<?php echo $row["squarefoot"] ?>" >
                          </span>
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

                  <!--Right Box-->
                    <div class=" col-md-4 three" style="background-color: white; border-style: solid; border-color: gray">
                      <center>
                        <form  method="post" action="viewlisting.php">
                          <input type="hidden" name="listingid" value = "<?php echo $row['listingid']; ?>" >
                          <button class="button" style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, -50%);" type="submit" name="submit" value="Submit">View Listing</button>
                        </form>
                        <form method="post" action="addfav.php">
                          <input type="hidden" name="listingid" value = "<?php echo $row['listingid']; ?>" >
                           <input type="hidden" name="userid" value = "<?php echo $userid ?>" >
                          <button class="button" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" type="submit" name="submit" value="Submit">Add to Favorites</button>
                        </form>
                        <br>
                      </center>
                    </div>
                  <!--END Right Box-->
                </div>
              <!--END Row for Listing-->
              </li>

            <!--END PHP Call for Listing-->
              <?php
                }
              ?>
            <!--END PHP Call for Listing-->
            </ul>
          </div>
        <!--LISTINGS END-->

        <!--GOOGLE ADS START-->
          <div class="col-md-2" style="border-style: solid;">
            <br>
              <div style="border: solid; background-color: gray">
                <center><h5 style="padding-left: 5px">Google Ad 1</h5></center>
                <br>
                <br>
                <br>
                <br>
              </div>
            <br>
            <div style="border: solid; background-color: gray">
              <center><h5 style="padding-left: 5px">Google Ad 2</h5></center>
              <br>
              <br>
              <br>
              <br>
            </div>
            <br>
            <div style="border: solid; background-color: gray">
              <center><h5 style="padding-left: 5px">Google Ad 3</h5></center>
              <br>
              <br>
              <br>
              <br>
            </div>
            <br>
            <div style="border: solid; background-color: gray">
              <center><h5 style="padding-left: 5px">Google Ad 4</h5></center>
              <br>
              <br>
              <br>
              <br>
            </div>
            <br>
            <div style="border: solid; background-color: gray">
              <center><h5 style="padding-left: 5px">Google Ad 5</h5></center>
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

    <!--Filter Funtions-->
      <script>
        // My Solution
          // get all of our list items
          var itemsToFilter = document.querySelectorAll("#itemsToFilter li");
            
          //setup click event handlers on our checkboxes
          var checkBoxes = document.querySelectorAll(".filterSection li input");
            
          for (var i = 0; i < checkBoxes.length; i++) {
              checkBoxes[i].addEventListener("click", filterItems, false);
              checkBoxes[i].checked = true;
          }
            
          // the event handler!
          function filterItems(e) {
              var clickedItem = e.target;
                
              if (clickedItem.checked == true) {
                  hideOrShowItems(clickedItem.value, "hideItem", "showItem");
              } else if (clickedItem.checked == false) {
                  hideOrShowItems(clickedItem.value, "showItem", "hideItem");
              } else {
                  // deal with the indeterminate state if needed
              }
          }
            
          // add or remove classes to show or hide our content
          function hideOrShowItems(itemType, classToRemove, classToAdd) {
              for (var i = 0; i < itemsToFilter.length; i++) {
                  var currentItem = itemsToFilter[i];
                    
                  if (currentItem.getAttribute("data-type") == itemType) {
                      removeClass(currentItem, classToRemove);
                      addClass(currentItem, classToAdd);
                  }
              }
          }
            
          //
          // Helper functions for adding and removing class values
          //
          function addClass(element, classToAdd) {
              var currentClassValue = element.className;
                  
              if (currentClassValue.indexOf(classToAdd) == -1) {
                  if ((currentClassValue == null) || (currentClassValue === "")) {
                      element.className = classToAdd;
                  } else {
                      element.className += " " + classToAdd;
                  }
              }
          }
                  
          function removeClass(element, classToRemove) {
              var currentClassValue = element.className;
            
              if (currentClassValue == classToRemove) {
                  element.className = "";
                  return;
              }
            
              var classValues = currentClassValue.split(" ");
              var filteredList = [];
            
              for (var i = 0 ; i < classValues.length; i++) {
                  if (classToRemove != classValues[i]) {
                      filteredList.push(classValues[i]);
                  }
              }
            
              element.className = filteredList.join(" ");
          }
        // END My Solution
      </script>
    <!-- End Filter Funtions-->

  </body>
</html>