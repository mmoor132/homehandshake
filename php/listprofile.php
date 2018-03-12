<?php
session_start();
  $listingnum = $_SESSION['listingnum'];
  $title = $_SESSION['title'];
  $price = $_SESSION['price'];
  $address = $_SESSION['address'];
  $city = $_SESSION['city'];
  $zip = $_SESSION['zip'] ;
  $housingstyle = $_SESSION['housingstyle'];
  $roommates = $_SESSION['roommates'] ;
  $numofroom = $_SESSION['numofroom'] ;
  $startdate = $_SESSION['startdate'] ;
  $enddate = $_SESSION['enddate'] ;
  $pic1 = $_SESSION['pic1'] ;
  $pic2 = $_SESSION['pic2'] ;
  $pic3 = $_SESSION['pic3'] ;
  $pic4 = $_SESSION['pic4'] ;
  $pic5 = $_SESSION['pic5'] ;
  $furnished = $_SESSION['furnished'] ;
  $gym = $_SESSION['gym'] ;
  $laundry = $_SESSION['laundry'] ;
  $pets = $_SESSION['pets'] ;
  $cooling = $_SESSION['cooling'] ;
  $parking = $_SESSION['parking'] ;
  $pool = $_SESSION['pool'] ;
  $garage = $_SESSION['garage'] ;
  $propertymanagement = $_SESSION['propertymanagement'] ;
  $hottub = $_SESSION['hottub'];
  $privatebathroom = $_SESSION['privatebathroom'] ;
  $floornumber = $_SESSION['floornumber'] ;
  $heating = $_SESSION['heating'] ;

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
  <link href="css\slideshow.css" type="text/css" rel="stylesheet" />
  <link href="css\listtabs.css" type="text/css" rel="stylesheet" />
</head>

<style>
.col-container {
    display: table;
    width: 100%;
}
.col {
    display: table-cell;
    padding: 16px;
}

 @media only screen and (max-width: 991px){
    .map1{
      height: 100px;
    }
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
        <li class=""><a href="homepage.html" style="color: white">Home</a></li>
        <li><a href="" style="color: white">Housing Handshakes</a></li>
        <li><a href="listings.php" style="color: white">Housing Listing</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="createaccount.php" style="color: white"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="loginpage.php" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
    </center>
  </div>
</nav>


<!--END Navbar code-->

<!--List Profile-->

<div class="container-fluid" style="background-color: grey;">
 
  <!--Row 1-->
  <div class="row" style="">
    <center>
    <div class="col-md-6" style="">
      <h2><?php echo "$title" ?></h2>
    </div>
    </center>
    <div class="col-md-6" style=" ">
      <center>
      <button style="margin:25px; width: 25%">Contact</button>
      <span>    </span>
      <button style="width: 25%">Return to Listings</button>
      </center>
    </div>
  </div>
  <!--END of Row 1-->

  <!--Row 2-->
  <div class="row">
    <center>
    <div class="col-md-6" style="">
      <h3>$ <?php echo "$price" ?> per Month</h3>
    </div>
    <div class="col-md-6" style="">
      <h3><?php echo "$address, $city, $zip" ?></h3>
    </div>
    </center>
  </div>
  <!--END of Row 2-->

  <br><br>

  <!--Row 3-->
  <div class="row" style="padding: 0px">
    <div class="col-md-8" style="padding: 0px">
      <!--Main Image Display-->
      <div class="row" style="max-width: 100%; min-width: 100%; padding: 0px; margin:0px; margin-bottom: 10px;">
        <div class="container" style="max-width: 100%; padding: 0px">
          <div class="mySlides">
            <img src="<?php echo $pic1 ?>" style="width:100%;">
          </div>
          <div class="mySlides">
            <img src="<?php echo $pic2 ?>" style="width:100%;">
          </div>
          <div class="mySlides">
            <img src="<?php echo $pic3 ?>" style="width:100%">
          </div>  
          <div class="mySlides">
            <img src="<?php echo $pic4 ?>" style="width:100%">
          </div>
          <div class="mySlides">
             <img src="<?php echo $pic5 ?>" style="width:100%">
          </div>
          <div class="mySlides">
            <img src="img\campuspointe.jpg" style="max-width:100%">
          </div>
          <div class="caption-container">
            <p id="caption"></p>
          </div>
          <!--END of Main Image Display-->

          <!--Image Navbar-->
          <div class="row" style="padding-left:15px;padding-right: 15px">
            <div class="column">
              <img class="demo cursor" src="<?php echo $pic1 ?>" style="width:100%; height: 95px" onclick="currentSlide(1)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo $pic2 ?>" style="width:100%; height: 95px" onclick="currentSlide(2)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo $pic3 ?>" style="width:100%; height: 95px" onclick="currentSlide(3)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo $pic4 ?>" style="width:100%; height: 95px" onclick="currentSlide(4)" alt="">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo $pic5 ?>" style="width:100%; height: 95px" onclick="currentSlide(5)" alt="">
            </div>  
            <div class="column">
              <img class="demo cursor" src="img\campuspointe.jpg" style="width:100%; height: 95px" onclick="currentSlide(6)" alt="">
            </div>    
          </div>
          <!--END Image Navbar-->
        </div>
      </div>
    </div>

 <!-- Google map -->
    <div class="col-md-4" style="padding: 0; border:solid;">
      <center>
      <div id="map" class="map1" style="width:100%;height:600px;" frameborder="0" style="border:0"></div>
      <script>
        function myMap() {
        var mapOptions = {
            center: new google.maps.LatLng(41.149063, -81.341465),
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwPMtmTS5-ruHic9Qa3Q9h_R-I0ptYC3w&callback=myMap"></script>
      </center>  
    </div>
  <!-- End Google map -->

  </div>
  <!--END of ROW 3-->
  <br>
</div>


<br>

<!--Details Navbar-->
    <button class="tablink" onclick="openCity('London', this, 'maroon')" id="defaultOpen">Bio</button>
  <button class="tablink" onclick="openCity('Paris', this, 'maroon')">Availibilty</button>
  <button class="tablink" onclick="openCity('Tokyo', this, 'maroon')">Amenities</button>
  <button class="tablink" onclick="openCity('Oslo', this, 'maroon')">Pricing</button>

  <div id="London" class="tabcontent">
    <h3>Poster's Comment</h3>
    <p>One bedroom available inn the University Townhome Complex. It is close to campus, and willing to negotiate for pricing!</p>
  </div>

  <div id="Paris" class="tabcontent">
      <h3>Availability</h3>
        <p><?php echo "$startdate - $enddate" ?></p>
      <br>
      <br>
      <br>
      <br>
  </div>

  <div id="Tokyo" class="tabcontent" style="align-content: center;">
    <h3>Amenities</h3>
     <?php 

        $ammenities = array($furnished, $gym,$laundry,$pets,$cooling,$pool,$garage,$propertymanagement,$hottub,$privatebathroom,$heating);

        foreach ($ammenities as $name) {
          if (isset($name)) {
            echo "$name";
            echo "<br>";
          }
        }
        
      ?>
  </div>

  <div id="Oslo" class="tabcontent">
    <h3>Pricing</h3>
        <br>
        <p> $<?php echo "$price"?> per month</p>
        <br>
  </div>
<!--Details Navbar-->

<!--END of List Profile-->

<br>

<!--Footer-->
<footer style="background-color:maroon;"">

<br>

<center>

  <!--Links-->
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="homepage.html" style="color: white">Home</a>
      </div>
      <div class="col-md-3">
        <a href="Contactus.html" style="color: white">Housing Handshakes</a>
      </div>
      <div class="col-md-3">
        <a href="listings.php" style="color: white">Housings Listings</a>
      </div>
      <div class="col-md-3">
        <a href="loginpage.php" style="color: white">Login</a>
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
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

function openCity(cityName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>