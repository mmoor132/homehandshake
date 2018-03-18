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
SELECT picture.pic1, listings.listingid, listings.title, listings.address, listings.city, listings.state, listings.zip
FROM picture
INNER JOIN listings
  ON listings.listingid = picture.listingid");
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


<body>

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
	  <ul><input type="checkbox" id="chkall"	onchange = "checkallFunction()">Check All</ul>
      <ul><input type="checkbox" id="furnished" onchange = "amenitiesFunction()">Furnished</ul>
      <ul><input type="checkbox" id="gym" 		onchange = "amenitiesFunction()">Gym</ul>
      <ul><input type="checkbox" id="laundry" 	onchange = "amenitiesFunction()">Laundry</ul>
      <ul><input type="checkbox" id="pets" 		onchange = "amenitiesFunction()">Pets</ul>
      <ul><input type="checkbox" id="cool" 		onchange = "amenitiesFunction()">Cooling</ul>
      <ul><input type="checkbox" id="parking" 	onchange = "amenitiesFunction()">Parking</ul>
      <ul><input type="checkbox" id="pool" 		onchange = "amenitiesFunction()">Pool</ul>
      <ul><input type="checkbox" id="garage" 	onchange = "amenitiesFunction()">Garage</ul>
      <ul><input type="checkbox" id="mgmt" 		onchange = "amenitiesFunction()">Property Management</ul>
      <ul><input type="checkbox" id="hottub" 	onchange = "amenitiesFunction()">Hot Tub</ul>
      <ul><input type="checkbox" id="pvtbroom" 	onchange = "amenitiesFunction()">Private Bathroom</ul>
      <ul><input type="checkbox" id="flrlvl" 	onchange = "amenitiesFunction()">Floor Number</ul>
      <ul><input type="checkbox" id="heat"		onchange = "amenitiesFunction()">Heating</ul>
    </div>
	<script>
	function checkallFunction(){
		if(chkall == checked){
			furnished == checked;
			//this function is likely broken and needs to be updated
		}
	}
	function amenitiesFunction(){
		var x = document.getElementById().value;
		//this function isn't actually doing anything yet
	}
	</script>
    <div>
      <h5 style="padding-left: 5px">Rent Price</h5>
      <div class="slidecontainer">
        <input type="range" min="0" max="1000" value="0" class="slider" id="myRange" style="margin-left: 5px">
        <p>Value: <span id="demo"></span></p>
      </div>
    </div>
    <div>
      <h5 style="padding-left: 5px">Square Feet</h5>
      <div class="slidecontainer">
        <input type="range" min="0" max="1000" value="0" class="slider" id="myRange2" style="margin-left: 5px">
        <p>Value: <span id="demo2"></span></p>
      </div>
    </div>
    <div>
      <h5 style="padding-left: 5px">Availablility</h5>
      <ul><input type="checkbox">Summer Only</ul>
      <ul><input type="checkbox">Fall Semester</ul>
      <ul><input type="checkbox">Spring Semester</ul>
    </div>
    <div>
      <h5 style="padding-left: 5px">Locations</h5>
      <ul><input type="checkbox">Unversity TownHomes</ul>
      <ul><input type="checkbox">Campus Pointe</ul>
      <ul><input type="checkbox">Province</ul>
      <ul><input type="checkbox">Unversity Edge</ul>
      <ul><input type="checkbox">College Towers</ul>
      <ul><input type="checkbox">Eagles Landing</ul>
    </div>
  </div>
  <!--SIDEBAR END-->

  <!--LISTINGS START-->
  <div class="col-md-8">
    <?php
    while($row = $result->fetch_assoc())
    {
      
    ?>
  
    <div class="box" style="margin: 1px;">
      <div class="col-md-4 one" style="background-color: white;border-style: solid;border-color: gray; max-width: 100%; padding: 0">
        <img src = "<?php echo $row["pic1"] ?>" style="width: 100%">
      </div>
      
      <div class=" col-md-4 two" style="background-color: white;border-style: solid;border-color: gray;">
        <div class="row">
          <div class="col-md-6" style="text-align: left;">
            <span>Location:</span>
          </div>
          <div class="col-md-6" style="text-align: left;">
            <span><?php echo $row["address"], $row["state"], $row["zip"] ?></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6" style="text-align: left;">
             <span>Price:</span>
          </div>
          <div class="col-md-6" style="text-align: left;">
            <span><?php echo "$  per month" ?></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6" style="text-align: left;">
            <span>Holder:</span>
          </div>
          <div class="col-md-6" style="text-align: left;">
            <span><?php echo "" ?></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6" style="text-align: left;">
            <span>Holder:</span>
          </div>
          <div class="col-md-6" style="text-align: left;">
            <span><?php echo "" ?></span>
          </div>
        </div>
      </div>

      <div class=" col-md-4 three" style="background-color: white; border-style: solid; border-color: gray">
        <center>
        <form  method="post" action="viewlisting.php">
          <input type="hidden" name="listingid" value = "<?php echo $row['listingid']; ?>" >
          <button class="button" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" type="submit" name="submit" value="Submit">View Listing</button>
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