<?php
  $servername = "localhost";
  $username = "administrator";
  $password = "";
  $dbname = "homehandshake";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Start Session
  session_start();

  // Call all Variables
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $phone = $_SESSION['phone'];
  $email = $_SESSION['email'];
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
  $description = $_SESSION['description'] ;
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

  // Query For getting contact information
    $stm = $conn->prepare("SELECT fname, lname, phone, email FROM users WHERE userid = '1'");

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
    <link href="css\slideshow.css" type="text/css" rel="stylesheet" />
    <link href="css\listtabs.css" type="text/css" rel="stylesheet" />
  </head>

  <style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        text-align: center;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

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
        <img src="img/KSU Fountain.jpg" alt = "Header Image" style="width: 100%; height: 100%;">
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
                <li class="active"><a href="homepage.php" style="color: white">Home</a></li>
                <li><a href="browselisting.php" style="color: white">Browse Listings</a></li>
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

    <!--List Profile-->

      <!--Image and Map Row-->
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
                  <button id="myBtn" style="margin:25px; width: 25%" >Contact</button>
                  <a href="browselisting.php" style="color: black"><button style="width: 25%">Return to Listings</button></a>
                </center>
                <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                      <span class="close">&times;</span>
                      <?php
                       while($row = $result->fetch_assoc())
                        {
                          if(isset($_SESSION["userid"])){
                      ?> 
                        <p>Leasor: <?php echo $fname; echo " "; echo $lname; ?></p>
                        <br>
                        <p>Phone: <?php echo "$phone"; ?></p>
                        <br>
                        <p>E-Mail: <?php echo "$email";?></p>
                      <?php
                        } else {
                          echo "<center>
                                <br>
                                <h5>Please Login to view Leasor's Contact Information.
                                <br>
                                </center>";
                          }
                        }
                      ?>
                    </div>
                  </div>
                <!--END The Modal-->
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
                <div class="row" style="max-width: 100%; min-width: 100%; padding: 0px; margin:0px; margin-bottom: 10px;">
                  <!--Main Image Display-->
                    <div class="container" style="max-width: 100%; padding: 0px">
                      <div class="mySlides">
                        <img src="<?php echo $pic1 ?>" style="width:50%;">
                      </div>
                      <div class="mySlides">
                        <img src="<?php echo $pic2 ?>" style="width:50%;">
                      </div>
                      <div class="mySlides">
                        <img src="<?php echo $pic3 ?>" style="width:50%;">
                      </div>  
                      <div class="mySlides">
                        <img src="<?php echo $pic4 ?>" style="width:50%;">
                      </div>
                      <div class="mySlides">
                         <img src="<?php echo $pic5 ?>" style="width:50%;">
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
      <!--END Image and Map Row-->

      <br>

      <!--Details Navbar-->
        <button class="tablink" onclick="openCity('London', this, '#002664')" id="defaultOpen">Bio</button>
        <button class="tablink" onclick="openCity('Paris', this, '#002664')">Availibilty</button>
        <button class="tablink" onclick="openCity('Tokyo', this, '#002664')">Amenities</button>

        <div id="London" class="tabcontent">
          <h3>Poster's Comment</h3>
          <p><?php echo "$description" ?></p>
        </div>

        <div id="Paris" class="tabcontent">
            <h3>Availability</h3>
              <p><?php echo date("m-d-Y", strtotime($startdate)); echo " - "; echo date("m-d-Y", strtotime($enddate))?></p>
            <br>
            <br>
            <br>
            <br>
        </div>

        <div id="Tokyo" class="tabcontent" style="align-content: center;">
          <h3>Amenities</h3>
           <?php 

              $ammenities = array($furnished, $gym, $laundry, $pets, $cooling, $pool, $garage, $propertymanagement, $hottub, $privatebathroom);

              foreach ($ammenities as $name) {
                if (isset($name) && $name != "") {
                  echo "$name";
                  echo "<br>";
                }
              }
              
            ?>
        </div>
      <!--Details Navbar-->

    <!--END of List Profile-->

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

    <!--Script for Carousel-->
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

        <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
      </script>
    <!--END Script for Carousel-->

  </body>
</html>