<?php
$servername = "localhost";
$username = "administrator";
$password = "";
$dbname = "homehandshake";

session_start();

$userid = $_SESSION["userid"];

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

<style type="">
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


<body onload = "onload()">

<!--Jumbotron code-->
  <div>
  <img src="img\image.jpg" style="width: 100%; height: 400px;">
  </div>
<!--END Jumbotron code-->

<!--Navbar code-->

<nav class="navbar navbar-inverse" style="background-color: maroon">
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
        <li class="active"><a href="homepage.html" style="color: white">Home</a></li>
    <li><a href="myaccount.php" style="color: white">My Account</a></li>
        <li><a href="browselisting.php" style="color: white">Browse Listings</a></li>
        <li><a href="createaccount.html" style="color: white"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
        <li><a href="loginpage.html" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
      </ul>
    </div>
    </center>
  </div>
</nav>

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
    	  <ul><input type="radio" name = "onoff" id="chkall"	onchange = "checkallFunction()">Check All</ul>
    	  <ul><input type="radio" name = "onoff" id="unchkall"	onchange = "uncheckallFunction()">UnCheck All</ul>
        <ul><input type="checkbox" id="furnishedDB" 	onchange = "furnishedFunction()">Furnished</ul>
        <ul><input type="checkbox" id="gymDB" 		onchange = "gymFunction()">Gym</ul>
        <ul><input type="checkbox" id="laundryDB" 	onchange = "laundryFunction()">Laundry</ul>
        <ul><input type="checkbox" id="petsDB" 		onchange = "petsFunction()">Pets</ul>
        <ul><input type="checkbox" id="coolDB" 		onchange = "coolFunction()">Cooling</ul>
        <ul><input type="checkbox" id="parkingDB" 	onchange = "parkingFunction()">Parking</ul>
        <ul><input type="checkbox" id="poolDB" 		onchange = "poolFunction()">Pool</ul>
        <ul><input type="checkbox" id="garageDB" 		onchange = "garageFunction()">Garage</ul>
        <ul><input type="checkbox" id="mgmtDB" 		onchange = "mgmtFunction()">Property Management</ul>
        <ul><input type="checkbox" id="hottubDB" 		onchange = "hottubFunction()">Hot Tub</ul>
        <ul><input type="checkbox" id="pvtbroomDB" 	onchange = "pvtbroomFunction()">Private Bathroom</ul>
        <ul><input type="checkbox" id="heatDB"		onchange = "heatFunction()">Heating</ul>
      </div>

      <!--Filter Funtions-->
      	<script>
        	function onload(){
        		chkall.onchange.checked = true;
        		chkall.checked = true;
        		checkallFunction();
        	}
        	function checkallFunction(){
        		if(chkall.onchange.checked = true){
        			furnishedDB.checked = true; gymDB.checked = true; laundryDB.checked = true;
        			petsDB.checked = true; coolDB.checked = true; parkingDB.checked = true;
        			poolDB.checked = true; garageDB.checked = true; mgmtDB.checked = true;
        			hottubDB.checked = true; pvtbroomDB.checked = true; pvtbroomDB.checked = true;
        			heatDB.checked = true; sumDB.checked = true;
        			fallDB.checked = true; spngDB.checked = true; twnhmDB.checked = true;
        			cpntDB.checked = true; pvncDB.checked = true; uedgDB.checked = true;
        			ctowDB.checked = true; eaglndDB.checked = true; sumDB.checked = true; 
        			fallDB.checked = true; spngDB.checked = true; twnhmDB.checked = true; 
        			cpntDB.checked = true; pvncDB.checked = true; uedgDB.checked = true; 
        			ctowDB.checked = true; eaglndDB.checked = true; myRange.value = "1000";
        			myRange2.value = "1000";
        		}	
        	}
        	function uncheckallFunction(){
        		if(chkall.onchange.checked = true){
        			furnishedDB.checked = false; gymDB.checked = false; laundryDB.checked = false;
        			petsDB.checked = false; coolDB.checked = false; parkingDB.checked = false;
        			poolDB.checked = false; garageDB.checked = false; mgmtDB.checked = false;
        			hottubDB.checked = false; pvtbroomDB.checked = false; pvtbroomDB.checked = false;
        			heatDB.checked = false; sumDB.checked = false;
        			fallDB.checked = false; spngDB.checked = false; twnhmDB.checked = false;
        			cpntDB.checked = false; pvncDB.checked = false; uedgDB.checked = false;
        			ctowDB.checked = false; eaglndDB.checked = false; sumDB.checked = false; 
        			fallDB.checked = false; spngDB.checked = false; twnhmDB.checked = false; 
        			cpntDB.checked = false; pvncDB.checked = false; uedgDB.checked = false; 
        			ctowDB.checked = false; eaglndDB.checked = false; myRange.value = "0";
        			myRange2.value = "0";
        		}	
        	}
        	function heatFunction(){
        		if(heatDB.onchange.checked != true){
        			var x = document.getElementByName("heating");
					for(var i = 1; i <= 7; ++i){
						if(document.getElementById("listingid") == i){
						if (x.value != "heat"){
								y.style.display = "none";
						}}
        			}
					}
        		}
        	}
        	function pvtbroomFunction(){
        		if(pvtbroomDB.onchange.checked = true){
        			var x = document.getElementsByName("privatebathroom")[0];
        			if (x.value != "Private Bathroom"){
        				var y = document.getElementById("hideRow"); 
        				y.style.display = "none";
        			}
        		}
        	}
        	function hottubFunction(){
        		if(hottubDB.onchange.checked != true){
        			var x = document.getElementsByName("hottub")[0];
        			if (x.value != "Hot Tub"){
        				var y = document.getElementById("hideRow"); 
        				y.style.display = "none";
        			}
        		}
        	}
        	function mgmtFunction(){
        		if(mgmtDB.onchange.checked != true){
        			var x = document.getElementsByName("propertymanagement")[0];
        			if (x.value != "Property Management"){
        				var y = document.getElementById("hideRow"); 
        				y.style.display = "none";
        			}
        		}
        	}
        	function garageFunction(){
        		if(garageDB.onchange.checked != true){
        			var x = document.getElementsByName("garage")[0];
        			if (x.value != "Garage"){
        				var y = document.getElementById("hideRow"); 
        				y.style.display = "none";
        			}
        		}
        	}
        	function poolFunction(){
        		if(poolDB.onchange.checked != true){
        			var x = document.getElementsByName("pool")[0];
        			if (x.value != "Pool"){
        				var y = document.getElementById("hideRow"); 
        				y.style.display = "none";
        			}
        		}
        	}
        	function parkingFunction(){
        		if(parkingDB.onchange.checked != true){
        			var x = document.getElementsByName("parking")[0];
        			if (x.value != "Parking"){
        				var y = document.getElementById("hideRow"); 
        				y.style.display = "none";
        			}
        		}
        	}
        	function coolFunction(){
        		if(coolDB.onchange.checked != true){
        			var x = document.getElementsByName("cooling")[0];
        			if (x.value != "Cooling"){
        				var y = document.getElementById("hideRow"); 
        				y.style.display = "none";
        			}
        		}
        	}
        	function petsFunction(){
        		if(petsDB.onchange.checked != true){
        			var x = document.getElementsByName("pets")[0];
        			if (x.value != "Pets"){
        				var y = document.getElementById("hideRow"); 
        				y.style.display = "none";
        			}
        		}
        	}
        	function laundryFunction(){
        		if(laundryDB.onchange.checked != true){
        			var x = document.getElementsByName("laundry")[0];
        			if (x.value != "Laundry"){
        				var y = document.getElementById("hideRow"); 
        				y.style.display = "none";
        			}
        		}
        	}
        	function gymFunction(){
        		if(gymDB.onchange.checked != true){
        			var x = document.getElementsByName("gym")[0];
        			if (x.value != "Gym"){
        				var y = document.getElementById("hideRow"); 
        				y.style.display = "none";
        			}
        		}
        	}
        	function furnishedFunction(){
        		if(furnishedDB.onchange.checked != true){
        			var x = document.getElementsByName("furnished")[0];
        			if (x.value != "Furnished"){
        				var y = document.getElementById("hideRow"); 
        				y.style.display = "none";
        			}
        		}
        	}
        	function chk4price(){
        		var y = myRange.value;
        		var z = myRange2.value;	
        		if(q > y){
        			document.getElementById(hideRow).style.display === "none";
        		}
        	}
        	function chk4size(){
        		var q = document.getElementsByName("14").value;
        		var r = document.getElementsByName("15").value;
        		if(r > z){
        			document.getElementById(hideRow).style.display === "none";
        		}
        	}
        	function myFunction() { 
        	var x = document.getElementById("hideRow");
        	if (x.style.display === "none") {
        		x.style.display = "block";} else { x.style.display = "none"; 
        		}
        	}
      	</script>
      <!-- End Filter Funtions-->

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
    <?php
    while($row = $result->fetch_assoc())
    {
      
    ?>
	
    <div class="box" id="<?php echo $row['listingid']; ?>" style="margin: 1px;">
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

          </div>
        </div>
      </center>
        
      </div>

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
    </div>
      
    <?php
      }
    ?>
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
<footer style="background-color:maroon;"">
<center>
  <!--Links-->
  <div class="container">
    <div class="row"><br>
      <div class="col-md-2">
        <a href="homepage.html" style="color: white"> Home </a>
      </div>
    <div class="col-md-2">
        <a href="myaccount.php" style="color: white"> My Account </a>
      </div>
      <div class="col-md-2">
        <a href="browselisting.php" style="color: white"> Browse Listings </a>
      </div>
      <div class="col-md-2">
        <a href="createaccount.html" style="color: white"><span class="glyphicon glyphicon-user"></span> Sign Up </a>
      </div>
    <div class="col-md-2">
        <a href="loginpage.html" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login </a>
      </div>
    </div>
  </div>
  <!--End Links-->
</center>
  <br>
  <!--Copyright-->
  <div>
    <center>
      <span style="color: white;">2018 © Copyright Orange Solutions. All rights reserved.</span>
    </center>
  <div>
  <!--End of Copyright-->
  <br>
</footer>
<!--END Footer-->

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
</body>
</html>